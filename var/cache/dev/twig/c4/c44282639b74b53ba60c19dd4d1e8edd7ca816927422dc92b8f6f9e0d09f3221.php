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
        $__internal_0581a8b364b6209607e4aa4f9bdf54876f2aa5582233abf14e13b93f34f34d25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0581a8b364b6209607e4aa4f9bdf54876f2aa5582233abf14e13b93f34f34d25->enter($__internal_0581a8b364b6209607e4aa4f9bdf54876f2aa5582233abf14e13b93f34f34d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_913f862eb1652d09ea9934f1f3910851ef8039803a1615988c32186ecf87eb38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_913f862eb1652d09ea9934f1f3910851ef8039803a1615988c32186ecf87eb38->enter($__internal_913f862eb1652d09ea9934f1f3910851ef8039803a1615988c32186ecf87eb38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_0581a8b364b6209607e4aa4f9bdf54876f2aa5582233abf14e13b93f34f34d25->leave($__internal_0581a8b364b6209607e4aa4f9bdf54876f2aa5582233abf14e13b93f34f34d25_prof);

        
        $__internal_913f862eb1652d09ea9934f1f3910851ef8039803a1615988c32186ecf87eb38->leave($__internal_913f862eb1652d09ea9934f1f3910851ef8039803a1615988c32186ecf87eb38_prof);

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
", "@Twig/Exception/error.js.twig", "/var/www/miner/vendor/symfony/twig-bundle/Resources/views/Exception/error.js.twig");
    }
}
