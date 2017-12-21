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
        $__internal_46f45a22326b2f9a5270c0e62f4a50570dc8e5a02b1faaf09022a7e0869247cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46f45a22326b2f9a5270c0e62f4a50570dc8e5a02b1faaf09022a7e0869247cf->enter($__internal_46f45a22326b2f9a5270c0e62f4a50570dc8e5a02b1faaf09022a7e0869247cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_0a3389e707aef77dbcbf39b29297d6668082d12b41666767d7cbf83bbbbdbbd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a3389e707aef77dbcbf39b29297d6668082d12b41666767d7cbf83bbbbdbbd2->enter($__internal_0a3389e707aef77dbcbf39b29297d6668082d12b41666767d7cbf83bbbbdbbd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_46f45a22326b2f9a5270c0e62f4a50570dc8e5a02b1faaf09022a7e0869247cf->leave($__internal_46f45a22326b2f9a5270c0e62f4a50570dc8e5a02b1faaf09022a7e0869247cf_prof);

        
        $__internal_0a3389e707aef77dbcbf39b29297d6668082d12b41666767d7cbf83bbbbdbbd2->leave($__internal_0a3389e707aef77dbcbf39b29297d6668082d12b41666767d7cbf83bbbbdbbd2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_af0982261edd6f34713a81c71c675d6cd841c104e6e4416d8f76f52f961dc287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af0982261edd6f34713a81c71c675d6cd841c104e6e4416d8f76f52f961dc287->enter($__internal_af0982261edd6f34713a81c71c675d6cd841c104e6e4416d8f76f52f961dc287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_196cf754fe873a504b4273d10e64dfab71a952fd96882c1ae25f64d12849cfc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_196cf754fe873a504b4273d10e64dfab71a952fd96882c1ae25f64d12849cfc2->enter($__internal_196cf754fe873a504b4273d10e64dfab71a952fd96882c1ae25f64d12849cfc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_196cf754fe873a504b4273d10e64dfab71a952fd96882c1ae25f64d12849cfc2->leave($__internal_196cf754fe873a504b4273d10e64dfab71a952fd96882c1ae25f64d12849cfc2_prof);

        
        $__internal_af0982261edd6f34713a81c71c675d6cd841c104e6e4416d8f76f52f961dc287->leave($__internal_af0982261edd6f34713a81c71c675d6cd841c104e6e4416d8f76f52f961dc287_prof);

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
