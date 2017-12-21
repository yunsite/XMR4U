<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_72110e5f0bba06217c0a6d6d6d7cb309dd7f143e1d8da54c92130a8678d6eae2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ebb220ac36bc05a00454059f534b35ac8926a14c61eefef677e7423ebc1c45f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ebb220ac36bc05a00454059f534b35ac8926a14c61eefef677e7423ebc1c45f->enter($__internal_6ebb220ac36bc05a00454059f534b35ac8926a14c61eefef677e7423ebc1c45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0c39f45e2aecfc94653f126ed431dff2953f39383de42842d31ee899a96aea8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c39f45e2aecfc94653f126ed431dff2953f39383de42842d31ee899a96aea8b->enter($__internal_0c39f45e2aecfc94653f126ed431dff2953f39383de42842d31ee899a96aea8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ebb220ac36bc05a00454059f534b35ac8926a14c61eefef677e7423ebc1c45f->leave($__internal_6ebb220ac36bc05a00454059f534b35ac8926a14c61eefef677e7423ebc1c45f_prof);

        
        $__internal_0c39f45e2aecfc94653f126ed431dff2953f39383de42842d31ee899a96aea8b->leave($__internal_0c39f45e2aecfc94653f126ed431dff2953f39383de42842d31ee899a96aea8b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_06e2b02ed5090e47e28807ad2294aac7c1d1c80fb65b6016f705c1d7835844e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06e2b02ed5090e47e28807ad2294aac7c1d1c80fb65b6016f705c1d7835844e2->enter($__internal_06e2b02ed5090e47e28807ad2294aac7c1d1c80fb65b6016f705c1d7835844e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3bddbc47b10b2d72342a0e97b895ddfcfef15a5305824b9a61e52d3df42f7869 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bddbc47b10b2d72342a0e97b895ddfcfef15a5305824b9a61e52d3df42f7869->enter($__internal_3bddbc47b10b2d72342a0e97b895ddfcfef15a5305824b9a61e52d3df42f7869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_3bddbc47b10b2d72342a0e97b895ddfcfef15a5305824b9a61e52d3df42f7869->leave($__internal_3bddbc47b10b2d72342a0e97b895ddfcfef15a5305824b9a61e52d3df42f7869_prof);

        
        $__internal_06e2b02ed5090e47e28807ad2294aac7c1d1c80fb65b6016f705c1d7835844e2->leave($__internal_06e2b02ed5090e47e28807ad2294aac7c1d1c80fb65b6016f705c1d7835844e2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b1fb09c194cca70a628d6102e90114b268d4aac0817f5f958c82a8ec1dc2b2de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1fb09c194cca70a628d6102e90114b268d4aac0817f5f958c82a8ec1dc2b2de->enter($__internal_b1fb09c194cca70a628d6102e90114b268d4aac0817f5f958c82a8ec1dc2b2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_41bcc9d41e8ab5aed5d81ad94b4b30ddf48083fecb9f784726fed0d941b308c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41bcc9d41e8ab5aed5d81ad94b4b30ddf48083fecb9f784726fed0d941b308c7->enter($__internal_41bcc9d41e8ab5aed5d81ad94b4b30ddf48083fecb9f784726fed0d941b308c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_41bcc9d41e8ab5aed5d81ad94b4b30ddf48083fecb9f784726fed0d941b308c7->leave($__internal_41bcc9d41e8ab5aed5d81ad94b4b30ddf48083fecb9f784726fed0d941b308c7_prof);

        
        $__internal_b1fb09c194cca70a628d6102e90114b268d4aac0817f5f958c82a8ec1dc2b2de->leave($__internal_b1fb09c194cca70a628d6102e90114b268d4aac0817f5f958c82a8ec1dc2b2de_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_675820397c0c0f6958e2fb2547c7cd9291254259cd4e9e5ad80eb5fe6949a7b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_675820397c0c0f6958e2fb2547c7cd9291254259cd4e9e5ad80eb5fe6949a7b4->enter($__internal_675820397c0c0f6958e2fb2547c7cd9291254259cd4e9e5ad80eb5fe6949a7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d2114c39f892b0bf581dffb8d274853bde16d4128d77fd15ecf4c7fd82f539d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2114c39f892b0bf581dffb8d274853bde16d4128d77fd15ecf4c7fd82f539d6->enter($__internal_d2114c39f892b0bf581dffb8d274853bde16d4128d77fd15ecf4c7fd82f539d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_d2114c39f892b0bf581dffb8d274853bde16d4128d77fd15ecf4c7fd82f539d6->leave($__internal_d2114c39f892b0bf581dffb8d274853bde16d4128d77fd15ecf4c7fd82f539d6_prof);

        
        $__internal_675820397c0c0f6958e2fb2547c7cd9291254259cd4e9e5ad80eb5fe6949a7b4->leave($__internal_675820397c0c0f6958e2fb2547c7cd9291254259cd4e9e5ad80eb5fe6949a7b4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/Slote/Desktop/XMR4U/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
