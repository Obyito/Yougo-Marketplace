<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1878275fdbc32b660cfbee6afea5d6e15c55adb100b0dbddcb4be415750c22a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f56209987ef949e51b53ba5940860cc5f7383675c58c60b643bf2a9dec86c486 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f56209987ef949e51b53ba5940860cc5f7383675c58c60b643bf2a9dec86c486->enter($__internal_f56209987ef949e51b53ba5940860cc5f7383675c58c60b643bf2a9dec86c486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_5a8873f89d598d4d72c7bd4d2f4b269995fb239e4c181ba54c73b641f8e348f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a8873f89d598d4d72c7bd4d2f4b269995fb239e4c181ba54c73b641f8e348f4->enter($__internal_5a8873f89d598d4d72c7bd4d2f4b269995fb239e4c181ba54c73b641f8e348f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f56209987ef949e51b53ba5940860cc5f7383675c58c60b643bf2a9dec86c486->leave($__internal_f56209987ef949e51b53ba5940860cc5f7383675c58c60b643bf2a9dec86c486_prof);

        
        $__internal_5a8873f89d598d4d72c7bd4d2f4b269995fb239e4c181ba54c73b641f8e348f4->leave($__internal_5a8873f89d598d4d72c7bd4d2f4b269995fb239e4c181ba54c73b641f8e348f4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f9ea9224b62f988c6405ef960f7d14b87accb56b487c8f67cf21a200be029fd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9ea9224b62f988c6405ef960f7d14b87accb56b487c8f67cf21a200be029fd3->enter($__internal_f9ea9224b62f988c6405ef960f7d14b87accb56b487c8f67cf21a200be029fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e71e0faae2ff7fbc988f1378f7896c8090c6ff07fd8a3bcc60b53787d40a0916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e71e0faae2ff7fbc988f1378f7896c8090c6ff07fd8a3bcc60b53787d40a0916->enter($__internal_e71e0faae2ff7fbc988f1378f7896c8090c6ff07fd8a3bcc60b53787d40a0916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_e71e0faae2ff7fbc988f1378f7896c8090c6ff07fd8a3bcc60b53787d40a0916->leave($__internal_e71e0faae2ff7fbc988f1378f7896c8090c6ff07fd8a3bcc60b53787d40a0916_prof);

        
        $__internal_f9ea9224b62f988c6405ef960f7d14b87accb56b487c8f67cf21a200be029fd3->leave($__internal_f9ea9224b62f988c6405ef960f7d14b87accb56b487c8f67cf21a200be029fd3_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f22ebaf42d5b69c0f47483a8ae2872e613d099a54d6f2097cafa6237fe6fc2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f22ebaf42d5b69c0f47483a8ae2872e613d099a54d6f2097cafa6237fe6fc2c->enter($__internal_7f22ebaf42d5b69c0f47483a8ae2872e613d099a54d6f2097cafa6237fe6fc2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bb57c0da35fabe1c57e21ce1c96a7465f195e7464c0e3b3b83436017fd76e076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb57c0da35fabe1c57e21ce1c96a7465f195e7464c0e3b3b83436017fd76e076->enter($__internal_bb57c0da35fabe1c57e21ce1c96a7465f195e7464c0e3b3b83436017fd76e076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bb57c0da35fabe1c57e21ce1c96a7465f195e7464c0e3b3b83436017fd76e076->leave($__internal_bb57c0da35fabe1c57e21ce1c96a7465f195e7464c0e3b3b83436017fd76e076_prof);

        
        $__internal_7f22ebaf42d5b69c0f47483a8ae2872e613d099a54d6f2097cafa6237fe6fc2c->leave($__internal_7f22ebaf42d5b69c0f47483a8ae2872e613d099a54d6f2097cafa6237fe6fc2c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_5940bbcda710a6f48b2bb3067e70264050cfd3f478163b0c9e009105b71973ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5940bbcda710a6f48b2bb3067e70264050cfd3f478163b0c9e009105b71973ce->enter($__internal_5940bbcda710a6f48b2bb3067e70264050cfd3f478163b0c9e009105b71973ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dded545462e74921b59b39f2e04573ca5f5b1858a8d8f83e68e61810c8d674d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dded545462e74921b59b39f2e04573ca5f5b1858a8d8f83e68e61810c8d674d6->enter($__internal_dded545462e74921b59b39f2e04573ca5f5b1858a8d8f83e68e61810c8d674d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_dded545462e74921b59b39f2e04573ca5f5b1858a8d8f83e68e61810c8d674d6->leave($__internal_dded545462e74921b59b39f2e04573ca5f5b1858a8d8f83e68e61810c8d674d6_prof);

        
        $__internal_5940bbcda710a6f48b2bb3067e70264050cfd3f478163b0c9e009105b71973ce->leave($__internal_5940bbcda710a6f48b2bb3067e70264050cfd3f478163b0c9e009105b71973ce_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/gaspardfremy/troctesplantes/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
