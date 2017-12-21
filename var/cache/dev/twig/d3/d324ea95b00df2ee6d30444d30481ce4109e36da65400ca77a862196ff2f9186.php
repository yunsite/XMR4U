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
        $__internal_abd616a924195bbd98b72c88d9a2e6cd4e304f1d318ecb89a23aca41b9d4598d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abd616a924195bbd98b72c88d9a2e6cd4e304f1d318ecb89a23aca41b9d4598d->enter($__internal_abd616a924195bbd98b72c88d9a2e6cd4e304f1d318ecb89a23aca41b9d4598d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_3c14277db4359f0ddeff215d7d45dd9fb787de509b9d9a9e2444e32c7ae9c43f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c14277db4359f0ddeff215d7d45dd9fb787de509b9d9a9e2444e32c7ae9c43f->enter($__internal_3c14277db4359f0ddeff215d7d45dd9fb787de509b9d9a9e2444e32c7ae9c43f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_abd616a924195bbd98b72c88d9a2e6cd4e304f1d318ecb89a23aca41b9d4598d->leave($__internal_abd616a924195bbd98b72c88d9a2e6cd4e304f1d318ecb89a23aca41b9d4598d_prof);

        
        $__internal_3c14277db4359f0ddeff215d7d45dd9fb787de509b9d9a9e2444e32c7ae9c43f->leave($__internal_3c14277db4359f0ddeff215d7d45dd9fb787de509b9d9a9e2444e32c7ae9c43f_prof);

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
