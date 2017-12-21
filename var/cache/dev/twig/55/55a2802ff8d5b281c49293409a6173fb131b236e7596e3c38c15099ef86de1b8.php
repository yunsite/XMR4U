<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_e37ca4ed96bef96d8ffa2879ebfbd2051dd8e46a77c62cc26f58f06e329b9b94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77a4378deedf327881ba41010257f571428597c0f1157ba4a7609dc001017468 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77a4378deedf327881ba41010257f571428597c0f1157ba4a7609dc001017468->enter($__internal_77a4378deedf327881ba41010257f571428597c0f1157ba4a7609dc001017468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_7db949ebbbd989e1d9c8c523fbc0e3336d7bfb62edc5c758633f37f967b4417d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7db949ebbbd989e1d9c8c523fbc0e3336d7bfb62edc5c758633f37f967b4417d->enter($__internal_7db949ebbbd989e1d9c8c523fbc0e3336d7bfb62edc5c758633f37f967b4417d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_77a4378deedf327881ba41010257f571428597c0f1157ba4a7609dc001017468->leave($__internal_77a4378deedf327881ba41010257f571428597c0f1157ba4a7609dc001017468_prof);

        
        $__internal_7db949ebbbd989e1d9c8c523fbc0e3336d7bfb62edc5c758633f37f967b4417d->leave($__internal_7db949ebbbd989e1d9c8c523fbc0e3336d7bfb62edc5c758633f37f967b4417d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "/Users/Slote/Desktop/XMR4U/vendor/symfony/twig-bundle/Resources/views/Exception/error.css.twig");
    }
}
