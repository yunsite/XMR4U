<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_c8b08059072b62339e1f5d9c741006bb1d70e13f5a2f244ec72fe8eee050d4a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26f109562af05ddf93b6e15e68ee0d67564e562538bfb8115caa719b1e0c5338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f109562af05ddf93b6e15e68ee0d67564e562538bfb8115caa719b1e0c5338->enter($__internal_26f109562af05ddf93b6e15e68ee0d67564e562538bfb8115caa719b1e0c5338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_69507dab0d37fa48c9b4d891090143b923e0aa3d024873e598fb73ae591456df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69507dab0d37fa48c9b4d891090143b923e0aa3d024873e598fb73ae591456df->enter($__internal_69507dab0d37fa48c9b4d891090143b923e0aa3d024873e598fb73ae591456df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_26f109562af05ddf93b6e15e68ee0d67564e562538bfb8115caa719b1e0c5338->leave($__internal_26f109562af05ddf93b6e15e68ee0d67564e562538bfb8115caa719b1e0c5338_prof);

        
        $__internal_69507dab0d37fa48c9b4d891090143b923e0aa3d024873e598fb73ae591456df->leave($__internal_69507dab0d37fa48c9b4d891090143b923e0aa3d024873e598fb73ae591456df_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ad23ec98cf3ffe77d33213bb38753f93d047f90961932a0be2c752b4adc14d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad23ec98cf3ffe77d33213bb38753f93d047f90961932a0be2c752b4adc14d1->enter($__internal_2ad23ec98cf3ffe77d33213bb38753f93d047f90961932a0be2c752b4adc14d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6602a5e644a674f0b90a149aad2f75e8f82ee8f49848b5c9ce404827b853fffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6602a5e644a674f0b90a149aad2f75e8f82ee8f49848b5c9ce404827b853fffe->enter($__internal_6602a5e644a674f0b90a149aad2f75e8f82ee8f49848b5c9ce404827b853fffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6602a5e644a674f0b90a149aad2f75e8f82ee8f49848b5c9ce404827b853fffe->leave($__internal_6602a5e644a674f0b90a149aad2f75e8f82ee8f49848b5c9ce404827b853fffe_prof);

        
        $__internal_2ad23ec98cf3ffe77d33213bb38753f93d047f90961932a0be2c752b4adc14d1->leave($__internal_2ad23ec98cf3ffe77d33213bb38753f93d047f90961932a0be2c752b4adc14d1_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_5f78a7b218383d0f8d066772e0843d5e0a82f1fdf18ed9f2d98e1d4a88e5b529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f78a7b218383d0f8d066772e0843d5e0a82f1fdf18ed9f2d98e1d4a88e5b529->enter($__internal_5f78a7b218383d0f8d066772e0843d5e0a82f1fdf18ed9f2d98e1d4a88e5b529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_46325884793231260ff0f452ae757219fbf6c0b96cf991c59f6664ec31521126 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46325884793231260ff0f452ae757219fbf6c0b96cf991c59f6664ec31521126->enter($__internal_46325884793231260ff0f452ae757219fbf6c0b96cf991c59f6664ec31521126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_46325884793231260ff0f452ae757219fbf6c0b96cf991c59f6664ec31521126->leave($__internal_46325884793231260ff0f452ae757219fbf6c0b96cf991c59f6664ec31521126_prof);

        
        $__internal_5f78a7b218383d0f8d066772e0843d5e0a82f1fdf18ed9f2d98e1d4a88e5b529->leave($__internal_5f78a7b218383d0f8d066772e0843d5e0a82f1fdf18ed9f2d98e1d4a88e5b529_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a86fed64e7903015f4299119b44a22d5e7b63f97ead14e95f28172f52becf231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a86fed64e7903015f4299119b44a22d5e7b63f97ead14e95f28172f52becf231->enter($__internal_a86fed64e7903015f4299119b44a22d5e7b63f97ead14e95f28172f52becf231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_426fb35f756c1b22807f3aed57fbc7c9c6da7c1d6ea2143f2edd534a37dd921b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_426fb35f756c1b22807f3aed57fbc7c9c6da7c1d6ea2143f2edd534a37dd921b->enter($__internal_426fb35f756c1b22807f3aed57fbc7c9c6da7c1d6ea2143f2edd534a37dd921b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_426fb35f756c1b22807f3aed57fbc7c9c6da7c1d6ea2143f2edd534a37dd921b->leave($__internal_426fb35f756c1b22807f3aed57fbc7c9c6da7c1d6ea2143f2edd534a37dd921b_prof);

        
        $__internal_a86fed64e7903015f4299119b44a22d5e7b63f97ead14e95f28172f52becf231->leave($__internal_a86fed64e7903015f4299119b44a22d5e7b63f97ead14e95f28172f52becf231_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/miner/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
