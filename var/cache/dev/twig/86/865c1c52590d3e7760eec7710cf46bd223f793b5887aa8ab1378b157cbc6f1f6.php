<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_273637df34b9dfe40e9248e8799146dda8177e7bb1b5aeadbb8facb04fc63dd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_273637df34b9dfe40e9248e8799146dda8177e7bb1b5aeadbb8facb04fc63dd5->enter($__internal_273637df34b9dfe40e9248e8799146dda8177e7bb1b5aeadbb8facb04fc63dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5fb6fb959bf60b67f43c3c13f46a0c1817e53722ced480af302ae2e3697b124f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fb6fb959bf60b67f43c3c13f46a0c1817e53722ced480af302ae2e3697b124f->enter($__internal_5fb6fb959bf60b67f43c3c13f46a0c1817e53722ced480af302ae2e3697b124f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_273637df34b9dfe40e9248e8799146dda8177e7bb1b5aeadbb8facb04fc63dd5->leave($__internal_273637df34b9dfe40e9248e8799146dda8177e7bb1b5aeadbb8facb04fc63dd5_prof);

        
        $__internal_5fb6fb959bf60b67f43c3c13f46a0c1817e53722ced480af302ae2e3697b124f->leave($__internal_5fb6fb959bf60b67f43c3c13f46a0c1817e53722ced480af302ae2e3697b124f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0d3742c09c5e28df06ae848ec51fb06a9d3660559da1e22025cad6d9c9a48fb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d3742c09c5e28df06ae848ec51fb06a9d3660559da1e22025cad6d9c9a48fb4->enter($__internal_0d3742c09c5e28df06ae848ec51fb06a9d3660559da1e22025cad6d9c9a48fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9f1ad197f7bc3f3d008d5bcf8905fe122720c5816c7f8e085b13479d3f03a1ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f1ad197f7bc3f3d008d5bcf8905fe122720c5816c7f8e085b13479d3f03a1ca->enter($__internal_9f1ad197f7bc3f3d008d5bcf8905fe122720c5816c7f8e085b13479d3f03a1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9f1ad197f7bc3f3d008d5bcf8905fe122720c5816c7f8e085b13479d3f03a1ca->leave($__internal_9f1ad197f7bc3f3d008d5bcf8905fe122720c5816c7f8e085b13479d3f03a1ca_prof);

        
        $__internal_0d3742c09c5e28df06ae848ec51fb06a9d3660559da1e22025cad6d9c9a48fb4->leave($__internal_0d3742c09c5e28df06ae848ec51fb06a9d3660559da1e22025cad6d9c9a48fb4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_beb6246c24f96a378b5d079ee611a166b4c56c3c0e3217746bad5b8e1540d1e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beb6246c24f96a378b5d079ee611a166b4c56c3c0e3217746bad5b8e1540d1e1->enter($__internal_beb6246c24f96a378b5d079ee611a166b4c56c3c0e3217746bad5b8e1540d1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b9bb43d188b1de374bcf9f79755bbf5b36809ca10024ae6bdb88e21e3717f3cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9bb43d188b1de374bcf9f79755bbf5b36809ca10024ae6bdb88e21e3717f3cf->enter($__internal_b9bb43d188b1de374bcf9f79755bbf5b36809ca10024ae6bdb88e21e3717f3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b9bb43d188b1de374bcf9f79755bbf5b36809ca10024ae6bdb88e21e3717f3cf->leave($__internal_b9bb43d188b1de374bcf9f79755bbf5b36809ca10024ae6bdb88e21e3717f3cf_prof);

        
        $__internal_beb6246c24f96a378b5d079ee611a166b4c56c3c0e3217746bad5b8e1540d1e1->leave($__internal_beb6246c24f96a378b5d079ee611a166b4c56c3c0e3217746bad5b8e1540d1e1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d8a56bb92c69d04c6103f7a84d59ef4fedea51a86b72c2b77c4fa6f802bbcfd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8a56bb92c69d04c6103f7a84d59ef4fedea51a86b72c2b77c4fa6f802bbcfd8->enter($__internal_d8a56bb92c69d04c6103f7a84d59ef4fedea51a86b72c2b77c4fa6f802bbcfd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6705db9bf0407789b266f43e8ca0a4f5b3822a4f75af1af01e55a58babf2656d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6705db9bf0407789b266f43e8ca0a4f5b3822a4f75af1af01e55a58babf2656d->enter($__internal_6705db9bf0407789b266f43e8ca0a4f5b3822a4f75af1af01e55a58babf2656d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6705db9bf0407789b266f43e8ca0a4f5b3822a4f75af1af01e55a58babf2656d->leave($__internal_6705db9bf0407789b266f43e8ca0a4f5b3822a4f75af1af01e55a58babf2656d_prof);

        
        $__internal_d8a56bb92c69d04c6103f7a84d59ef4fedea51a86b72c2b77c4fa6f802bbcfd8->leave($__internal_d8a56bb92c69d04c6103f7a84d59ef4fedea51a86b72c2b77c4fa6f802bbcfd8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/gaspardfremy/troctesplantes/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
