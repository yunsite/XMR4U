<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_e3374b3eb51a22cbda5b6bd9e8de65a3122f6ebae9cd35767d1a5a74290b7888 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d1e95cd3b001b185d0bebfe45f7143d6a0b32501ddbce53ed4d2582b315c081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d1e95cd3b001b185d0bebfe45f7143d6a0b32501ddbce53ed4d2582b315c081->enter($__internal_9d1e95cd3b001b185d0bebfe45f7143d6a0b32501ddbce53ed4d2582b315c081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_68ba26525f5ed6f89d7b1bcc61002ae04ce6afdbf024a39e7465b7ae66cf10b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68ba26525f5ed6f89d7b1bcc61002ae04ce6afdbf024a39e7465b7ae66cf10b7->enter($__internal_68ba26525f5ed6f89d7b1bcc61002ae04ce6afdbf024a39e7465b7ae66cf10b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9d1e95cd3b001b185d0bebfe45f7143d6a0b32501ddbce53ed4d2582b315c081->leave($__internal_9d1e95cd3b001b185d0bebfe45f7143d6a0b32501ddbce53ed4d2582b315c081_prof);

        
        $__internal_68ba26525f5ed6f89d7b1bcc61002ae04ce6afdbf024a39e7465b7ae66cf10b7->leave($__internal_68ba26525f5ed6f89d7b1bcc61002ae04ce6afdbf024a39e7465b7ae66cf10b7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_51847a40cfd67a1e4d9e91b31a384f6be37f9df5eacf3e39ffdb8cd183e16d16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51847a40cfd67a1e4d9e91b31a384f6be37f9df5eacf3e39ffdb8cd183e16d16->enter($__internal_51847a40cfd67a1e4d9e91b31a384f6be37f9df5eacf3e39ffdb8cd183e16d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f349998bfeb53da2cab0ea239ba55e74cdafee81309308b5ff09426bf81451bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f349998bfeb53da2cab0ea239ba55e74cdafee81309308b5ff09426bf81451bf->enter($__internal_f349998bfeb53da2cab0ea239ba55e74cdafee81309308b5ff09426bf81451bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f349998bfeb53da2cab0ea239ba55e74cdafee81309308b5ff09426bf81451bf->leave($__internal_f349998bfeb53da2cab0ea239ba55e74cdafee81309308b5ff09426bf81451bf_prof);

        
        $__internal_51847a40cfd67a1e4d9e91b31a384f6be37f9df5eacf3e39ffdb8cd183e16d16->leave($__internal_51847a40cfd67a1e4d9e91b31a384f6be37f9df5eacf3e39ffdb8cd183e16d16_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/Users/Slote/Desktop/XMR4U/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
