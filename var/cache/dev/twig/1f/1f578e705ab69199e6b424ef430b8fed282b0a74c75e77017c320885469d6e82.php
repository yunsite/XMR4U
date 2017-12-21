<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_a8f138a197c5704d510a97f899a730bc6981de3a963de77bb8330a33b7a33e4c extends Twig_Template
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
        $__internal_babe55bd333d8388a7e99c9821f3d94664049a3f2317d73075f80463807db0e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_babe55bd333d8388a7e99c9821f3d94664049a3f2317d73075f80463807db0e1->enter($__internal_babe55bd333d8388a7e99c9821f3d94664049a3f2317d73075f80463807db0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_9f3def540623e91c67604098f761831eb2795398cdab0c47e958cdd151ded1b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f3def540623e91c67604098f761831eb2795398cdab0c47e958cdd151ded1b2->enter($__internal_9f3def540623e91c67604098f761831eb2795398cdab0c47e958cdd151ded1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_babe55bd333d8388a7e99c9821f3d94664049a3f2317d73075f80463807db0e1->leave($__internal_babe55bd333d8388a7e99c9821f3d94664049a3f2317d73075f80463807db0e1_prof);

        
        $__internal_9f3def540623e91c67604098f761831eb2795398cdab0c47e958cdd151ded1b2->leave($__internal_9f3def540623e91c67604098f761831eb2795398cdab0c47e958cdd151ded1b2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/var/www/miner/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/header.html.twig");
    }
}
