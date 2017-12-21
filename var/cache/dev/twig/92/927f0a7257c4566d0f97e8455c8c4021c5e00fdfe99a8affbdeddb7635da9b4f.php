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
        $__internal_22c5752cce7a37c43256ead2622a4aefcd13e4af2b82577c481c7b6d47aadaf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c5752cce7a37c43256ead2622a4aefcd13e4af2b82577c481c7b6d47aadaf4->enter($__internal_22c5752cce7a37c43256ead2622a4aefcd13e4af2b82577c481c7b6d47aadaf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_ae7663895a53da96b03fe5c40b131d001fb3ab4c8af34d7984208e8c1adfdf31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae7663895a53da96b03fe5c40b131d001fb3ab4c8af34d7984208e8c1adfdf31->enter($__internal_ae7663895a53da96b03fe5c40b131d001fb3ab4c8af34d7984208e8c1adfdf31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22c5752cce7a37c43256ead2622a4aefcd13e4af2b82577c481c7b6d47aadaf4->leave($__internal_22c5752cce7a37c43256ead2622a4aefcd13e4af2b82577c481c7b6d47aadaf4_prof);

        
        $__internal_ae7663895a53da96b03fe5c40b131d001fb3ab4c8af34d7984208e8c1adfdf31->leave($__internal_ae7663895a53da96b03fe5c40b131d001fb3ab4c8af34d7984208e8c1adfdf31_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_476363cca5827581128d83a76d035d609f08237bfba6416b26806fd1042f3200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_476363cca5827581128d83a76d035d609f08237bfba6416b26806fd1042f3200->enter($__internal_476363cca5827581128d83a76d035d609f08237bfba6416b26806fd1042f3200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_c009e49c5cb8fe493a220cc6f931bfeab55fbf747a2b0a1ce7cbae54d5a4782f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c009e49c5cb8fe493a220cc6f931bfeab55fbf747a2b0a1ce7cbae54d5a4782f->enter($__internal_c009e49c5cb8fe493a220cc6f931bfeab55fbf747a2b0a1ce7cbae54d5a4782f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_c009e49c5cb8fe493a220cc6f931bfeab55fbf747a2b0a1ce7cbae54d5a4782f->leave($__internal_c009e49c5cb8fe493a220cc6f931bfeab55fbf747a2b0a1ce7cbae54d5a4782f_prof);

        
        $__internal_476363cca5827581128d83a76d035d609f08237bfba6416b26806fd1042f3200->leave($__internal_476363cca5827581128d83a76d035d609f08237bfba6416b26806fd1042f3200_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_59a7e79a01c141359b76a4cab84bd6611792a5242ed2389ee60e4d47e1ff3548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59a7e79a01c141359b76a4cab84bd6611792a5242ed2389ee60e4d47e1ff3548->enter($__internal_59a7e79a01c141359b76a4cab84bd6611792a5242ed2389ee60e4d47e1ff3548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f88278ca9157e459f530aacf31d31a1d55949c5fba7bb43c69abe1213d6f61d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f88278ca9157e459f530aacf31d31a1d55949c5fba7bb43c69abe1213d6f61d9->enter($__internal_f88278ca9157e459f530aacf31d31a1d55949c5fba7bb43c69abe1213d6f61d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_f88278ca9157e459f530aacf31d31a1d55949c5fba7bb43c69abe1213d6f61d9->leave($__internal_f88278ca9157e459f530aacf31d31a1d55949c5fba7bb43c69abe1213d6f61d9_prof);

        
        $__internal_59a7e79a01c141359b76a4cab84bd6611792a5242ed2389ee60e4d47e1ff3548->leave($__internal_59a7e79a01c141359b76a4cab84bd6611792a5242ed2389ee60e4d47e1ff3548_prof);

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
", "@WebProfiler/Profiler/info.html.twig", "/Users/Slote/Desktop/XMR4U/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/info.html.twig");
    }
}
