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
        $__internal_2c8117810de491ea648a61364dbea7c5c05638d24fce3492f2b6932cd4cd0f6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c8117810de491ea648a61364dbea7c5c05638d24fce3492f2b6932cd4cd0f6d->enter($__internal_2c8117810de491ea648a61364dbea7c5c05638d24fce3492f2b6932cd4cd0f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_header.html.twig"));

        $__internal_ad53768d4283bf9a480e24d692985e3d7acf4e127e53e26994572d5fc3a1e904 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad53768d4283bf9a480e24d692985e3d7acf4e127e53e26994572d5fc3a1e904->enter($__internal_ad53768d4283bf9a480e24d692985e3d7acf4e127e53e26994572d5fc3a1e904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_header.html.twig"));

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
\t\t\t<a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"navbar-brand\">
\t\t\t\t<b>XMR4u</b>
\t\t\t</a>
\t\t\t<ul class=\"nav navbar-nav navbar-right user-nav\">
\t\t\t\t<li class=\"user-name\"><span>Anonymous</span></li>
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
        
        $__internal_2c8117810de491ea648a61364dbea7c5c05638d24fce3492f2b6932cd4cd0f6d->leave($__internal_2c8117810de491ea648a61364dbea7c5c05638d24fce3492f2b6932cd4cd0f6d_prof);

        
        $__internal_ad53768d4283bf9a480e24d692985e3d7acf4e127e53e26994572d5fc3a1e904->leave($__internal_ad53768d4283bf9a480e24d692985e3d7acf4e127e53e26994572d5fc3a1e904_prof);

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
        return array (  45 => 16,  36 => 10,  25 => 1,);
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
\t\t\t<a href=\"{{ path('index') }}\" class=\"navbar-brand\">
\t\t\t\t<b>XMR4u</b>
\t\t\t</a>
\t\t\t<ul class=\"nav navbar-nav navbar-right user-nav\">
\t\t\t\t<li class=\"user-name\"><span>Anonymous</span></li>
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
<!-- end: Header -->", "_header.html.twig", "/var/www/miner/templates/_header.html.twig");
    }
}
