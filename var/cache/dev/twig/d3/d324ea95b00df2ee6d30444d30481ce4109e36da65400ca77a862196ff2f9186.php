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
        $__internal_552369bc526b59c285a97cf62260236d1050c0257dc1d33dded1a0bcfc7bd07b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_552369bc526b59c285a97cf62260236d1050c0257dc1d33dded1a0bcfc7bd07b->enter($__internal_552369bc526b59c285a97cf62260236d1050c0257dc1d33dded1a0bcfc7bd07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_bc829282e3d8d96cdd3cde428c90a6586d82ff847eaabb6853741b0cc84b1e2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc829282e3d8d96cdd3cde428c90a6586d82ff847eaabb6853741b0cc84b1e2f->enter($__internal_bc829282e3d8d96cdd3cde428c90a6586d82ff847eaabb6853741b0cc84b1e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_552369bc526b59c285a97cf62260236d1050c0257dc1d33dded1a0bcfc7bd07b->leave($__internal_552369bc526b59c285a97cf62260236d1050c0257dc1d33dded1a0bcfc7bd07b_prof);

        
        $__internal_bc829282e3d8d96cdd3cde428c90a6586d82ff847eaabb6853741b0cc84b1e2f->leave($__internal_bc829282e3d8d96cdd3cde428c90a6586d82ff847eaabb6853741b0cc84b1e2f_prof);

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
", "@Twig/Exception/exception.atom.twig", "/Users/Slote/Desktop/XMR4U/vendor/symfony/twig-bundle/Resources/views/Exception/exception.atom.twig");
    }
}
