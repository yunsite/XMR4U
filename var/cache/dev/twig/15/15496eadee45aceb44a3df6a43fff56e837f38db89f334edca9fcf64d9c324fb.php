<?php

/* base.html.twig */
class __TwigTemplate_3bdc2b797075194d41df7c3e408a317bed92b67aad75eb99d04fb9c96052cce6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26dde7c689476d67337cbf77e9944a87f62eaba338a2b80ccc78b2ed8960a787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26dde7c689476d67337cbf77e9944a87f62eaba338a2b80ccc78b2ed8960a787->enter($__internal_26dde7c689476d67337cbf77e9944a87f62eaba338a2b80ccc78b2ed8960a787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_34da631c7c9e217381de560b91c6fd5a49d356d2d936ee558da499315199054b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34da631c7c9e217381de560b91c6fd5a49d356d2d936ee558da499315199054b->enter($__internal_34da631c7c9e217381de560b91c6fd5a49d356d2d936ee558da499315199054b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "        
    </head>
    <body id=\"mimin\" class=\"dashboard\">
        ";
        // line 19
        $this->loadTemplate("_header.html.twig", "base.html.twig", 19)->display($context);
        echo "   
        ";
        // line 20
        $this->loadTemplate("_nav.html.twig", "base.html.twig", 20)->display($context);
        // line 21
        echo "        <div class=\"container-fluid mimin-wrapper\">
            ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "        </div>
        ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 42
        echo "    </body>
</html>
";
        
        $__internal_26dde7c689476d67337cbf77e9944a87f62eaba338a2b80ccc78b2ed8960a787->leave($__internal_26dde7c689476d67337cbf77e9944a87f62eaba338a2b80ccc78b2ed8960a787_prof);

        
        $__internal_34da631c7c9e217381de560b91c6fd5a49d356d2d936ee558da499315199054b->leave($__internal_34da631c7c9e217381de560b91c6fd5a49d356d2d936ee558da499315199054b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4dfe247ef0b0319d0b7f903953861ef32b91c0ff20f24af46eddafaa66717638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dfe247ef0b0319d0b7f903953861ef32b91c0ff20f24af46eddafaa66717638->enter($__internal_4dfe247ef0b0319d0b7f903953861ef32b91c0ff20f24af46eddafaa66717638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9f0b49e4a5b57ce2f8bd67e53b0c75f892aad62befa77d2a6af804620635ccef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f0b49e4a5b57ce2f8bd67e53b0c75f892aad62befa77d2a6af804620635ccef->enter($__internal_9f0b49e4a5b57ce2f8bd67e53b0c75f892aad62befa77d2a6af804620635ccef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Monero Mining";
        
        $__internal_9f0b49e4a5b57ce2f8bd67e53b0c75f892aad62befa77d2a6af804620635ccef->leave($__internal_9f0b49e4a5b57ce2f8bd67e53b0c75f892aad62befa77d2a6af804620635ccef_prof);

        
        $__internal_4dfe247ef0b0319d0b7f903953861ef32b91c0ff20f24af46eddafaa66717638->leave($__internal_4dfe247ef0b0319d0b7f903953861ef32b91c0ff20f24af46eddafaa66717638_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a368d4cf77265d77d8588434cb88bf54e7fb80a779463f8198b3dc58c2749404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a368d4cf77265d77d8588434cb88bf54e7fb80a779463f8198b3dc58c2749404->enter($__internal_a368d4cf77265d77d8588434cb88bf54e7fb80a779463f8198b3dc58c2749404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_af086c6c7416980d4247ed6e7658a3670a1931fce15ceb351e91fc5d060003f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af086c6c7416980d4247ed6e7658a3670a1931fce15ceb351e91fc5d060003f3->enter($__internal_af086c6c7416980d4247ed6e7658a3670a1931fce15ceb351e91fc5d060003f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/css/bootstrap.min.css"), "html", null, true);
        echo "\">
                <!-- plugins -->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/css/plugins/font-awesome.min.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/css/plugins/simple-line-icons.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/css/plugins/animate.min.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/css/plugins/fullcalendar.min.css"), "html", null, true);
        echo "\"/>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/rick.png"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_af086c6c7416980d4247ed6e7658a3670a1931fce15ceb351e91fc5d060003f3->leave($__internal_af086c6c7416980d4247ed6e7658a3670a1931fce15ceb351e91fc5d060003f3_prof);

        
        $__internal_a368d4cf77265d77d8588434cb88bf54e7fb80a779463f8198b3dc58c2749404->leave($__internal_a368d4cf77265d77d8588434cb88bf54e7fb80a779463f8198b3dc58c2749404_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_488f59a58a495b7e2cce7f8c819b1741d4426f71776814a7cb1932a230d0a5a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_488f59a58a495b7e2cce7f8c819b1741d4426f71776814a7cb1932a230d0a5a7->enter($__internal_488f59a58a495b7e2cce7f8c819b1741d4426f71776814a7cb1932a230d0a5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c139f25282a45eabd31660898911ee237508f2e83d94f2ac2f8fc5f761cb9fdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c139f25282a45eabd31660898911ee237508f2e83d94f2ac2f8fc5f761cb9fdd->enter($__internal_c139f25282a45eabd31660898911ee237508f2e83d94f2ac2f8fc5f761cb9fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c139f25282a45eabd31660898911ee237508f2e83d94f2ac2f8fc5f761cb9fdd->leave($__internal_c139f25282a45eabd31660898911ee237508f2e83d94f2ac2f8fc5f761cb9fdd_prof);

        
        $__internal_488f59a58a495b7e2cce7f8c819b1741d4426f71776814a7cb1932a230d0a5a7->leave($__internal_488f59a58a495b7e2cce7f8c819b1741d4426f71776814a7cb1932a230d0a5a7_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b77e0a9315b6776c466381d7ab797e5b4a4c1c242c360ba2c7969acc553a1762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b77e0a9315b6776c466381d7ab797e5b4a4c1c242c360ba2c7969acc553a1762->enter($__internal_b77e0a9315b6776c466381d7ab797e5b4a4c1c242c360ba2c7969acc553a1762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6168a5570f2bddce2a64381de8512b1d3ad8d0ccbc0f418483e2499e774fe381 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6168a5570f2bddce2a64381de8512b1d3ad8d0ccbc0f418483e2499e774fe381->enter($__internal_6168a5570f2bddce2a64381de8512b1d3ad8d0ccbc0f418483e2499e774fe381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "<!-- start: Javascript -->
        <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/jquery.ui.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>


        <!-- plugins -->
        <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/plugins/moment.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/plugins/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/plugins/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/plugins/jquery.vmap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/plugins/maps/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/plugins/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>


        <!-- custom -->
         <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/main.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_6168a5570f2bddce2a64381de8512b1d3ad8d0ccbc0f418483e2499e774fe381->leave($__internal_6168a5570f2bddce2a64381de8512b1d3ad8d0ccbc0f418483e2499e774fe381_prof);

        
        $__internal_b77e0a9315b6776c466381d7ab797e5b4a4c1c242c360ba2c7969acc553a1762->leave($__internal_b77e0a9315b6776c466381d7ab797e5b4a4c1c242c360ba2c7969acc553a1762_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 40,  202 => 36,  198 => 35,  194 => 34,  190 => 33,  186 => 32,  182 => 31,  175 => 27,  171 => 26,  167 => 25,  156 => 24,  139 => 22,  127 => 14,  123 => 13,  119 => 12,  115 => 11,  111 => 10,  107 => 9,  101 => 7,  92 => 6,  74 => 5,  62 => 42,  60 => 24,  57 => 23,  55 => 22,  52 => 21,  50 => 20,  46 => 19,  41 => 16,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Monero Mining{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('build/css/bootstrap.min.css') }}\">
                <!-- plugins -->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('build/css/plugins/font-awesome.min.css') }}\"/>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('build/css/plugins/simple-line-icons.css') }}\"/>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('build/css/plugins/animate.min.css') }}\"/>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('build/css/plugins/fullcalendar.min.css') }}\"/>
            <link href=\"{{ asset('build/css/style.css') }}\" rel=\"stylesheet\">
            <link rel=\"icon\" type=\"image/png\" href=\"{{asset('build/img/rick.png')}}\" />
        {% endblock %}
        
    </head>
    <body id=\"mimin\" class=\"dashboard\">
        {% include '_header.html.twig' %}   
        {% include '_nav.html.twig' %}
        <div class=\"container-fluid mimin-wrapper\">
            {% block body %}{% endblock %}
        </div>
        {% block javascripts %}<!-- start: Javascript -->
        <script src=\"{{ asset('build/js/jquery.min.js') }}\"></script>
        <script src=\"{{ asset('build/js/jquery.ui.min.js') }}\"></script>
        <script src=\"{{ asset('build/js/bootstrap.min.js') }}\"></script>


        <!-- plugins -->
        <script src=\"{{ asset('build/js/plugins/moment.min.js') }}\"></script>
        <script src=\"{{ asset('build/js/plugins/fullcalendar.min.js') }}\"></script>
        <script src=\"{{ asset('build/js/plugins/jquery.nicescroll.js') }}\"></script>
        <script src=\"{{ asset('build/js/plugins/jquery.vmap.min.js') }}\"></script>
        <script src=\"{{ asset('build/js/plugins/maps/jquery.vmap.world.js') }}\"></script>
        <script src=\"{{ asset('build/js/plugins/jquery.vmap.sampledata.js') }}\"></script>


        <!-- custom -->
         <script src=\"{{ asset('build/js/main.js') }}\"></script>
    {% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/Slote/Desktop/XMR4U/templates/base.html.twig");
    }
}
