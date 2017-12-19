<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_731fbf1a143f71f2d21acfc6fe2ae503ddec11dcef89e2a8c518b3f462a63168 extends Twig_Template
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
        $__internal_dcbcf16e5896d58acd680a7a62a05dbce8748b3e3f351c3ba5fd182a2c18034a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcbcf16e5896d58acd680a7a62a05dbce8748b3e3f351c3ba5fd182a2c18034a->enter($__internal_dcbcf16e5896d58acd680a7a62a05dbce8748b3e3f351c3ba5fd182a2c18034a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_f4860b1cdbd9ce88e17e46a25cfe1a8923b348c817080e797d4804b261cb79f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4860b1cdbd9ce88e17e46a25cfe1a8923b348c817080e797d4804b261cb79f8->enter($__internal_f4860b1cdbd9ce88e17e46a25cfe1a8923b348c817080e797d4804b261cb79f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_dcbcf16e5896d58acd680a7a62a05dbce8748b3e3f351c3ba5fd182a2c18034a->leave($__internal_dcbcf16e5896d58acd680a7a62a05dbce8748b3e3f351c3ba5fd182a2c18034a_prof);

        
        $__internal_f4860b1cdbd9ce88e17e46a25cfe1a8923b348c817080e797d4804b261cb79f8->leave($__internal_f4860b1cdbd9ce88e17e46a25cfe1a8923b348c817080e797d4804b261cb79f8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "/var/www/miner/vendor/symfony/twig-bundle/Resources/views/Exception/exception.atom.twig");
    }
}
