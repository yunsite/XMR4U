<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_b19702daf31962d58d1adf7900d430090a84dd71ba8c741a1d03bf76171ee25e extends Twig_Template
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
        $__internal_35647f289535cb5768e156be7a4a64c709f52b50cec1aa7264f514e67f32d605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35647f289535cb5768e156be7a4a64c709f52b50cec1aa7264f514e67f32d605->enter($__internal_35647f289535cb5768e156be7a4a64c709f52b50cec1aa7264f514e67f32d605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_d6aba546dd28a75647b352cabe5e528e96c3bc4bb280893c47fa4d0ffca39339 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6aba546dd28a75647b352cabe5e528e96c3bc4bb280893c47fa4d0ffca39339->enter($__internal_d6aba546dd28a75647b352cabe5e528e96c3bc4bb280893c47fa4d0ffca39339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_35647f289535cb5768e156be7a4a64c709f52b50cec1aa7264f514e67f32d605->leave($__internal_35647f289535cb5768e156be7a4a64c709f52b50cec1aa7264f514e67f32d605_prof);

        
        $__internal_d6aba546dd28a75647b352cabe5e528e96c3bc4bb280893c47fa4d0ffca39339->leave($__internal_d6aba546dd28a75647b352cabe5e528e96c3bc4bb280893c47fa4d0ffca39339_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "/var/www/miner/vendor/symfony/twig-bundle/Resources/views/Exception/error.atom.twig");
    }
}
