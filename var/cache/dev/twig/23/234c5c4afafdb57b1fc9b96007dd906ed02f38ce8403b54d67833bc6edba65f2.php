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
        $__internal_6f1975594291d8c3808a2d1a454034f72264a60fcef90dd32bca7fe9a9574639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f1975594291d8c3808a2d1a454034f72264a60fcef90dd32bca7fe9a9574639->enter($__internal_6f1975594291d8c3808a2d1a454034f72264a60fcef90dd32bca7fe9a9574639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_140f52cda5031433c5769ce499741c282c81b75bbeb14f04ee7a85340372e9d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_140f52cda5031433c5769ce499741c282c81b75bbeb14f04ee7a85340372e9d0->enter($__internal_140f52cda5031433c5769ce499741c282c81b75bbeb14f04ee7a85340372e9d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6f1975594291d8c3808a2d1a454034f72264a60fcef90dd32bca7fe9a9574639->leave($__internal_6f1975594291d8c3808a2d1a454034f72264a60fcef90dd32bca7fe9a9574639_prof);

        
        $__internal_140f52cda5031433c5769ce499741c282c81b75bbeb14f04ee7a85340372e9d0->leave($__internal_140f52cda5031433c5769ce499741c282c81b75bbeb14f04ee7a85340372e9d0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_133e6d613925e4c201ee248287029175b278a580be86d97753e4e36647e2783d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_133e6d613925e4c201ee248287029175b278a580be86d97753e4e36647e2783d->enter($__internal_133e6d613925e4c201ee248287029175b278a580be86d97753e4e36647e2783d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5e39beec89ed37a7e767feeb63fdf30b6dcb5f1a08329afb7318fd98580cd8ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e39beec89ed37a7e767feeb63fdf30b6dcb5f1a08329afb7318fd98580cd8ba->enter($__internal_5e39beec89ed37a7e767feeb63fdf30b6dcb5f1a08329afb7318fd98580cd8ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5e39beec89ed37a7e767feeb63fdf30b6dcb5f1a08329afb7318fd98580cd8ba->leave($__internal_5e39beec89ed37a7e767feeb63fdf30b6dcb5f1a08329afb7318fd98580cd8ba_prof);

        
        $__internal_133e6d613925e4c201ee248287029175b278a580be86d97753e4e36647e2783d->leave($__internal_133e6d613925e4c201ee248287029175b278a580be86d97753e4e36647e2783d_prof);

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
