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
        $__internal_b1b0136dd1bbbced9837a4759db8be34afbb9b53f94a4dd3ef7536225b5b194e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1b0136dd1bbbced9837a4759db8be34afbb9b53f94a4dd3ef7536225b5b194e->enter($__internal_b1b0136dd1bbbced9837a4759db8be34afbb9b53f94a4dd3ef7536225b5b194e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_09f14dc04ff997bf193ef3710c9399ace57041cd640ea6772de86cc0fd9ea10f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09f14dc04ff997bf193ef3710c9399ace57041cd640ea6772de86cc0fd9ea10f->enter($__internal_09f14dc04ff997bf193ef3710c9399ace57041cd640ea6772de86cc0fd9ea10f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1b0136dd1bbbced9837a4759db8be34afbb9b53f94a4dd3ef7536225b5b194e->leave($__internal_b1b0136dd1bbbced9837a4759db8be34afbb9b53f94a4dd3ef7536225b5b194e_prof);

        
        $__internal_09f14dc04ff997bf193ef3710c9399ace57041cd640ea6772de86cc0fd9ea10f->leave($__internal_09f14dc04ff997bf193ef3710c9399ace57041cd640ea6772de86cc0fd9ea10f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f392add2de068b66262b13f65cf704c57165b1a3c18581c1b79c94468cb9f52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f392add2de068b66262b13f65cf704c57165b1a3c18581c1b79c94468cb9f52->enter($__internal_8f392add2de068b66262b13f65cf704c57165b1a3c18581c1b79c94468cb9f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f770fccac64268ef4952b6425f4430e205faec75bf7c037ecd787a7eda53e727 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f770fccac64268ef4952b6425f4430e205faec75bf7c037ecd787a7eda53e727->enter($__internal_f770fccac64268ef4952b6425f4430e205faec75bf7c037ecd787a7eda53e727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f770fccac64268ef4952b6425f4430e205faec75bf7c037ecd787a7eda53e727->leave($__internal_f770fccac64268ef4952b6425f4430e205faec75bf7c037ecd787a7eda53e727_prof);

        
        $__internal_8f392add2de068b66262b13f65cf704c57165b1a3c18581c1b79c94468cb9f52->leave($__internal_8f392add2de068b66262b13f65cf704c57165b1a3c18581c1b79c94468cb9f52_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3a024193d990759d60d0cf1a1ed14b3d46d696a825685e18edfc1c4a52afa65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a024193d990759d60d0cf1a1ed14b3d46d696a825685e18edfc1c4a52afa65->enter($__internal_f3a024193d990759d60d0cf1a1ed14b3d46d696a825685e18edfc1c4a52afa65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e443dd7d9d6f360bb68f7dacde38baf76c3cdf17aacb4615f2126c7052ce2387 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e443dd7d9d6f360bb68f7dacde38baf76c3cdf17aacb4615f2126c7052ce2387->enter($__internal_e443dd7d9d6f360bb68f7dacde38baf76c3cdf17aacb4615f2126c7052ce2387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e443dd7d9d6f360bb68f7dacde38baf76c3cdf17aacb4615f2126c7052ce2387->leave($__internal_e443dd7d9d6f360bb68f7dacde38baf76c3cdf17aacb4615f2126c7052ce2387_prof);

        
        $__internal_f3a024193d990759d60d0cf1a1ed14b3d46d696a825685e18edfc1c4a52afa65->leave($__internal_f3a024193d990759d60d0cf1a1ed14b3d46d696a825685e18edfc1c4a52afa65_prof);

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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/var/www/miner/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
