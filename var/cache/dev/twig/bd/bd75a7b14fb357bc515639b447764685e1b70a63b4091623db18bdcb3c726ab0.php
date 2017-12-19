<?php

/* default/index.html.twig */
class __TwigTemplate_595b1550d1f98866fd0b897f7bea4915a312cc51c0101bf2f150d7b8148e2c22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac1f503cffb8899bb4631fc3131a362b178b918877318926488f6d904d9bc78e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac1f503cffb8899bb4631fc3131a362b178b918877318926488f6d904d9bc78e->enter($__internal_ac1f503cffb8899bb4631fc3131a362b178b918877318926488f6d904d9bc78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_4d070cf1881f7ba5f8da16d484c11d2851b983b7042fb9169931769b59324a49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d070cf1881f7ba5f8da16d484c11d2851b983b7042fb9169931769b59324a49->enter($__internal_4d070cf1881f7ba5f8da16d484c11d2851b983b7042fb9169931769b59324a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac1f503cffb8899bb4631fc3131a362b178b918877318926488f6d904d9bc78e->leave($__internal_ac1f503cffb8899bb4631fc3131a362b178b918877318926488f6d904d9bc78e_prof);

        
        $__internal_4d070cf1881f7ba5f8da16d484c11d2851b983b7042fb9169931769b59324a49->leave($__internal_4d070cf1881f7ba5f8da16d484c11d2851b983b7042fb9169931769b59324a49_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_08f122ba1b6e3d905d9e24f7b0db09b7dd61ce3e73d7de39135847b3a8d1769b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08f122ba1b6e3d905d9e24f7b0db09b7dd61ce3e73d7de39135847b3a8d1769b->enter($__internal_08f122ba1b6e3d905d9e24f7b0db09b7dd61ce3e73d7de39135847b3a8d1769b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_db7807f91dd771821488b313d8e5f318c04d1ca3956a605eca41b4dd2523b21b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db7807f91dd771821488b313d8e5f318c04d1ca3956a605eca41b4dd2523b21b->enter($__internal_db7807f91dd771821488b313d8e5f318c04d1ca3956a605eca41b4dd2523b21b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Configuration";
        
        $__internal_db7807f91dd771821488b313d8e5f318c04d1ca3956a605eca41b4dd2523b21b->leave($__internal_db7807f91dd771821488b313d8e5f318c04d1ca3956a605eca41b4dd2523b21b_prof);

        
        $__internal_08f122ba1b6e3d905d9e24f7b0db09b7dd61ce3e73d7de39135847b3a8d1769b->leave($__internal_08f122ba1b6e3d905d9e24f7b0db09b7dd61ce3e73d7de39135847b3a8d1769b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc8498b3be43052c96e48e8a5872b51eeb423dc061b9756c02ecc604f32cffbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc8498b3be43052c96e48e8a5872b51eeb423dc061b9756c02ecc604f32cffbf->enter($__internal_cc8498b3be43052c96e48e8a5872b51eeb423dc061b9756c02ecc604f32cffbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a5936623bda69f1da8ef5a51ad9986c0bb69d04fd6b3553954f8d8f6d854afac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5936623bda69f1da8ef5a51ad9986c0bb69d04fd6b3553954f8d8f6d854afac->enter($__internal_a5936623bda69f1da8ef5a51ad9986c0bb69d04fd6b3553954f8d8f6d854afac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<!-- start: content -->
\t<div id=\"content\">
\t\t<div class=\"panel\">
\t\t\t<div class=\"panel-body\">
\t\t\t\t<div class=\"col-md-6 col-sm-12\">
\t\t\t\t\t<h3 class=\"animated fadeInLeft\">Setup your Web Miner !</h3>
\t\t\t\t\t<p class=\"animated fadeInDown\"><span class=\"icon-ghost icons\"></span> Anonymous Crypto Mining</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-12\" style=\"padding:20px;\">
\t\t\t<div class=\"col-md-12 padding-0\">
\t\t\t\t<div class=\"col-md-12 padding-0\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"panel box-v4\">
\t\t\t\t\t\t\t<div class=\"panel-heading bg-white border-none\">
\t\t\t\t\t\t\t\t<h3><span class=\"icon-energy icons\"></span> Mining</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-body padding-0\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-xs-12 col-md-12 padding-0 box-v4-alert\">
\t\t\t\t\t\t\t\t\t<h2>Start Anonymous Mining!</h2>
\t\t\t\t\t\t\t\t\t<p>Create your Monero Wallet (<a href=\"https://mymonero.com/#/\" target=\"_blank\">MyMonero</a>) & Go !</p>
\t\t\t\t\t\t\t\t\t<b><span class=\"icon-ghost icons\"></span> Anonymous Mining</b>
\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), 'form_start');
        echo "
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" id=\"basic-addon1\">\$</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->getSourceContext()); })()), "wallet", array()), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "wallet", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" id=\"basic-addon1\">@</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), "username", array()), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->getSourceContext()); })()), "username", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group form-animate-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"checkbox\"  id=\"validate_agree\" name=\"validate_agree\" required=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<label>Please agree to our policy</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->getSourceContext()); })()), 'form_end');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"panel box-v4\">
\t\t\t\t\t\t\t<div class=\"panel-heading bg-white border-none\">
\t\t\t\t\t\t\t\t<h3><i class=\"fa fa-area-chart\"></i> Chart</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-body padding-0\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-xs-12 col-md-12 padding-0 box-v4-alert\">
\t\t\t\t\t\t\t\t";
        // line 64
        $this->loadTemplate("_chart.html.twig", "default/index.html.twig", 64)->display($context);
        // line 65
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- end: content -->
";
        
        $__internal_a5936623bda69f1da8ef5a51ad9986c0bb69d04fd6b3553954f8d8f6d854afac->leave($__internal_a5936623bda69f1da8ef5a51ad9986c0bb69d04fd6b3553954f8d8f6d854afac_prof);

        
        $__internal_cc8498b3be43052c96e48e8a5872b51eeb423dc061b9756c02ecc604f32cffbf->leave($__internal_cc8498b3be43052c96e48e8a5872b51eeb423dc061b9756c02ecc604f32cffbf_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 65,  148 => 64,  133 => 52,  119 => 41,  115 => 40,  106 => 34,  102 => 33,  94 => 28,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Configuration{% endblock %}
{% block body %}
\t<!-- start: content -->
\t<div id=\"content\">
\t\t<div class=\"panel\">
\t\t\t<div class=\"panel-body\">
\t\t\t\t<div class=\"col-md-6 col-sm-12\">
\t\t\t\t\t<h3 class=\"animated fadeInLeft\">Setup your Web Miner !</h3>
\t\t\t\t\t<p class=\"animated fadeInDown\"><span class=\"icon-ghost icons\"></span> Anonymous Crypto Mining</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-12\" style=\"padding:20px;\">
\t\t\t<div class=\"col-md-12 padding-0\">
\t\t\t\t<div class=\"col-md-12 padding-0\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"panel box-v4\">
\t\t\t\t\t\t\t<div class=\"panel-heading bg-white border-none\">
\t\t\t\t\t\t\t\t<h3><span class=\"icon-energy icons\"></span> Mining</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-body padding-0\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-xs-12 col-md-12 padding-0 box-v4-alert\">
\t\t\t\t\t\t\t\t\t<h2>Start Anonymous Mining!</h2>
\t\t\t\t\t\t\t\t\t<p>Create your Monero Wallet (<a href=\"https://mymonero.com/#/\" target=\"_blank\">MyMonero</a>) & Go !</p>
\t\t\t\t\t\t\t\t\t<b><span class=\"icon-ghost icons\"></span> Anonymous Mining</b>
\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t{{ form_start(form) }}
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" id=\"basic-addon1\">\$</span>
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.wallet) }}
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.wallet) }}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" id=\"basic-addon1\">@</span>
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.username) }}
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.username) }}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group form-animate-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"checkbox\"  id=\"validate_agree\" name=\"validate_agree\" required=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<label>Please agree to our policy</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"panel box-v4\">
\t\t\t\t\t\t\t<div class=\"panel-heading bg-white border-none\">
\t\t\t\t\t\t\t\t<h3><i class=\"fa fa-area-chart\"></i> Chart</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-body padding-0\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-xs-12 col-md-12 padding-0 box-v4-alert\">
\t\t\t\t\t\t\t\t{% include '_chart.html.twig' %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- end: content -->
{% endblock %}", "default/index.html.twig", "/Users/Slote/Desktop/XMR4U/templates/default/index.html.twig");
    }
}
