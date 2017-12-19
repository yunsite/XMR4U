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
        $__internal_3f7bac263197ef2b9f3c6806cd34aacd35593f65b05431f50250865e3f6edd45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f7bac263197ef2b9f3c6806cd34aacd35593f65b05431f50250865e3f6edd45->enter($__internal_3f7bac263197ef2b9f3c6806cd34aacd35593f65b05431f50250865e3f6edd45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/mining.html.twig"));

        $__internal_ff4b2b203f3c79dc106effc05f1bba2e06460180f8ab2f087054560da42bd4db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff4b2b203f3c79dc106effc05f1bba2e06460180f8ab2f087054560da42bd4db->enter($__internal_ff4b2b203f3c79dc106effc05f1bba2e06460180f8ab2f087054560da42bd4db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/mining.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f7bac263197ef2b9f3c6806cd34aacd35593f65b05431f50250865e3f6edd45->leave($__internal_3f7bac263197ef2b9f3c6806cd34aacd35593f65b05431f50250865e3f6edd45_prof);

        
        $__internal_ff4b2b203f3c79dc106effc05f1bba2e06460180f8ab2f087054560da42bd4db->leave($__internal_ff4b2b203f3c79dc106effc05f1bba2e06460180f8ab2f087054560da42bd4db_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_37696ab64f3959677842b69bc7ebd5c1440efc7d719054a04a9d3dbee852bd98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37696ab64f3959677842b69bc7ebd5c1440efc7d719054a04a9d3dbee852bd98->enter($__internal_37696ab64f3959677842b69bc7ebd5c1440efc7d719054a04a9d3dbee852bd98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_763145e257d2eac0f4de956077b201bdfb572e739e799dd5a73de1eb59c75675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_763145e257d2eac0f4de956077b201bdfb572e739e799dd5a73de1eb59c75675->enter($__internal_763145e257d2eac0f4de956077b201bdfb572e739e799dd5a73de1eb59c75675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mining";
        
        $__internal_763145e257d2eac0f4de956077b201bdfb572e739e799dd5a73de1eb59c75675->leave($__internal_763145e257d2eac0f4de956077b201bdfb572e739e799dd5a73de1eb59c75675_prof);

        
        $__internal_37696ab64f3959677842b69bc7ebd5c1440efc7d719054a04a9d3dbee852bd98->leave($__internal_37696ab64f3959677842b69bc7ebd5c1440efc7d719054a04a9d3dbee852bd98_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_faab7e0d92bc0ab2c6c222e302605c1d09653cfa9008828a79dc50359a7fcc30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faab7e0d92bc0ab2c6c222e302605c1d09653cfa9008828a79dc50359a7fcc30->enter($__internal_faab7e0d92bc0ab2c6c222e302605c1d09653cfa9008828a79dc50359a7fcc30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2d4f90fa5b858c914032786f302862f7452b69308a82048aec9fd335af54e7d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d4f90fa5b858c914032786f302862f7452b69308a82048aec9fd335af54e7d6->enter($__internal_2d4f90fa5b858c914032786f302862f7452b69308a82048aec9fd335af54e7d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t\t\t\t\t\t\t<h3><span class=\"icon-check icons\"></span> Mining</h3>
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
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"panel box-v4\">
\t\t\t\t\t\t\t<div class=\"panel-heading bg-white border-none\">
\t\t\t\t\t\t\t\t<h3><i class=\"fa fa-area-chart\"></i> Chart</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-body padding-0\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-xs-12 col-md-12 padding-0 box-v4-alert\">
\t\t\t\t\t\t\t\t";
        // line 112
        $this->loadTemplate("_chart.html.twig", "default/mining.html.twig", 112)->display($context);
        // line 113
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
        
        $__internal_2d4f90fa5b858c914032786f302862f7452b69308a82048aec9fd335af54e7d6->leave($__internal_2d4f90fa5b858c914032786f302862f7452b69308a82048aec9fd335af54e7d6_prof);

        
        $__internal_faab7e0d92bc0ab2c6c222e302605c1d09653cfa9008828a79dc50359a7fcc30->leave($__internal_faab7e0d92bc0ab2c6c222e302605c1d09653cfa9008828a79dc50359a7fcc30_prof);

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
        return array (  191 => 113,  189 => 112,  162 => 90,  155 => 86,  93 => 27,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
\t\t\t\t\t\t\t\t<h3><span class=\"icon-check icons\"></span> Mining</h3>
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
{% endblock %}", "default/mining.html.twig", "/Users/Slote/Desktop/XMR4U/templates/default/mining.html.twig");
    }
}
