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
        $__internal_7d3dc0ad1d7b252cebe14213e8978443f2e79006f8ac6864aa9eb083881eb776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d3dc0ad1d7b252cebe14213e8978443f2e79006f8ac6864aa9eb083881eb776->enter($__internal_7d3dc0ad1d7b252cebe14213e8978443f2e79006f8ac6864aa9eb083881eb776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_a2a183522f8589fc6203327c6d279f46dda36cab7610b554274cc2239adcc1d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2a183522f8589fc6203327c6d279f46dda36cab7610b554274cc2239adcc1d9->enter($__internal_a2a183522f8589fc6203327c6d279f46dda36cab7610b554274cc2239adcc1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_7d3dc0ad1d7b252cebe14213e8978443f2e79006f8ac6864aa9eb083881eb776->leave($__internal_7d3dc0ad1d7b252cebe14213e8978443f2e79006f8ac6864aa9eb083881eb776_prof);

        
        $__internal_a2a183522f8589fc6203327c6d279f46dda36cab7610b554274cc2239adcc1d9->leave($__internal_a2a183522f8589fc6203327c6d279f46dda36cab7610b554274cc2239adcc1d9_prof);

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
