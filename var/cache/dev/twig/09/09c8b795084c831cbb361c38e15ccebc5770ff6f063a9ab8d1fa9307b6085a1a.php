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
        $__internal_c96b6d40af53632f2c8655af2fc196cda3d0e17531369a45b6355a7f58b8d4af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c96b6d40af53632f2c8655af2fc196cda3d0e17531369a45b6355a7f58b8d4af->enter($__internal_c96b6d40af53632f2c8655af2fc196cda3d0e17531369a45b6355a7f58b8d4af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/mining.html.twig"));

        $__internal_1ae0c29d79d0d5af1b10d91de04412ed9477bec08e022403b50a970abcc512e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ae0c29d79d0d5af1b10d91de04412ed9477bec08e022403b50a970abcc512e2->enter($__internal_1ae0c29d79d0d5af1b10d91de04412ed9477bec08e022403b50a970abcc512e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/mining.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c96b6d40af53632f2c8655af2fc196cda3d0e17531369a45b6355a7f58b8d4af->leave($__internal_c96b6d40af53632f2c8655af2fc196cda3d0e17531369a45b6355a7f58b8d4af_prof);

        
        $__internal_1ae0c29d79d0d5af1b10d91de04412ed9477bec08e022403b50a970abcc512e2->leave($__internal_1ae0c29d79d0d5af1b10d91de04412ed9477bec08e022403b50a970abcc512e2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2bc14966e3061997181043a05eda7e27e452153cf03bb7f30fab0c5ddd3de6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2bc14966e3061997181043a05eda7e27e452153cf03bb7f30fab0c5ddd3de6d->enter($__internal_f2bc14966e3061997181043a05eda7e27e452153cf03bb7f30fab0c5ddd3de6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bece7a7018ec5151726fc7497b0aae2c5c51cd41ef5ed605a6582ea14b75b8c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bece7a7018ec5151726fc7497b0aae2c5c51cd41ef5ed605a6582ea14b75b8c1->enter($__internal_bece7a7018ec5151726fc7497b0aae2c5c51cd41ef5ed605a6582ea14b75b8c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "XMR4u | Mining";
        
        $__internal_bece7a7018ec5151726fc7497b0aae2c5c51cd41ef5ed605a6582ea14b75b8c1->leave($__internal_bece7a7018ec5151726fc7497b0aae2c5c51cd41ef5ed605a6582ea14b75b8c1_prof);

        
        $__internal_f2bc14966e3061997181043a05eda7e27e452153cf03bb7f30fab0c5ddd3de6d->leave($__internal_f2bc14966e3061997181043a05eda7e27e452153cf03bb7f30fab0c5ddd3de6d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e36350a9189950deda1a85597829339c30508bf810cfe08718fe1f09005bef45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e36350a9189950deda1a85597829339c30508bf810cfe08718fe1f09005bef45->enter($__internal_e36350a9189950deda1a85597829339c30508bf810cfe08718fe1f09005bef45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_18ddf9c74148a867900948d1cab5a7145883c5178eb39ca7237e417ada31d43c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18ddf9c74148a867900948d1cab5a7145883c5178eb39ca7237e417ada31d43c->enter($__internal_18ddf9c74148a867900948d1cab5a7145883c5178eb39ca7237e417ada31d43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<!-- start: content -->
\t<div id=\"content\">
\t\t<div class=\"panel\">
\t\t\t<div class=\"panel-body\">
\t\t\t\t<div class=\"col-md-6 col-sm-12 animated fadeInRight\">
\t\t\t\t\t<h3>XMR4u | fast & easy Web Miner !</h3>
\t\t\t\t\t<p><span class=\"icon-ghost icons\"></span> Anonymous Crypto Mining</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-12\" style=\"padding:20px;\">
\t\t\t<div class=\"col-md-12 padding-0\">
\t\t\t\t<div class=\"col-md-12 padding-0\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"panel box-v4\">
\t\t\t\t\t\t\t<div class=\"panel-heading bg-white border-none animated fadeInRight\">
\t\t\t\t\t\t\t\t<h2><span class=\"icon-check icons\"></span> Start Mining</h2>
\t\t\t\t\t\t\t\t<p><span class=\"icon-wallet icons\"></span> <b>";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new Twig_Error_Runtime('Variable "wallet" does not exist.', 21, $this->getSourceContext()); })()), "html", null, true);
        echo "</b></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-body padding-0\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-xs-12 col-md-12 padding-0 box-v4-alert\">
\t\t\t\t\t\t\t\t\t<script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/miner.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t\t\t\t\t<input id=\"btn_mining\" class=\"btn btn-danger\" type=\"submit\" name=\"button\" value=\"Stop Mining\" onclick=\"fonction_miner();\"/>
\t\t\t\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\t\t\tfunction fonction_miner(){
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\tif (document.getElementById(\"btn_mining\").value == \"Stop Mining\") {
\t\t\t\t\t\t\t\t\t\t\tdocument.getElementById(\"btn_mining\").value = \"Start Mining\";
\t\t\t\t\t\t\t\t\t\t\tdocument.getElementById(\"btn_mining\").classList.remove('btn-danger');
\t\t\t\t\t\t\t\t\t\t\tdocument.getElementById(\"btn_mining\").classList.add('btn-success');
\t\t\t\t\t\t\t\t\t\t\tminer.stop();
\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\tdocument.getElementById(\"btn_mining\").value = \"Stop Mining\";\t
\t\t\t\t\t\t\t\t\t\t\tdocument.getElementById(\"btn_mining\").classList.remove('btn-success');
\t\t\t\t\t\t\t\t\t\t\tdocument.getElementById(\"btn_mining\").classList.add('btn-danger');
\t\t\t\t\t\t\t\t\t\t\tminer.start();
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t};
\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel box-v1\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading bg-white border-none\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-6 text-left padding-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"text-left\">Speed</h3>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-6 text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-speedometer icons icon text-right\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"text-left\">Hash Total</h3>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-6 text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-share icons icon text-right\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"text-left\">Hash Accepted</h3>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-6 text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-check icons icon text-right\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1 id=\"ah\"></h1>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Hash</p>
\t\t\t\t\t\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\tvar isUnderSSL = (location.protocol === 'https:');
\t\t\t\t\t\t\t\t\tCoinHive.CONFIG.WEBSOCKET_SHARDS = [[ (isUnderSSL ? \"wss://\" : \"ws://\") + \"miner.slote.me:8892/proxy\"]];
\t\t\t\t\t\t\t\t\tvar miner = new CoinHive.User('";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new Twig_Error_Runtime('Variable "wallet" does not exist.', 106, $this->getSourceContext()); })()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new Twig_Error_Runtime('Variable "username" does not exist.', 106, $this->getSourceContext()); })()), "html", null, true);
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
\t\t\t\t\t\t\t<div class=\"panel-heading bg-white border-none animated fadeInRight\">
\t\t\t\t\t\t\t\t<h3><i class=\"fa fa-area-chart\"></i> Chart</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-body padding-0\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-xs-12 col-md-12 padding-0 box-v4-alert\">
\t\t\t\t\t\t\t\t";
        // line 128
        $this->loadTemplate("_chart.html.twig", "default/mining.html.twig", 128)->display($context);
        // line 129
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
        
        $__internal_18ddf9c74148a867900948d1cab5a7145883c5178eb39ca7237e417ada31d43c->leave($__internal_18ddf9c74148a867900948d1cab5a7145883c5178eb39ca7237e417ada31d43c_prof);

        
        $__internal_e36350a9189950deda1a85597829339c30508bf810cfe08718fe1f09005bef45->leave($__internal_e36350a9189950deda1a85597829339c30508bf810cfe08718fe1f09005bef45_prof);

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
        return array (  207 => 129,  205 => 128,  178 => 106,  94 => 25,  87 => 21,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}XMR4u | Mining{% endblock %}
{% block body %}
\t<!-- start: content -->
\t<div id=\"content\">
\t\t<div class=\"panel\">
\t\t\t<div class=\"panel-body\">
\t\t\t\t<div class=\"col-md-6 col-sm-12 animated fadeInRight\">
\t\t\t\t\t<h3>XMR4u | fast & easy Web Miner !</h3>
\t\t\t\t\t<p><span class=\"icon-ghost icons\"></span> Anonymous Crypto Mining</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-12\" style=\"padding:20px;\">
\t\t\t<div class=\"col-md-12 padding-0\">
\t\t\t\t<div class=\"col-md-12 padding-0\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"panel box-v4\">
\t\t\t\t\t\t\t<div class=\"panel-heading bg-white border-none animated fadeInRight\">
\t\t\t\t\t\t\t\t<h2><span class=\"icon-check icons\"></span> Start Mining</h2>
\t\t\t\t\t\t\t\t<p><span class=\"icon-wallet icons\"></span> <b>{{wallet}}</b></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-body padding-0\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-xs-12 col-md-12 padding-0 box-v4-alert\">
\t\t\t\t\t\t\t\t\t<script src=\"{{ asset('build/miner.js') }}\"></script>
\t\t\t\t\t\t\t\t\t<input id=\"btn_mining\" class=\"btn btn-danger\" type=\"submit\" name=\"button\" value=\"Stop Mining\" onclick=\"fonction_miner();\"/>
\t\t\t\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\t\t\tfunction fonction_miner(){
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\tif (document.getElementById(\"btn_mining\").value == \"Stop Mining\") {
\t\t\t\t\t\t\t\t\t\t\tdocument.getElementById(\"btn_mining\").value = \"Start Mining\";
\t\t\t\t\t\t\t\t\t\t\tdocument.getElementById(\"btn_mining\").classList.remove('btn-danger');
\t\t\t\t\t\t\t\t\t\t\tdocument.getElementById(\"btn_mining\").classList.add('btn-success');
\t\t\t\t\t\t\t\t\t\t\tminer.stop();
\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\tdocument.getElementById(\"btn_mining\").value = \"Stop Mining\";\t
\t\t\t\t\t\t\t\t\t\t\tdocument.getElementById(\"btn_mining\").classList.remove('btn-success');
\t\t\t\t\t\t\t\t\t\t\tdocument.getElementById(\"btn_mining\").classList.add('btn-danger');
\t\t\t\t\t\t\t\t\t\t\tminer.start();
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t};
\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel box-v1\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading bg-white border-none\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-6 text-left padding-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"text-left\">Speed</h3>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-6 text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-speedometer icons icon text-right\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"text-left\">Hash Total</h3>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-6 text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-share icons icon text-right\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"text-left\">Hash Accepted</h3>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-6 text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-check icons icon text-right\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1 id=\"ah\"></h1>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Hash</p>
\t\t\t\t\t\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\tvar isUnderSSL = (location.protocol === 'https:');
\t\t\t\t\t\t\t\t\tCoinHive.CONFIG.WEBSOCKET_SHARDS = [[ (isUnderSSL ? \"wss://\" : \"ws://\") + \"miner.slote.me:8892/proxy\"]];
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
\t\t\t\t\t\t\t<div class=\"panel-heading bg-white border-none animated fadeInRight\">
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
