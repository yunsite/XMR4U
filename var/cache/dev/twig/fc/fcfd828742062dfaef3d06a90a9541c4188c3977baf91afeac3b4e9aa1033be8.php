<?php

/* _chart.html.twig */
class __TwigTemplate_cb56b608fc738009bfe41775c46cbd377a33041de94be94e13260f4b0d5c9742 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4de9294d197b9b8005203f81a09cac557469d53c03db004d1743762d9481de6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4de9294d197b9b8005203f81a09cac557469d53c03db004d1743762d9481de6->enter($__internal_e4de9294d197b9b8005203f81a09cac557469d53c03db004d1743762d9481de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_chart.html.twig"));

        $__internal_cc0e903c42261d0ac18cfe097c24533a227f7acb1c55c22419a65c23a807d882 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc0e903c42261d0ac18cfe097c24533a227f7acb1c55c22419a65c23a807d882->enter($__internal_cc0e903c42261d0ac18cfe097c24533a227f7acb1c55c22419a65c23a807d882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_chart.html.twig"));

        // line 1
        echo "<div class=\"col-md-6\">
  <div class=\"panel\">
    <div class=\"panel-heading animated fadeInRight\">
      <h3><i class=\"fa fa-area-chart\"></i> Chart</h3>
    </div>
    <div class=\"panel-body padding-0\">
      <div class=\"col-md-12 col-xs-12 col-md-12 padding-0 box-v4-alert\">
        <div id=\"tv-medium-widget-9da21\"></div>
      </div>
    </div>
  </div>
</div>
<!-- TradingView Widget BEGIN -->

<script type=\"text/javascript\" src=\"https://s3.tradingview.com/tv.js\"></script>
<script type=\"text/javascript\">
new TradingView.MediumWidget({
  \"container_id\": \"tv-medium-widget-9da21\",
  \"symbols\": [
    [
      \"XMR/EUR\",
      \"KRAKEN:XMREUR|1d\"
    ]
  ],
  \"gridLineColor\": \"#e9e9ea\",
  \"fontColor\": \"#83888D\",
  \"underLineColor\": \"#dbeffb\",
  \"trendLineColor\": \"#4bafe9\",
  \"width\": \"100%\",
  \"height\": \"400px\",
  \"locale\": \"fr\"
});
</script>
<!-- TradingView Widget END -->";
        
        $__internal_e4de9294d197b9b8005203f81a09cac557469d53c03db004d1743762d9481de6->leave($__internal_e4de9294d197b9b8005203f81a09cac557469d53c03db004d1743762d9481de6_prof);

        
        $__internal_cc0e903c42261d0ac18cfe097c24533a227f7acb1c55c22419a65c23a807d882->leave($__internal_cc0e903c42261d0ac18cfe097c24533a227f7acb1c55c22419a65c23a807d882_prof);

    }

    public function getTemplateName()
    {
        return "_chart.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-md-6\">
  <div class=\"panel\">
    <div class=\"panel-heading animated fadeInRight\">
      <h3><i class=\"fa fa-area-chart\"></i> Chart</h3>
    </div>
    <div class=\"panel-body padding-0\">
      <div class=\"col-md-12 col-xs-12 col-md-12 padding-0 box-v4-alert\">
        <div id=\"tv-medium-widget-9da21\"></div>
      </div>
    </div>
  </div>
</div>
<!-- TradingView Widget BEGIN -->

<script type=\"text/javascript\" src=\"https://s3.tradingview.com/tv.js\"></script>
<script type=\"text/javascript\">
new TradingView.MediumWidget({
  \"container_id\": \"tv-medium-widget-9da21\",
  \"symbols\": [
    [
      \"XMR/EUR\",
      \"KRAKEN:XMREUR|1d\"
    ]
  ],
  \"gridLineColor\": \"#e9e9ea\",
  \"fontColor\": \"#83888D\",
  \"underLineColor\": \"#dbeffb\",
  \"trendLineColor\": \"#4bafe9\",
  \"width\": \"100%\",
  \"height\": \"400px\",
  \"locale\": \"fr\"
});
</script>
<!-- TradingView Widget END -->", "_chart.html.twig", "/var/www/miner/templates/_chart.html.twig");
    }
}
