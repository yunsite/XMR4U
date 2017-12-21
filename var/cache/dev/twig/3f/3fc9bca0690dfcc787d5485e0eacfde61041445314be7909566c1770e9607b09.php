<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_a45ebb145ec525eec16e5d196e0de99a22c68b19936713d78882c2acb4fbe52d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6c61f84cd14153d150040ca34cdbaa32cf1dc59ad793f13617665e84a2f407d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6c61f84cd14153d150040ca34cdbaa32cf1dc59ad793f13617665e84a2f407d->enter($__internal_b6c61f84cd14153d150040ca34cdbaa32cf1dc59ad793f13617665e84a2f407d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_b7c173f66460219a28f6ffaea5ff8b60d10f4e705b876c9cb76a3b836b0593c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7c173f66460219a28f6ffaea5ff8b60d10f4e705b876c9cb76a3b836b0593c6->enter($__internal_b7c173f66460219a28f6ffaea5ff8b60d10f4e705b876c9cb76a3b836b0593c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6c61f84cd14153d150040ca34cdbaa32cf1dc59ad793f13617665e84a2f407d->leave($__internal_b6c61f84cd14153d150040ca34cdbaa32cf1dc59ad793f13617665e84a2f407d_prof);

        
        $__internal_b7c173f66460219a28f6ffaea5ff8b60d10f4e705b876c9cb76a3b836b0593c6->leave($__internal_b7c173f66460219a28f6ffaea5ff8b60d10f4e705b876c9cb76a3b836b0593c6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_afe5a4f4094cf2edcf5c69b84d0c5eab99b29c15be05fa0e17388fb3c2de132c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afe5a4f4094cf2edcf5c69b84d0c5eab99b29c15be05fa0e17388fb3c2de132c->enter($__internal_afe5a4f4094cf2edcf5c69b84d0c5eab99b29c15be05fa0e17388fb3c2de132c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7d0365a2e06c87a2ddd5d881288c0654b96489ab716a84591b51da5a45b98264 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d0365a2e06c87a2ddd5d881288c0654b96489ab716a84591b51da5a45b98264->enter($__internal_7d0365a2e06c87a2ddd5d881288c0654b96489ab716a84591b51da5a45b98264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7d0365a2e06c87a2ddd5d881288c0654b96489ab716a84591b51da5a45b98264->leave($__internal_7d0365a2e06c87a2ddd5d881288c0654b96489ab716a84591b51da5a45b98264_prof);

        
        $__internal_afe5a4f4094cf2edcf5c69b84d0c5eab99b29c15be05fa0e17388fb3c2de132c->leave($__internal_afe5a4f4094cf2edcf5c69b84d0c5eab99b29c15be05fa0e17388fb3c2de132c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6a7793701446f62d650e8b87a4a094b3ccaff5a1d867e3179c0170961c5c36d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6a7793701446f62d650e8b87a4a094b3ccaff5a1d867e3179c0170961c5c36d->enter($__internal_d6a7793701446f62d650e8b87a4a094b3ccaff5a1d867e3179c0170961c5c36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_da31bf77a68ee24cd82346ed4fdcb1423268b1cda74976285bd264a05d24fc90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da31bf77a68ee24cd82346ed4fdcb1423268b1cda74976285bd264a05d24fc90->enter($__internal_da31bf77a68ee24cd82346ed4fdcb1423268b1cda74976285bd264a05d24fc90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_da31bf77a68ee24cd82346ed4fdcb1423268b1cda74976285bd264a05d24fc90->leave($__internal_da31bf77a68ee24cd82346ed4fdcb1423268b1cda74976285bd264a05d24fc90_prof);

        
        $__internal_d6a7793701446f62d650e8b87a4a094b3ccaff5a1d867e3179c0170961c5c36d->leave($__internal_d6a7793701446f62d650e8b87a4a094b3ccaff5a1d867e3179c0170961c5c36d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/Users/Slote/Desktop/XMR4U/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
