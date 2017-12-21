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
        $__internal_76ef72f8e6b16f16f33326e63fc7433da427b43f4cb1613093d61923062e3300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76ef72f8e6b16f16f33326e63fc7433da427b43f4cb1613093d61923062e3300->enter($__internal_76ef72f8e6b16f16f33326e63fc7433da427b43f4cb1613093d61923062e3300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7d20bc7deadd2abb6c0ea89420684fc6671f1063dfedc97cc55d4b206cc7000d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d20bc7deadd2abb6c0ea89420684fc6671f1063dfedc97cc55d4b206cc7000d->enter($__internal_7d20bc7deadd2abb6c0ea89420684fc6671f1063dfedc97cc55d4b206cc7000d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_76ef72f8e6b16f16f33326e63fc7433da427b43f4cb1613093d61923062e3300->leave($__internal_76ef72f8e6b16f16f33326e63fc7433da427b43f4cb1613093d61923062e3300_prof);

        
        $__internal_7d20bc7deadd2abb6c0ea89420684fc6671f1063dfedc97cc55d4b206cc7000d->leave($__internal_7d20bc7deadd2abb6c0ea89420684fc6671f1063dfedc97cc55d4b206cc7000d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_82cc4b765ba109edc4037dc262f4b519fd3af18d1164316e0e8eb2c2570eae64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82cc4b765ba109edc4037dc262f4b519fd3af18d1164316e0e8eb2c2570eae64->enter($__internal_82cc4b765ba109edc4037dc262f4b519fd3af18d1164316e0e8eb2c2570eae64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_16f9632caa22a940f15f4a3ff9061d0be5f34a79c77b43e687b2f29806f1ed5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16f9632caa22a940f15f4a3ff9061d0be5f34a79c77b43e687b2f29806f1ed5a->enter($__internal_16f9632caa22a940f15f4a3ff9061d0be5f34a79c77b43e687b2f29806f1ed5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Monero Mining";
        
        $__internal_16f9632caa22a940f15f4a3ff9061d0be5f34a79c77b43e687b2f29806f1ed5a->leave($__internal_16f9632caa22a940f15f4a3ff9061d0be5f34a79c77b43e687b2f29806f1ed5a_prof);

        
        $__internal_82cc4b765ba109edc4037dc262f4b519fd3af18d1164316e0e8eb2c2570eae64->leave($__internal_82cc4b765ba109edc4037dc262f4b519fd3af18d1164316e0e8eb2c2570eae64_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_464f093dfb466936b01b46376fed1f85e14bc66b39bb579123afaf00c436f7b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_464f093dfb466936b01b46376fed1f85e14bc66b39bb579123afaf00c436f7b6->enter($__internal_464f093dfb466936b01b46376fed1f85e14bc66b39bb579123afaf00c436f7b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5b2991ba542a777f3b5f6118a590ed18d40c28e871deba32e86a98222c036254 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b2991ba542a777f3b5f6118a590ed18d40c28e871deba32e86a98222c036254->enter($__internal_5b2991ba542a777f3b5f6118a590ed18d40c28e871deba32e86a98222c036254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_5b2991ba542a777f3b5f6118a590ed18d40c28e871deba32e86a98222c036254->leave($__internal_5b2991ba542a777f3b5f6118a590ed18d40c28e871deba32e86a98222c036254_prof);

        
        $__internal_464f093dfb466936b01b46376fed1f85e14bc66b39bb579123afaf00c436f7b6->leave($__internal_464f093dfb466936b01b46376fed1f85e14bc66b39bb579123afaf00c436f7b6_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0595e4a940739e3b90c056a4504f9b59efa1cc96e6f4324dd69dd812ded6da1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0595e4a940739e3b90c056a4504f9b59efa1cc96e6f4324dd69dd812ded6da1->enter($__internal_a0595e4a940739e3b90c056a4504f9b59efa1cc96e6f4324dd69dd812ded6da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2ec6b3bfd05375f75f9500fa0842a4c6e891c0dae86f80a3c22dcdd07b2cefac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ec6b3bfd05375f75f9500fa0842a4c6e891c0dae86f80a3c22dcdd07b2cefac->enter($__internal_2ec6b3bfd05375f75f9500fa0842a4c6e891c0dae86f80a3c22dcdd07b2cefac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2ec6b3bfd05375f75f9500fa0842a4c6e891c0dae86f80a3c22dcdd07b2cefac->leave($__internal_2ec6b3bfd05375f75f9500fa0842a4c6e891c0dae86f80a3c22dcdd07b2cefac_prof);

        
        $__internal_a0595e4a940739e3b90c056a4504f9b59efa1cc96e6f4324dd69dd812ded6da1->leave($__internal_a0595e4a940739e3b90c056a4504f9b59efa1cc96e6f4324dd69dd812ded6da1_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_912c79d137787062aec2def85f42c57cb7a243e8c876a77db78ae54f28081697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_912c79d137787062aec2def85f42c57cb7a243e8c876a77db78ae54f28081697->enter($__internal_912c79d137787062aec2def85f42c57cb7a243e8c876a77db78ae54f28081697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d21ca8a8472378b16eaeb315b0908bcf0718a9da82f06a4b826087eb95dddf25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d21ca8a8472378b16eaeb315b0908bcf0718a9da82f06a4b826087eb95dddf25->enter($__internal_d21ca8a8472378b16eaeb315b0908bcf0718a9da82f06a4b826087eb95dddf25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_d21ca8a8472378b16eaeb315b0908bcf0718a9da82f06a4b826087eb95dddf25->leave($__internal_d21ca8a8472378b16eaeb315b0908bcf0718a9da82f06a4b826087eb95dddf25_prof);

        
        $__internal_912c79d137787062aec2def85f42c57cb7a243e8c876a77db78ae54f28081697->leave($__internal_912c79d137787062aec2def85f42c57cb7a243e8c876a77db78ae54f28081697_prof);

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
