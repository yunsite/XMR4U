<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_cfc07113213cf3e168cca407e710e7c3bc330c88bdcb047e63bb431c6ff6b7bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6eb8842dc6559ce82b87a10687dffb13ef18cb0c8e18ae3c69d3d725b288c5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6eb8842dc6559ce82b87a10687dffb13ef18cb0c8e18ae3c69d3d725b288c5e->enter($__internal_a6eb8842dc6559ce82b87a10687dffb13ef18cb0c8e18ae3c69d3d725b288c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_d5a7f7ed8f7a31416f6cefbe25f064c8a7f14197a6236b07d9d6e0fe85c8a3b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5a7f7ed8f7a31416f6cefbe25f064c8a7f14197a6236b07d9d6e0fe85c8a3b1->enter($__internal_d5a7f7ed8f7a31416f6cefbe25f064c8a7f14197a6236b07d9d6e0fe85c8a3b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6eb8842dc6559ce82b87a10687dffb13ef18cb0c8e18ae3c69d3d725b288c5e->leave($__internal_a6eb8842dc6559ce82b87a10687dffb13ef18cb0c8e18ae3c69d3d725b288c5e_prof);

        
        $__internal_d5a7f7ed8f7a31416f6cefbe25f064c8a7f14197a6236b07d9d6e0fe85c8a3b1->leave($__internal_d5a7f7ed8f7a31416f6cefbe25f064c8a7f14197a6236b07d9d6e0fe85c8a3b1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_04fd6e32368eb188c192fb55134cd535e66cc00cefb7bb694581b50e0542af64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04fd6e32368eb188c192fb55134cd535e66cc00cefb7bb694581b50e0542af64->enter($__internal_04fd6e32368eb188c192fb55134cd535e66cc00cefb7bb694581b50e0542af64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a99cc7321ee0506d74eda611fddfc722235972027944fba72b243d8788e040a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a99cc7321ee0506d74eda611fddfc722235972027944fba72b243d8788e040a0->enter($__internal_a99cc7321ee0506d74eda611fddfc722235972027944fba72b243d8788e040a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_a99cc7321ee0506d74eda611fddfc722235972027944fba72b243d8788e040a0->leave($__internal_a99cc7321ee0506d74eda611fddfc722235972027944fba72b243d8788e040a0_prof);

        
        $__internal_04fd6e32368eb188c192fb55134cd535e66cc00cefb7bb694581b50e0542af64->leave($__internal_04fd6e32368eb188c192fb55134cd535e66cc00cefb7bb694581b50e0542af64_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/Slote/Desktop/XMR4U/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
