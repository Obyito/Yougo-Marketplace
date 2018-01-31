<?php

/* base.html.twig */
class __TwigTemplate_e7512925d8fb00307cc049a1006d437f3028b1723b810d6e2acede88a13e1891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3883989e1cf4f6285bf7e7c4fb3e9bc92f24d2d487dd0bd3f50924fc90378069 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3883989e1cf4f6285bf7e7c4fb3e9bc92f24d2d487dd0bd3f50924fc90378069->enter($__internal_3883989e1cf4f6285bf7e7c4fb3e9bc92f24d2d487dd0bd3f50924fc90378069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_18999ea7c23bf912fceb79cd798650d5b300ecd532c2acbc1568797eaa8601c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18999ea7c23bf912fceb79cd798650d5b300ecd532c2acbc1568797eaa8601c4->enter($__internal_18999ea7c23bf912fceb79cd798650d5b300ecd532c2acbc1568797eaa8601c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_3883989e1cf4f6285bf7e7c4fb3e9bc92f24d2d487dd0bd3f50924fc90378069->leave($__internal_3883989e1cf4f6285bf7e7c4fb3e9bc92f24d2d487dd0bd3f50924fc90378069_prof);

        
        $__internal_18999ea7c23bf912fceb79cd798650d5b300ecd532c2acbc1568797eaa8601c4->leave($__internal_18999ea7c23bf912fceb79cd798650d5b300ecd532c2acbc1568797eaa8601c4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ed1767c00caa77212d876801175cbaafadd085e0652eaed698594decf8c4ea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ed1767c00caa77212d876801175cbaafadd085e0652eaed698594decf8c4ea2->enter($__internal_6ed1767c00caa77212d876801175cbaafadd085e0652eaed698594decf8c4ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2116a4a3681cde5b3d1d8445c95dbb9f20792610bd7e56e1965118aa84b9e3e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2116a4a3681cde5b3d1d8445c95dbb9f20792610bd7e56e1965118aa84b9e3e2->enter($__internal_2116a4a3681cde5b3d1d8445c95dbb9f20792610bd7e56e1965118aa84b9e3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2116a4a3681cde5b3d1d8445c95dbb9f20792610bd7e56e1965118aa84b9e3e2->leave($__internal_2116a4a3681cde5b3d1d8445c95dbb9f20792610bd7e56e1965118aa84b9e3e2_prof);

        
        $__internal_6ed1767c00caa77212d876801175cbaafadd085e0652eaed698594decf8c4ea2->leave($__internal_6ed1767c00caa77212d876801175cbaafadd085e0652eaed698594decf8c4ea2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5f0367e24b8d3c62ed87f6e7df839e9a16b8a2bcea0553da487e4889a4c6c73e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f0367e24b8d3c62ed87f6e7df839e9a16b8a2bcea0553da487e4889a4c6c73e->enter($__internal_5f0367e24b8d3c62ed87f6e7df839e9a16b8a2bcea0553da487e4889a4c6c73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_06e14d3e319b20d68a32a968220263fe411c3646a5b56243e06c3b764756f109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06e14d3e319b20d68a32a968220263fe411c3646a5b56243e06c3b764756f109->enter($__internal_06e14d3e319b20d68a32a968220263fe411c3646a5b56243e06c3b764756f109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_06e14d3e319b20d68a32a968220263fe411c3646a5b56243e06c3b764756f109->leave($__internal_06e14d3e319b20d68a32a968220263fe411c3646a5b56243e06c3b764756f109_prof);

        
        $__internal_5f0367e24b8d3c62ed87f6e7df839e9a16b8a2bcea0553da487e4889a4c6c73e->leave($__internal_5f0367e24b8d3c62ed87f6e7df839e9a16b8a2bcea0553da487e4889a4c6c73e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_87552824c73ba5d2755413b8da8bb2be122b002a23bf0f65c2f08c75fa7f9c33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87552824c73ba5d2755413b8da8bb2be122b002a23bf0f65c2f08c75fa7f9c33->enter($__internal_87552824c73ba5d2755413b8da8bb2be122b002a23bf0f65c2f08c75fa7f9c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_af5a8f2d6af7027ae6844e79a93d2866dbf7ebc7146014b00042ed46dd375a02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af5a8f2d6af7027ae6844e79a93d2866dbf7ebc7146014b00042ed46dd375a02->enter($__internal_af5a8f2d6af7027ae6844e79a93d2866dbf7ebc7146014b00042ed46dd375a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_af5a8f2d6af7027ae6844e79a93d2866dbf7ebc7146014b00042ed46dd375a02->leave($__internal_af5a8f2d6af7027ae6844e79a93d2866dbf7ebc7146014b00042ed46dd375a02_prof);

        
        $__internal_87552824c73ba5d2755413b8da8bb2be122b002a23bf0f65c2f08c75fa7f9c33->leave($__internal_87552824c73ba5d2755413b8da8bb2be122b002a23bf0f65c2f08c75fa7f9c33_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_546565167561dea26476c99794c40d9364d8ccdf97b7980171ebc376ff6f598f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_546565167561dea26476c99794c40d9364d8ccdf97b7980171ebc376ff6f598f->enter($__internal_546565167561dea26476c99794c40d9364d8ccdf97b7980171ebc376ff6f598f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_038a4fb6e05c975133946430cd97b232b3d2a729384f7fefb88ec6a3dbbc3955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_038a4fb6e05c975133946430cd97b232b3d2a729384f7fefb88ec6a3dbbc3955->enter($__internal_038a4fb6e05c975133946430cd97b232b3d2a729384f7fefb88ec6a3dbbc3955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_038a4fb6e05c975133946430cd97b232b3d2a729384f7fefb88ec6a3dbbc3955->leave($__internal_038a4fb6e05c975133946430cd97b232b3d2a729384f7fefb88ec6a3dbbc3955_prof);

        
        $__internal_546565167561dea26476c99794c40d9364d8ccdf97b7980171ebc376ff6f598f->leave($__internal_546565167561dea26476c99794c40d9364d8ccdf97b7980171ebc376ff6f598f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/gaspardfremy/troctesplantes/app/Resources/views/base.html.twig");
    }
}
