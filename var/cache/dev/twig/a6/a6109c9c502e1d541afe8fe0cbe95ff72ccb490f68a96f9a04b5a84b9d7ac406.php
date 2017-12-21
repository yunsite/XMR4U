<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_f14d3cfd672c0e967929693a93e22e09f02e98ec88914a5dafa4680a692ab0dd extends Twig_Template
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
        $__internal_b362fd231387f24eb2dafdc325e771a48fd7231021de84d7f2675fd15b853d37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b362fd231387f24eb2dafdc325e771a48fd7231021de84d7f2675fd15b853d37->enter($__internal_b362fd231387f24eb2dafdc325e771a48fd7231021de84d7f2675fd15b853d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_75fa7fb7fbda1b00da4e2f4f07a814028ddb301a2f0eea813bf7fcb0c8093581 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75fa7fb7fbda1b00da4e2f4f07a814028ddb301a2f0eea813bf7fcb0c8093581->enter($__internal_75fa7fb7fbda1b00da4e2f4f07a814028ddb301a2f0eea813bf7fcb0c8093581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_b362fd231387f24eb2dafdc325e771a48fd7231021de84d7f2675fd15b853d37->leave($__internal_b362fd231387f24eb2dafdc325e771a48fd7231021de84d7f2675fd15b853d37_prof);

        
        $__internal_75fa7fb7fbda1b00da4e2f4f07a814028ddb301a2f0eea813bf7fcb0c8093581->leave($__internal_75fa7fb7fbda1b00da4e2f4f07a814028ddb301a2f0eea813bf7fcb0c8093581_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "/Users/Slote/Desktop/XMR4U/vendor/symfony/twig-bundle/Resources/views/Exception/error.rdf.twig");
    }
}
