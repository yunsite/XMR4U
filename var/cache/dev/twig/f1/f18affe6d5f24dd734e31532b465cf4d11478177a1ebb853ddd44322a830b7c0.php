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
        $__internal_7fb71d887685f33d741c47eeda4f6366799a697d58f69db5a80ceacda5afd9f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fb71d887685f33d741c47eeda4f6366799a697d58f69db5a80ceacda5afd9f2->enter($__internal_7fb71d887685f33d741c47eeda4f6366799a697d58f69db5a80ceacda5afd9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_60c80cf7ab8a291acdbbc5a6e59af8587abfb94b446b801ce2547381d346b680 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60c80cf7ab8a291acdbbc5a6e59af8587abfb94b446b801ce2547381d346b680->enter($__internal_60c80cf7ab8a291acdbbc5a6e59af8587abfb94b446b801ce2547381d346b680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_7fb71d887685f33d741c47eeda4f6366799a697d58f69db5a80ceacda5afd9f2->leave($__internal_7fb71d887685f33d741c47eeda4f6366799a697d58f69db5a80ceacda5afd9f2_prof);

        
        $__internal_60c80cf7ab8a291acdbbc5a6e59af8587abfb94b446b801ce2547381d346b680->leave($__internal_60c80cf7ab8a291acdbbc5a6e59af8587abfb94b446b801ce2547381d346b680_prof);

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
