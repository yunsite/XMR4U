<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_5c11652118eafab3d5f037417bda9fbf221c022d882afe93b9520fdf256d95ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9c1896d48b55409e34fa5edafb022546dfb043c4ecfc1d1b89e2a88e61eeecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9c1896d48b55409e34fa5edafb022546dfb043c4ecfc1d1b89e2a88e61eeecc->enter($__internal_b9c1896d48b55409e34fa5edafb022546dfb043c4ecfc1d1b89e2a88e61eeecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_61903a1cd9504521eed4f75257975133194626546368527308ac1426eecf70fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61903a1cd9504521eed4f75257975133194626546368527308ac1426eecf70fd->enter($__internal_61903a1cd9504521eed4f75257975133194626546368527308ac1426eecf70fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9c1896d48b55409e34fa5edafb022546dfb043c4ecfc1d1b89e2a88e61eeecc->leave($__internal_b9c1896d48b55409e34fa5edafb022546dfb043c4ecfc1d1b89e2a88e61eeecc_prof);

        
        $__internal_61903a1cd9504521eed4f75257975133194626546368527308ac1426eecf70fd->leave($__internal_61903a1cd9504521eed4f75257975133194626546368527308ac1426eecf70fd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0b4986de575e27ff8f990e5c73e77499b1e547c8b334bc277c2acb6e785542c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b4986de575e27ff8f990e5c73e77499b1e547c8b334bc277c2acb6e785542c3->enter($__internal_0b4986de575e27ff8f990e5c73e77499b1e547c8b334bc277c2acb6e785542c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2d911d8ed903caad4f5d80317b17f563801b849d98c34b64bb5454c8fa08b5d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d911d8ed903caad4f5d80317b17f563801b849d98c34b64bb5454c8fa08b5d8->enter($__internal_2d911d8ed903caad4f5d80317b17f563801b849d98c34b64bb5454c8fa08b5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_2d911d8ed903caad4f5d80317b17f563801b849d98c34b64bb5454c8fa08b5d8->leave($__internal_2d911d8ed903caad4f5d80317b17f563801b849d98c34b64bb5454c8fa08b5d8_prof);

        
        $__internal_0b4986de575e27ff8f990e5c73e77499b1e547c8b334bc277c2acb6e785542c3->leave($__internal_0b4986de575e27ff8f990e5c73e77499b1e547c8b334bc277c2acb6e785542c3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_91b54d2e29c7a29d64e772e4b789313efb170ab03512d5ac82a8d3c190f6d0e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b54d2e29c7a29d64e772e4b789313efb170ab03512d5ac82a8d3c190f6d0e4->enter($__internal_91b54d2e29c7a29d64e772e4b789313efb170ab03512d5ac82a8d3c190f6d0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_27cce34393e53b2c99fe5f946e564d10713a6746c6dfbfafbc8ac35611c0b734 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27cce34393e53b2c99fe5f946e564d10713a6746c6dfbfafbc8ac35611c0b734->enter($__internal_27cce34393e53b2c99fe5f946e564d10713a6746c6dfbfafbc8ac35611c0b734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_27cce34393e53b2c99fe5f946e564d10713a6746c6dfbfafbc8ac35611c0b734->leave($__internal_27cce34393e53b2c99fe5f946e564d10713a6746c6dfbfafbc8ac35611c0b734_prof);

        
        $__internal_91b54d2e29c7a29d64e772e4b789313efb170ab03512d5ac82a8d3c190f6d0e4->leave($__internal_91b54d2e29c7a29d64e772e4b789313efb170ab03512d5ac82a8d3c190f6d0e4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/var/www/miner/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/open.html.twig");
    }
}
