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
        $__internal_963d3f2cef9aa0ed835620b1e4f7df5d0d615941aa4e8274a8356c8623f9bcac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_963d3f2cef9aa0ed835620b1e4f7df5d0d615941aa4e8274a8356c8623f9bcac->enter($__internal_963d3f2cef9aa0ed835620b1e4f7df5d0d615941aa4e8274a8356c8623f9bcac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_99415412bcd94295bb08616b1df24aae6d5614c4bdd22b49297e58164b237b9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99415412bcd94295bb08616b1df24aae6d5614c4bdd22b49297e58164b237b9b->enter($__internal_99415412bcd94295bb08616b1df24aae6d5614c4bdd22b49297e58164b237b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_963d3f2cef9aa0ed835620b1e4f7df5d0d615941aa4e8274a8356c8623f9bcac->leave($__internal_963d3f2cef9aa0ed835620b1e4f7df5d0d615941aa4e8274a8356c8623f9bcac_prof);

        
        $__internal_99415412bcd94295bb08616b1df24aae6d5614c4bdd22b49297e58164b237b9b->leave($__internal_99415412bcd94295bb08616b1df24aae6d5614c4bdd22b49297e58164b237b9b_prof);

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
