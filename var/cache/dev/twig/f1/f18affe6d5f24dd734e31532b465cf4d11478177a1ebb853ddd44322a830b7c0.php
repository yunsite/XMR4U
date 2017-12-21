<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_ecb06392bb688494e7440c81b0e6ad15fa5a6d122195447c4cea9fa222968f81 extends Twig_Template
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
        $__internal_8765c99a6719ca2f02c777863e61ec605c422b0b087c1de778e1b9123f892879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8765c99a6719ca2f02c777863e61ec605c422b0b087c1de778e1b9123f892879->enter($__internal_8765c99a6719ca2f02c777863e61ec605c422b0b087c1de778e1b9123f892879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_7f0ab49cec1702f795b8089bd2a4988238654cf63068e23b2aa5d8923474f92f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f0ab49cec1702f795b8089bd2a4988238654cf63068e23b2aa5d8923474f92f->enter($__internal_7f0ab49cec1702f795b8089bd2a4988238654cf63068e23b2aa5d8923474f92f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_8765c99a6719ca2f02c777863e61ec605c422b0b087c1de778e1b9123f892879->leave($__internal_8765c99a6719ca2f02c777863e61ec605c422b0b087c1de778e1b9123f892879_prof);

        
        $__internal_7f0ab49cec1702f795b8089bd2a4988238654cf63068e23b2aa5d8923474f92f->leave($__internal_7f0ab49cec1702f795b8089bd2a4988238654cf63068e23b2aa5d8923474f92f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "/Users/Slote/Desktop/XMR4U/vendor/symfony/twig-bundle/Resources/views/Exception/exception.css.twig");
    }
}
