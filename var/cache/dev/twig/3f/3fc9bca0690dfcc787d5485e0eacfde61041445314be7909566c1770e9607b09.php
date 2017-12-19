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
        $__internal_bd63b57648ce9940227b2a7008bfd83f8db78ff9c088ccf9e41e2195712ff94e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd63b57648ce9940227b2a7008bfd83f8db78ff9c088ccf9e41e2195712ff94e->enter($__internal_bd63b57648ce9940227b2a7008bfd83f8db78ff9c088ccf9e41e2195712ff94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_f6f3eb41d7276b9c8e09c3ac364b6186a340b53194eb6b5afe6bfa712e37f67a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6f3eb41d7276b9c8e09c3ac364b6186a340b53194eb6b5afe6bfa712e37f67a->enter($__internal_f6f3eb41d7276b9c8e09c3ac364b6186a340b53194eb6b5afe6bfa712e37f67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd63b57648ce9940227b2a7008bfd83f8db78ff9c088ccf9e41e2195712ff94e->leave($__internal_bd63b57648ce9940227b2a7008bfd83f8db78ff9c088ccf9e41e2195712ff94e_prof);

        
        $__internal_f6f3eb41d7276b9c8e09c3ac364b6186a340b53194eb6b5afe6bfa712e37f67a->leave($__internal_f6f3eb41d7276b9c8e09c3ac364b6186a340b53194eb6b5afe6bfa712e37f67a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f4cc3d4f4ca360c947b536c626aa1c1ffca4c3cce38b017e12f95a3128c9973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f4cc3d4f4ca360c947b536c626aa1c1ffca4c3cce38b017e12f95a3128c9973->enter($__internal_9f4cc3d4f4ca360c947b536c626aa1c1ffca4c3cce38b017e12f95a3128c9973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_53ebe5f927ba1be5fed294736ea44ae70924ceac0e09bc05d4eb6821016ec8c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53ebe5f927ba1be5fed294736ea44ae70924ceac0e09bc05d4eb6821016ec8c8->enter($__internal_53ebe5f927ba1be5fed294736ea44ae70924ceac0e09bc05d4eb6821016ec8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_53ebe5f927ba1be5fed294736ea44ae70924ceac0e09bc05d4eb6821016ec8c8->leave($__internal_53ebe5f927ba1be5fed294736ea44ae70924ceac0e09bc05d4eb6821016ec8c8_prof);

        
        $__internal_9f4cc3d4f4ca360c947b536c626aa1c1ffca4c3cce38b017e12f95a3128c9973->leave($__internal_9f4cc3d4f4ca360c947b536c626aa1c1ffca4c3cce38b017e12f95a3128c9973_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_094a0cc28efdae554227c95b419b936d3e6090374e5ccb6c7805d847aebfc89d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_094a0cc28efdae554227c95b419b936d3e6090374e5ccb6c7805d847aebfc89d->enter($__internal_094a0cc28efdae554227c95b419b936d3e6090374e5ccb6c7805d847aebfc89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d2ec6188feaf3dfa9b106b5e244400d43eae94c6b8b5c7be8e525af7dbed3cb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2ec6188feaf3dfa9b106b5e244400d43eae94c6b8b5c7be8e525af7dbed3cb6->enter($__internal_d2ec6188feaf3dfa9b106b5e244400d43eae94c6b8b5c7be8e525af7dbed3cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d2ec6188feaf3dfa9b106b5e244400d43eae94c6b8b5c7be8e525af7dbed3cb6->leave($__internal_d2ec6188feaf3dfa9b106b5e244400d43eae94c6b8b5c7be8e525af7dbed3cb6_prof);

        
        $__internal_094a0cc28efdae554227c95b419b936d3e6090374e5ccb6c7805d847aebfc89d->leave($__internal_094a0cc28efdae554227c95b419b936d3e6090374e5ccb6c7805d847aebfc89d_prof);

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
