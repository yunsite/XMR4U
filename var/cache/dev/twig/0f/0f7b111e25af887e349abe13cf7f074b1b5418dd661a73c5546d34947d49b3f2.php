<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_555f33d4227e04afc9840aee189116b8ddc7b562ccd5deb78509d72f01ae5c28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_82555f12b6f80883f0e1a94300a2b7ee72bc81595abe52d83f197888f0994702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82555f12b6f80883f0e1a94300a2b7ee72bc81595abe52d83f197888f0994702->enter($__internal_82555f12b6f80883f0e1a94300a2b7ee72bc81595abe52d83f197888f0994702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4a5a6d356cd5c78df271ea0adc6f27759e6ec2115bc08adae92fd6deb898c053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a5a6d356cd5c78df271ea0adc6f27759e6ec2115bc08adae92fd6deb898c053->enter($__internal_4a5a6d356cd5c78df271ea0adc6f27759e6ec2115bc08adae92fd6deb898c053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82555f12b6f80883f0e1a94300a2b7ee72bc81595abe52d83f197888f0994702->leave($__internal_82555f12b6f80883f0e1a94300a2b7ee72bc81595abe52d83f197888f0994702_prof);

        
        $__internal_4a5a6d356cd5c78df271ea0adc6f27759e6ec2115bc08adae92fd6deb898c053->leave($__internal_4a5a6d356cd5c78df271ea0adc6f27759e6ec2115bc08adae92fd6deb898c053_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_56a891d181e1b911a7814c06d343c0bdeb5c7a922a4be9dde7d04c37c45cae22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56a891d181e1b911a7814c06d343c0bdeb5c7a922a4be9dde7d04c37c45cae22->enter($__internal_56a891d181e1b911a7814c06d343c0bdeb5c7a922a4be9dde7d04c37c45cae22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_749c43c9fa480c4cd760680dba38b57d8cf65c2ebb629999d6cc77db6d6530a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_749c43c9fa480c4cd760680dba38b57d8cf65c2ebb629999d6cc77db6d6530a4->enter($__internal_749c43c9fa480c4cd760680dba38b57d8cf65c2ebb629999d6cc77db6d6530a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_749c43c9fa480c4cd760680dba38b57d8cf65c2ebb629999d6cc77db6d6530a4->leave($__internal_749c43c9fa480c4cd760680dba38b57d8cf65c2ebb629999d6cc77db6d6530a4_prof);

        
        $__internal_56a891d181e1b911a7814c06d343c0bdeb5c7a922a4be9dde7d04c37c45cae22->leave($__internal_56a891d181e1b911a7814c06d343c0bdeb5c7a922a4be9dde7d04c37c45cae22_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a55b1df007a0993e2b221703ee15e17c8c2a559e52ffc42ddbeff412ef870d78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a55b1df007a0993e2b221703ee15e17c8c2a559e52ffc42ddbeff412ef870d78->enter($__internal_a55b1df007a0993e2b221703ee15e17c8c2a559e52ffc42ddbeff412ef870d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c1d9f5fac7f3ad96f614bb5aa46a338672937c3e0cd4dbc9b689c64d4813025a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1d9f5fac7f3ad96f614bb5aa46a338672937c3e0cd4dbc9b689c64d4813025a->enter($__internal_c1d9f5fac7f3ad96f614bb5aa46a338672937c3e0cd4dbc9b689c64d4813025a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c1d9f5fac7f3ad96f614bb5aa46a338672937c3e0cd4dbc9b689c64d4813025a->leave($__internal_c1d9f5fac7f3ad96f614bb5aa46a338672937c3e0cd4dbc9b689c64d4813025a_prof);

        
        $__internal_a55b1df007a0993e2b221703ee15e17c8c2a559e52ffc42ddbeff412ef870d78->leave($__internal_a55b1df007a0993e2b221703ee15e17c8c2a559e52ffc42ddbeff412ef870d78_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_79333efa3c905f25101dd7f66328761453b8d95ff3f76c3a0e9419de6e2460a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79333efa3c905f25101dd7f66328761453b8d95ff3f76c3a0e9419de6e2460a4->enter($__internal_79333efa3c905f25101dd7f66328761453b8d95ff3f76c3a0e9419de6e2460a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c715e45bd10b34a89435ff65e2b5885df0aa5aa5f8cd17f29ffd5d56dba489bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c715e45bd10b34a89435ff65e2b5885df0aa5aa5f8cd17f29ffd5d56dba489bb->enter($__internal_c715e45bd10b34a89435ff65e2b5885df0aa5aa5f8cd17f29ffd5d56dba489bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_c715e45bd10b34a89435ff65e2b5885df0aa5aa5f8cd17f29ffd5d56dba489bb->leave($__internal_c715e45bd10b34a89435ff65e2b5885df0aa5aa5f8cd17f29ffd5d56dba489bb_prof);

        
        $__internal_79333efa3c905f25101dd7f66328761453b8d95ff3f76c3a0e9419de6e2460a4->leave($__internal_79333efa3c905f25101dd7f66328761453b8d95ff3f76c3a0e9419de6e2460a4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/Slote/Desktop/XMR4U/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
