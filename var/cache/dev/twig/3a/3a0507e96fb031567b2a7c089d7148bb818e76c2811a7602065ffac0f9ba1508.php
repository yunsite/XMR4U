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
        $__internal_d3c9d022b0a848dc73df06428f1c2bbebdf73c5771321e8909937ed263971ac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3c9d022b0a848dc73df06428f1c2bbebdf73c5771321e8909937ed263971ac9->enter($__internal_d3c9d022b0a848dc73df06428f1c2bbebdf73c5771321e8909937ed263971ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_b8ed4b9e03bcd562f22a8bf60cf4d01076492970df4c20a40dacf69d919bb6e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8ed4b9e03bcd562f22a8bf60cf4d01076492970df4c20a40dacf69d919bb6e6->enter($__internal_b8ed4b9e03bcd562f22a8bf60cf4d01076492970df4c20a40dacf69d919bb6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_d3c9d022b0a848dc73df06428f1c2bbebdf73c5771321e8909937ed263971ac9->leave($__internal_d3c9d022b0a848dc73df06428f1c2bbebdf73c5771321e8909937ed263971ac9_prof);

        
        $__internal_b8ed4b9e03bcd562f22a8bf60cf4d01076492970df4c20a40dacf69d919bb6e6->leave($__internal_b8ed4b9e03bcd562f22a8bf60cf4d01076492970df4c20a40dacf69d919bb6e6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4848ba06f2bb0c5bf934df67b9852796f0dfc73698b40cff4277f584f2e0201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4848ba06f2bb0c5bf934df67b9852796f0dfc73698b40cff4277f584f2e0201->enter($__internal_d4848ba06f2bb0c5bf934df67b9852796f0dfc73698b40cff4277f584f2e0201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_85de7a2aee774472e63191896635ee2261473f51edfd6e6aa027f880d9bbea65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85de7a2aee774472e63191896635ee2261473f51edfd6e6aa027f880d9bbea65->enter($__internal_85de7a2aee774472e63191896635ee2261473f51edfd6e6aa027f880d9bbea65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_85de7a2aee774472e63191896635ee2261473f51edfd6e6aa027f880d9bbea65->leave($__internal_85de7a2aee774472e63191896635ee2261473f51edfd6e6aa027f880d9bbea65_prof);

        
        $__internal_d4848ba06f2bb0c5bf934df67b9852796f0dfc73698b40cff4277f584f2e0201->leave($__internal_d4848ba06f2bb0c5bf934df67b9852796f0dfc73698b40cff4277f584f2e0201_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d0ef8680ccd49578792e669ef61d46ba03ea56a472ee57982b44ccd6a706555f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0ef8680ccd49578792e669ef61d46ba03ea56a472ee57982b44ccd6a706555f->enter($__internal_d0ef8680ccd49578792e669ef61d46ba03ea56a472ee57982b44ccd6a706555f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8bcb57e02b6b4e441088ac6e253cab690dc40aeab8d1913d639b9bbff74f53b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bcb57e02b6b4e441088ac6e253cab690dc40aeab8d1913d639b9bbff74f53b6->enter($__internal_8bcb57e02b6b4e441088ac6e253cab690dc40aeab8d1913d639b9bbff74f53b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8bcb57e02b6b4e441088ac6e253cab690dc40aeab8d1913d639b9bbff74f53b6->leave($__internal_8bcb57e02b6b4e441088ac6e253cab690dc40aeab8d1913d639b9bbff74f53b6_prof);

        
        $__internal_d0ef8680ccd49578792e669ef61d46ba03ea56a472ee57982b44ccd6a706555f->leave($__internal_d0ef8680ccd49578792e669ef61d46ba03ea56a472ee57982b44ccd6a706555f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_56025e7207fa070ff1079656b9a37a8ab81da7d8e4847b19b23085285703a9d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56025e7207fa070ff1079656b9a37a8ab81da7d8e4847b19b23085285703a9d1->enter($__internal_56025e7207fa070ff1079656b9a37a8ab81da7d8e4847b19b23085285703a9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_38e6a4d0c75f0b3d9c2aa4ab1dfe3c4857637a6266709b84d9a68dc5627e15dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38e6a4d0c75f0b3d9c2aa4ab1dfe3c4857637a6266709b84d9a68dc5627e15dd->enter($__internal_38e6a4d0c75f0b3d9c2aa4ab1dfe3c4857637a6266709b84d9a68dc5627e15dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_38e6a4d0c75f0b3d9c2aa4ab1dfe3c4857637a6266709b84d9a68dc5627e15dd->leave($__internal_38e6a4d0c75f0b3d9c2aa4ab1dfe3c4857637a6266709b84d9a68dc5627e15dd_prof);

        
        $__internal_56025e7207fa070ff1079656b9a37a8ab81da7d8e4847b19b23085285703a9d1->leave($__internal_56025e7207fa070ff1079656b9a37a8ab81da7d8e4847b19b23085285703a9d1_prof);

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
", "@Twig/layout.html.twig", "/Users/Slote/Desktop/XMR4U/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
