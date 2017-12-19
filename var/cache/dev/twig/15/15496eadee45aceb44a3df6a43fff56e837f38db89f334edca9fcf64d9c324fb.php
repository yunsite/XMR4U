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
        $__internal_c3e1164935d2dfb56eccbd692f71d270970bef06c9f077c7145be0c78543f8e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3e1164935d2dfb56eccbd692f71d270970bef06c9f077c7145be0c78543f8e7->enter($__internal_c3e1164935d2dfb56eccbd692f71d270970bef06c9f077c7145be0c78543f8e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7fb755bcaa81bcb4dbd89461ab8f96bcc8abc2cb4bc78fa1ecf0c3d28d5856f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fb755bcaa81bcb4dbd89461ab8f96bcc8abc2cb4bc78fa1ecf0c3d28d5856f0->enter($__internal_7fb755bcaa81bcb4dbd89461ab8f96bcc8abc2cb4bc78fa1ecf0c3d28d5856f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c3e1164935d2dfb56eccbd692f71d270970bef06c9f077c7145be0c78543f8e7->leave($__internal_c3e1164935d2dfb56eccbd692f71d270970bef06c9f077c7145be0c78543f8e7_prof);

        
        $__internal_7fb755bcaa81bcb4dbd89461ab8f96bcc8abc2cb4bc78fa1ecf0c3d28d5856f0->leave($__internal_7fb755bcaa81bcb4dbd89461ab8f96bcc8abc2cb4bc78fa1ecf0c3d28d5856f0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a79cfea430bf2b0d54da6dda85bd6f27147ed1da88ba766184199cfcdabc71c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a79cfea430bf2b0d54da6dda85bd6f27147ed1da88ba766184199cfcdabc71c6->enter($__internal_a79cfea430bf2b0d54da6dda85bd6f27147ed1da88ba766184199cfcdabc71c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_db4e5d8b70ac2a71b1f2a7d1884971394c6340411b8aaf9d18739e5d3d096b2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db4e5d8b70ac2a71b1f2a7d1884971394c6340411b8aaf9d18739e5d3d096b2b->enter($__internal_db4e5d8b70ac2a71b1f2a7d1884971394c6340411b8aaf9d18739e5d3d096b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Monero Mining";
        
        $__internal_db4e5d8b70ac2a71b1f2a7d1884971394c6340411b8aaf9d18739e5d3d096b2b->leave($__internal_db4e5d8b70ac2a71b1f2a7d1884971394c6340411b8aaf9d18739e5d3d096b2b_prof);

        
        $__internal_a79cfea430bf2b0d54da6dda85bd6f27147ed1da88ba766184199cfcdabc71c6->leave($__internal_a79cfea430bf2b0d54da6dda85bd6f27147ed1da88ba766184199cfcdabc71c6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_985d8ef228b2cd27e4743d834e1b616a7a3aebf7e55a408a5b425d6635aabdbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_985d8ef228b2cd27e4743d834e1b616a7a3aebf7e55a408a5b425d6635aabdbf->enter($__internal_985d8ef228b2cd27e4743d834e1b616a7a3aebf7e55a408a5b425d6635aabdbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a7385140b18f27aa879a544df4521d526ae5aeafb4357a504e907317a6eafb56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7385140b18f27aa879a544df4521d526ae5aeafb4357a504e907317a6eafb56->enter($__internal_a7385140b18f27aa879a544df4521d526ae5aeafb4357a504e907317a6eafb56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_a7385140b18f27aa879a544df4521d526ae5aeafb4357a504e907317a6eafb56->leave($__internal_a7385140b18f27aa879a544df4521d526ae5aeafb4357a504e907317a6eafb56_prof);

        
        $__internal_985d8ef228b2cd27e4743d834e1b616a7a3aebf7e55a408a5b425d6635aabdbf->leave($__internal_985d8ef228b2cd27e4743d834e1b616a7a3aebf7e55a408a5b425d6635aabdbf_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_73bdcc20ffc93819b8a2b9d4027e67889d67b224f02d65c4f484411a6c3e1eaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73bdcc20ffc93819b8a2b9d4027e67889d67b224f02d65c4f484411a6c3e1eaf->enter($__internal_73bdcc20ffc93819b8a2b9d4027e67889d67b224f02d65c4f484411a6c3e1eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_781a6ee2be5872a22d663cd15125a8e50e05c9107b2b3ae4e5f35887bdaf1c45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_781a6ee2be5872a22d663cd15125a8e50e05c9107b2b3ae4e5f35887bdaf1c45->enter($__internal_781a6ee2be5872a22d663cd15125a8e50e05c9107b2b3ae4e5f35887bdaf1c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_781a6ee2be5872a22d663cd15125a8e50e05c9107b2b3ae4e5f35887bdaf1c45->leave($__internal_781a6ee2be5872a22d663cd15125a8e50e05c9107b2b3ae4e5f35887bdaf1c45_prof);

        
        $__internal_73bdcc20ffc93819b8a2b9d4027e67889d67b224f02d65c4f484411a6c3e1eaf->leave($__internal_73bdcc20ffc93819b8a2b9d4027e67889d67b224f02d65c4f484411a6c3e1eaf_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f48aef1de72d02b8ab82fe511b0dba486167b59f8525327faafc455fa07d8cd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f48aef1de72d02b8ab82fe511b0dba486167b59f8525327faafc455fa07d8cd1->enter($__internal_f48aef1de72d02b8ab82fe511b0dba486167b59f8525327faafc455fa07d8cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d72c52a84d5bec36a9636ca635022b3a03664c25444f4f532bf94a0f7022627c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d72c52a84d5bec36a9636ca635022b3a03664c25444f4f532bf94a0f7022627c->enter($__internal_d72c52a84d5bec36a9636ca635022b3a03664c25444f4f532bf94a0f7022627c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_d72c52a84d5bec36a9636ca635022b3a03664c25444f4f532bf94a0f7022627c->leave($__internal_d72c52a84d5bec36a9636ca635022b3a03664c25444f4f532bf94a0f7022627c_prof);

        
        $__internal_f48aef1de72d02b8ab82fe511b0dba486167b59f8525327faafc455fa07d8cd1->leave($__internal_f48aef1de72d02b8ab82fe511b0dba486167b59f8525327faafc455fa07d8cd1_prof);

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
", "base.html.twig", "/Users/Slote/Desktop/XMR4U/templates/base.html.twig");
    }
}
