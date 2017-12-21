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
        $__internal_d4ce59b69e1e0c9cad480c928ef4afc37ef17d4c97c029bc7a1c73e1324f1fca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4ce59b69e1e0c9cad480c928ef4afc37ef17d4c97c029bc7a1c73e1324f1fca->enter($__internal_d4ce59b69e1e0c9cad480c928ef4afc37ef17d4c97c029bc7a1c73e1324f1fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_31d9f0efae2409ee0e0b1e5382c48dcf4657547b96ae9fa3676e15e7e1a7ef3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31d9f0efae2409ee0e0b1e5382c48dcf4657547b96ae9fa3676e15e7e1a7ef3a->enter($__internal_31d9f0efae2409ee0e0b1e5382c48dcf4657547b96ae9fa3676e15e7e1a7ef3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4ce59b69e1e0c9cad480c928ef4afc37ef17d4c97c029bc7a1c73e1324f1fca->leave($__internal_d4ce59b69e1e0c9cad480c928ef4afc37ef17d4c97c029bc7a1c73e1324f1fca_prof);

        
        $__internal_31d9f0efae2409ee0e0b1e5382c48dcf4657547b96ae9fa3676e15e7e1a7ef3a->leave($__internal_31d9f0efae2409ee0e0b1e5382c48dcf4657547b96ae9fa3676e15e7e1a7ef3a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ff9db4d808837745807b9921e8833ebff2f535794a63eb6d895e98b4ac8888c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff9db4d808837745807b9921e8833ebff2f535794a63eb6d895e98b4ac8888c7->enter($__internal_ff9db4d808837745807b9921e8833ebff2f535794a63eb6d895e98b4ac8888c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2a7ad00b198bad009f54b3d7e7ac4a35b9095d5640ffaa9d58192d61f5063101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a7ad00b198bad009f54b3d7e7ac4a35b9095d5640ffaa9d58192d61f5063101->enter($__internal_2a7ad00b198bad009f54b3d7e7ac4a35b9095d5640ffaa9d58192d61f5063101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2a7ad00b198bad009f54b3d7e7ac4a35b9095d5640ffaa9d58192d61f5063101->leave($__internal_2a7ad00b198bad009f54b3d7e7ac4a35b9095d5640ffaa9d58192d61f5063101_prof);

        
        $__internal_ff9db4d808837745807b9921e8833ebff2f535794a63eb6d895e98b4ac8888c7->leave($__internal_ff9db4d808837745807b9921e8833ebff2f535794a63eb6d895e98b4ac8888c7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cd4c7bd4ab3a4a86ac8a1a4177aba170536b4f65c97c08657d972086f3fb6b06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd4c7bd4ab3a4a86ac8a1a4177aba170536b4f65c97c08657d972086f3fb6b06->enter($__internal_cd4c7bd4ab3a4a86ac8a1a4177aba170536b4f65c97c08657d972086f3fb6b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8ce1d7fdb0f369fd1873d1cd11bfa2458b477a765b33e421b8037b3777b1fe08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ce1d7fdb0f369fd1873d1cd11bfa2458b477a765b33e421b8037b3777b1fe08->enter($__internal_8ce1d7fdb0f369fd1873d1cd11bfa2458b477a765b33e421b8037b3777b1fe08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8ce1d7fdb0f369fd1873d1cd11bfa2458b477a765b33e421b8037b3777b1fe08->leave($__internal_8ce1d7fdb0f369fd1873d1cd11bfa2458b477a765b33e421b8037b3777b1fe08_prof);

        
        $__internal_cd4c7bd4ab3a4a86ac8a1a4177aba170536b4f65c97c08657d972086f3fb6b06->leave($__internal_cd4c7bd4ab3a4a86ac8a1a4177aba170536b4f65c97c08657d972086f3fb6b06_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b77dbc95e1503449c4d41066af12d64ecf50114fd806aa6bf51ba7ecb39302d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b77dbc95e1503449c4d41066af12d64ecf50114fd806aa6bf51ba7ecb39302d5->enter($__internal_b77dbc95e1503449c4d41066af12d64ecf50114fd806aa6bf51ba7ecb39302d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1b643f77a76d8f6e9cf7fe4e43bbab64b26265afb15de16535555590a0c4b07d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b643f77a76d8f6e9cf7fe4e43bbab64b26265afb15de16535555590a0c4b07d->enter($__internal_1b643f77a76d8f6e9cf7fe4e43bbab64b26265afb15de16535555590a0c4b07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_1b643f77a76d8f6e9cf7fe4e43bbab64b26265afb15de16535555590a0c4b07d->leave($__internal_1b643f77a76d8f6e9cf7fe4e43bbab64b26265afb15de16535555590a0c4b07d_prof);

        
        $__internal_b77dbc95e1503449c4d41066af12d64ecf50114fd806aa6bf51ba7ecb39302d5->leave($__internal_b77dbc95e1503449c4d41066af12d64ecf50114fd806aa6bf51ba7ecb39302d5_prof);

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
