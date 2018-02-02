<?php
use JMS\SecurityExtraBundle\Annotation\Secure;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
class SecurityController extends Controller
{
    /**
     * @Method({"GET"})
     * @Route("/login", name="login")
     * @Template()
     */
    public function login(Request $request)
    {
        $request = $this->getRequest();
        $session = $request->getSession();
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }
        $params = array(
            "last_username" => $session->get(SecurityContext::LAST_USERNAME),
            "error"         => $error,
            "message"       => $request->get("message"),
        );
        if ($request->isXmlHttpRequest()) {
            return $this->render("GCDirectoryMainBundle:Security:login-ajax.html.twig", $params);
        }
        return $params;
    }
    /**
     * @Method({"POST"})
     * @Route("/login_check", name="login_check")
     */
    public function check()
    {
        throw new \RuntimeException('You must configure the check path to be handled by the firewall using form_login in your security firewall configuration.');
    }
    /**
     * @Method({"GET"})
     * @Route("/logout", name="logout")
     */
    public function logout()
    {
        throw new \RuntimeException('You must activate the logout in your security firewall configuration.');
    }
    /**
     * @Method({"GET"})
     * @Route("/reset", name="reset")
     * @Secure(roles="IS_AUTHENTICATED_ANONYMOUSLY")
     * @Template()
     */
    public function reset() {
        return array();
    }
    /**
     * @Method({"POST"})
     * @Route("/reset")
     * @Secure(roles="IS_AUTHENTICATED_ANONYMOUSLY")
     */
    public function resetNow(Request $request)
    {
        $params = $request->request->all();
        if (!array_key_exists("login", $params)) {
            throw new \Exception("No login given");
        }
        $login = &$params["login"];
        $em = $this->container->get("doctrine.orm.default_entity_manager");
        $user = $em->getRepository("NamespaceMyBundle:User")->findOneBy(array("login" => $login));
        if ($user == null) {
            return $this->redirect($this->generateUrl("login", array()));
        }
        $password = "myRandowPassword";
        $user->setPassword($this->container->get("security.encoder_factory")->getEncoder($user)->encodePassword($password, $user->getSalt()));
        
        $em->persist($user);
        $em->flush();
        return $this->redirect($this->generateUrl("login", array()));
    }
    /**
     * @Method({"GET"})
     * @Route("/change", name="change-password")
     * @Secure(roles="IS_AUTHENTICATED_FULLY")
     * @Template()
     */
    public function change() {
        return array();
    }
    /**
     * @Method({"POST"})
     * @Route("/change")
     * @Secure(roles="IS_AUTHENTICATED_FULLY")
     * @Template()
     */
    public function changeNow(Request $request)
    {
        $params = $request->request->all();
        if (!array_key_exists("current", $params)
            || !array_key_exists("new", $params)
            || !array_key_exists("new2", $params))
        {
            return array("error" => "Please fill all fields");
        }
        $em = $this->container->get("doctrine.orm.default_entity_manager");
        $user = $this->getUser();
        $user_encoders = $this->container->get("security.encoder_factory")->getEncoder($user);
        $user_repository = $em->getRepository("NamespaceMyBundle:User");
        $current_password_encoded = $user_encoders->encodePassword($params["current"], $user->getSalt());
        $new_password_encoded = $user_encoders->encodePassword($params["new"], $user->getSalt());
        if ($user_repository->findOneBy(array("password" => $current_password_encoded)) == null) {
            return array("error" => "The current password is wrong");
        } elseif ($params["new"] != $params["new2"]) {
            return array("error" => "The two fields password aren't the same");
        }
        $user->setPassword($new_password_encoded);
        $em->persist($user);
        $em->flush();
        return $this->redirect($this->generateUrl("logout", array()));
    }
    /**
     * @Method({"GET"})
     * @Route("/register", name="register")
     * @Secure(roles="IS_AUTHENTICATED_ANONYMOUSLY")
     * @Template()
     */
    public function register()
    {
        $form = $this->createForm(new UserType(UserType::REGISTER), new User());
        return array(
            "form" => $form->createView(),
        );
    }
    /**
     * @Method({"POST"})
     * @Route("/register")
     * @Secure(roles="IS_AUTHENTICATED_ANONYMOUSLY")
     * @Template()
     */
    public function registerNow(Request $request)
    {
        $params = $request->request->all()["name_of_my_form"];
        $form = $this->createForm(new UserType(UserType::REGISTER), new User());
        $form->submit($request);
        if (array_key_exists("plain_password", $params) && array_key_exists("plain_password2", $params) && $params["plain_password"] == $params["plain_password2"]) {
            if ($form->isValid()) {
                $data = $form->getData();
                $data->setPassword($this->container->get("security.encoder_factory")->getEncoder($data)->encodePassword($params["plain_password"], $data->getSalt()));
                $em->persist($data);
                $em->flush();
                return $this->redirect($this->generateUrl("login", array("message" => "You have received an email to validate your account.")));
            }
        }
        return array(
            "errors" => $params["plain_password"] == $params["plain_password2"] ? $form->getErrors() : array("The two password must be the sames"),
            "form" => $form->createView(),
        );
    }
    /**
     * @Method({"GET"})
     * @Route("/activate", name="activate")
     * @Secure(roles="IS_AUTHENTICATED_ANONYMOUSLY")
     * @Template()
     */
    public function activate(Request $request) {
        $params = array();
        $token = $request->query->get("token");
        $em = $this->container->get("doctrine.orm.default_entity_manager");
        $user = $em->getRepository("NamespaceMyBundle:User")->findOneBy(array("token" => $token));
        if ($user != null) {
            $user->setActive(User::ACTIVE_ACTIVE);
            $em->persist($user);
            $em->flush();
            $params["activate"] = true;
        } else {
            $params["activate"] = false;
        }
        return $params;
    }
}