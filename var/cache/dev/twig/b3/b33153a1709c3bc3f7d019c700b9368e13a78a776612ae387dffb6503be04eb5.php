<?php

/* _header.html.twig */
class __TwigTemplate_f3c4d23bf4b77d5bb028ae64d1aae352a46519252fbe1ea22ebf7cc29eda3fb0 extends Twig_Template
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
        $__internal_331cf8689d7d21921dc943875beccbbe876f4979b2d04a3f6c774f3293d6272c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_331cf8689d7d21921dc943875beccbbe876f4979b2d04a3f6c774f3293d6272c->enter($__internal_331cf8689d7d21921dc943875beccbbe876f4979b2d04a3f6c774f3293d6272c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_header.html.twig"));

        $__internal_e1999b3876579395cf3b23d3662add090e0b53c53c6c9ce72153227d55341255 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1999b3876579395cf3b23d3662add090e0b53c53c6c9ce72153227d55341255->enter($__internal_e1999b3876579395cf3b23d3662add090e0b53c53c6c9ce72153227d55341255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_header.html.twig"));

        // line 1
        echo "<!-- start: Header -->
<nav class=\"navbar navbar-default header navbar-fixed-top\">
\t<div class=\"col-md-12 nav-wrapper\">
\t\t<div class=\"navbar-header\" style=\"width:100%;\">
\t\t\t<div class=\"opener-left-menu is-open\">
\t\t\t\t<span class=\"top\"></span>
\t\t\t\t<span class=\"middle\"></span>
\t\t\t\t<span class=\"bottom\"></span>
\t\t\t</div>
\t\t\t<a href=\"index.html\" class=\"navbar-brand\">
\t\t\t\t<b>XMR4u</b>
\t\t\t</a>
\t\t\t<ul class=\"nav navbar-nav navbar-right user-nav\">
\t\t\t\t<li class=\"user-name\"><span>Slote</span></li>
\t\t\t\t<li class=\"dropdown avatar-dropdown\">
\t\t\t\t\t<img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/rick_head.png"), "html", null, true);
        echo "\" class=\"img-circle avatar\" alt=\"user name\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\"/>
\t\t\t\t\t<ul class=\"dropdown-menu user-dropdown\">
\t\t\t\t\t\t<li><a href=\"http://portfolio.slote.me\" target=\"_blank\"><span class=\"fa fa-user\"></span> My Portfolio</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li ></li>
\t\t\t</ul>
\t\t</div>
\t</div>
</nav>
<!-- end: Header -->";
        
        $__internal_331cf8689d7d21921dc943875beccbbe876f4979b2d04a3f6c774f3293d6272c->leave($__internal_331cf8689d7d21921dc943875beccbbe876f4979b2d04a3f6c774f3293d6272c_prof);

        
        $__internal_e1999b3876579395cf3b23d3662add090e0b53c53c6c9ce72153227d55341255->leave($__internal_e1999b3876579395cf3b23d3662add090e0b53c53c6c9ce72153227d55341255_prof);

    }

    public function getTemplateName()
    {
        return "_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- start: Header -->
<nav class=\"navbar navbar-default header navbar-fixed-top\">
\t<div class=\"col-md-12 nav-wrapper\">
\t\t<div class=\"navbar-header\" style=\"width:100%;\">
\t\t\t<div class=\"opener-left-menu is-open\">
\t\t\t\t<span class=\"top\"></span>
\t\t\t\t<span class=\"middle\"></span>
\t\t\t\t<span class=\"bottom\"></span>
\t\t\t</div>
\t\t\t<a href=\"index.html\" class=\"navbar-brand\">
\t\t\t\t<b>XMR4u</b>
\t\t\t</a>
\t\t\t<ul class=\"nav navbar-nav navbar-right user-nav\">
\t\t\t\t<li class=\"user-name\"><span>Slote</span></li>
\t\t\t\t<li class=\"dropdown avatar-dropdown\">
\t\t\t\t\t<img src=\"{{asset('build/img/rick_head.png')}}\" class=\"img-circle avatar\" alt=\"user name\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\"/>
\t\t\t\t\t<ul class=\"dropdown-menu user-dropdown\">
\t\t\t\t\t\t<li><a href=\"http://portfolio.slote.me\" target=\"_blank\"><span class=\"fa fa-user\"></span> My Portfolio</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li ></li>
\t\t\t</ul>
\t\t</div>
\t</div>
</nav>
<!-- end: Header -->", "_header.html.twig", "/Users/Slote/Desktop/XMR4U/templates/_header.html.twig");
    }
}
