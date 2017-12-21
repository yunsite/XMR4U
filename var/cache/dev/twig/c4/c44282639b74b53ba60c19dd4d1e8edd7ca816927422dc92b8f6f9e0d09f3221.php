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
        $__internal_28eb4664cf841d08473a1a965966f036fddddc2ce11551ded026527382e1c8a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28eb4664cf841d08473a1a965966f036fddddc2ce11551ded026527382e1c8a3->enter($__internal_28eb4664cf841d08473a1a965966f036fddddc2ce11551ded026527382e1c8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_b1d555c4129319e14c4ca621b0d609782b9909e9d55bec056392b8a63fc84762 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1d555c4129319e14c4ca621b0d609782b9909e9d55bec056392b8a63fc84762->enter($__internal_b1d555c4129319e14c4ca621b0d609782b9909e9d55bec056392b8a63fc84762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_28eb4664cf841d08473a1a965966f036fddddc2ce11551ded026527382e1c8a3->leave($__internal_28eb4664cf841d08473a1a965966f036fddddc2ce11551ded026527382e1c8a3_prof);

        
        $__internal_b1d555c4129319e14c4ca621b0d609782b9909e9d55bec056392b8a63fc84762->leave($__internal_b1d555c4129319e14c4ca621b0d609782b9909e9d55bec056392b8a63fc84762_prof);

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
