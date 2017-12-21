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
        $__internal_77f1e5d97c45845552db0d4732a088eabc4ad86990c74b1b8ef9bc87b7704082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77f1e5d97c45845552db0d4732a088eabc4ad86990c74b1b8ef9bc87b7704082->enter($__internal_77f1e5d97c45845552db0d4732a088eabc4ad86990c74b1b8ef9bc87b7704082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_7a9dc1af592e17cfb529e0f20540c73e5336aee9e614c53045fc1934ac67dc96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a9dc1af592e17cfb529e0f20540c73e5336aee9e614c53045fc1934ac67dc96->enter($__internal_7a9dc1af592e17cfb529e0f20540c73e5336aee9e614c53045fc1934ac67dc96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77f1e5d97c45845552db0d4732a088eabc4ad86990c74b1b8ef9bc87b7704082->leave($__internal_77f1e5d97c45845552db0d4732a088eabc4ad86990c74b1b8ef9bc87b7704082_prof);

        
        $__internal_7a9dc1af592e17cfb529e0f20540c73e5336aee9e614c53045fc1934ac67dc96->leave($__internal_7a9dc1af592e17cfb529e0f20540c73e5336aee9e614c53045fc1934ac67dc96_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0114de4a593bfcd30ae5019278f9d77f9a321f203fb385f27ce75f44c4ee7aeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0114de4a593bfcd30ae5019278f9d77f9a321f203fb385f27ce75f44c4ee7aeb->enter($__internal_0114de4a593bfcd30ae5019278f9d77f9a321f203fb385f27ce75f44c4ee7aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_50c4a96fea8c8eeb63a5b1d52c22b8b497bfccbd9bf6deb1917f13e2884a855a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50c4a96fea8c8eeb63a5b1d52c22b8b497bfccbd9bf6deb1917f13e2884a855a->enter($__internal_50c4a96fea8c8eeb63a5b1d52c22b8b497bfccbd9bf6deb1917f13e2884a855a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_50c4a96fea8c8eeb63a5b1d52c22b8b497bfccbd9bf6deb1917f13e2884a855a->leave($__internal_50c4a96fea8c8eeb63a5b1d52c22b8b497bfccbd9bf6deb1917f13e2884a855a_prof);

        
        $__internal_0114de4a593bfcd30ae5019278f9d77f9a321f203fb385f27ce75f44c4ee7aeb->leave($__internal_0114de4a593bfcd30ae5019278f9d77f9a321f203fb385f27ce75f44c4ee7aeb_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/miner/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
