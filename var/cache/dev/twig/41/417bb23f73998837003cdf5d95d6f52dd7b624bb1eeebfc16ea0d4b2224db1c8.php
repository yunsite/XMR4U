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
        $__internal_17b91a97a66438f15d9f5820984bcc697ff2fadefd34d5af2f7d6ff0f781bdab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17b91a97a66438f15d9f5820984bcc697ff2fadefd34d5af2f7d6ff0f781bdab->enter($__internal_17b91a97a66438f15d9f5820984bcc697ff2fadefd34d5af2f7d6ff0f781bdab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b99135a557e9cca16a03d7b76fac3fced2f19ab841e3c53750447906b9ceaf85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b99135a557e9cca16a03d7b76fac3fced2f19ab841e3c53750447906b9ceaf85->enter($__internal_b99135a557e9cca16a03d7b76fac3fced2f19ab841e3c53750447906b9ceaf85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17b91a97a66438f15d9f5820984bcc697ff2fadefd34d5af2f7d6ff0f781bdab->leave($__internal_17b91a97a66438f15d9f5820984bcc697ff2fadefd34d5af2f7d6ff0f781bdab_prof);

        
        $__internal_b99135a557e9cca16a03d7b76fac3fced2f19ab841e3c53750447906b9ceaf85->leave($__internal_b99135a557e9cca16a03d7b76fac3fced2f19ab841e3c53750447906b9ceaf85_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_25f7fab2b278d0655e19df804834e46d2cedb31c52bb59f3d279bc354fe8aa7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25f7fab2b278d0655e19df804834e46d2cedb31c52bb59f3d279bc354fe8aa7c->enter($__internal_25f7fab2b278d0655e19df804834e46d2cedb31c52bb59f3d279bc354fe8aa7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4e59635dd955c0bb28131398dca352e8c4447604195fb5b84abab55a78bfff94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e59635dd955c0bb28131398dca352e8c4447604195fb5b84abab55a78bfff94->enter($__internal_4e59635dd955c0bb28131398dca352e8c4447604195fb5b84abab55a78bfff94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4e59635dd955c0bb28131398dca352e8c4447604195fb5b84abab55a78bfff94->leave($__internal_4e59635dd955c0bb28131398dca352e8c4447604195fb5b84abab55a78bfff94_prof);

        
        $__internal_25f7fab2b278d0655e19df804834e46d2cedb31c52bb59f3d279bc354fe8aa7c->leave($__internal_25f7fab2b278d0655e19df804834e46d2cedb31c52bb59f3d279bc354fe8aa7c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_5fde837e160279a40892556716307e496a056bef80b1538a679fc972c85fa636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fde837e160279a40892556716307e496a056bef80b1538a679fc972c85fa636->enter($__internal_5fde837e160279a40892556716307e496a056bef80b1538a679fc972c85fa636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e5dcd229542839de2c73edf3d8b0601c28f7f65b4d9dcd3fcbe38c73d5c8bc92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5dcd229542839de2c73edf3d8b0601c28f7f65b4d9dcd3fcbe38c73d5c8bc92->enter($__internal_e5dcd229542839de2c73edf3d8b0601c28f7f65b4d9dcd3fcbe38c73d5c8bc92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_e5dcd229542839de2c73edf3d8b0601c28f7f65b4d9dcd3fcbe38c73d5c8bc92->leave($__internal_e5dcd229542839de2c73edf3d8b0601c28f7f65b4d9dcd3fcbe38c73d5c8bc92_prof);

        
        $__internal_5fde837e160279a40892556716307e496a056bef80b1538a679fc972c85fa636->leave($__internal_5fde837e160279a40892556716307e496a056bef80b1538a679fc972c85fa636_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3046c7d08939755d50f8dda2e861e8d2fb23a7a3e5f0099ce339766470cc13fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3046c7d08939755d50f8dda2e861e8d2fb23a7a3e5f0099ce339766470cc13fe->enter($__internal_3046c7d08939755d50f8dda2e861e8d2fb23a7a3e5f0099ce339766470cc13fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8756c39d71747da5f0981905b1150b9294e9e51b3f0cac2d0aa05545a0fb8414 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8756c39d71747da5f0981905b1150b9294e9e51b3f0cac2d0aa05545a0fb8414->enter($__internal_8756c39d71747da5f0981905b1150b9294e9e51b3f0cac2d0aa05545a0fb8414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_8756c39d71747da5f0981905b1150b9294e9e51b3f0cac2d0aa05545a0fb8414->leave($__internal_8756c39d71747da5f0981905b1150b9294e9e51b3f0cac2d0aa05545a0fb8414_prof);

        
        $__internal_3046c7d08939755d50f8dda2e861e8d2fb23a7a3e5f0099ce339766470cc13fe->leave($__internal_3046c7d08939755d50f8dda2e861e8d2fb23a7a3e5f0099ce339766470cc13fe_prof);

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
