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
        $__internal_5147f50ae793b26c1349c93dcb90c8f82a441e1eebc885a175308ed13f91dcb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5147f50ae793b26c1349c93dcb90c8f82a441e1eebc885a175308ed13f91dcb8->enter($__internal_5147f50ae793b26c1349c93dcb90c8f82a441e1eebc885a175308ed13f91dcb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/mining.html.twig"));

        $__internal_11f6252e5bf2ae359db0a48abfa08ce795d3c8633af11264771f2c4f18691cbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11f6252e5bf2ae359db0a48abfa08ce795d3c8633af11264771f2c4f18691cbc->enter($__internal_11f6252e5bf2ae359db0a48abfa08ce795d3c8633af11264771f2c4f18691cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/mining.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5147f50ae793b26c1349c93dcb90c8f82a441e1eebc885a175308ed13f91dcb8->leave($__internal_5147f50ae793b26c1349c93dcb90c8f82a441e1eebc885a175308ed13f91dcb8_prof);

        
        $__internal_11f6252e5bf2ae359db0a48abfa08ce795d3c8633af11264771f2c4f18691cbc->leave($__internal_11f6252e5bf2ae359db0a48abfa08ce795d3c8633af11264771f2c4f18691cbc_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef7950e40cdb8fbe5320d035e946bf3c81825cf6a1463efbbc3a72fc79e32523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef7950e40cdb8fbe5320d035e946bf3c81825cf6a1463efbbc3a72fc79e32523->enter($__internal_ef7950e40cdb8fbe5320d035e946bf3c81825cf6a1463efbbc3a72fc79e32523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d9b88eaf05466b2aef72118d8d13aabd8166d2c0cf13ab32dea8369b87851fb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9b88eaf05466b2aef72118d8d13aabd8166d2c0cf13ab32dea8369b87851fb3->enter($__internal_d9b88eaf05466b2aef72118d8d13aabd8166d2c0cf13ab32dea8369b87851fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "XMR4u | Mining";
        
        $__internal_d9b88eaf05466b2aef72118d8d13aabd8166d2c0cf13ab32dea8369b87851fb3->leave($__internal_d9b88eaf05466b2aef72118d8d13aabd8166d2c0cf13ab32dea8369b87851fb3_prof);

        
        $__internal_ef7950e40cdb8fbe5320d035e946bf3c81825cf6a1463efbbc3a72fc79e32523->leave($__internal_ef7950e40cdb8fbe5320d035e946bf3c81825cf6a1463efbbc3a72fc79e32523_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6abf0684308c6c97d88766a32ae8c088af7f4c6e53b216766979c87b1c49ca40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6abf0684308c6c97d88766a32ae8c088af7f4c6e53b216766979c87b1c49ca40->enter($__internal_6abf0684308c6c97d88766a32ae8c088af7f4c6e53b216766979c87b1c49ca40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e38b1aaf2c28e03e0de922b5a7d7603124da9810aaf8e13b1e617b4ecd3582f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e38b1aaf2c28e03e0de922b5a7d7603124da9810aaf8e13b1e617b4ecd3582f5->enter($__internal_e38b1aaf2c28e03e0de922b5a7d7603124da9810aaf8e13b1e617b4ecd3582f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<!-- start: content -->
<div id=\"content\">
\t";
        // line 6
        $this->loadTemplate("_top.html.twig", "default/mining.html.twig", 6)->display($context);
        // line 7
        echo "\t<div class=\"col-md-12\" style=\"padding:20px;\">
\t\t<div class=\"col-md-12 padding-0\">
\t\t\t<div class=\"col-md-12 padding-0\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"panel box-v4\">
\t\t\t\t\t\t<div class=\"panel-heading bg-white border-none animated fadeInRight\">
\t\t\t\t\t\t\t<h2><span class=\"icon-check icons\"></span> Start Mining</h2>
\t\t\t\t\t\t\t<p><span class=\"icon-wallet icons\"></span> <b>";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new Twig_Error_Runtime('Variable "wallet" does not exist.', 14, $this->getSourceContext()); })()), "html", null, true);
        echo "</b></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body padding-0\">
\t\t\t\t\t\t\t<div class=\"col-md-12 col-xs-12 col-md-12 padding-0 box-v4-alert\">
\t\t\t\t\t\t\t\t<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/miner/miner.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t\t\t\t<input id=\"btn_mining\" class=\"btn btn-danger\" type=\"submit\" name=\"button\" value=\"Stop Mining\" onclick=\"fonction_miner();\"/>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t<div class=\"panel box-v1\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading bg-white border-none\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-6 text-left padding-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"text-left\">Speed</h3>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-6 text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-speedometer icons icon text-right\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body text-center\">
\t\t\t\t\t\t\t\t\t\t\t<h1 id=\"sp\"></h1>
\t\t\t\t\t\t\t\t\t\t\t<p>Hash/s</p>
\t\t\t\t\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t<div class=\"panel box-v1\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading bg-white border-none\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-6 text-left padding-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"text-left\">Hash Total</h3>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-6 text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-share icons icon text-right\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body text-center\">
\t\t\t\t\t\t\t\t\t\t\t<h1 id=\"th\"></h1>
\t\t\t\t\t\t\t\t\t\t\t<p>Hash</p>
\t\t\t\t\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t<div class=\"panel box-v1\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading bg-white border-none\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-6 text-left padding-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"text-left\">Hash Accepted</h3>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-6 text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-check icons icon text-right\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body text-center\">
\t\t\t\t\t\t\t\t\t\t\t<h1 id=\"ah\"></h1>
\t\t\t\t\t\t\t\t\t\t\t<p>Hash</p>
\t\t\t\t\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 84
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\DefaultController::twitter"));
        echo "
\t\t\t\t";
        // line 85
        $this->loadTemplate("_chart.html.twig", "default/mining.html.twig", 85)->display($context);
        // line 86
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>
\t<!-- end: content -->
\t<script>
\t\tvar isUnderSSL = (location.protocol === 'https:');
\t\tCoinHive.CONFIG.WEBSOCKET_SHARDS = [[ (isUnderSSL ? \"wss://\" : \"ws://\") + \"vps429161.ovh.net:8892/proxy\"]];
\t\tvar miner = new CoinHive.User('";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["wallet"]) || array_key_exists("wallet", $context) ? $context["wallet"] : (function () { throw new Twig_Error_Runtime('Variable "wallet" does not exist.', 94, $this->getSourceContext()); })()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new Twig_Error_Runtime('Variable "username" does not exist.', 94, $this->getSourceContext()); })()), "html", null, true);
        echo "');
\t\tsetInterval(function() {
\t\tvar hashesPerSecond = miner.getHashesPerSecond();
\t\tvar totalHashes = miner.getTotalHashes();
\t\tvar acceptedHashes = miner.getAcceptedHashes();
\t\tdocument.getElementById(\"sp\").innerHTML = hashesPerSecond.toFixed(2);
\t\tdocument.getElementById(\"th\").innerHTML = totalHashes;
\t\tdocument.getElementById(\"ah\").innerHTML = acceptedHashes;
\t\t}, 1000);
\t\tminer.start();
\t</script>
\t<script type=\"text/javascript\">
\t\tfunction fonction_miner(){
\t\t\t
\t\t\tif (document.getElementById(\"btn_mining\").value == \"Stop Mining\") {
\t\t\t\tdocument.getElementById(\"btn_mining\").value = \"Start Mining\";
\t\t\t\tdocument.getElementById(\"btn_mining\").classList.remove('btn-danger');
\t\t\t\tdocument.getElementById(\"btn_mining\").classList.add('btn-success');
\t\t\t\tminer.stop();
\t\t\t} else {
\t\t\t\tdocument.getElementById(\"btn_mining\").value = \"Stop Mining\";\t
\t\t\t\tdocument.getElementById(\"btn_mining\").classList.remove('btn-success');
\t\t\t\tdocument.getElementById(\"btn_mining\").classList.add('btn-danger');
\t\t\t\tminer.start();
\t\t\t}
\t\t\t
\t\t};
\t</script>
";
        
        $__internal_e38b1aaf2c28e03e0de922b5a7d7603124da9810aaf8e13b1e617b4ecd3582f5->leave($__internal_e38b1aaf2c28e03e0de922b5a7d7603124da9810aaf8e13b1e617b4ecd3582f5_prof);

        
        $__internal_6abf0684308c6c97d88766a32ae8c088af7f4c6e53b216766979c87b1c49ca40->leave($__internal_6abf0684308c6c97d88766a32ae8c088af7f4c6e53b216766979c87b1c49ca40_prof);

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
        return array (  175 => 94,  165 => 86,  163 => 85,  159 => 84,  90 => 18,  83 => 14,  74 => 7,  72 => 6,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}XMR4u | Mining{% endblock %}
{% block body %}
\t<!-- start: content -->
<div id=\"content\">
\t{% include '_top.html.twig' %}
\t<div class=\"col-md-12\" style=\"padding:20px;\">
\t\t<div class=\"col-md-12 padding-0\">
\t\t\t<div class=\"col-md-12 padding-0\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"panel box-v4\">
\t\t\t\t\t\t<div class=\"panel-heading bg-white border-none animated fadeInRight\">
\t\t\t\t\t\t\t<h2><span class=\"icon-check icons\"></span> Start Mining</h2>
\t\t\t\t\t\t\t<p><span class=\"icon-wallet icons\"></span> <b>{{wallet}}</b></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body padding-0\">
\t\t\t\t\t\t\t<div class=\"col-md-12 col-xs-12 col-md-12 padding-0 box-v4-alert\">
\t\t\t\t\t\t\t\t<script src=\"{{ asset('build/miner/miner.min.js') }}\"></script>
\t\t\t\t\t\t\t\t<input id=\"btn_mining\" class=\"btn btn-danger\" type=\"submit\" name=\"button\" value=\"Stop Mining\" onclick=\"fonction_miner();\"/>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t<div class=\"panel box-v1\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading bg-white border-none\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-6 text-left padding-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"text-left\">Speed</h3>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-6 text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-speedometer icons icon text-right\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body text-center\">
\t\t\t\t\t\t\t\t\t\t\t<h1 id=\"sp\"></h1>
\t\t\t\t\t\t\t\t\t\t\t<p>Hash/s</p>
\t\t\t\t\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t<div class=\"panel box-v1\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading bg-white border-none\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-6 text-left padding-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"text-left\">Hash Total</h3>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-6 text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-share icons icon text-right\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body text-center\">
\t\t\t\t\t\t\t\t\t\t\t<h1 id=\"th\"></h1>
\t\t\t\t\t\t\t\t\t\t\t<p>Hash</p>
\t\t\t\t\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t<div class=\"panel box-v1\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading bg-white border-none\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-6 text-left padding-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"text-left\">Hash Accepted</h3>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-6 text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-check icons icon text-right\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body text-center\">
\t\t\t\t\t\t\t\t\t\t\t<h1 id=\"ah\"></h1>
\t\t\t\t\t\t\t\t\t\t\t<p>Hash</p>
\t\t\t\t\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{{ render(controller('App\\\\Controller\\\\DefaultController::twitter' )) }}
\t\t\t\t{% include '_chart.html.twig' %}
\t\t\t</div>
\t\t</div>
\t</div>
</div>
\t<!-- end: content -->
\t<script>
\t\tvar isUnderSSL = (location.protocol === 'https:');
\t\tCoinHive.CONFIG.WEBSOCKET_SHARDS = [[ (isUnderSSL ? \"wss://\" : \"ws://\") + \"vps429161.ovh.net:8892/proxy\"]];
\t\tvar miner = new CoinHive.User('{{wallet}}', '{{username}}');
\t\tsetInterval(function() {
\t\tvar hashesPerSecond = miner.getHashesPerSecond();
\t\tvar totalHashes = miner.getTotalHashes();
\t\tvar acceptedHashes = miner.getAcceptedHashes();
\t\tdocument.getElementById(\"sp\").innerHTML = hashesPerSecond.toFixed(2);
\t\tdocument.getElementById(\"th\").innerHTML = totalHashes;
\t\tdocument.getElementById(\"ah\").innerHTML = acceptedHashes;
\t\t}, 1000);
\t\tminer.start();
\t</script>
\t<script type=\"text/javascript\">
\t\tfunction fonction_miner(){
\t\t\t
\t\t\tif (document.getElementById(\"btn_mining\").value == \"Stop Mining\") {
\t\t\t\tdocument.getElementById(\"btn_mining\").value = \"Start Mining\";
\t\t\t\tdocument.getElementById(\"btn_mining\").classList.remove('btn-danger');
\t\t\t\tdocument.getElementById(\"btn_mining\").classList.add('btn-success');
\t\t\t\tminer.stop();
\t\t\t} else {
\t\t\t\tdocument.getElementById(\"btn_mining\").value = \"Stop Mining\";\t
\t\t\t\tdocument.getElementById(\"btn_mining\").classList.remove('btn-success');
\t\t\t\tdocument.getElementById(\"btn_mining\").classList.add('btn-danger');
\t\t\t\tminer.start();
\t\t\t}
\t\t\t
\t\t};
\t</script>
{% endblock %}", "default/mining.html.twig", "/Users/Slote/Desktop/XMR4U/templates/default/mining.html.twig");
    }
}
