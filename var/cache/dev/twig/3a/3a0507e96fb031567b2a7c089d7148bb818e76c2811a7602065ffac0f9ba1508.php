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
        $__internal_20af0d8887c581a27dc14e7d8ffd8727695c6a43cdc8b082c24b91074c9d1323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20af0d8887c581a27dc14e7d8ffd8727695c6a43cdc8b082c24b91074c9d1323->enter($__internal_20af0d8887c581a27dc14e7d8ffd8727695c6a43cdc8b082c24b91074c9d1323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_c6bf23502ef000c361f6bcbe55ef968928e402411d420cac17f7456d7b8fc3ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6bf23502ef000c361f6bcbe55ef968928e402411d420cac17f7456d7b8fc3ba->enter($__internal_c6bf23502ef000c361f6bcbe55ef968928e402411d420cac17f7456d7b8fc3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_20af0d8887c581a27dc14e7d8ffd8727695c6a43cdc8b082c24b91074c9d1323->leave($__internal_20af0d8887c581a27dc14e7d8ffd8727695c6a43cdc8b082c24b91074c9d1323_prof);

        
        $__internal_c6bf23502ef000c361f6bcbe55ef968928e402411d420cac17f7456d7b8fc3ba->leave($__internal_c6bf23502ef000c361f6bcbe55ef968928e402411d420cac17f7456d7b8fc3ba_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3a4765d7c97ec60e0c8af17e4e1b71f82bbfe11a4b23199fdaa22bf3fc77cdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3a4765d7c97ec60e0c8af17e4e1b71f82bbfe11a4b23199fdaa22bf3fc77cdf->enter($__internal_e3a4765d7c97ec60e0c8af17e4e1b71f82bbfe11a4b23199fdaa22bf3fc77cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4cc0566d0d4335aa7725a2fdd433afc18903ad4fe981ec70881e4f078a967e0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cc0566d0d4335aa7725a2fdd433afc18903ad4fe981ec70881e4f078a967e0e->enter($__internal_4cc0566d0d4335aa7725a2fdd433afc18903ad4fe981ec70881e4f078a967e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4cc0566d0d4335aa7725a2fdd433afc18903ad4fe981ec70881e4f078a967e0e->leave($__internal_4cc0566d0d4335aa7725a2fdd433afc18903ad4fe981ec70881e4f078a967e0e_prof);

        
        $__internal_e3a4765d7c97ec60e0c8af17e4e1b71f82bbfe11a4b23199fdaa22bf3fc77cdf->leave($__internal_e3a4765d7c97ec60e0c8af17e4e1b71f82bbfe11a4b23199fdaa22bf3fc77cdf_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f553729e88c6ebfc9be232b0d549f6393350b6041ed89be2f8b885f79078a795 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f553729e88c6ebfc9be232b0d549f6393350b6041ed89be2f8b885f79078a795->enter($__internal_f553729e88c6ebfc9be232b0d549f6393350b6041ed89be2f8b885f79078a795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_daf3edffc86a5fa95e7e2d98ab239e0f58c4084350b44c8251cb85f8b98d2431 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daf3edffc86a5fa95e7e2d98ab239e0f58c4084350b44c8251cb85f8b98d2431->enter($__internal_daf3edffc86a5fa95e7e2d98ab239e0f58c4084350b44c8251cb85f8b98d2431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_daf3edffc86a5fa95e7e2d98ab239e0f58c4084350b44c8251cb85f8b98d2431->leave($__internal_daf3edffc86a5fa95e7e2d98ab239e0f58c4084350b44c8251cb85f8b98d2431_prof);

        
        $__internal_f553729e88c6ebfc9be232b0d549f6393350b6041ed89be2f8b885f79078a795->leave($__internal_f553729e88c6ebfc9be232b0d549f6393350b6041ed89be2f8b885f79078a795_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_97223b351b24da30e80d2d32ddc63ecfc5223c1802dc6c3754b0c28d89fb6944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97223b351b24da30e80d2d32ddc63ecfc5223c1802dc6c3754b0c28d89fb6944->enter($__internal_97223b351b24da30e80d2d32ddc63ecfc5223c1802dc6c3754b0c28d89fb6944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3d89f0ff8562cb07fbd7e3ffa43d5eda9c8d7b00b9615d5a82a180f58a95eb87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d89f0ff8562cb07fbd7e3ffa43d5eda9c8d7b00b9615d5a82a180f58a95eb87->enter($__internal_3d89f0ff8562cb07fbd7e3ffa43d5eda9c8d7b00b9615d5a82a180f58a95eb87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3d89f0ff8562cb07fbd7e3ffa43d5eda9c8d7b00b9615d5a82a180f58a95eb87->leave($__internal_3d89f0ff8562cb07fbd7e3ffa43d5eda9c8d7b00b9615d5a82a180f58a95eb87_prof);

        
        $__internal_97223b351b24da30e80d2d32ddc63ecfc5223c1802dc6c3754b0c28d89fb6944->leave($__internal_97223b351b24da30e80d2d32ddc63ecfc5223c1802dc6c3754b0c28d89fb6944_prof);

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
