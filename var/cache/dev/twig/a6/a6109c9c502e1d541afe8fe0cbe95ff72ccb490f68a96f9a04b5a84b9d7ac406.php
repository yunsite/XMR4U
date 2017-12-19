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
        $__internal_9dbc935b59419ec3d4bf880a1629ed95183bf3dc746dcb67d84d047c3292a0c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dbc935b59419ec3d4bf880a1629ed95183bf3dc746dcb67d84d047c3292a0c9->enter($__internal_9dbc935b59419ec3d4bf880a1629ed95183bf3dc746dcb67d84d047c3292a0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_97b5efa4519787bdc09392f162fb129ece481afd02462c4b2bbeaef8f588a7e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97b5efa4519787bdc09392f162fb129ece481afd02462c4b2bbeaef8f588a7e0->enter($__internal_97b5efa4519787bdc09392f162fb129ece481afd02462c4b2bbeaef8f588a7e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_9dbc935b59419ec3d4bf880a1629ed95183bf3dc746dcb67d84d047c3292a0c9->leave($__internal_9dbc935b59419ec3d4bf880a1629ed95183bf3dc746dcb67d84d047c3292a0c9_prof);

        
        $__internal_97b5efa4519787bdc09392f162fb129ece481afd02462c4b2bbeaef8f588a7e0->leave($__internal_97b5efa4519787bdc09392f162fb129ece481afd02462c4b2bbeaef8f588a7e0_prof);

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
", "@Twig/Exception/error.rdf.twig", "/var/www/miner/vendor/symfony/twig-bundle/Resources/views/Exception/error.rdf.twig");
    }
}
