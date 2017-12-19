<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_bd822aa52672ef4c988a6e9d9f9c5c857aed4335a0eb961862ac2380cc85d922 extends Twig_Template
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
        $__internal_5855f51df09199bcb0b0418fc26fb6b65d39d87820fa52a860fac1849b570207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5855f51df09199bcb0b0418fc26fb6b65d39d87820fa52a860fac1849b570207->enter($__internal_5855f51df09199bcb0b0418fc26fb6b65d39d87820fa52a860fac1849b570207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_67960981c4a151ed1801f5de13a0f908f924452c2aa787aec18dcaeb37a53da3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67960981c4a151ed1801f5de13a0f908f924452c2aa787aec18dcaeb37a53da3->enter($__internal_67960981c4a151ed1801f5de13a0f908f924452c2aa787aec18dcaeb37a53da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_5855f51df09199bcb0b0418fc26fb6b65d39d87820fa52a860fac1849b570207->leave($__internal_5855f51df09199bcb0b0418fc26fb6b65d39d87820fa52a860fac1849b570207_prof);

        
        $__internal_67960981c4a151ed1801f5de13a0f908f924452c2aa787aec18dcaeb37a53da3->leave($__internal_67960981c4a151ed1801f5de13a0f908f924452c2aa787aec18dcaeb37a53da3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "/var/www/miner/vendor/symfony/twig-bundle/Resources/views/Exception/error.xml.twig");
    }
}
