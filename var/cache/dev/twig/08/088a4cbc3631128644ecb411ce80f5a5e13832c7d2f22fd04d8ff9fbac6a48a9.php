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
        $__internal_4047836aac70b4178372f6a671ef5085717944069b504883d2eaad308ac29911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4047836aac70b4178372f6a671ef5085717944069b504883d2eaad308ac29911->enter($__internal_4047836aac70b4178372f6a671ef5085717944069b504883d2eaad308ac29911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9c5bd62a0b082a37de6ea27c2e65d56d897483162b63c95b7f172a268714eecc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c5bd62a0b082a37de6ea27c2e65d56d897483162b63c95b7f172a268714eecc->enter($__internal_9c5bd62a0b082a37de6ea27c2e65d56d897483162b63c95b7f172a268714eecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4047836aac70b4178372f6a671ef5085717944069b504883d2eaad308ac29911->leave($__internal_4047836aac70b4178372f6a671ef5085717944069b504883d2eaad308ac29911_prof);

        
        $__internal_9c5bd62a0b082a37de6ea27c2e65d56d897483162b63c95b7f172a268714eecc->leave($__internal_9c5bd62a0b082a37de6ea27c2e65d56d897483162b63c95b7f172a268714eecc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fd0f2fa9b3841624830d4e29fba2b22826719f0ff30660872d0ffe3a9ca08fb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd0f2fa9b3841624830d4e29fba2b22826719f0ff30660872d0ffe3a9ca08fb1->enter($__internal_fd0f2fa9b3841624830d4e29fba2b22826719f0ff30660872d0ffe3a9ca08fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f5060f2ea6a77eb3f139ab2ddcab0e0ffdcc292df7d4737431008e79fa4e898c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5060f2ea6a77eb3f139ab2ddcab0e0ffdcc292df7d4737431008e79fa4e898c->enter($__internal_f5060f2ea6a77eb3f139ab2ddcab0e0ffdcc292df7d4737431008e79fa4e898c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f5060f2ea6a77eb3f139ab2ddcab0e0ffdcc292df7d4737431008e79fa4e898c->leave($__internal_f5060f2ea6a77eb3f139ab2ddcab0e0ffdcc292df7d4737431008e79fa4e898c_prof);

        
        $__internal_fd0f2fa9b3841624830d4e29fba2b22826719f0ff30660872d0ffe3a9ca08fb1->leave($__internal_fd0f2fa9b3841624830d4e29fba2b22826719f0ff30660872d0ffe3a9ca08fb1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7c80d85b8b2708008159dd628143e1f632ce1c5e76f1f87f1edfc339fb2fa0f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c80d85b8b2708008159dd628143e1f632ce1c5e76f1f87f1edfc339fb2fa0f0->enter($__internal_7c80d85b8b2708008159dd628143e1f632ce1c5e76f1f87f1edfc339fb2fa0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2be93a4e83003570b19aa405b750530e26337ee7e15a961cdd69bf5d2aebd3e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2be93a4e83003570b19aa405b750530e26337ee7e15a961cdd69bf5d2aebd3e3->enter($__internal_2be93a4e83003570b19aa405b750530e26337ee7e15a961cdd69bf5d2aebd3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_2be93a4e83003570b19aa405b750530e26337ee7e15a961cdd69bf5d2aebd3e3->leave($__internal_2be93a4e83003570b19aa405b750530e26337ee7e15a961cdd69bf5d2aebd3e3_prof);

        
        $__internal_7c80d85b8b2708008159dd628143e1f632ce1c5e76f1f87f1edfc339fb2fa0f0->leave($__internal_7c80d85b8b2708008159dd628143e1f632ce1c5e76f1f87f1edfc339fb2fa0f0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_50ee6d0d3ec73ccd07625ad94cd25b1931ad2807ff211468ccc900a18539aeb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50ee6d0d3ec73ccd07625ad94cd25b1931ad2807ff211468ccc900a18539aeb8->enter($__internal_50ee6d0d3ec73ccd07625ad94cd25b1931ad2807ff211468ccc900a18539aeb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d7653e8d26a8d7f34efb6a3a8b23a1bb7dde5380d821bf0591dc5e73b3092f66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7653e8d26a8d7f34efb6a3a8b23a1bb7dde5380d821bf0591dc5e73b3092f66->enter($__internal_d7653e8d26a8d7f34efb6a3a8b23a1bb7dde5380d821bf0591dc5e73b3092f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d7653e8d26a8d7f34efb6a3a8b23a1bb7dde5380d821bf0591dc5e73b3092f66->leave($__internal_d7653e8d26a8d7f34efb6a3a8b23a1bb7dde5380d821bf0591dc5e73b3092f66_prof);

        
        $__internal_50ee6d0d3ec73ccd07625ad94cd25b1931ad2807ff211468ccc900a18539aeb8->leave($__internal_50ee6d0d3ec73ccd07625ad94cd25b1931ad2807ff211468ccc900a18539aeb8_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/miner/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
