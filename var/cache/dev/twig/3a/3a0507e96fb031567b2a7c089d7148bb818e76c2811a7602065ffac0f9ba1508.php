<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_c8b08059072b62339e1f5d9c741006bb1d70e13f5a2f244ec72fe8eee050d4a6 extends Twig_Template
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
        $__internal_a289223517de758b851b17742c2f94ae7abaaa79d1b0372139f213e8ae541571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a289223517de758b851b17742c2f94ae7abaaa79d1b0372139f213e8ae541571->enter($__internal_a289223517de758b851b17742c2f94ae7abaaa79d1b0372139f213e8ae541571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_40955ecd2c425c10d2fbf4c4d573a82682dc5fd36de88f5da352f2c28e656c8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40955ecd2c425c10d2fbf4c4d573a82682dc5fd36de88f5da352f2c28e656c8e->enter($__internal_40955ecd2c425c10d2fbf4c4d573a82682dc5fd36de88f5da352f2c28e656c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_a289223517de758b851b17742c2f94ae7abaaa79d1b0372139f213e8ae541571->leave($__internal_a289223517de758b851b17742c2f94ae7abaaa79d1b0372139f213e8ae541571_prof);

        
        $__internal_40955ecd2c425c10d2fbf4c4d573a82682dc5fd36de88f5da352f2c28e656c8e->leave($__internal_40955ecd2c425c10d2fbf4c4d573a82682dc5fd36de88f5da352f2c28e656c8e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_62b5254f280019a2547da1947165d5be6ac43b6c8676ad510b1c2a96b79003bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62b5254f280019a2547da1947165d5be6ac43b6c8676ad510b1c2a96b79003bd->enter($__internal_62b5254f280019a2547da1947165d5be6ac43b6c8676ad510b1c2a96b79003bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5220a6e58f6daf89e69a10e5e1e2be77973d5537973c75bff576dd8cc8c7afa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5220a6e58f6daf89e69a10e5e1e2be77973d5537973c75bff576dd8cc8c7afa3->enter($__internal_5220a6e58f6daf89e69a10e5e1e2be77973d5537973c75bff576dd8cc8c7afa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5220a6e58f6daf89e69a10e5e1e2be77973d5537973c75bff576dd8cc8c7afa3->leave($__internal_5220a6e58f6daf89e69a10e5e1e2be77973d5537973c75bff576dd8cc8c7afa3_prof);

        
        $__internal_62b5254f280019a2547da1947165d5be6ac43b6c8676ad510b1c2a96b79003bd->leave($__internal_62b5254f280019a2547da1947165d5be6ac43b6c8676ad510b1c2a96b79003bd_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f23ad9b3a754acae120aa819747498b8927bad087abef1e255957d3511e1ceac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f23ad9b3a754acae120aa819747498b8927bad087abef1e255957d3511e1ceac->enter($__internal_f23ad9b3a754acae120aa819747498b8927bad087abef1e255957d3511e1ceac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_81d3611da564dd8044aa11a7e0938c7a3ef6ca32b07750350a6b6b999267437c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81d3611da564dd8044aa11a7e0938c7a3ef6ca32b07750350a6b6b999267437c->enter($__internal_81d3611da564dd8044aa11a7e0938c7a3ef6ca32b07750350a6b6b999267437c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_81d3611da564dd8044aa11a7e0938c7a3ef6ca32b07750350a6b6b999267437c->leave($__internal_81d3611da564dd8044aa11a7e0938c7a3ef6ca32b07750350a6b6b999267437c_prof);

        
        $__internal_f23ad9b3a754acae120aa819747498b8927bad087abef1e255957d3511e1ceac->leave($__internal_f23ad9b3a754acae120aa819747498b8927bad087abef1e255957d3511e1ceac_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d6897fe5dc36ec697a634a8ea16c2523b9c3a219f063b9b6f78565cf75322e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d6897fe5dc36ec697a634a8ea16c2523b9c3a219f063b9b6f78565cf75322e8->enter($__internal_9d6897fe5dc36ec697a634a8ea16c2523b9c3a219f063b9b6f78565cf75322e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_646460a832029cdd3569cbf8f97a9d821b618144935a93becb3dde5e2f773fc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_646460a832029cdd3569cbf8f97a9d821b618144935a93becb3dde5e2f773fc6->enter($__internal_646460a832029cdd3569cbf8f97a9d821b618144935a93becb3dde5e2f773fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_646460a832029cdd3569cbf8f97a9d821b618144935a93becb3dde5e2f773fc6->leave($__internal_646460a832029cdd3569cbf8f97a9d821b618144935a93becb3dde5e2f773fc6_prof);

        
        $__internal_9d6897fe5dc36ec697a634a8ea16c2523b9c3a219f063b9b6f78565cf75322e8->leave($__internal_9d6897fe5dc36ec697a634a8ea16c2523b9c3a219f063b9b6f78565cf75322e8_prof);

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
", "@Twig/layout.html.twig", "/var/www/miner/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
