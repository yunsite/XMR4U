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
        $__internal_1abefee846c69f0e2e7de830382a92b6d3425166e3db1d27f0a906199a4453a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1abefee846c69f0e2e7de830382a92b6d3425166e3db1d27f0a906199a4453a8->enter($__internal_1abefee846c69f0e2e7de830382a92b6d3425166e3db1d27f0a906199a4453a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a71ee90646122433cf1e7720f0f292ab6c3ef6e300fe4a83cdf2d3ac63f633fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a71ee90646122433cf1e7720f0f292ab6c3ef6e300fe4a83cdf2d3ac63f633fa->enter($__internal_a71ee90646122433cf1e7720f0f292ab6c3ef6e300fe4a83cdf2d3ac63f633fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_1abefee846c69f0e2e7de830382a92b6d3425166e3db1d27f0a906199a4453a8->leave($__internal_1abefee846c69f0e2e7de830382a92b6d3425166e3db1d27f0a906199a4453a8_prof);

        
        $__internal_a71ee90646122433cf1e7720f0f292ab6c3ef6e300fe4a83cdf2d3ac63f633fa->leave($__internal_a71ee90646122433cf1e7720f0f292ab6c3ef6e300fe4a83cdf2d3ac63f633fa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0e3f2bebe45579d6942d10b3160ba9b6ad1db98bfa7444c428a4577eed8a063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0e3f2bebe45579d6942d10b3160ba9b6ad1db98bfa7444c428a4577eed8a063->enter($__internal_f0e3f2bebe45579d6942d10b3160ba9b6ad1db98bfa7444c428a4577eed8a063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7a3d21139cfdd79071e2de01d865a49d36270f10856b7cf1737805ce8892043a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a3d21139cfdd79071e2de01d865a49d36270f10856b7cf1737805ce8892043a->enter($__internal_7a3d21139cfdd79071e2de01d865a49d36270f10856b7cf1737805ce8892043a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Monero Mining";
        
        $__internal_7a3d21139cfdd79071e2de01d865a49d36270f10856b7cf1737805ce8892043a->leave($__internal_7a3d21139cfdd79071e2de01d865a49d36270f10856b7cf1737805ce8892043a_prof);

        
        $__internal_f0e3f2bebe45579d6942d10b3160ba9b6ad1db98bfa7444c428a4577eed8a063->leave($__internal_f0e3f2bebe45579d6942d10b3160ba9b6ad1db98bfa7444c428a4577eed8a063_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_83ebbf7f6284d85755e46daee4ad285090228e32cdbf16cb19fbf1cd867dfe18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83ebbf7f6284d85755e46daee4ad285090228e32cdbf16cb19fbf1cd867dfe18->enter($__internal_83ebbf7f6284d85755e46daee4ad285090228e32cdbf16cb19fbf1cd867dfe18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ee13de5cd179dbd741b17a6851d6be6c334d463fb71fdd1df11a08037247516b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee13de5cd179dbd741b17a6851d6be6c334d463fb71fdd1df11a08037247516b->enter($__internal_ee13de5cd179dbd741b17a6851d6be6c334d463fb71fdd1df11a08037247516b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ee13de5cd179dbd741b17a6851d6be6c334d463fb71fdd1df11a08037247516b->leave($__internal_ee13de5cd179dbd741b17a6851d6be6c334d463fb71fdd1df11a08037247516b_prof);

        
        $__internal_83ebbf7f6284d85755e46daee4ad285090228e32cdbf16cb19fbf1cd867dfe18->leave($__internal_83ebbf7f6284d85755e46daee4ad285090228e32cdbf16cb19fbf1cd867dfe18_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ecf5d08172603d54ed64e053ade281c33c8677502d4064f1c69362c84ab8ecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ecf5d08172603d54ed64e053ade281c33c8677502d4064f1c69362c84ab8ecc->enter($__internal_5ecf5d08172603d54ed64e053ade281c33c8677502d4064f1c69362c84ab8ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_da693625e1651647086b66f51aa55b3a2bdfa4ea1674b643c192d3f0dc5e1155 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da693625e1651647086b66f51aa55b3a2bdfa4ea1674b643c192d3f0dc5e1155->enter($__internal_da693625e1651647086b66f51aa55b3a2bdfa4ea1674b643c192d3f0dc5e1155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_da693625e1651647086b66f51aa55b3a2bdfa4ea1674b643c192d3f0dc5e1155->leave($__internal_da693625e1651647086b66f51aa55b3a2bdfa4ea1674b643c192d3f0dc5e1155_prof);

        
        $__internal_5ecf5d08172603d54ed64e053ade281c33c8677502d4064f1c69362c84ab8ecc->leave($__internal_5ecf5d08172603d54ed64e053ade281c33c8677502d4064f1c69362c84ab8ecc_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_497c5866d26455b9233a2e65f5a17856787a80a5068105e8f91a93c197ede12c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_497c5866d26455b9233a2e65f5a17856787a80a5068105e8f91a93c197ede12c->enter($__internal_497c5866d26455b9233a2e65f5a17856787a80a5068105e8f91a93c197ede12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2bb1cbd1cb1e567c2de35464be22cd7321971c969705f8e43904ffe09bd71470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bb1cbd1cb1e567c2de35464be22cd7321971c969705f8e43904ffe09bd71470->enter($__internal_2bb1cbd1cb1e567c2de35464be22cd7321971c969705f8e43904ffe09bd71470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_2bb1cbd1cb1e567c2de35464be22cd7321971c969705f8e43904ffe09bd71470->leave($__internal_2bb1cbd1cb1e567c2de35464be22cd7321971c969705f8e43904ffe09bd71470_prof);

        
        $__internal_497c5866d26455b9233a2e65f5a17856787a80a5068105e8f91a93c197ede12c->leave($__internal_497c5866d26455b9233a2e65f5a17856787a80a5068105e8f91a93c197ede12c_prof);

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
