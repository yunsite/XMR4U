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
        $__internal_f77b80c076195ae2492a359d3a5ce92ca95d74bf261fd785d5a5521887a1f998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f77b80c076195ae2492a359d3a5ce92ca95d74bf261fd785d5a5521887a1f998->enter($__internal_f77b80c076195ae2492a359d3a5ce92ca95d74bf261fd785d5a5521887a1f998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_88fb19f4c1e2788d9b330daf74a982ac7d3f8eadd1303cb31bf06738a5450500 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88fb19f4c1e2788d9b330daf74a982ac7d3f8eadd1303cb31bf06738a5450500->enter($__internal_88fb19f4c1e2788d9b330daf74a982ac7d3f8eadd1303cb31bf06738a5450500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_f77b80c076195ae2492a359d3a5ce92ca95d74bf261fd785d5a5521887a1f998->leave($__internal_f77b80c076195ae2492a359d3a5ce92ca95d74bf261fd785d5a5521887a1f998_prof);

        
        $__internal_88fb19f4c1e2788d9b330daf74a982ac7d3f8eadd1303cb31bf06738a5450500->leave($__internal_88fb19f4c1e2788d9b330daf74a982ac7d3f8eadd1303cb31bf06738a5450500_prof);

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
", "@WebProfiler/Profiler/header.html.twig", "/Users/Slote/Desktop/XMR4U/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/header.html.twig");
    }
}
