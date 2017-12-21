<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_9b6aff1efdead49491c465d14b15c5c47e33916c8da78a19991ab9fda9c14e80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7b6072de67de9a74699a2d6030aeb56317923b7f5b1b661d2de832eab7d0529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7b6072de67de9a74699a2d6030aeb56317923b7f5b1b661d2de832eab7d0529->enter($__internal_f7b6072de67de9a74699a2d6030aeb56317923b7f5b1b661d2de832eab7d0529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_be7b704a3439e4425ac57b01749a088fc195364244c5c12176d1a18af8b288d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be7b704a3439e4425ac57b01749a088fc195364244c5c12176d1a18af8b288d7->enter($__internal_be7b704a3439e4425ac57b01749a088fc195364244c5c12176d1a18af8b288d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7b6072de67de9a74699a2d6030aeb56317923b7f5b1b661d2de832eab7d0529->leave($__internal_f7b6072de67de9a74699a2d6030aeb56317923b7f5b1b661d2de832eab7d0529_prof);

        
        $__internal_be7b704a3439e4425ac57b01749a088fc195364244c5c12176d1a18af8b288d7->leave($__internal_be7b704a3439e4425ac57b01749a088fc195364244c5c12176d1a18af8b288d7_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_154d72119e9f5693a5f62171b737ad05a8e9c73c4a63d328188faf772a11cca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_154d72119e9f5693a5f62171b737ad05a8e9c73c4a63d328188faf772a11cca3->enter($__internal_154d72119e9f5693a5f62171b737ad05a8e9c73c4a63d328188faf772a11cca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_cb53aec97739c5911918d33d94abffd1a903e45f5e01d48007eb5df955f4bc05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb53aec97739c5911918d33d94abffd1a903e45f5e01d48007eb5df955f4bc05->enter($__internal_cb53aec97739c5911918d33d94abffd1a903e45f5e01d48007eb5df955f4bc05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_cb53aec97739c5911918d33d94abffd1a903e45f5e01d48007eb5df955f4bc05->leave($__internal_cb53aec97739c5911918d33d94abffd1a903e45f5e01d48007eb5df955f4bc05_prof);

        
        $__internal_154d72119e9f5693a5f62171b737ad05a8e9c73c4a63d328188faf772a11cca3->leave($__internal_154d72119e9f5693a5f62171b737ad05a8e9c73c4a63d328188faf772a11cca3_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b515ea48c9a3c71e46d1ff0936dce8847b73e530f1f7a3edf24ec91285481f35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b515ea48c9a3c71e46d1ff0936dce8847b73e530f1f7a3edf24ec91285481f35->enter($__internal_b515ea48c9a3c71e46d1ff0936dce8847b73e530f1f7a3edf24ec91285481f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0a3771cf37db4f81eb94f90e4512951b97ddaa019ae7c8a8fbdb4eda99ed8918 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a3771cf37db4f81eb94f90e4512951b97ddaa019ae7c8a8fbdb4eda99ed8918->enter($__internal_0a3771cf37db4f81eb94f90e4512951b97ddaa019ae7c8a8fbdb4eda99ed8918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_0a3771cf37db4f81eb94f90e4512951b97ddaa019ae7c8a8fbdb4eda99ed8918->leave($__internal_0a3771cf37db4f81eb94f90e4512951b97ddaa019ae7c8a8fbdb4eda99ed8918_prof);

        
        $__internal_b515ea48c9a3c71e46d1ff0936dce8847b73e530f1f7a3edf24ec91285481f35->leave($__internal_b515ea48c9a3c71e46d1ff0936dce8847b73e530f1f7a3edf24ec91285481f35_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/var/www/miner/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/info.html.twig");
    }
}
