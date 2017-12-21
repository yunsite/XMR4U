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
        $__internal_4df32080d48e9a58560f90dac149ccc9b527702579a188ffd455f2fe96ed9c4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4df32080d48e9a58560f90dac149ccc9b527702579a188ffd455f2fe96ed9c4c->enter($__internal_4df32080d48e9a58560f90dac149ccc9b527702579a188ffd455f2fe96ed9c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_83be609aec2a20f4bca717550ac15776e54671259304906ca82162ea33979c1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83be609aec2a20f4bca717550ac15776e54671259304906ca82162ea33979c1c->enter($__internal_83be609aec2a20f4bca717550ac15776e54671259304906ca82162ea33979c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_4df32080d48e9a58560f90dac149ccc9b527702579a188ffd455f2fe96ed9c4c->leave($__internal_4df32080d48e9a58560f90dac149ccc9b527702579a188ffd455f2fe96ed9c4c_prof);

        
        $__internal_83be609aec2a20f4bca717550ac15776e54671259304906ca82162ea33979c1c->leave($__internal_83be609aec2a20f4bca717550ac15776e54671259304906ca82162ea33979c1c_prof);

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
", "@Twig/Exception/exception.js.twig", "/Users/Slote/Desktop/XMR4U/vendor/symfony/twig-bundle/Resources/views/Exception/exception.js.twig");
    }
}
