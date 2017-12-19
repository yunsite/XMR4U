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
        $__internal_847fb80438c5b25f76e5016f37962e2fc2503626853a8ce6e616eab33974d7aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_847fb80438c5b25f76e5016f37962e2fc2503626853a8ce6e616eab33974d7aa->enter($__internal_847fb80438c5b25f76e5016f37962e2fc2503626853a8ce6e616eab33974d7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_2e40ed0acfd33d98770d0d24deb3cd31f10b6120a57ddcacc57b664bb64b37d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e40ed0acfd33d98770d0d24deb3cd31f10b6120a57ddcacc57b664bb64b37d4->enter($__internal_2e40ed0acfd33d98770d0d24deb3cd31f10b6120a57ddcacc57b664bb64b37d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_847fb80438c5b25f76e5016f37962e2fc2503626853a8ce6e616eab33974d7aa->leave($__internal_847fb80438c5b25f76e5016f37962e2fc2503626853a8ce6e616eab33974d7aa_prof);

        
        $__internal_2e40ed0acfd33d98770d0d24deb3cd31f10b6120a57ddcacc57b664bb64b37d4->leave($__internal_2e40ed0acfd33d98770d0d24deb3cd31f10b6120a57ddcacc57b664bb64b37d4_prof);

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
