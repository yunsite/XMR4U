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
        $__internal_d41918dc731b7d891141fddc99765a94f0fbb517e2c078f092c9205a3c14b98c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d41918dc731b7d891141fddc99765a94f0fbb517e2c078f092c9205a3c14b98c->enter($__internal_d41918dc731b7d891141fddc99765a94f0fbb517e2c078f092c9205a3c14b98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_598508a3906f734ebaf77392b0107e2f304cb86a35817b4e619f6433421d8ef3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_598508a3906f734ebaf77392b0107e2f304cb86a35817b4e619f6433421d8ef3->enter($__internal_598508a3906f734ebaf77392b0107e2f304cb86a35817b4e619f6433421d8ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 15
        echo "        
    </head>
    <body id=\"mimin\" class=\"dashboard\">
        ";
        // line 18
        $this->loadTemplate("_header.html.twig", "base.html.twig", 18)->display($context);
        echo "   
        ";
        // line 19
        $this->loadTemplate("_nav.html.twig", "base.html.twig", 19)->display($context);
        echo "        
        <div class=\"container-fluid mimin-wrapper\">
            ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "        </div>
        ";
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 65
        echo "    </body>
</html>
";
        
        $__internal_d41918dc731b7d891141fddc99765a94f0fbb517e2c078f092c9205a3c14b98c->leave($__internal_d41918dc731b7d891141fddc99765a94f0fbb517e2c078f092c9205a3c14b98c_prof);

        
        $__internal_598508a3906f734ebaf77392b0107e2f304cb86a35817b4e619f6433421d8ef3->leave($__internal_598508a3906f734ebaf77392b0107e2f304cb86a35817b4e619f6433421d8ef3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_06223282d7f07347e589065d391846682481bd2cc8df78800f07ef3a1f46bf2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06223282d7f07347e589065d391846682481bd2cc8df78800f07ef3a1f46bf2e->enter($__internal_06223282d7f07347e589065d391846682481bd2cc8df78800f07ef3a1f46bf2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_52e2e0d7b458e9856bd410495c006a701909597c0a6141dd47f5a88fab911b0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52e2e0d7b458e9856bd410495c006a701909597c0a6141dd47f5a88fab911b0e->enter($__internal_52e2e0d7b458e9856bd410495c006a701909597c0a6141dd47f5a88fab911b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Monero Mining";
        
        $__internal_52e2e0d7b458e9856bd410495c006a701909597c0a6141dd47f5a88fab911b0e->leave($__internal_52e2e0d7b458e9856bd410495c006a701909597c0a6141dd47f5a88fab911b0e_prof);

        
        $__internal_06223282d7f07347e589065d391846682481bd2cc8df78800f07ef3a1f46bf2e->leave($__internal_06223282d7f07347e589065d391846682481bd2cc8df78800f07ef3a1f46bf2e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e894e67fe6eccce4b268799f15ebc6168db9a3fcdae86a7b004c8a4c0968e2b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e894e67fe6eccce4b268799f15ebc6168db9a3fcdae86a7b004c8a4c0968e2b4->enter($__internal_e894e67fe6eccce4b268799f15ebc6168db9a3fcdae86a7b004c8a4c0968e2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_22a8590fe14ecf60aa69ce02a74d0d7ee034c0fa254a5960fb555e3d64ce9aaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22a8590fe14ecf60aa69ce02a74d0d7ee034c0fa254a5960fb555e3d64ce9aaa->enter($__internal_22a8590fe14ecf60aa69ce02a74d0d7ee034c0fa254a5960fb555e3d64ce9aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        ";
        
        $__internal_22a8590fe14ecf60aa69ce02a74d0d7ee034c0fa254a5960fb555e3d64ce9aaa->leave($__internal_22a8590fe14ecf60aa69ce02a74d0d7ee034c0fa254a5960fb555e3d64ce9aaa_prof);

        
        $__internal_e894e67fe6eccce4b268799f15ebc6168db9a3fcdae86a7b004c8a4c0968e2b4->leave($__internal_e894e67fe6eccce4b268799f15ebc6168db9a3fcdae86a7b004c8a4c0968e2b4_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0e7c3d4132d30fa18011c999839b446cb9b3262e14effc61d5bc109527f4b12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0e7c3d4132d30fa18011c999839b446cb9b3262e14effc61d5bc109527f4b12->enter($__internal_c0e7c3d4132d30fa18011c999839b446cb9b3262e14effc61d5bc109527f4b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ef4339f534159acab888aa7ef5857fe9ad27db17d36b9e84898832aaa0b0a192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef4339f534159acab888aa7ef5857fe9ad27db17d36b9e84898832aaa0b0a192->enter($__internal_ef4339f534159acab888aa7ef5857fe9ad27db17d36b9e84898832aaa0b0a192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ef4339f534159acab888aa7ef5857fe9ad27db17d36b9e84898832aaa0b0a192->leave($__internal_ef4339f534159acab888aa7ef5857fe9ad27db17d36b9e84898832aaa0b0a192_prof);

        
        $__internal_c0e7c3d4132d30fa18011c999839b446cb9b3262e14effc61d5bc109527f4b12->leave($__internal_c0e7c3d4132d30fa18011c999839b446cb9b3262e14effc61d5bc109527f4b12_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1cc4a072be89419fd3d0a5d1fd1be37e4dc3dab8c360fc312f29be382220d58f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cc4a072be89419fd3d0a5d1fd1be37e4dc3dab8c360fc312f29be382220d58f->enter($__internal_1cc4a072be89419fd3d0a5d1fd1be37e4dc3dab8c360fc312f29be382220d58f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_08637c6c18d950ecb6f9ba00b73c29f6bc812cd99f0c4cf09a993ba2faecb719 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08637c6c18d950ecb6f9ba00b73c29f6bc812cd99f0c4cf09a993ba2faecb719->enter($__internal_08637c6c18d950ecb6f9ba00b73c29f6bc812cd99f0c4cf09a993ba2faecb719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "<!-- start: Javascript -->
        <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/jquery.ui.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>


        <!-- plugins -->
        <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/plugins/moment.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/plugins/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/plugins/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/plugins/jquery.vmap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/plugins/maps/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/plugins/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>


        <!-- custom -->
         <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/main.js"), "html", null, true);
        echo "\"></script>
         <script type=\"text/javascript\">
          (function(jQuery){


            // start: Maps============

              jQuery('.maps').vectorMap({
                map: 'world_fr',
                backgroundColor: null,
                color: '#fff',
                hoverOpacity: 0.7,
                selectedColor: '#666666',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#C8EEFF', '#006491'],
                normalizeFunction: 'polynomial'
            });

            // end: Maps==============

          })(jQuery);
         </script>
        <!-- end: Javascript -->
    ";
        
        $__internal_08637c6c18d950ecb6f9ba00b73c29f6bc812cd99f0c4cf09a993ba2faecb719->leave($__internal_08637c6c18d950ecb6f9ba00b73c29f6bc812cd99f0c4cf09a993ba2faecb719_prof);

        
        $__internal_1cc4a072be89419fd3d0a5d1fd1be37e4dc3dab8c360fc312f29be382220d58f->leave($__internal_1cc4a072be89419fd3d0a5d1fd1be37e4dc3dab8c360fc312f29be382220d58f_prof);

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
        return array (  205 => 39,  198 => 35,  194 => 34,  190 => 33,  186 => 32,  182 => 31,  178 => 30,  171 => 26,  167 => 25,  163 => 24,  152 => 23,  135 => 21,  123 => 13,  119 => 12,  115 => 11,  111 => 10,  107 => 9,  101 => 7,  92 => 6,  74 => 5,  62 => 65,  60 => 23,  57 => 22,  55 => 21,  50 => 19,  46 => 18,  41 => 15,  39 => 6,  35 => 5,  29 => 1,);
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
         <script type=\"text/javascript\">
          (function(jQuery){


            // start: Maps============

              jQuery('.maps').vectorMap({
                map: 'world_fr',
                backgroundColor: null,
                color: '#fff',
                hoverOpacity: 0.7,
                selectedColor: '#666666',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#C8EEFF', '#006491'],
                normalizeFunction: 'polynomial'
            });

            // end: Maps==============

          })(jQuery);
         </script>
        <!-- end: Javascript -->
    {% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/Slote/Desktop/XMR4U/templates/base.html.twig");
    }
}
