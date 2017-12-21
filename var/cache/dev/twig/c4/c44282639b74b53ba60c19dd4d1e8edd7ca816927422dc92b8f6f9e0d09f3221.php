<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_d58cf669aa3b65f555306e9e5b81ae308de68711e343f41b55fc3725a8cf131e extends Twig_Template
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
        $__internal_5862d74de9af5dd1945ed0ad47320c40a73777db90339ef06d70adab279894ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5862d74de9af5dd1945ed0ad47320c40a73777db90339ef06d70adab279894ab->enter($__internal_5862d74de9af5dd1945ed0ad47320c40a73777db90339ef06d70adab279894ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_a94637455a45bccb184e4953330ea235b7b1c3de011bd816e0fa56242fa13d41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a94637455a45bccb184e4953330ea235b7b1c3de011bd816e0fa56242fa13d41->enter($__internal_a94637455a45bccb184e4953330ea235b7b1c3de011bd816e0fa56242fa13d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_5862d74de9af5dd1945ed0ad47320c40a73777db90339ef06d70adab279894ab->leave($__internal_5862d74de9af5dd1945ed0ad47320c40a73777db90339ef06d70adab279894ab_prof);

        
        $__internal_a94637455a45bccb184e4953330ea235b7b1c3de011bd816e0fa56242fa13d41->leave($__internal_a94637455a45bccb184e4953330ea235b7b1c3de011bd816e0fa56242fa13d41_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "/Users/Slote/Desktop/XMR4U/vendor/symfony/twig-bundle/Resources/views/Exception/error.js.twig");
    }
}
