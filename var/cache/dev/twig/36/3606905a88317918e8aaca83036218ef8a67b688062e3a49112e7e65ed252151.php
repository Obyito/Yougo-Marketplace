<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_dea908ce72ea00b8195d1cfd7af1163fadbee0b0b659868ba3f841a93fdabeed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dea908ce72ea00b8195d1cfd7af1163fadbee0b0b659868ba3f841a93fdabeed->enter($__internal_dea908ce72ea00b8195d1cfd7af1163fadbee0b0b659868ba3f841a93fdabeed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_01625398549139f704165250dd42729ce2dbaad76e1bb43d9d499560f9adf995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01625398549139f704165250dd42729ce2dbaad76e1bb43d9d499560f9adf995->enter($__internal_01625398549139f704165250dd42729ce2dbaad76e1bb43d9d499560f9adf995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dea908ce72ea00b8195d1cfd7af1163fadbee0b0b659868ba3f841a93fdabeed->leave($__internal_dea908ce72ea00b8195d1cfd7af1163fadbee0b0b659868ba3f841a93fdabeed_prof);

        
        $__internal_01625398549139f704165250dd42729ce2dbaad76e1bb43d9d499560f9adf995->leave($__internal_01625398549139f704165250dd42729ce2dbaad76e1bb43d9d499560f9adf995_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ceff9b320ccc9a94ce286777f8e42a27999caadc325fdcca9592d065f09ac947 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceff9b320ccc9a94ce286777f8e42a27999caadc325fdcca9592d065f09ac947->enter($__internal_ceff9b320ccc9a94ce286777f8e42a27999caadc325fdcca9592d065f09ac947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_35453a6fb21f4ec58db16665a35ad5d36032cb566afcb04f07e38a6cdc5dc284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35453a6fb21f4ec58db16665a35ad5d36032cb566afcb04f07e38a6cdc5dc284->enter($__internal_35453a6fb21f4ec58db16665a35ad5d36032cb566afcb04f07e38a6cdc5dc284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_35453a6fb21f4ec58db16665a35ad5d36032cb566afcb04f07e38a6cdc5dc284->leave($__internal_35453a6fb21f4ec58db16665a35ad5d36032cb566afcb04f07e38a6cdc5dc284_prof);

        
        $__internal_ceff9b320ccc9a94ce286777f8e42a27999caadc325fdcca9592d065f09ac947->leave($__internal_ceff9b320ccc9a94ce286777f8e42a27999caadc325fdcca9592d065f09ac947_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e09b3610c2b53baa6b890e588ccc099498a8029ff59d1e316f10e02c0a4f73bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e09b3610c2b53baa6b890e588ccc099498a8029ff59d1e316f10e02c0a4f73bd->enter($__internal_e09b3610c2b53baa6b890e588ccc099498a8029ff59d1e316f10e02c0a4f73bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e12574a1aa52c5f76a35187435ae50442605630a6fbf85f702b33e7e2d24a034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e12574a1aa52c5f76a35187435ae50442605630a6fbf85f702b33e7e2d24a034->enter($__internal_e12574a1aa52c5f76a35187435ae50442605630a6fbf85f702b33e7e2d24a034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e12574a1aa52c5f76a35187435ae50442605630a6fbf85f702b33e7e2d24a034->leave($__internal_e12574a1aa52c5f76a35187435ae50442605630a6fbf85f702b33e7e2d24a034_prof);

        
        $__internal_e09b3610c2b53baa6b890e588ccc099498a8029ff59d1e316f10e02c0a4f73bd->leave($__internal_e09b3610c2b53baa6b890e588ccc099498a8029ff59d1e316f10e02c0a4f73bd_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2fb6db5a89ea5b6f1e50351904347bb9a908ac08e542a5efc734d923ba7a5b5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fb6db5a89ea5b6f1e50351904347bb9a908ac08e542a5efc734d923ba7a5b5c->enter($__internal_2fb6db5a89ea5b6f1e50351904347bb9a908ac08e542a5efc734d923ba7a5b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_521fc2e1cd1cf1ee4de2585ad0e0fe8bc0bb18e98ffffc119d80b98763e849a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_521fc2e1cd1cf1ee4de2585ad0e0fe8bc0bb18e98ffffc119d80b98763e849a3->enter($__internal_521fc2e1cd1cf1ee4de2585ad0e0fe8bc0bb18e98ffffc119d80b98763e849a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_521fc2e1cd1cf1ee4de2585ad0e0fe8bc0bb18e98ffffc119d80b98763e849a3->leave($__internal_521fc2e1cd1cf1ee4de2585ad0e0fe8bc0bb18e98ffffc119d80b98763e849a3_prof);

        
        $__internal_2fb6db5a89ea5b6f1e50351904347bb9a908ac08e542a5efc734d923ba7a5b5c->leave($__internal_2fb6db5a89ea5b6f1e50351904347bb9a908ac08e542a5efc734d923ba7a5b5c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/gaspardfremy/troctesplantes/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
