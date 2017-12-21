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
        $__internal_c7a8e608add2bb0453e2bcf4b56de053a5cb63ca2020429faf3d9b3793303694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7a8e608add2bb0453e2bcf4b56de053a5cb63ca2020429faf3d9b3793303694->enter($__internal_c7a8e608add2bb0453e2bcf4b56de053a5cb63ca2020429faf3d9b3793303694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_d8dad33d78e2e873cf6cc32cef9b4a0f53def3482adeb33b6762de024bf6749a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8dad33d78e2e873cf6cc32cef9b4a0f53def3482adeb33b6762de024bf6749a->enter($__internal_d8dad33d78e2e873cf6cc32cef9b4a0f53def3482adeb33b6762de024bf6749a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_c7a8e608add2bb0453e2bcf4b56de053a5cb63ca2020429faf3d9b3793303694->leave($__internal_c7a8e608add2bb0453e2bcf4b56de053a5cb63ca2020429faf3d9b3793303694_prof);

        
        $__internal_d8dad33d78e2e873cf6cc32cef9b4a0f53def3482adeb33b6762de024bf6749a->leave($__internal_d8dad33d78e2e873cf6cc32cef9b4a0f53def3482adeb33b6762de024bf6749a_prof);

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
