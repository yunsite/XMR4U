<?php

/* default/mining.html.twig */
class __TwigTemplate_5c41078a8cf43c3457e25868548571e7395471bd05e6717c7d8a1cc4f6843d5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/mining.html.twig", 1);
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
        $__internal_be4911e6cfcd98a58aa308c258a92ff972b01cf3bf18a2dab8ea67418c7f9464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be4911e6cfcd98a58aa308c258a92ff972b01cf3bf18a2dab8ea67418c7f9464->enter($__internal_be4911e6cfcd98a58aa308c258a92ff972b01cf3bf18a2dab8ea67418c7f9464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/mining.html.twig"));

        $__internal_7d7f3c5028e4b0222d3fc87f8fc8a3d9b7dcd506805300b1992160c194816981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d7f3c5028e4b0222d3fc87f8fc8a3d9b7dcd506805300b1992160c194816981->enter($__internal_7d7f3c5028e4b0222d3fc87f8fc8a3d9b7dcd506805300b1992160c194816981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/mining.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be4911e6cfcd98a58aa308c258a92ff972b01cf3bf18a2dab8ea67418c7f9464->leave($__internal_be4911e6cfcd98a58aa308c258a92ff972b01cf3bf18a2dab8ea67418c7f9464_prof);

        
        $__internal_7d7f3c5028e4b0222d3fc87f8fc8a3d9b7dcd506805300b1992160c194816981->leave($__internal_7d7f3c5028e4b0222d3fc87f8fc8a3d9b7dcd506805300b1992160c194816981_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd40f10eee1e4d557146ba65bc009284a7cd4d9c63402576b098488d3b8815f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd40f10eee1e4d557146ba65bc009284a7cd4d9c63402576b098488d3b8815f4->enter($__internal_cd40f10eee1e4d557146ba65bc009284a7cd4d9c63402576b098488d3b8815f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dae7c00cdd70be7c58c40b1875799427213dbaf13d48f5b62d0e05329a0879bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dae7c00cdd70be7c58c40b1875799427213dbaf13d48f5b62d0e05329a0879bc->enter($__internal_dae7c00cdd70be7c58c40b1875799427213dbaf13d48f5b62d0e05329a0879bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mining";
        
        $__internal_dae7c00cdd70be7c58c40b1875799427213dbaf13d48f5b62d0e05329a0879bc->leave($__internal_dae7c00cdd70be7c58c40b1875799427213dbaf13d48f5b62d0e05329a0879bc_prof);

        
        $__internal_cd40f10eee1e4d557146ba65bc009284a7cd4d9c63402576b098488d3b8815f4->leave($__internal_cd40f10eee1e4d557146ba65bc009284a7cd4d9c63402576b098488d3b8815f4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0796efb69e1aed189af5d220524d0501d6afeb5fd5fc5f0cba7f3702bed9eae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0796efb69e1aed189af5d220524d0501d6afeb5fd5fc5f0cba7f3702bed9eae->enter($__internal_c0796efb69e1aed189af5d220524d0501d6afeb5fd5fc5f0cba7f3702bed9eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_89718c0d08916905845ffc90c289478ca4419272fc478d455cd958893e39603e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89718c0d08916905845ffc90c289478ca4419272fc478d455cd958893e39603e->enter($__internal_89718c0d08916905845ffc90c289478ca4419272fc478d455cd958893e39603e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<!-- start: content -->
\t<div id=\"content\">
\t\t<div class=\"panel\">
\t\t\t<div class=\"panel-body\">
\t\t\t\t<div class=\"col-md-6 col-sm-12\">
\t\t\t\t\t<h3 class=\"animated fadeInLeft\">Configuration WebMiner</h3>
\t\t\t\t\t<p class=\"animated fadeInDown\"><span class=\"fa fa-certificate\"></span> Anonymous Crypto Mining</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-12\" style=\"padding:20px;\">
\t\t\t<div class=\"col-md-12 padding-0\">
\t\t\t\t<div class=\"col-md-12 padding-0\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"panel box-v4\">
\t\t\t\t\t\t\t<div class=\"panel-heading bg-white border-none\">
\t\t\t\t\t\t\t\t<h4><span class=\"icon-check icons\"></span> Mining</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-body padding-0\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-xs-12 col-md-12 padding-0 box-v4-alert\">
\t\t\t\t\t\t\t\t\t<h2>Start Anonymous Mining!</h2>
\t\t\t\t\t\t\t\t\t<p>Your Mining Stats for <a href=\"https://supportxmr.com\" target=\"_blank\">Pool</a>.</p>
\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/miner.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel box-v1\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading bg-white border-none\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-6 text-left padding-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"text-left\">Speed</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-6 text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-user icons icon text-right\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1 id=\"sp\"></h1>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Hash/s</p>
\t\t\t\t\t\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel box-v1\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading bg-white border-none\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-6 text-left padding-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"text-left\">Hash Total</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-6 text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-basket-loaded icons icon text-right\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1 id=\"th\"></h1>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Hash</p>
\t\t\t\t\t\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel box-v1\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading bg-white border-none\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-6 text-left padding-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"text-left\">Hash Accepted</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-6 text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-basket-loaded icons icon text-right\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1 id=\"ah\"></h1>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Hash</p>
\t\t\t\t\t\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"btn btn-danger\">Stop</a>
\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\tvar isUnderSSL = (location.protocol === 'https:');
\t\t\t\t\t\t\t\t\tCoinHive.CONFIG.WEBSOCKET_SHARDS = [[ (isUnderSSL ? \"wss://\" : \"ws://\") + \"localhost:8892/proxy\"]];
\t\t\t\t\t\t\t\t\tvar miner = new CoinHive.User('";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new Twig_Error_Runtime('Variable "wallet" does not exist.', 90, $this->getSourceContext()); })()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new Twig_Error_Runtime('Variable "username" does not exist.', 90, $this->getSourceContext()); })()), "html", null, true);
        echo "');
\t\t\t\t\t\t\t\t\tsetInterval(function() {
\t\t\t\t\t\t\t\t\tvar hashesPerSecond = miner.getHashesPerSecond();
\t\t\t\t\t\t\t\t\tvar totalHashes = miner.getTotalHashes();
\t\t\t\t\t\t\t\t\tvar acceptedHashes = miner.getAcceptedHashes();
\t\t\t\t\t\t\t\t\tdocument.getElementById(\"sp\").innerHTML = hashesPerSecond.toFixed(2);
\t\t\t\t\t\t\t\t\tdocument.getElementById(\"th\").innerHTML = totalHashes;
\t\t\t\t\t\t\t\t\tdocument.getElementById(\"ah\").innerHTML = acceptedHashes;
\t\t\t\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\t\t\t\tminer.start();
\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- end: content -->
";
        
        $__internal_89718c0d08916905845ffc90c289478ca4419272fc478d455cd958893e39603e->leave($__internal_89718c0d08916905845ffc90c289478ca4419272fc478d455cd958893e39603e_prof);

        
        $__internal_c0796efb69e1aed189af5d220524d0501d6afeb5fd5fc5f0cba7f3702bed9eae->leave($__internal_c0796efb69e1aed189af5d220524d0501d6afeb5fd5fc5f0cba7f3702bed9eae_prof);

    }

    public function getTemplateName()
    {
        return "default/mining.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 90,  155 => 86,  93 => 27,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Mining{% endblock %}
{% block body %}
\t<!-- start: content -->
\t<div id=\"content\">
\t\t<div class=\"panel\">
\t\t\t<div class=\"panel-body\">
\t\t\t\t<div class=\"col-md-6 col-sm-12\">
\t\t\t\t\t<h3 class=\"animated fadeInLeft\">Configuration WebMiner</h3>
\t\t\t\t\t<p class=\"animated fadeInDown\"><span class=\"fa fa-certificate\"></span> Anonymous Crypto Mining</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-12\" style=\"padding:20px;\">
\t\t\t<div class=\"col-md-12 padding-0\">
\t\t\t\t<div class=\"col-md-12 padding-0\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"panel box-v4\">
\t\t\t\t\t\t\t<div class=\"panel-heading bg-white border-none\">
\t\t\t\t\t\t\t\t<h4><span class=\"icon-check icons\"></span> Mining</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-body padding-0\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-xs-12 col-md-12 padding-0 box-v4-alert\">
\t\t\t\t\t\t\t\t\t<h2>Start Anonymous Mining!</h2>
\t\t\t\t\t\t\t\t\t<p>Your Mining Stats for <a href=\"https://supportxmr.com\" target=\"_blank\">Pool</a>.</p>
\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t<script src=\"{{ asset('build/miner.js') }}\"></script>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel box-v1\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading bg-white border-none\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-6 text-left padding-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"text-left\">Speed</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-6 text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-user icons icon text-right\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1 id=\"sp\"></h1>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Hash/s</p>
\t\t\t\t\t\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel box-v1\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading bg-white border-none\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-6 text-left padding-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"text-left\">Hash Total</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-6 text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-basket-loaded icons icon text-right\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1 id=\"th\"></h1>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Hash</p>
\t\t\t\t\t\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel box-v1\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading bg-white border-none\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-6 text-left padding-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"text-left\">Hash Accepted</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-6 text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-basket-loaded icons icon text-right\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1 id=\"ah\"></h1>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Hash</p>
\t\t\t\t\t\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t<a href=\"{{path('index')}}\" class=\"btn btn-danger\">Stop</a>
\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\tvar isUnderSSL = (location.protocol === 'https:');
\t\t\t\t\t\t\t\t\tCoinHive.CONFIG.WEBSOCKET_SHARDS = [[ (isUnderSSL ? \"wss://\" : \"ws://\") + \"localhost:8892/proxy\"]];
\t\t\t\t\t\t\t\t\tvar miner = new CoinHive.User('{{wallet}}', '{{username}}');
\t\t\t\t\t\t\t\t\tsetInterval(function() {
\t\t\t\t\t\t\t\t\tvar hashesPerSecond = miner.getHashesPerSecond();
\t\t\t\t\t\t\t\t\tvar totalHashes = miner.getTotalHashes();
\t\t\t\t\t\t\t\t\tvar acceptedHashes = miner.getAcceptedHashes();
\t\t\t\t\t\t\t\t\tdocument.getElementById(\"sp\").innerHTML = hashesPerSecond.toFixed(2);
\t\t\t\t\t\t\t\t\tdocument.getElementById(\"th\").innerHTML = totalHashes;
\t\t\t\t\t\t\t\t\tdocument.getElementById(\"ah\").innerHTML = acceptedHashes;
\t\t\t\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\t\t\t\tminer.start();
\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- end: content -->
{% endblock %}", "default/mining.html.twig", "/var/www/miner/templates/default/mining.html.twig");
    }
}
