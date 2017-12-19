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
        $__internal_8a6fc89f7a9b11f5e765a6d6fc87351da24c12d715bb2aa9ebe77ddd20b54324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a6fc89f7a9b11f5e765a6d6fc87351da24c12d715bb2aa9ebe77ddd20b54324->enter($__internal_8a6fc89f7a9b11f5e765a6d6fc87351da24c12d715bb2aa9ebe77ddd20b54324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_chart.html.twig"));

        $__internal_ffa62f10be61ce95fe705e01ce7ce21a402d5c669ddbc3df040da891b98e54ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffa62f10be61ce95fe705e01ce7ce21a402d5c669ddbc3df040da891b98e54ea->enter($__internal_ffa62f10be61ce95fe705e01ce7ce21a402d5c669ddbc3df040da891b98e54ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_chart.html.twig"));

        // line 1
        echo "<!-- TradingView Widget BEGIN -->
<div id=\"tv-medium-widget-9da21\"></div>
<script type=\"text/javascript\" src=\"https://s3.tradingview.com/tv.js\"></script>
<script type=\"text/javascript\">
new TradingView.MediumWidget({
  \"container_id\": \"tv-medium-widget-9da21\",
  \"symbols\": [
    [
      \"XMR/EUR\",
      \"KRAKEN:XMREUR|1m\"
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
        
        $__internal_8a6fc89f7a9b11f5e765a6d6fc87351da24c12d715bb2aa9ebe77ddd20b54324->leave($__internal_8a6fc89f7a9b11f5e765a6d6fc87351da24c12d715bb2aa9ebe77ddd20b54324_prof);

        
        $__internal_ffa62f10be61ce95fe705e01ce7ce21a402d5c669ddbc3df040da891b98e54ea->leave($__internal_ffa62f10be61ce95fe705e01ce7ce21a402d5c669ddbc3df040da891b98e54ea_prof);

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
        return new Twig_Source("<!-- TradingView Widget BEGIN -->
<div id=\"tv-medium-widget-9da21\"></div>
<script type=\"text/javascript\" src=\"https://s3.tradingview.com/tv.js\"></script>
<script type=\"text/javascript\">
new TradingView.MediumWidget({
  \"container_id\": \"tv-medium-widget-9da21\",
  \"symbols\": [
    [
      \"XMR/EUR\",
      \"KRAKEN:XMREUR|1m\"
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
