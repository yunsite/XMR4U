<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_5c11652118eafab3d5f037417bda9fbf221c022d882afe93b9520fdf256d95ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_daa3b6a466ce80aab20fb61b08668dbce8f083ec7dff2c15a10de15d6cff8c67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa3b6a466ce80aab20fb61b08668dbce8f083ec7dff2c15a10de15d6cff8c67->enter($__internal_daa3b6a466ce80aab20fb61b08668dbce8f083ec7dff2c15a10de15d6cff8c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_2763cadf12ebce6610c907d77f6027acb88728ac1359f1f4b68dde734ef67455 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2763cadf12ebce6610c907d77f6027acb88728ac1359f1f4b68dde734ef67455->enter($__internal_2763cadf12ebce6610c907d77f6027acb88728ac1359f1f4b68dde734ef67455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_daa3b6a466ce80aab20fb61b08668dbce8f083ec7dff2c15a10de15d6cff8c67->leave($__internal_daa3b6a466ce80aab20fb61b08668dbce8f083ec7dff2c15a10de15d6cff8c67_prof);

        
        $__internal_2763cadf12ebce6610c907d77f6027acb88728ac1359f1f4b68dde734ef67455->leave($__internal_2763cadf12ebce6610c907d77f6027acb88728ac1359f1f4b68dde734ef67455_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_41973fafeed0c585374dfdbb4bf8c5b468f78d396b9720506a8cc26dc2473685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41973fafeed0c585374dfdbb4bf8c5b468f78d396b9720506a8cc26dc2473685->enter($__internal_41973fafeed0c585374dfdbb4bf8c5b468f78d396b9720506a8cc26dc2473685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_de9109cbb605856c13ac8f7cac570222032e682cf8a4aeba7ed29b57cf26570c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de9109cbb605856c13ac8f7cac570222032e682cf8a4aeba7ed29b57cf26570c->enter($__internal_de9109cbb605856c13ac8f7cac570222032e682cf8a4aeba7ed29b57cf26570c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_de9109cbb605856c13ac8f7cac570222032e682cf8a4aeba7ed29b57cf26570c->leave($__internal_de9109cbb605856c13ac8f7cac570222032e682cf8a4aeba7ed29b57cf26570c_prof);

        
        $__internal_41973fafeed0c585374dfdbb4bf8c5b468f78d396b9720506a8cc26dc2473685->leave($__internal_41973fafeed0c585374dfdbb4bf8c5b468f78d396b9720506a8cc26dc2473685_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3323c359cd42b01914be097fdfdcb7632d76fb5d81b443dceb947a07c54b71b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3323c359cd42b01914be097fdfdcb7632d76fb5d81b443dceb947a07c54b71b4->enter($__internal_3323c359cd42b01914be097fdfdcb7632d76fb5d81b443dceb947a07c54b71b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0b8eed83aaa3e4b57a7a0cd745dabb093020cb3b3a45079f00a7a642b023315b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b8eed83aaa3e4b57a7a0cd745dabb093020cb3b3a45079f00a7a642b023315b->enter($__internal_0b8eed83aaa3e4b57a7a0cd745dabb093020cb3b3a45079f00a7a642b023315b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_0b8eed83aaa3e4b57a7a0cd745dabb093020cb3b3a45079f00a7a642b023315b->leave($__internal_0b8eed83aaa3e4b57a7a0cd745dabb093020cb3b3a45079f00a7a642b023315b_prof);

        
        $__internal_3323c359cd42b01914be097fdfdcb7632d76fb5d81b443dceb947a07c54b71b4->leave($__internal_3323c359cd42b01914be097fdfdcb7632d76fb5d81b443dceb947a07c54b71b4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/var/www/miner/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/open.html.twig");
    }
}
