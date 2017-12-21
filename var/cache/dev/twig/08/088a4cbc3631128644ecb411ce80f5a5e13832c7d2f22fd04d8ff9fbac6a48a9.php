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
        $__internal_e1f3c5acc072fccfa0c58df8ac08ea67ecdf835b46be51e322b80b4a873e5301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1f3c5acc072fccfa0c58df8ac08ea67ecdf835b46be51e322b80b4a873e5301->enter($__internal_e1f3c5acc072fccfa0c58df8ac08ea67ecdf835b46be51e322b80b4a873e5301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b992b2e438a29c3278ba4742334ab72eba1abdd2e3993e16684629e6f5b2c4c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b992b2e438a29c3278ba4742334ab72eba1abdd2e3993e16684629e6f5b2c4c3->enter($__internal_b992b2e438a29c3278ba4742334ab72eba1abdd2e3993e16684629e6f5b2c4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1f3c5acc072fccfa0c58df8ac08ea67ecdf835b46be51e322b80b4a873e5301->leave($__internal_e1f3c5acc072fccfa0c58df8ac08ea67ecdf835b46be51e322b80b4a873e5301_prof);

        
        $__internal_b992b2e438a29c3278ba4742334ab72eba1abdd2e3993e16684629e6f5b2c4c3->leave($__internal_b992b2e438a29c3278ba4742334ab72eba1abdd2e3993e16684629e6f5b2c4c3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1827d44a0508115219c848fad3db6b4a96d852497835eca3340d42371e4d3474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1827d44a0508115219c848fad3db6b4a96d852497835eca3340d42371e4d3474->enter($__internal_1827d44a0508115219c848fad3db6b4a96d852497835eca3340d42371e4d3474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f7b342c79afc795496c9ead4c4dc48577f5d9276b56ed8c08c83e44a59d1fd83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7b342c79afc795496c9ead4c4dc48577f5d9276b56ed8c08c83e44a59d1fd83->enter($__internal_f7b342c79afc795496c9ead4c4dc48577f5d9276b56ed8c08c83e44a59d1fd83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f7b342c79afc795496c9ead4c4dc48577f5d9276b56ed8c08c83e44a59d1fd83->leave($__internal_f7b342c79afc795496c9ead4c4dc48577f5d9276b56ed8c08c83e44a59d1fd83_prof);

        
        $__internal_1827d44a0508115219c848fad3db6b4a96d852497835eca3340d42371e4d3474->leave($__internal_1827d44a0508115219c848fad3db6b4a96d852497835eca3340d42371e4d3474_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fbec45b41d4e412e9300c74ac63329bd7ea9206591e481f160f4e5ecf317919c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbec45b41d4e412e9300c74ac63329bd7ea9206591e481f160f4e5ecf317919c->enter($__internal_fbec45b41d4e412e9300c74ac63329bd7ea9206591e481f160f4e5ecf317919c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b45a43e7dc29c4529b635e7b4802aa8280f31513d29fec3cd34f03917ae84b0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b45a43e7dc29c4529b635e7b4802aa8280f31513d29fec3cd34f03917ae84b0b->enter($__internal_b45a43e7dc29c4529b635e7b4802aa8280f31513d29fec3cd34f03917ae84b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b45a43e7dc29c4529b635e7b4802aa8280f31513d29fec3cd34f03917ae84b0b->leave($__internal_b45a43e7dc29c4529b635e7b4802aa8280f31513d29fec3cd34f03917ae84b0b_prof);

        
        $__internal_fbec45b41d4e412e9300c74ac63329bd7ea9206591e481f160f4e5ecf317919c->leave($__internal_fbec45b41d4e412e9300c74ac63329bd7ea9206591e481f160f4e5ecf317919c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_55ae17bc1ca9badcc57ef53f12a65441c398aa279a9fd1276e399eba174ecb41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55ae17bc1ca9badcc57ef53f12a65441c398aa279a9fd1276e399eba174ecb41->enter($__internal_55ae17bc1ca9badcc57ef53f12a65441c398aa279a9fd1276e399eba174ecb41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7f5ad59b3a25fff37877c3ec894975d6f72f22fda712702effd46251f26acbfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f5ad59b3a25fff37877c3ec894975d6f72f22fda712702effd46251f26acbfe->enter($__internal_7f5ad59b3a25fff37877c3ec894975d6f72f22fda712702effd46251f26acbfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_7f5ad59b3a25fff37877c3ec894975d6f72f22fda712702effd46251f26acbfe->leave($__internal_7f5ad59b3a25fff37877c3ec894975d6f72f22fda712702effd46251f26acbfe_prof);

        
        $__internal_55ae17bc1ca9badcc57ef53f12a65441c398aa279a9fd1276e399eba174ecb41->leave($__internal_55ae17bc1ca9badcc57ef53f12a65441c398aa279a9fd1276e399eba174ecb41_prof);

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
