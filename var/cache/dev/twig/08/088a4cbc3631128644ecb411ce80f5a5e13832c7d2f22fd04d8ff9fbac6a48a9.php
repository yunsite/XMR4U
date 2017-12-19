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
        $__internal_f5fa4d46394c90d344a7eb49c70f4ddc3c4dd2ba9da07c9b43c676d2ff446130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5fa4d46394c90d344a7eb49c70f4ddc3c4dd2ba9da07c9b43c676d2ff446130->enter($__internal_f5fa4d46394c90d344a7eb49c70f4ddc3c4dd2ba9da07c9b43c676d2ff446130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1f3c445a0db774ff04e5ea161fdd156bd208bcab9d308c1b9415393b54f410c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f3c445a0db774ff04e5ea161fdd156bd208bcab9d308c1b9415393b54f410c7->enter($__internal_1f3c445a0db774ff04e5ea161fdd156bd208bcab9d308c1b9415393b54f410c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5fa4d46394c90d344a7eb49c70f4ddc3c4dd2ba9da07c9b43c676d2ff446130->leave($__internal_f5fa4d46394c90d344a7eb49c70f4ddc3c4dd2ba9da07c9b43c676d2ff446130_prof);

        
        $__internal_1f3c445a0db774ff04e5ea161fdd156bd208bcab9d308c1b9415393b54f410c7->leave($__internal_1f3c445a0db774ff04e5ea161fdd156bd208bcab9d308c1b9415393b54f410c7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_56711f94935ab16b93e7e67290a301cd5f7b52963b9c9f357d926132dbe4fb6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56711f94935ab16b93e7e67290a301cd5f7b52963b9c9f357d926132dbe4fb6f->enter($__internal_56711f94935ab16b93e7e67290a301cd5f7b52963b9c9f357d926132dbe4fb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8a01426a355317487b12873c4cc631037e76b1f84fbadd715eda2eda06dc4ae6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a01426a355317487b12873c4cc631037e76b1f84fbadd715eda2eda06dc4ae6->enter($__internal_8a01426a355317487b12873c4cc631037e76b1f84fbadd715eda2eda06dc4ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8a01426a355317487b12873c4cc631037e76b1f84fbadd715eda2eda06dc4ae6->leave($__internal_8a01426a355317487b12873c4cc631037e76b1f84fbadd715eda2eda06dc4ae6_prof);

        
        $__internal_56711f94935ab16b93e7e67290a301cd5f7b52963b9c9f357d926132dbe4fb6f->leave($__internal_56711f94935ab16b93e7e67290a301cd5f7b52963b9c9f357d926132dbe4fb6f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2ac524a66d1876f1a13eca345531da3e3d7d2195dbea21555945a741a3581360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ac524a66d1876f1a13eca345531da3e3d7d2195dbea21555945a741a3581360->enter($__internal_2ac524a66d1876f1a13eca345531da3e3d7d2195dbea21555945a741a3581360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fa996064fe5f79059f18a0352d68c3af760440252c989ab5b685ca26658b10c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa996064fe5f79059f18a0352d68c3af760440252c989ab5b685ca26658b10c7->enter($__internal_fa996064fe5f79059f18a0352d68c3af760440252c989ab5b685ca26658b10c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_fa996064fe5f79059f18a0352d68c3af760440252c989ab5b685ca26658b10c7->leave($__internal_fa996064fe5f79059f18a0352d68c3af760440252c989ab5b685ca26658b10c7_prof);

        
        $__internal_2ac524a66d1876f1a13eca345531da3e3d7d2195dbea21555945a741a3581360->leave($__internal_2ac524a66d1876f1a13eca345531da3e3d7d2195dbea21555945a741a3581360_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cfe370b90234caa390c8140a62569ca8f86e71afda954ef8287772e6bb94194a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfe370b90234caa390c8140a62569ca8f86e71afda954ef8287772e6bb94194a->enter($__internal_cfe370b90234caa390c8140a62569ca8f86e71afda954ef8287772e6bb94194a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9195ce948c3c7448ac6a011b12d7a89b13c7740e85b3f0c8a3dca2bab696a4e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9195ce948c3c7448ac6a011b12d7a89b13c7740e85b3f0c8a3dca2bab696a4e6->enter($__internal_9195ce948c3c7448ac6a011b12d7a89b13c7740e85b3f0c8a3dca2bab696a4e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_9195ce948c3c7448ac6a011b12d7a89b13c7740e85b3f0c8a3dca2bab696a4e6->leave($__internal_9195ce948c3c7448ac6a011b12d7a89b13c7740e85b3f0c8a3dca2bab696a4e6_prof);

        
        $__internal_cfe370b90234caa390c8140a62569ca8f86e71afda954ef8287772e6bb94194a->leave($__internal_cfe370b90234caa390c8140a62569ca8f86e71afda954ef8287772e6bb94194a_prof);

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
