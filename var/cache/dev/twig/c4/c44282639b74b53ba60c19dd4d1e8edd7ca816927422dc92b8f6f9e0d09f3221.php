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
        $__internal_cd3c5f4267a15bc538db5320cce9bf935212c7d9a2921fef49b3fdc19512b32b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd3c5f4267a15bc538db5320cce9bf935212c7d9a2921fef49b3fdc19512b32b->enter($__internal_cd3c5f4267a15bc538db5320cce9bf935212c7d9a2921fef49b3fdc19512b32b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_9036ea24aee2c9f77307cfb30a7f929f1202952450620503fbeb60c43ed56ea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9036ea24aee2c9f77307cfb30a7f929f1202952450620503fbeb60c43ed56ea6->enter($__internal_9036ea24aee2c9f77307cfb30a7f929f1202952450620503fbeb60c43ed56ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_cd3c5f4267a15bc538db5320cce9bf935212c7d9a2921fef49b3fdc19512b32b->leave($__internal_cd3c5f4267a15bc538db5320cce9bf935212c7d9a2921fef49b3fdc19512b32b_prof);

        
        $__internal_9036ea24aee2c9f77307cfb30a7f929f1202952450620503fbeb60c43ed56ea6->leave($__internal_9036ea24aee2c9f77307cfb30a7f929f1202952450620503fbeb60c43ed56ea6_prof);

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
