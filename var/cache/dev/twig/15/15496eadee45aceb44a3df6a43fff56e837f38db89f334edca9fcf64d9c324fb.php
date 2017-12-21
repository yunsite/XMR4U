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
        $__internal_439045801f072a4dd60ac8912956895f9099ed0a1a051f57f657b07851ae6fb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_439045801f072a4dd60ac8912956895f9099ed0a1a051f57f657b07851ae6fb3->enter($__internal_439045801f072a4dd60ac8912956895f9099ed0a1a051f57f657b07851ae6fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_d3cd29d63671172c5bd68404d70a53c85302284416adcdea19cc7be389e43d65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3cd29d63671172c5bd68404d70a53c85302284416adcdea19cc7be389e43d65->enter($__internal_d3cd29d63671172c5bd68404d70a53c85302284416adcdea19cc7be389e43d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 53
        echo "    </body>
</html>
";
        
        $__internal_439045801f072a4dd60ac8912956895f9099ed0a1a051f57f657b07851ae6fb3->leave($__internal_439045801f072a4dd60ac8912956895f9099ed0a1a051f57f657b07851ae6fb3_prof);

        
        $__internal_d3cd29d63671172c5bd68404d70a53c85302284416adcdea19cc7be389e43d65->leave($__internal_d3cd29d63671172c5bd68404d70a53c85302284416adcdea19cc7be389e43d65_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf927d6959d5d25423fe77d9bbe4dd5c47a2820c5fab497f756dcd7d286f4e46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf927d6959d5d25423fe77d9bbe4dd5c47a2820c5fab497f756dcd7d286f4e46->enter($__internal_cf927d6959d5d25423fe77d9bbe4dd5c47a2820c5fab497f756dcd7d286f4e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b4b9a6ea9c93fdff34a864a7e99cbc78d03c2c476c319ed58e7d5fb18764df94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4b9a6ea9c93fdff34a864a7e99cbc78d03c2c476c319ed58e7d5fb18764df94->enter($__internal_b4b9a6ea9c93fdff34a864a7e99cbc78d03c2c476c319ed58e7d5fb18764df94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Monero Mining";
        
        $__internal_b4b9a6ea9c93fdff34a864a7e99cbc78d03c2c476c319ed58e7d5fb18764df94->leave($__internal_b4b9a6ea9c93fdff34a864a7e99cbc78d03c2c476c319ed58e7d5fb18764df94_prof);

        
        $__internal_cf927d6959d5d25423fe77d9bbe4dd5c47a2820c5fab497f756dcd7d286f4e46->leave($__internal_cf927d6959d5d25423fe77d9bbe4dd5c47a2820c5fab497f756dcd7d286f4e46_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e97e7ac877fb633a5fdd95cbbadacebf0dc722ebd2ed09531ecba4af7274b26e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e97e7ac877fb633a5fdd95cbbadacebf0dc722ebd2ed09531ecba4af7274b26e->enter($__internal_e97e7ac877fb633a5fdd95cbbadacebf0dc722ebd2ed09531ecba4af7274b26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0603efc68b7a228607d1f97d83b648e16f377e619bc887f66ce82da2b65d2951 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0603efc68b7a228607d1f97d83b648e16f377e619bc887f66ce82da2b65d2951->enter($__internal_0603efc68b7a228607d1f97d83b648e16f377e619bc887f66ce82da2b65d2951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_0603efc68b7a228607d1f97d83b648e16f377e619bc887f66ce82da2b65d2951->leave($__internal_0603efc68b7a228607d1f97d83b648e16f377e619bc887f66ce82da2b65d2951_prof);

        
        $__internal_e97e7ac877fb633a5fdd95cbbadacebf0dc722ebd2ed09531ecba4af7274b26e->leave($__internal_e97e7ac877fb633a5fdd95cbbadacebf0dc722ebd2ed09531ecba4af7274b26e_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_30e35bd10afce8dc4547ca9ce40a049c2eb82e89a1b69ae0fd9b60a47a21d7fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30e35bd10afce8dc4547ca9ce40a049c2eb82e89a1b69ae0fd9b60a47a21d7fa->enter($__internal_30e35bd10afce8dc4547ca9ce40a049c2eb82e89a1b69ae0fd9b60a47a21d7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_812db66f9036f7165b3c6afece06df03d94eeb9c731d7a2dacf795999d8ad2eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_812db66f9036f7165b3c6afece06df03d94eeb9c731d7a2dacf795999d8ad2eb->enter($__internal_812db66f9036f7165b3c6afece06df03d94eeb9c731d7a2dacf795999d8ad2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_812db66f9036f7165b3c6afece06df03d94eeb9c731d7a2dacf795999d8ad2eb->leave($__internal_812db66f9036f7165b3c6afece06df03d94eeb9c731d7a2dacf795999d8ad2eb_prof);

        
        $__internal_30e35bd10afce8dc4547ca9ce40a049c2eb82e89a1b69ae0fd9b60a47a21d7fa->leave($__internal_30e35bd10afce8dc4547ca9ce40a049c2eb82e89a1b69ae0fd9b60a47a21d7fa_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_850152f732a7dfdadd6602ca2e42d518844b92c1cfc1e1142d573664dd45ba0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_850152f732a7dfdadd6602ca2e42d518844b92c1cfc1e1142d573664dd45ba0a->enter($__internal_850152f732a7dfdadd6602ca2e42d518844b92c1cfc1e1142d573664dd45ba0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_75b04dadea083e00c88d0579008dd11edf033cb4276bde2af52d69f1d72e4264 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75b04dadea083e00c88d0579008dd11edf033cb4276bde2af52d69f1d72e4264->enter($__internal_75b04dadea083e00c88d0579008dd11edf033cb4276bde2af52d69f1d72e4264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
         
         <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-101987237-4\"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-101987237-4');
        </script>

    ";
        
        $__internal_75b04dadea083e00c88d0579008dd11edf033cb4276bde2af52d69f1d72e4264->leave($__internal_75b04dadea083e00c88d0579008dd11edf033cb4276bde2af52d69f1d72e4264_prof);

        
        $__internal_850152f732a7dfdadd6602ca2e42d518844b92c1cfc1e1142d573664dd45ba0a->leave($__internal_850152f732a7dfdadd6602ca2e42d518844b92c1cfc1e1142d573664dd45ba0a_prof);

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
        return array (  209 => 40,  202 => 36,  198 => 35,  194 => 34,  190 => 33,  186 => 32,  182 => 31,  175 => 27,  171 => 26,  167 => 25,  156 => 24,  139 => 22,  127 => 14,  123 => 13,  119 => 12,  115 => 11,  111 => 10,  107 => 9,  101 => 7,  92 => 6,  74 => 5,  62 => 53,  60 => 24,  57 => 23,  55 => 22,  52 => 21,  50 => 20,  46 => 19,  41 => 16,  39 => 6,  35 => 5,  29 => 1,);
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
         
         <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-101987237-4\"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-101987237-4');
        </script>

    {% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/miner/templates/base.html.twig");
    }
}
