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
        $__internal_89eaa6d1e967d043cd38fe01de0d5ac8a123c8dbd1f83a505f27c89d9e9b411e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89eaa6d1e967d043cd38fe01de0d5ac8a123c8dbd1f83a505f27c89d9e9b411e->enter($__internal_89eaa6d1e967d043cd38fe01de0d5ac8a123c8dbd1f83a505f27c89d9e9b411e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_chart.html.twig"));

        $__internal_2adf1e125d5eef13c44546b34af7597bb03fdea152121d1ecbe258b47ca521dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2adf1e125d5eef13c44546b34af7597bb03fdea152121d1ecbe258b47ca521dc->enter($__internal_2adf1e125d5eef13c44546b34af7597bb03fdea152121d1ecbe258b47ca521dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_chart.html.twig"));

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
        
        $__internal_89eaa6d1e967d043cd38fe01de0d5ac8a123c8dbd1f83a505f27c89d9e9b411e->leave($__internal_89eaa6d1e967d043cd38fe01de0d5ac8a123c8dbd1f83a505f27c89d9e9b411e_prof);

        
        $__internal_2adf1e125d5eef13c44546b34af7597bb03fdea152121d1ecbe258b47ca521dc->leave($__internal_2adf1e125d5eef13c44546b34af7597bb03fdea152121d1ecbe258b47ca521dc_prof);

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
<!-- TradingView Widget END -->", "_chart.html.twig", "/Users/Slote/Desktop/XMR4U/templates/_chart.html.twig");
    }
}
