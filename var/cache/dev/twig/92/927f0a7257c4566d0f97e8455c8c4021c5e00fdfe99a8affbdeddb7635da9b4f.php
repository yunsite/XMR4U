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
        $__internal_aa51c1b7ed2c8f34cefc6407a8eb01fde47fa5b60964292dd5b187642ec54161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa51c1b7ed2c8f34cefc6407a8eb01fde47fa5b60964292dd5b187642ec54161->enter($__internal_aa51c1b7ed2c8f34cefc6407a8eb01fde47fa5b60964292dd5b187642ec54161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_c1baf506f70863e73f2994118bc780a0216bcbcec5992b7d062eb1746d760152 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1baf506f70863e73f2994118bc780a0216bcbcec5992b7d062eb1746d760152->enter($__internal_c1baf506f70863e73f2994118bc780a0216bcbcec5992b7d062eb1746d760152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa51c1b7ed2c8f34cefc6407a8eb01fde47fa5b60964292dd5b187642ec54161->leave($__internal_aa51c1b7ed2c8f34cefc6407a8eb01fde47fa5b60964292dd5b187642ec54161_prof);

        
        $__internal_c1baf506f70863e73f2994118bc780a0216bcbcec5992b7d062eb1746d760152->leave($__internal_c1baf506f70863e73f2994118bc780a0216bcbcec5992b7d062eb1746d760152_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_509da0482f71449530cdc03d0e03fc65086a4f8ec9c54b4fe85733d47edc33e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_509da0482f71449530cdc03d0e03fc65086a4f8ec9c54b4fe85733d47edc33e1->enter($__internal_509da0482f71449530cdc03d0e03fc65086a4f8ec9c54b4fe85733d47edc33e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_5ce172b6352d29fa9b0da864712f2db9f98669711614c02cfb2dacc77c0ea4de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ce172b6352d29fa9b0da864712f2db9f98669711614c02cfb2dacc77c0ea4de->enter($__internal_5ce172b6352d29fa9b0da864712f2db9f98669711614c02cfb2dacc77c0ea4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_5ce172b6352d29fa9b0da864712f2db9f98669711614c02cfb2dacc77c0ea4de->leave($__internal_5ce172b6352d29fa9b0da864712f2db9f98669711614c02cfb2dacc77c0ea4de_prof);

        
        $__internal_509da0482f71449530cdc03d0e03fc65086a4f8ec9c54b4fe85733d47edc33e1->leave($__internal_509da0482f71449530cdc03d0e03fc65086a4f8ec9c54b4fe85733d47edc33e1_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_21cf3dd0e0cd26ae3cfe3887c20abab593ae145a082b7ba29b9753f6b29c686f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21cf3dd0e0cd26ae3cfe3887c20abab593ae145a082b7ba29b9753f6b29c686f->enter($__internal_21cf3dd0e0cd26ae3cfe3887c20abab593ae145a082b7ba29b9753f6b29c686f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_65b2b37b23c8bd0c18b46d50389467bd6cc94c5963ff6d49040e3147597833cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65b2b37b23c8bd0c18b46d50389467bd6cc94c5963ff6d49040e3147597833cf->enter($__internal_65b2b37b23c8bd0c18b46d50389467bd6cc94c5963ff6d49040e3147597833cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_65b2b37b23c8bd0c18b46d50389467bd6cc94c5963ff6d49040e3147597833cf->leave($__internal_65b2b37b23c8bd0c18b46d50389467bd6cc94c5963ff6d49040e3147597833cf_prof);

        
        $__internal_21cf3dd0e0cd26ae3cfe3887c20abab593ae145a082b7ba29b9753f6b29c686f->leave($__internal_21cf3dd0e0cd26ae3cfe3887c20abab593ae145a082b7ba29b9753f6b29c686f_prof);

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
