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
        $__internal_f1ccc305c681174ebb97d8bc120789fb8ba2883e4220c27d30dcd145b6ab8dd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1ccc305c681174ebb97d8bc120789fb8ba2883e4220c27d30dcd145b6ab8dd4->enter($__internal_f1ccc305c681174ebb97d8bc120789fb8ba2883e4220c27d30dcd145b6ab8dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_759be1938afd02098c4ee842e09ffb9dfe054abbbbe24d577fe92d51bb551928 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_759be1938afd02098c4ee842e09ffb9dfe054abbbbe24d577fe92d51bb551928->enter($__internal_759be1938afd02098c4ee842e09ffb9dfe054abbbbe24d577fe92d51bb551928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1ccc305c681174ebb97d8bc120789fb8ba2883e4220c27d30dcd145b6ab8dd4->leave($__internal_f1ccc305c681174ebb97d8bc120789fb8ba2883e4220c27d30dcd145b6ab8dd4_prof);

        
        $__internal_759be1938afd02098c4ee842e09ffb9dfe054abbbbe24d577fe92d51bb551928->leave($__internal_759be1938afd02098c4ee842e09ffb9dfe054abbbbe24d577fe92d51bb551928_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_751847ef98ddfe0dd69740e61332fea10aa4a77289310a22d898980f2f608551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_751847ef98ddfe0dd69740e61332fea10aa4a77289310a22d898980f2f608551->enter($__internal_751847ef98ddfe0dd69740e61332fea10aa4a77289310a22d898980f2f608551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_03b4a2c999b930ee5d6b6b9a996b8637cc4c16d2c4e112057f906940b8ac2570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03b4a2c999b930ee5d6b6b9a996b8637cc4c16d2c4e112057f906940b8ac2570->enter($__internal_03b4a2c999b930ee5d6b6b9a996b8637cc4c16d2c4e112057f906940b8ac2570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_03b4a2c999b930ee5d6b6b9a996b8637cc4c16d2c4e112057f906940b8ac2570->leave($__internal_03b4a2c999b930ee5d6b6b9a996b8637cc4c16d2c4e112057f906940b8ac2570_prof);

        
        $__internal_751847ef98ddfe0dd69740e61332fea10aa4a77289310a22d898980f2f608551->leave($__internal_751847ef98ddfe0dd69740e61332fea10aa4a77289310a22d898980f2f608551_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_6cb3b8d6d80e3febe4cd6c91d87aa9511e0316d70a319276f92cdc27d75d8c03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cb3b8d6d80e3febe4cd6c91d87aa9511e0316d70a319276f92cdc27d75d8c03->enter($__internal_6cb3b8d6d80e3febe4cd6c91d87aa9511e0316d70a319276f92cdc27d75d8c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_38cf4ef3957f4c4bfe59e1e31bb16ba4a5840f016223dc3b8cd6c4797507302b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38cf4ef3957f4c4bfe59e1e31bb16ba4a5840f016223dc3b8cd6c4797507302b->enter($__internal_38cf4ef3957f4c4bfe59e1e31bb16ba4a5840f016223dc3b8cd6c4797507302b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_38cf4ef3957f4c4bfe59e1e31bb16ba4a5840f016223dc3b8cd6c4797507302b->leave($__internal_38cf4ef3957f4c4bfe59e1e31bb16ba4a5840f016223dc3b8cd6c4797507302b_prof);

        
        $__internal_6cb3b8d6d80e3febe4cd6c91d87aa9511e0316d70a319276f92cdc27d75d8c03->leave($__internal_6cb3b8d6d80e3febe4cd6c91d87aa9511e0316d70a319276f92cdc27d75d8c03_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fa5fd79f97e4de4240655b0a085a56e83df16c67dc1aac2cad1b36afded875b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa5fd79f97e4de4240655b0a085a56e83df16c67dc1aac2cad1b36afded875b->enter($__internal_9fa5fd79f97e4de4240655b0a085a56e83df16c67dc1aac2cad1b36afded875b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_679f63ddc19f5693d255c493ea775d5506cfe4e357309069671d8e224b8bbb8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_679f63ddc19f5693d255c493ea775d5506cfe4e357309069671d8e224b8bbb8e->enter($__internal_679f63ddc19f5693d255c493ea775d5506cfe4e357309069671d8e224b8bbb8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_679f63ddc19f5693d255c493ea775d5506cfe4e357309069671d8e224b8bbb8e->leave($__internal_679f63ddc19f5693d255c493ea775d5506cfe4e357309069671d8e224b8bbb8e_prof);

        
        $__internal_9fa5fd79f97e4de4240655b0a085a56e83df16c67dc1aac2cad1b36afded875b->leave($__internal_9fa5fd79f97e4de4240655b0a085a56e83df16c67dc1aac2cad1b36afded875b_prof);

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
