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
        $__internal_4207fc52c24de6e835c2ccfa8c55de2a347d0eb7a034b05a7c8bbf9cc95d1314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4207fc52c24de6e835c2ccfa8c55de2a347d0eb7a034b05a7c8bbf9cc95d1314->enter($__internal_4207fc52c24de6e835c2ccfa8c55de2a347d0eb7a034b05a7c8bbf9cc95d1314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_62b68d9916e45c6d82c64ca62a0d5edf9c5f31ad31f3feb964d7dc583656e981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62b68d9916e45c6d82c64ca62a0d5edf9c5f31ad31f3feb964d7dc583656e981->enter($__internal_62b68d9916e45c6d82c64ca62a0d5edf9c5f31ad31f3feb964d7dc583656e981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4207fc52c24de6e835c2ccfa8c55de2a347d0eb7a034b05a7c8bbf9cc95d1314->leave($__internal_4207fc52c24de6e835c2ccfa8c55de2a347d0eb7a034b05a7c8bbf9cc95d1314_prof);

        
        $__internal_62b68d9916e45c6d82c64ca62a0d5edf9c5f31ad31f3feb964d7dc583656e981->leave($__internal_62b68d9916e45c6d82c64ca62a0d5edf9c5f31ad31f3feb964d7dc583656e981_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_47416c345604ee1a08a109a748e66b224353f601f909024e3db2bd8592241eb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47416c345604ee1a08a109a748e66b224353f601f909024e3db2bd8592241eb3->enter($__internal_47416c345604ee1a08a109a748e66b224353f601f909024e3db2bd8592241eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_42ce8cf2388b613e4c50fd95f85e7202d71a9f0eaf982067d8d75a08fd4d96cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42ce8cf2388b613e4c50fd95f85e7202d71a9f0eaf982067d8d75a08fd4d96cd->enter($__internal_42ce8cf2388b613e4c50fd95f85e7202d71a9f0eaf982067d8d75a08fd4d96cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_42ce8cf2388b613e4c50fd95f85e7202d71a9f0eaf982067d8d75a08fd4d96cd->leave($__internal_42ce8cf2388b613e4c50fd95f85e7202d71a9f0eaf982067d8d75a08fd4d96cd_prof);

        
        $__internal_47416c345604ee1a08a109a748e66b224353f601f909024e3db2bd8592241eb3->leave($__internal_47416c345604ee1a08a109a748e66b224353f601f909024e3db2bd8592241eb3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb87a66c87f6de96b9573bec8be21c6ae9a922b238ff21a43eff3ff0a0b86ead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb87a66c87f6de96b9573bec8be21c6ae9a922b238ff21a43eff3ff0a0b86ead->enter($__internal_fb87a66c87f6de96b9573bec8be21c6ae9a922b238ff21a43eff3ff0a0b86ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_36086bfda51e9463d30ca0d845552d40cfe07f39cb2d3a864492245c7d9acf43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36086bfda51e9463d30ca0d845552d40cfe07f39cb2d3a864492245c7d9acf43->enter($__internal_36086bfda51e9463d30ca0d845552d40cfe07f39cb2d3a864492245c7d9acf43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_36086bfda51e9463d30ca0d845552d40cfe07f39cb2d3a864492245c7d9acf43->leave($__internal_36086bfda51e9463d30ca0d845552d40cfe07f39cb2d3a864492245c7d9acf43_prof);

        
        $__internal_fb87a66c87f6de96b9573bec8be21c6ae9a922b238ff21a43eff3ff0a0b86ead->leave($__internal_fb87a66c87f6de96b9573bec8be21c6ae9a922b238ff21a43eff3ff0a0b86ead_prof);

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
