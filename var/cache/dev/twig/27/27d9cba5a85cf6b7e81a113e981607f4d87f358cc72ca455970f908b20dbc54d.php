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
        $__internal_6f7f1889bb2ea7ecdefd17664f1a27c0b5a4c366d4b0dbe3a3b9aa1454393157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f7f1889bb2ea7ecdefd17664f1a27c0b5a4c366d4b0dbe3a3b9aa1454393157->enter($__internal_6f7f1889bb2ea7ecdefd17664f1a27c0b5a4c366d4b0dbe3a3b9aa1454393157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_d6812bd528776cf377d1cc749d9aed552ffbd6da98105114f1a49f222c1f25a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6812bd528776cf377d1cc749d9aed552ffbd6da98105114f1a49f222c1f25a8->enter($__internal_d6812bd528776cf377d1cc749d9aed552ffbd6da98105114f1a49f222c1f25a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f7f1889bb2ea7ecdefd17664f1a27c0b5a4c366d4b0dbe3a3b9aa1454393157->leave($__internal_6f7f1889bb2ea7ecdefd17664f1a27c0b5a4c366d4b0dbe3a3b9aa1454393157_prof);

        
        $__internal_d6812bd528776cf377d1cc749d9aed552ffbd6da98105114f1a49f222c1f25a8->leave($__internal_d6812bd528776cf377d1cc749d9aed552ffbd6da98105114f1a49f222c1f25a8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ffcaeacfea1aca623d2acab9ed14039158646e774c19d1291a9fac6d07434102 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffcaeacfea1aca623d2acab9ed14039158646e774c19d1291a9fac6d07434102->enter($__internal_ffcaeacfea1aca623d2acab9ed14039158646e774c19d1291a9fac6d07434102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ee3d6c9637850d462cf25cdaad933f12194c96e0f30c38c324c5fe7a137b88d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee3d6c9637850d462cf25cdaad933f12194c96e0f30c38c324c5fe7a137b88d2->enter($__internal_ee3d6c9637850d462cf25cdaad933f12194c96e0f30c38c324c5fe7a137b88d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_ee3d6c9637850d462cf25cdaad933f12194c96e0f30c38c324c5fe7a137b88d2->leave($__internal_ee3d6c9637850d462cf25cdaad933f12194c96e0f30c38c324c5fe7a137b88d2_prof);

        
        $__internal_ffcaeacfea1aca623d2acab9ed14039158646e774c19d1291a9fac6d07434102->leave($__internal_ffcaeacfea1aca623d2acab9ed14039158646e774c19d1291a9fac6d07434102_prof);

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
