<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_40d17f889cda0e9198fdd0de6a45002f4e95d20d7f1dda71b6e52967dec960e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c3e9bf9e4ede8c2f5c8be9d27658d9e615f2b34d0bfd3ffdae909778d46a560 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c3e9bf9e4ede8c2f5c8be9d27658d9e615f2b34d0bfd3ffdae909778d46a560->enter($__internal_8c3e9bf9e4ede8c2f5c8be9d27658d9e615f2b34d0bfd3ffdae909778d46a560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_c0a8335f069ea7ea1e02b8455c59ffe4ba98aaf72cefee022af977dd5e0ce330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0a8335f069ea7ea1e02b8455c59ffe4ba98aaf72cefee022af977dd5e0ce330->enter($__internal_c0a8335f069ea7ea1e02b8455c59ffe4ba98aaf72cefee022af977dd5e0ce330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_8c3e9bf9e4ede8c2f5c8be9d27658d9e615f2b34d0bfd3ffdae909778d46a560->leave($__internal_8c3e9bf9e4ede8c2f5c8be9d27658d9e615f2b34d0bfd3ffdae909778d46a560_prof);

        
        $__internal_c0a8335f069ea7ea1e02b8455c59ffe4ba98aaf72cefee022af977dd5e0ce330->leave($__internal_c0a8335f069ea7ea1e02b8455c59ffe4ba98aaf72cefee022af977dd5e0ce330_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4dcf29fe9b245cf4bc15a38f627a096ea46c3668668c4b34222d93acd48f17b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dcf29fe9b245cf4bc15a38f627a096ea46c3668668c4b34222d93acd48f17b4->enter($__internal_4dcf29fe9b245cf4bc15a38f627a096ea46c3668668c4b34222d93acd48f17b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0c5b26f541343ab0f60e15e9b2a91fb174a04ac117234bfcf19958b435ae5c09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c5b26f541343ab0f60e15e9b2a91fb174a04ac117234bfcf19958b435ae5c09->enter($__internal_0c5b26f541343ab0f60e15e9b2a91fb174a04ac117234bfcf19958b435ae5c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0c5b26f541343ab0f60e15e9b2a91fb174a04ac117234bfcf19958b435ae5c09->leave($__internal_0c5b26f541343ab0f60e15e9b2a91fb174a04ac117234bfcf19958b435ae5c09_prof);

        
        $__internal_4dcf29fe9b245cf4bc15a38f627a096ea46c3668668c4b34222d93acd48f17b4->leave($__internal_4dcf29fe9b245cf4bc15a38f627a096ea46c3668668c4b34222d93acd48f17b4_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_c413b687f3106e9452772750493d0aa955b4747ed403c990ae69bbabc6afd3c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c413b687f3106e9452772750493d0aa955b4747ed403c990ae69bbabc6afd3c6->enter($__internal_c413b687f3106e9452772750493d0aa955b4747ed403c990ae69bbabc6afd3c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1c26d5adeea2e63925db9283236a2dc6bd89251b75415abcf6fde050a2a6b005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c26d5adeea2e63925db9283236a2dc6bd89251b75415abcf6fde050a2a6b005->enter($__internal_1c26d5adeea2e63925db9283236a2dc6bd89251b75415abcf6fde050a2a6b005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_1c26d5adeea2e63925db9283236a2dc6bd89251b75415abcf6fde050a2a6b005->leave($__internal_1c26d5adeea2e63925db9283236a2dc6bd89251b75415abcf6fde050a2a6b005_prof);

        
        $__internal_c413b687f3106e9452772750493d0aa955b4747ed403c990ae69bbabc6afd3c6->leave($__internal_c413b687f3106e9452772750493d0aa955b4747ed403c990ae69bbabc6afd3c6_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0453a204b6fde80576b258e906857c364a3cfdf3bedeafa8f9a45d1a8bcdaec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0453a204b6fde80576b258e906857c364a3cfdf3bedeafa8f9a45d1a8bcdaec->enter($__internal_f0453a204b6fde80576b258e906857c364a3cfdf3bedeafa8f9a45d1a8bcdaec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0548dbb999fc4e5743593e7e3d5b86112fcc6d8f8f48bacdb20dbc9ba92da70f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0548dbb999fc4e5743593e7e3d5b86112fcc6d8f8f48bacdb20dbc9ba92da70f->enter($__internal_0548dbb999fc4e5743593e7e3d5b86112fcc6d8f8f48bacdb20dbc9ba92da70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0548dbb999fc4e5743593e7e3d5b86112fcc6d8f8f48bacdb20dbc9ba92da70f->leave($__internal_0548dbb999fc4e5743593e7e3d5b86112fcc6d8f8f48bacdb20dbc9ba92da70f_prof);

        
        $__internal_f0453a204b6fde80576b258e906857c364a3cfdf3bedeafa8f9a45d1a8bcdaec->leave($__internal_f0453a204b6fde80576b258e906857c364a3cfdf3bedeafa8f9a45d1a8bcdaec_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/gaspardfremy/troctesplantes/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
