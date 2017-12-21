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
        $__internal_a721924ae804e37580c24177c407dbf65e6570d0fd56140ba035fe9384c2de8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a721924ae804e37580c24177c407dbf65e6570d0fd56140ba035fe9384c2de8c->enter($__internal_a721924ae804e37580c24177c407dbf65e6570d0fd56140ba035fe9384c2de8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_2ecf117a200ba83c5e7ef2873d50d5296e86182d2e1f7a1847da284120bb1f99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ecf117a200ba83c5e7ef2873d50d5296e86182d2e1f7a1847da284120bb1f99->enter($__internal_2ecf117a200ba83c5e7ef2873d50d5296e86182d2e1f7a1847da284120bb1f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a721924ae804e37580c24177c407dbf65e6570d0fd56140ba035fe9384c2de8c->leave($__internal_a721924ae804e37580c24177c407dbf65e6570d0fd56140ba035fe9384c2de8c_prof);

        
        $__internal_2ecf117a200ba83c5e7ef2873d50d5296e86182d2e1f7a1847da284120bb1f99->leave($__internal_2ecf117a200ba83c5e7ef2873d50d5296e86182d2e1f7a1847da284120bb1f99_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_57fd019d866d7c7e47529a7f76108105e5b04287737813534988e221029f713c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57fd019d866d7c7e47529a7f76108105e5b04287737813534988e221029f713c->enter($__internal_57fd019d866d7c7e47529a7f76108105e5b04287737813534988e221029f713c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c0efb8caca45e756e416facb8dfb1f92d89bbb0a6817cf1ecc600a87ec959e96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0efb8caca45e756e416facb8dfb1f92d89bbb0a6817cf1ecc600a87ec959e96->enter($__internal_c0efb8caca45e756e416facb8dfb1f92d89bbb0a6817cf1ecc600a87ec959e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_c0efb8caca45e756e416facb8dfb1f92d89bbb0a6817cf1ecc600a87ec959e96->leave($__internal_c0efb8caca45e756e416facb8dfb1f92d89bbb0a6817cf1ecc600a87ec959e96_prof);

        
        $__internal_57fd019d866d7c7e47529a7f76108105e5b04287737813534988e221029f713c->leave($__internal_57fd019d866d7c7e47529a7f76108105e5b04287737813534988e221029f713c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a50343b3265ac76a513b629d90e5e3e77dbff0f50f460b046a3d953e070edf53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a50343b3265ac76a513b629d90e5e3e77dbff0f50f460b046a3d953e070edf53->enter($__internal_a50343b3265ac76a513b629d90e5e3e77dbff0f50f460b046a3d953e070edf53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_593fa27c7824b5f7aeec15ad77f3077b561db6f1f76b85eb7b6087df1bb9862b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_593fa27c7824b5f7aeec15ad77f3077b561db6f1f76b85eb7b6087df1bb9862b->enter($__internal_593fa27c7824b5f7aeec15ad77f3077b561db6f1f76b85eb7b6087df1bb9862b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_593fa27c7824b5f7aeec15ad77f3077b561db6f1f76b85eb7b6087df1bb9862b->leave($__internal_593fa27c7824b5f7aeec15ad77f3077b561db6f1f76b85eb7b6087df1bb9862b_prof);

        
        $__internal_a50343b3265ac76a513b629d90e5e3e77dbff0f50f460b046a3d953e070edf53->leave($__internal_a50343b3265ac76a513b629d90e5e3e77dbff0f50f460b046a3d953e070edf53_prof);

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
", "@WebProfiler/Profiler/open.html.twig", "/Users/Slote/Desktop/XMR4U/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/open.html.twig");
    }
}
