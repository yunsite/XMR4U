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
        $__internal_3a09e05f20ffa38bf78e8a610206529237db2c0643f5fd27a759a88d991f1cd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a09e05f20ffa38bf78e8a610206529237db2c0643f5fd27a759a88d991f1cd2->enter($__internal_3a09e05f20ffa38bf78e8a610206529237db2c0643f5fd27a759a88d991f1cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_5082bac0d9b7aaf36c181fe83788a8eb0970846b999a92e99c159ac5a4e2765f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5082bac0d9b7aaf36c181fe83788a8eb0970846b999a92e99c159ac5a4e2765f->enter($__internal_5082bac0d9b7aaf36c181fe83788a8eb0970846b999a92e99c159ac5a4e2765f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_3a09e05f20ffa38bf78e8a610206529237db2c0643f5fd27a759a88d991f1cd2->leave($__internal_3a09e05f20ffa38bf78e8a610206529237db2c0643f5fd27a759a88d991f1cd2_prof);

        
        $__internal_5082bac0d9b7aaf36c181fe83788a8eb0970846b999a92e99c159ac5a4e2765f->leave($__internal_5082bac0d9b7aaf36c181fe83788a8eb0970846b999a92e99c159ac5a4e2765f_prof);

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
