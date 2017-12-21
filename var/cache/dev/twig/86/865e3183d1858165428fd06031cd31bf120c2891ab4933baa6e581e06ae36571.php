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
        $__internal_ab67ac9303bdc782d520183b32b376fa88ec2c8248199dc44b609c047c90da9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab67ac9303bdc782d520183b32b376fa88ec2c8248199dc44b609c047c90da9d->enter($__internal_ab67ac9303bdc782d520183b32b376fa88ec2c8248199dc44b609c047c90da9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_a0f2b96724d341effccc565dc004617348253a549fd0dd41976810a26deead7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0f2b96724d341effccc565dc004617348253a549fd0dd41976810a26deead7a->enter($__internal_a0f2b96724d341effccc565dc004617348253a549fd0dd41976810a26deead7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_ab67ac9303bdc782d520183b32b376fa88ec2c8248199dc44b609c047c90da9d->leave($__internal_ab67ac9303bdc782d520183b32b376fa88ec2c8248199dc44b609c047c90da9d_prof);

        
        $__internal_a0f2b96724d341effccc565dc004617348253a549fd0dd41976810a26deead7a->leave($__internal_a0f2b96724d341effccc565dc004617348253a549fd0dd41976810a26deead7a_prof);

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
", "@Twig/Exception/exception.json.twig", "/var/www/miner/vendor/symfony/twig-bundle/Resources/views/Exception/exception.json.twig");
    }
}
