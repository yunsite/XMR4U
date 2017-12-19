<?php

/* _nav.html.twig */
class __TwigTemplate_6d08ac03e9ec11a08d6a35afc8f9291af39c3ac0ce42fad67bda5553a1fd470e extends Twig_Template
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
        $__internal_6690c82e51e5e8c0ff3620042ce9da912323b9b3589ed728660c7a29a2b88bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6690c82e51e5e8c0ff3620042ce9da912323b9b3589ed728660c7a29a2b88bfb->enter($__internal_6690c82e51e5e8c0ff3620042ce9da912323b9b3589ed728660c7a29a2b88bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_nav.html.twig"));

        $__internal_8398cc55fcf9e3c7a79a4bce25858669020ae448b90c0ad878eb4dbe56330620 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8398cc55fcf9e3c7a79a4bce25858669020ae448b90c0ad878eb4dbe56330620->enter($__internal_8398cc55fcf9e3c7a79a4bce25858669020ae448b90c0ad878eb4dbe56330620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_nav.html.twig"));

        // line 1
        echo "<!-- start:Left Menu -->
<div id=\"left-menu\">
\t<div class=\"sub-left-menu scroll\">
\t\t<ul class=\"nav nav-list\">
\t\t\t<li><div class=\"left-bg\"></div></li>
\t\t\t<li class=\"time\">
\t\t\t\t<h1 class=\"animated fadeInLeft\">21:00</h1>
\t\t\t\t<p class=\"animated fadeInRight\">Sat,October 1st 2029</p>
\t\t\t</li>
\t\t\t<li class=\"active ripple\">
\t\t\t\t<a class=\"nav-header\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\"><span class=\"fa-home fa\"></span> Dashboard
\t\t\t\t<span class=\"fa-angle-right fa right-arrow text-right\"></span>
\t\t\t</a>
\t\t</li>
\t\t\t<li class=\"ripple\">
\t\t\t\t<a class=\"nav-header\" href=\"https://mymonero.com/#/\" target=\"_blank\"><span class=\"icon icon-chart\"></span> Mining Stats
\t\t\t\t<span class=\"fa-angle-right fa right-arrow text-right\"></span>
\t\t\t</a>
\t\t</li>
\t\t</li>
\t\t\t<li class=\"ripple\">
\t\t\t\t<a class=\"nav-header\" href=\"https://mymonero.com/#/\" target=\"_blank\"><span class=\"icon icon-wallet\"></span> Create Wallet
\t\t\t\t<span class=\"fa-angle-right fa right-arrow text-right\"></span>
\t\t\t</a>
\t\t</li>
\t</ul>
</div>
</div>
<!-- end: Left Menu -->
<!-- start: Mobile -->
<div id=\"mimin-mobile\" class=\"reverse\">
<div class=\"mimin-mobile-menu-list\">
\t<div class=\"col-md-12 sub-mimin-mobile-menu-list animated fadeInLeft\">
\t\t<ul class=\"nav nav-list\">
\t\t\t<li class=\"active ripple\">
\t\t\t\t<a class=\"nav-header\">
\t\t\t\t\t<span class=\"fa-home fa\" href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\"></span>Dashboard
\t\t\t\t\t<span class=\"fa-angle-right fa right-arrow text-right\"></span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"ripple\">
\t\t\t\t<a class=\"nav-header\">
\t\t\t\t\t<span class=\"fa-home fa\" href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\"></span>Create Wallet
\t\t\t\t\t<span class=\"fa-angle-right fa right-arrow text-right\"></span>
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t</div>
</div>
</div>
<button id=\"mimin-mobile-menu-opener\" class=\"animated rubberBand btn btn-circle btn-danger\">
<span class=\"fa fa-bars\"></span>
</button>
<!-- end: Mobile -->";
        
        $__internal_6690c82e51e5e8c0ff3620042ce9da912323b9b3589ed728660c7a29a2b88bfb->leave($__internal_6690c82e51e5e8c0ff3620042ce9da912323b9b3589ed728660c7a29a2b88bfb_prof);

        
        $__internal_8398cc55fcf9e3c7a79a4bce25858669020ae448b90c0ad878eb4dbe56330620->leave($__internal_8398cc55fcf9e3c7a79a4bce25858669020ae448b90c0ad878eb4dbe56330620_prof);

    }

    public function getTemplateName()
    {
        return "_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 43,  66 => 37,  37 => 11,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- start:Left Menu -->
<div id=\"left-menu\">
\t<div class=\"sub-left-menu scroll\">
\t\t<ul class=\"nav nav-list\">
\t\t\t<li><div class=\"left-bg\"></div></li>
\t\t\t<li class=\"time\">
\t\t\t\t<h1 class=\"animated fadeInLeft\">21:00</h1>
\t\t\t\t<p class=\"animated fadeInRight\">Sat,October 1st 2029</p>
\t\t\t</li>
\t\t\t<li class=\"active ripple\">
\t\t\t\t<a class=\"nav-header\" href=\"{{path('index')}}\"><span class=\"fa-home fa\"></span> Dashboard
\t\t\t\t<span class=\"fa-angle-right fa right-arrow text-right\"></span>
\t\t\t</a>
\t\t</li>
\t\t\t<li class=\"ripple\">
\t\t\t\t<a class=\"nav-header\" href=\"https://mymonero.com/#/\" target=\"_blank\"><span class=\"icon icon-chart\"></span> Mining Stats
\t\t\t\t<span class=\"fa-angle-right fa right-arrow text-right\"></span>
\t\t\t</a>
\t\t</li>
\t\t</li>
\t\t\t<li class=\"ripple\">
\t\t\t\t<a class=\"nav-header\" href=\"https://mymonero.com/#/\" target=\"_blank\"><span class=\"icon icon-wallet\"></span> Create Wallet
\t\t\t\t<span class=\"fa-angle-right fa right-arrow text-right\"></span>
\t\t\t</a>
\t\t</li>
\t</ul>
</div>
</div>
<!-- end: Left Menu -->
<!-- start: Mobile -->
<div id=\"mimin-mobile\" class=\"reverse\">
<div class=\"mimin-mobile-menu-list\">
\t<div class=\"col-md-12 sub-mimin-mobile-menu-list animated fadeInLeft\">
\t\t<ul class=\"nav nav-list\">
\t\t\t<li class=\"active ripple\">
\t\t\t\t<a class=\"nav-header\">
\t\t\t\t\t<span class=\"fa-home fa\" href=\"{{path('index')}}\"></span>Dashboard
\t\t\t\t\t<span class=\"fa-angle-right fa right-arrow text-right\"></span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"ripple\">
\t\t\t\t<a class=\"nav-header\">
\t\t\t\t\t<span class=\"fa-home fa\" href=\"{{path('index')}}\"></span>Create Wallet
\t\t\t\t\t<span class=\"fa-angle-right fa right-arrow text-right\"></span>
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t</div>
</div>
</div>
<button id=\"mimin-mobile-menu-opener\" class=\"animated rubberBand btn btn-circle btn-danger\">
<span class=\"fa fa-bars\"></span>
</button>
<!-- end: Mobile -->", "_nav.html.twig", "/Users/Slote/Desktop/XMR4U/templates/_nav.html.twig");
    }
}
