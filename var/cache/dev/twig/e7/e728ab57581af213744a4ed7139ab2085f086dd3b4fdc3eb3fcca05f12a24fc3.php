<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_b12cd4ffada979e4430cc6988f7ea4eb14aa173880a8e9ea5384f17495d147d7 extends Twig_Template
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
        $__internal_9dfc909c7fe255fad76eb1ef61777fd1e057e0b8cb95ab8ada2f2cc501d1e66b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dfc909c7fe255fad76eb1ef61777fd1e057e0b8cb95ab8ada2f2cc501d1e66b->enter($__internal_9dfc909c7fe255fad76eb1ef61777fd1e057e0b8cb95ab8ada2f2cc501d1e66b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_96e968d510235bfa4e7bb13ca161d88adf1fb922855e141c6c4599937e488fbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96e968d510235bfa4e7bb13ca161d88adf1fb922855e141c6c4599937e488fbf->enter($__internal_96e968d510235bfa4e7bb13ca161d88adf1fb922855e141c6c4599937e488fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_9dfc909c7fe255fad76eb1ef61777fd1e057e0b8cb95ab8ada2f2cc501d1e66b->leave($__internal_9dfc909c7fe255fad76eb1ef61777fd1e057e0b8cb95ab8ada2f2cc501d1e66b_prof);

        
        $__internal_96e968d510235bfa4e7bb13ca161d88adf1fb922855e141c6c4599937e488fbf->leave($__internal_96e968d510235bfa4e7bb13ca161d88adf1fb922855e141c6c4599937e488fbf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "/var/www/miner/vendor/symfony/twig-bundle/Resources/views/Exception/exception.js.twig");
    }
}
