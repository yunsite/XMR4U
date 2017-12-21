<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_f14d3cfd672c0e967929693a93e22e09f02e98ec88914a5dafa4680a692ab0dd extends Twig_Template
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
        $__internal_bd9e986c853e026171395aaf7b10180d7c6e56ee10e6b5a5eeee252d38a0c971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd9e986c853e026171395aaf7b10180d7c6e56ee10e6b5a5eeee252d38a0c971->enter($__internal_bd9e986c853e026171395aaf7b10180d7c6e56ee10e6b5a5eeee252d38a0c971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_2a0d4961a396dabdf95197a085c733e21d21e80ada8f2d01b36a3332c4595749 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a0d4961a396dabdf95197a085c733e21d21e80ada8f2d01b36a3332c4595749->enter($__internal_2a0d4961a396dabdf95197a085c733e21d21e80ada8f2d01b36a3332c4595749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_bd9e986c853e026171395aaf7b10180d7c6e56ee10e6b5a5eeee252d38a0c971->leave($__internal_bd9e986c853e026171395aaf7b10180d7c6e56ee10e6b5a5eeee252d38a0c971_prof);

        
        $__internal_2a0d4961a396dabdf95197a085c733e21d21e80ada8f2d01b36a3332c4595749->leave($__internal_2a0d4961a396dabdf95197a085c733e21d21e80ada8f2d01b36a3332c4595749_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "/var/www/miner/vendor/symfony/twig-bundle/Resources/views/Exception/error.rdf.twig");
    }
}
