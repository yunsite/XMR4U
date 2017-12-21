<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e38019d03c798e5b89744ec05b52785c4f68b5dae27936ac190159cb7f1d8228 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3cf24fadbc85fc91a3ca6b4c0074d1d34c987f52e50b721b04e78ec4873f668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3cf24fadbc85fc91a3ca6b4c0074d1d34c987f52e50b721b04e78ec4873f668->enter($__internal_f3cf24fadbc85fc91a3ca6b4c0074d1d34c987f52e50b721b04e78ec4873f668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_4717fb492268d311bd9b0ece3f7e9480551d207101c5ef63e6d7e6a0d9618a01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4717fb492268d311bd9b0ece3f7e9480551d207101c5ef63e6d7e6a0d9618a01->enter($__internal_4717fb492268d311bd9b0ece3f7e9480551d207101c5ef63e6d7e6a0d9618a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3cf24fadbc85fc91a3ca6b4c0074d1d34c987f52e50b721b04e78ec4873f668->leave($__internal_f3cf24fadbc85fc91a3ca6b4c0074d1d34c987f52e50b721b04e78ec4873f668_prof);

        
        $__internal_4717fb492268d311bd9b0ece3f7e9480551d207101c5ef63e6d7e6a0d9618a01->leave($__internal_4717fb492268d311bd9b0ece3f7e9480551d207101c5ef63e6d7e6a0d9618a01_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_423220b787f90762d3b9bfbbfa3febafbe007fcfb675741e14b280a2ae7786ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_423220b787f90762d3b9bfbbfa3febafbe007fcfb675741e14b280a2ae7786ce->enter($__internal_423220b787f90762d3b9bfbbfa3febafbe007fcfb675741e14b280a2ae7786ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bb954459ca1ab6d65511a6469b2253d4e9a34b9c8c376807320bec029c2ff4a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb954459ca1ab6d65511a6469b2253d4e9a34b9c8c376807320bec029c2ff4a0->enter($__internal_bb954459ca1ab6d65511a6469b2253d4e9a34b9c8c376807320bec029c2ff4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_bb954459ca1ab6d65511a6469b2253d4e9a34b9c8c376807320bec029c2ff4a0->leave($__internal_bb954459ca1ab6d65511a6469b2253d4e9a34b9c8c376807320bec029c2ff4a0_prof);

        
        $__internal_423220b787f90762d3b9bfbbfa3febafbe007fcfb675741e14b280a2ae7786ce->leave($__internal_423220b787f90762d3b9bfbbfa3febafbe007fcfb675741e14b280a2ae7786ce_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_90c876a2b755b0ff2e5a9a89bcc4b02dc88190d185cb802e9eaa118b95b322dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90c876a2b755b0ff2e5a9a89bcc4b02dc88190d185cb802e9eaa118b95b322dd->enter($__internal_90c876a2b755b0ff2e5a9a89bcc4b02dc88190d185cb802e9eaa118b95b322dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1a9b7511f9d0ceba70c0b67cb2b7a37516212916af1ccb322e1ef0e65f318d8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a9b7511f9d0ceba70c0b67cb2b7a37516212916af1ccb322e1ef0e65f318d8b->enter($__internal_1a9b7511f9d0ceba70c0b67cb2b7a37516212916af1ccb322e1ef0e65f318d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_1a9b7511f9d0ceba70c0b67cb2b7a37516212916af1ccb322e1ef0e65f318d8b->leave($__internal_1a9b7511f9d0ceba70c0b67cb2b7a37516212916af1ccb322e1ef0e65f318d8b_prof);

        
        $__internal_90c876a2b755b0ff2e5a9a89bcc4b02dc88190d185cb802e9eaa118b95b322dd->leave($__internal_90c876a2b755b0ff2e5a9a89bcc4b02dc88190d185cb802e9eaa118b95b322dd_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_77d1ea439de1415215142fae21191b618bee69a7f07d8bfa77ad80650e87df3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77d1ea439de1415215142fae21191b618bee69a7f07d8bfa77ad80650e87df3e->enter($__internal_77d1ea439de1415215142fae21191b618bee69a7f07d8bfa77ad80650e87df3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d7a4f3e8a91374638767829fb1327048f86af13b7ad708a7dcdc7eb5eda21ff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7a4f3e8a91374638767829fb1327048f86af13b7ad708a7dcdc7eb5eda21ff7->enter($__internal_d7a4f3e8a91374638767829fb1327048f86af13b7ad708a7dcdc7eb5eda21ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_d7a4f3e8a91374638767829fb1327048f86af13b7ad708a7dcdc7eb5eda21ff7->leave($__internal_d7a4f3e8a91374638767829fb1327048f86af13b7ad708a7dcdc7eb5eda21ff7_prof);

        
        $__internal_77d1ea439de1415215142fae21191b618bee69a7f07d8bfa77ad80650e87df3e->leave($__internal_77d1ea439de1415215142fae21191b618bee69a7f07d8bfa77ad80650e87df3e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/Slote/Desktop/XMR4U/vendor/symfony/twig-bundle/Resources/views/Exception/exception_full.html.twig");
    }
}
