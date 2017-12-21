<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_54fe130af33548a8afca0b6f0e60c289d9979414682378d843c3bbb016f4e6fe extends Twig_Template
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
        $__internal_25420c1cda34c8a512038ad2a82b7027b2c4916a0349473e372eb672500fb17c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25420c1cda34c8a512038ad2a82b7027b2c4916a0349473e372eb672500fb17c->enter($__internal_25420c1cda34c8a512038ad2a82b7027b2c4916a0349473e372eb672500fb17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_4ef82d7e799115d682d2617a6e3636fbf40aeb0fcc0695bdb1c498858266e522 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ef82d7e799115d682d2617a6e3636fbf40aeb0fcc0695bdb1c498858266e522->enter($__internal_4ef82d7e799115d682d2617a6e3636fbf40aeb0fcc0695bdb1c498858266e522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_25420c1cda34c8a512038ad2a82b7027b2c4916a0349473e372eb672500fb17c->leave($__internal_25420c1cda34c8a512038ad2a82b7027b2c4916a0349473e372eb672500fb17c_prof);

        
        $__internal_4ef82d7e799115d682d2617a6e3636fbf40aeb0fcc0695bdb1c498858266e522->leave($__internal_4ef82d7e799115d682d2617a6e3636fbf40aeb0fcc0695bdb1c498858266e522_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/Users/Slote/Desktop/XMR4U/vendor/symfony/twig-bundle/Resources/views/Exception/exception.json.twig");
    }
}
