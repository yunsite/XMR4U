<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_737c10f03f13caf80a9055d96c169c6a6b12e5659e695819cb74454e66d0632e extends Twig_Template
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
        $__internal_a8a45c4b7c99f556be70fb8e570fdf4cf9493f124da45785eecbd1918caa44cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8a45c4b7c99f556be70fb8e570fdf4cf9493f124da45785eecbd1918caa44cc->enter($__internal_a8a45c4b7c99f556be70fb8e570fdf4cf9493f124da45785eecbd1918caa44cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_159ff674529894b8894a8c815e8380e05b40e2670c934b45bcd6ecb5cccd06a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_159ff674529894b8894a8c815e8380e05b40e2670c934b45bcd6ecb5cccd06a9->enter($__internal_159ff674529894b8894a8c815e8380e05b40e2670c934b45bcd6ecb5cccd06a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_a8a45c4b7c99f556be70fb8e570fdf4cf9493f124da45785eecbd1918caa44cc->leave($__internal_a8a45c4b7c99f556be70fb8e570fdf4cf9493f124da45785eecbd1918caa44cc_prof);

        
        $__internal_159ff674529894b8894a8c815e8380e05b40e2670c934b45bcd6ecb5cccd06a9->leave($__internal_159ff674529894b8894a8c815e8380e05b40e2670c934b45bcd6ecb5cccd06a9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/Users/Slote/Desktop/XMR4U/vendor/symfony/twig-bundle/Resources/views/Exception/error.json.twig");
    }
}
