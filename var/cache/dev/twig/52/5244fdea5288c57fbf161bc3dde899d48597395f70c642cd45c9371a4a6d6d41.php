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
        $__internal_ff19978d3eea53f2dc5b8856e5464fa6db3bbcd6216bd77377e2f3f8a138445d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff19978d3eea53f2dc5b8856e5464fa6db3bbcd6216bd77377e2f3f8a138445d->enter($__internal_ff19978d3eea53f2dc5b8856e5464fa6db3bbcd6216bd77377e2f3f8a138445d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_bb6e7ebcb51dffa0d5b92be04332a78c3806b933c8b02901aa34a22aeb5d31bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb6e7ebcb51dffa0d5b92be04332a78c3806b933c8b02901aa34a22aeb5d31bf->enter($__internal_bb6e7ebcb51dffa0d5b92be04332a78c3806b933c8b02901aa34a22aeb5d31bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff19978d3eea53f2dc5b8856e5464fa6db3bbcd6216bd77377e2f3f8a138445d->leave($__internal_ff19978d3eea53f2dc5b8856e5464fa6db3bbcd6216bd77377e2f3f8a138445d_prof);

        
        $__internal_bb6e7ebcb51dffa0d5b92be04332a78c3806b933c8b02901aa34a22aeb5d31bf->leave($__internal_bb6e7ebcb51dffa0d5b92be04332a78c3806b933c8b02901aa34a22aeb5d31bf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_34e8ef2e4c06dbee4ab68c142957990ce51477e9bdd382797b865acf255ad818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34e8ef2e4c06dbee4ab68c142957990ce51477e9bdd382797b865acf255ad818->enter($__internal_34e8ef2e4c06dbee4ab68c142957990ce51477e9bdd382797b865acf255ad818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2292e5922bd1cb7bed18178c1ec7470bf6ed1c5231a6498032cedbc2a99c915a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2292e5922bd1cb7bed18178c1ec7470bf6ed1c5231a6498032cedbc2a99c915a->enter($__internal_2292e5922bd1cb7bed18178c1ec7470bf6ed1c5231a6498032cedbc2a99c915a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_2292e5922bd1cb7bed18178c1ec7470bf6ed1c5231a6498032cedbc2a99c915a->leave($__internal_2292e5922bd1cb7bed18178c1ec7470bf6ed1c5231a6498032cedbc2a99c915a_prof);

        
        $__internal_34e8ef2e4c06dbee4ab68c142957990ce51477e9bdd382797b865acf255ad818->leave($__internal_34e8ef2e4c06dbee4ab68c142957990ce51477e9bdd382797b865acf255ad818_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_334305b1b3da7198811a4932d1fce45df18f83e9b7f00a7d457bef7b3376db9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_334305b1b3da7198811a4932d1fce45df18f83e9b7f00a7d457bef7b3376db9b->enter($__internal_334305b1b3da7198811a4932d1fce45df18f83e9b7f00a7d457bef7b3376db9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a042f7abf58bb0c5637807e0e44aa59f35fa603850ac81e5061035f6678b9f3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a042f7abf58bb0c5637807e0e44aa59f35fa603850ac81e5061035f6678b9f3c->enter($__internal_a042f7abf58bb0c5637807e0e44aa59f35fa603850ac81e5061035f6678b9f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a042f7abf58bb0c5637807e0e44aa59f35fa603850ac81e5061035f6678b9f3c->leave($__internal_a042f7abf58bb0c5637807e0e44aa59f35fa603850ac81e5061035f6678b9f3c_prof);

        
        $__internal_334305b1b3da7198811a4932d1fce45df18f83e9b7f00a7d457bef7b3376db9b->leave($__internal_334305b1b3da7198811a4932d1fce45df18f83e9b7f00a7d457bef7b3376db9b_prof);

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
