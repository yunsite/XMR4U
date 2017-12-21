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
        $__internal_30f585bbbfe7a1e7530a06f1a2a7bd8a142f3fc8b0c52600ef69cca65478cb68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30f585bbbfe7a1e7530a06f1a2a7bd8a142f3fc8b0c52600ef69cca65478cb68->enter($__internal_30f585bbbfe7a1e7530a06f1a2a7bd8a142f3fc8b0c52600ef69cca65478cb68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_28fc27838f547442d29bb9f9b1a4d88095a7fdea47878d0c20a467faf4545013 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28fc27838f547442d29bb9f9b1a4d88095a7fdea47878d0c20a467faf4545013->enter($__internal_28fc27838f547442d29bb9f9b1a4d88095a7fdea47878d0c20a467faf4545013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30f585bbbfe7a1e7530a06f1a2a7bd8a142f3fc8b0c52600ef69cca65478cb68->leave($__internal_30f585bbbfe7a1e7530a06f1a2a7bd8a142f3fc8b0c52600ef69cca65478cb68_prof);

        
        $__internal_28fc27838f547442d29bb9f9b1a4d88095a7fdea47878d0c20a467faf4545013->leave($__internal_28fc27838f547442d29bb9f9b1a4d88095a7fdea47878d0c20a467faf4545013_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_68a76d9f1af98c1ba1075b3f6c4b4c162635b743ac22d4ce74c5b23cddcf2a30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68a76d9f1af98c1ba1075b3f6c4b4c162635b743ac22d4ce74c5b23cddcf2a30->enter($__internal_68a76d9f1af98c1ba1075b3f6c4b4c162635b743ac22d4ce74c5b23cddcf2a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_11d0577c87ff7b5ab74a6f2138192f1545ec50910055c431ea34c30adb743f51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11d0577c87ff7b5ab74a6f2138192f1545ec50910055c431ea34c30adb743f51->enter($__internal_11d0577c87ff7b5ab74a6f2138192f1545ec50910055c431ea34c30adb743f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_11d0577c87ff7b5ab74a6f2138192f1545ec50910055c431ea34c30adb743f51->leave($__internal_11d0577c87ff7b5ab74a6f2138192f1545ec50910055c431ea34c30adb743f51_prof);

        
        $__internal_68a76d9f1af98c1ba1075b3f6c4b4c162635b743ac22d4ce74c5b23cddcf2a30->leave($__internal_68a76d9f1af98c1ba1075b3f6c4b4c162635b743ac22d4ce74c5b23cddcf2a30_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f59187285a40f67bb4561fb9ab803d90792f97b12a45c5ba254bfdeefea973c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f59187285a40f67bb4561fb9ab803d90792f97b12a45c5ba254bfdeefea973c->enter($__internal_3f59187285a40f67bb4561fb9ab803d90792f97b12a45c5ba254bfdeefea973c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_808ac5de78f1670a1d58e43dacb833539927830928fe3851831d52247095e59e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_808ac5de78f1670a1d58e43dacb833539927830928fe3851831d52247095e59e->enter($__internal_808ac5de78f1670a1d58e43dacb833539927830928fe3851831d52247095e59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_808ac5de78f1670a1d58e43dacb833539927830928fe3851831d52247095e59e->leave($__internal_808ac5de78f1670a1d58e43dacb833539927830928fe3851831d52247095e59e_prof);

        
        $__internal_3f59187285a40f67bb4561fb9ab803d90792f97b12a45c5ba254bfdeefea973c->leave($__internal_3f59187285a40f67bb4561fb9ab803d90792f97b12a45c5ba254bfdeefea973c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0df8531a29116f7a2a5b3eb97d5692dfc91480cb29b2b21466ae3cd8c55ed8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0df8531a29116f7a2a5b3eb97d5692dfc91480cb29b2b21466ae3cd8c55ed8f->enter($__internal_f0df8531a29116f7a2a5b3eb97d5692dfc91480cb29b2b21466ae3cd8c55ed8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_41c8e2872fe8a9eba087528193c756d8cec81ff821a372446d627db175c2b569 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41c8e2872fe8a9eba087528193c756d8cec81ff821a372446d627db175c2b569->enter($__internal_41c8e2872fe8a9eba087528193c756d8cec81ff821a372446d627db175c2b569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_41c8e2872fe8a9eba087528193c756d8cec81ff821a372446d627db175c2b569->leave($__internal_41c8e2872fe8a9eba087528193c756d8cec81ff821a372446d627db175c2b569_prof);

        
        $__internal_f0df8531a29116f7a2a5b3eb97d5692dfc91480cb29b2b21466ae3cd8c55ed8f->leave($__internal_f0df8531a29116f7a2a5b3eb97d5692dfc91480cb29b2b21466ae3cd8c55ed8f_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/var/www/miner/vendor/symfony/twig-bundle/Resources/views/Exception/exception_full.html.twig");
    }
}
