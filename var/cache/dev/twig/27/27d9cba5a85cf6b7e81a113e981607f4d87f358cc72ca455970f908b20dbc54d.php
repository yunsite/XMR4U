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
        $__internal_22ce73c71bc202743ab7181a182ed9602ea912f69010217367b112007fcc1e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22ce73c71bc202743ab7181a182ed9602ea912f69010217367b112007fcc1e1f->enter($__internal_22ce73c71bc202743ab7181a182ed9602ea912f69010217367b112007fcc1e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_0b0afbc2ebcfaffec3103bedce7c19a13aabb671a3f065e793d7d16264f03380 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b0afbc2ebcfaffec3103bedce7c19a13aabb671a3f065e793d7d16264f03380->enter($__internal_0b0afbc2ebcfaffec3103bedce7c19a13aabb671a3f065e793d7d16264f03380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22ce73c71bc202743ab7181a182ed9602ea912f69010217367b112007fcc1e1f->leave($__internal_22ce73c71bc202743ab7181a182ed9602ea912f69010217367b112007fcc1e1f_prof);

        
        $__internal_0b0afbc2ebcfaffec3103bedce7c19a13aabb671a3f065e793d7d16264f03380->leave($__internal_0b0afbc2ebcfaffec3103bedce7c19a13aabb671a3f065e793d7d16264f03380_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c6ccb70b9d30e78d992dbbc89b96c2804e42479b9b01add9d8f0a46836895057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6ccb70b9d30e78d992dbbc89b96c2804e42479b9b01add9d8f0a46836895057->enter($__internal_c6ccb70b9d30e78d992dbbc89b96c2804e42479b9b01add9d8f0a46836895057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4eb6ee99d7c1c8a064e6beefc7c3535c3993867f574ca38f2cee419bf279ea87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eb6ee99d7c1c8a064e6beefc7c3535c3993867f574ca38f2cee419bf279ea87->enter($__internal_4eb6ee99d7c1c8a064e6beefc7c3535c3993867f574ca38f2cee419bf279ea87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_4eb6ee99d7c1c8a064e6beefc7c3535c3993867f574ca38f2cee419bf279ea87->leave($__internal_4eb6ee99d7c1c8a064e6beefc7c3535c3993867f574ca38f2cee419bf279ea87_prof);

        
        $__internal_c6ccb70b9d30e78d992dbbc89b96c2804e42479b9b01add9d8f0a46836895057->leave($__internal_c6ccb70b9d30e78d992dbbc89b96c2804e42479b9b01add9d8f0a46836895057_prof);

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
