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
        $__internal_693b65bdd3ac6a0d2e917e441f16fdac0df9a70f2d81ecc71cb8930b8f8cb009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_693b65bdd3ac6a0d2e917e441f16fdac0df9a70f2d81ecc71cb8930b8f8cb009->enter($__internal_693b65bdd3ac6a0d2e917e441f16fdac0df9a70f2d81ecc71cb8930b8f8cb009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_c1471ce3e0d78e2d1daa5b5c1860f5d03d9f72acc965a717d1d6fced5046339d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1471ce3e0d78e2d1daa5b5c1860f5d03d9f72acc965a717d1d6fced5046339d->enter($__internal_c1471ce3e0d78e2d1daa5b5c1860f5d03d9f72acc965a717d1d6fced5046339d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_693b65bdd3ac6a0d2e917e441f16fdac0df9a70f2d81ecc71cb8930b8f8cb009->leave($__internal_693b65bdd3ac6a0d2e917e441f16fdac0df9a70f2d81ecc71cb8930b8f8cb009_prof);

        
        $__internal_c1471ce3e0d78e2d1daa5b5c1860f5d03d9f72acc965a717d1d6fced5046339d->leave($__internal_c1471ce3e0d78e2d1daa5b5c1860f5d03d9f72acc965a717d1d6fced5046339d_prof);

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
