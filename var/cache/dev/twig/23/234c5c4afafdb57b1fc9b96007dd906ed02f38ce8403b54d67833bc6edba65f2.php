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
        $__internal_860fc045accb3d66fbd3e3e11b13399271a7e3ccdcf9ef53d39d3bcb5e8aa5c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_860fc045accb3d66fbd3e3e11b13399271a7e3ccdcf9ef53d39d3bcb5e8aa5c4->enter($__internal_860fc045accb3d66fbd3e3e11b13399271a7e3ccdcf9ef53d39d3bcb5e8aa5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_2cad377a31c2feb46f2e14b1c26db4d52b028f8cad5e0eb365f5ff7291fd6a7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cad377a31c2feb46f2e14b1c26db4d52b028f8cad5e0eb365f5ff7291fd6a7e->enter($__internal_2cad377a31c2feb46f2e14b1c26db4d52b028f8cad5e0eb365f5ff7291fd6a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_860fc045accb3d66fbd3e3e11b13399271a7e3ccdcf9ef53d39d3bcb5e8aa5c4->leave($__internal_860fc045accb3d66fbd3e3e11b13399271a7e3ccdcf9ef53d39d3bcb5e8aa5c4_prof);

        
        $__internal_2cad377a31c2feb46f2e14b1c26db4d52b028f8cad5e0eb365f5ff7291fd6a7e->leave($__internal_2cad377a31c2feb46f2e14b1c26db4d52b028f8cad5e0eb365f5ff7291fd6a7e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_03e6dfa47408e7c62d15956a21cfcdb9de1f0a5507eca12865fb1da56348723d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03e6dfa47408e7c62d15956a21cfcdb9de1f0a5507eca12865fb1da56348723d->enter($__internal_03e6dfa47408e7c62d15956a21cfcdb9de1f0a5507eca12865fb1da56348723d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e00fc6e03c783c0a969b26afb9d35d83b308af1a68e8f2ddba87ab504444f69f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e00fc6e03c783c0a969b26afb9d35d83b308af1a68e8f2ddba87ab504444f69f->enter($__internal_e00fc6e03c783c0a969b26afb9d35d83b308af1a68e8f2ddba87ab504444f69f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e00fc6e03c783c0a969b26afb9d35d83b308af1a68e8f2ddba87ab504444f69f->leave($__internal_e00fc6e03c783c0a969b26afb9d35d83b308af1a68e8f2ddba87ab504444f69f_prof);

        
        $__internal_03e6dfa47408e7c62d15956a21cfcdb9de1f0a5507eca12865fb1da56348723d->leave($__internal_03e6dfa47408e7c62d15956a21cfcdb9de1f0a5507eca12865fb1da56348723d_prof);

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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/var/www/miner/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
