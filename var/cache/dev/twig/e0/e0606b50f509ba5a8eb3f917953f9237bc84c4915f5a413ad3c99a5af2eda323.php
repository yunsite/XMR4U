<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_29b729fc597f35925cf40d832daafce1455b5ad069bbb58de42e1756bd159392 extends Twig_Template
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
        $__internal_916cb53aa221d7bce98964b6fdb21d0d99d66222215cb58d3ca8f3e64ce7fc82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_916cb53aa221d7bce98964b6fdb21d0d99d66222215cb58d3ca8f3e64ce7fc82->enter($__internal_916cb53aa221d7bce98964b6fdb21d0d99d66222215cb58d3ca8f3e64ce7fc82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_1d79596debf605a1cddef4bcd0923a54d3723e7bdbe26f798541cebff1ebad52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d79596debf605a1cddef4bcd0923a54d3723e7bdbe26f798541cebff1ebad52->enter($__internal_1d79596debf605a1cddef4bcd0923a54d3723e7bdbe26f798541cebff1ebad52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_916cb53aa221d7bce98964b6fdb21d0d99d66222215cb58d3ca8f3e64ce7fc82->leave($__internal_916cb53aa221d7bce98964b6fdb21d0d99d66222215cb58d3ca8f3e64ce7fc82_prof);

        
        $__internal_1d79596debf605a1cddef4bcd0923a54d3723e7bdbe26f798541cebff1ebad52->leave($__internal_1d79596debf605a1cddef4bcd0923a54d3723e7bdbe26f798541cebff1ebad52_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "/Users/Slote/Desktop/XMR4U/vendor/symfony/twig-bundle/Resources/views/Exception/exception.rdf.twig");
    }
}
