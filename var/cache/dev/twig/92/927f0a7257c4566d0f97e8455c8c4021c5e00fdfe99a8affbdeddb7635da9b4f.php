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
        $__internal_86411a60786a4486610e3af3415eb6f3cd34a3afc3c407786f8108b8d1cb8ab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86411a60786a4486610e3af3415eb6f3cd34a3afc3c407786f8108b8d1cb8ab8->enter($__internal_86411a60786a4486610e3af3415eb6f3cd34a3afc3c407786f8108b8d1cb8ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_1a2d76b8570624785d01b16f9b2d4ef15c8f2b1afc3c3874ec2d2b7a8bd5e429 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a2d76b8570624785d01b16f9b2d4ef15c8f2b1afc3c3874ec2d2b7a8bd5e429->enter($__internal_1a2d76b8570624785d01b16f9b2d4ef15c8f2b1afc3c3874ec2d2b7a8bd5e429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86411a60786a4486610e3af3415eb6f3cd34a3afc3c407786f8108b8d1cb8ab8->leave($__internal_86411a60786a4486610e3af3415eb6f3cd34a3afc3c407786f8108b8d1cb8ab8_prof);

        
        $__internal_1a2d76b8570624785d01b16f9b2d4ef15c8f2b1afc3c3874ec2d2b7a8bd5e429->leave($__internal_1a2d76b8570624785d01b16f9b2d4ef15c8f2b1afc3c3874ec2d2b7a8bd5e429_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_98c9fd30f230e9e6dab9c9e156b93226eaca8d8f528bc0a12bfa56ca35e34f51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98c9fd30f230e9e6dab9c9e156b93226eaca8d8f528bc0a12bfa56ca35e34f51->enter($__internal_98c9fd30f230e9e6dab9c9e156b93226eaca8d8f528bc0a12bfa56ca35e34f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_ce0c82cc642bf2d5cfbf5a5b0fbe1babae39ce3d5c36f1a8467bbe16984c688d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce0c82cc642bf2d5cfbf5a5b0fbe1babae39ce3d5c36f1a8467bbe16984c688d->enter($__internal_ce0c82cc642bf2d5cfbf5a5b0fbe1babae39ce3d5c36f1a8467bbe16984c688d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_ce0c82cc642bf2d5cfbf5a5b0fbe1babae39ce3d5c36f1a8467bbe16984c688d->leave($__internal_ce0c82cc642bf2d5cfbf5a5b0fbe1babae39ce3d5c36f1a8467bbe16984c688d_prof);

        
        $__internal_98c9fd30f230e9e6dab9c9e156b93226eaca8d8f528bc0a12bfa56ca35e34f51->leave($__internal_98c9fd30f230e9e6dab9c9e156b93226eaca8d8f528bc0a12bfa56ca35e34f51_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b873abaf396d7a0120373d5933a3987270ee24bd2baa76ab4f1e1003de475a23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b873abaf396d7a0120373d5933a3987270ee24bd2baa76ab4f1e1003de475a23->enter($__internal_b873abaf396d7a0120373d5933a3987270ee24bd2baa76ab4f1e1003de475a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_40c329ea24d52aa47284e2154b080198cb733be0839abd28cc175a7c08db0146 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40c329ea24d52aa47284e2154b080198cb733be0839abd28cc175a7c08db0146->enter($__internal_40c329ea24d52aa47284e2154b080198cb733be0839abd28cc175a7c08db0146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_40c329ea24d52aa47284e2154b080198cb733be0839abd28cc175a7c08db0146->leave($__internal_40c329ea24d52aa47284e2154b080198cb733be0839abd28cc175a7c08db0146_prof);

        
        $__internal_b873abaf396d7a0120373d5933a3987270ee24bd2baa76ab4f1e1003de475a23->leave($__internal_b873abaf396d7a0120373d5933a3987270ee24bd2baa76ab4f1e1003de475a23_prof);

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
