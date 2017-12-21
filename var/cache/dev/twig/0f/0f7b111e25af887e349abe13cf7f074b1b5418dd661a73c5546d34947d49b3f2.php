<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_555f33d4227e04afc9840aee189116b8ddc7b562ccd5deb78509d72f01ae5c28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4afa98d588c50dd1b1dc4fb79ecd350eed20441852c68e992626f1c8af63199b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4afa98d588c50dd1b1dc4fb79ecd350eed20441852c68e992626f1c8af63199b->enter($__internal_4afa98d588c50dd1b1dc4fb79ecd350eed20441852c68e992626f1c8af63199b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e066a48fa9f4b4a6d933b28933126e08b955fdf11ce72a7c598a5acb3faec1c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e066a48fa9f4b4a6d933b28933126e08b955fdf11ce72a7c598a5acb3faec1c8->enter($__internal_e066a48fa9f4b4a6d933b28933126e08b955fdf11ce72a7c598a5acb3faec1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4afa98d588c50dd1b1dc4fb79ecd350eed20441852c68e992626f1c8af63199b->leave($__internal_4afa98d588c50dd1b1dc4fb79ecd350eed20441852c68e992626f1c8af63199b_prof);

        
        $__internal_e066a48fa9f4b4a6d933b28933126e08b955fdf11ce72a7c598a5acb3faec1c8->leave($__internal_e066a48fa9f4b4a6d933b28933126e08b955fdf11ce72a7c598a5acb3faec1c8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_16199282a95ddc31ab65cf631c32d8887b8bb7105ce0deaa8ae1a61b25d1f109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16199282a95ddc31ab65cf631c32d8887b8bb7105ce0deaa8ae1a61b25d1f109->enter($__internal_16199282a95ddc31ab65cf631c32d8887b8bb7105ce0deaa8ae1a61b25d1f109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_03a1bb37266dcd3d6833bd9ce64d9d7d9299fbf7fe60c8afd055abd682abeba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03a1bb37266dcd3d6833bd9ce64d9d7d9299fbf7fe60c8afd055abd682abeba7->enter($__internal_03a1bb37266dcd3d6833bd9ce64d9d7d9299fbf7fe60c8afd055abd682abeba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_03a1bb37266dcd3d6833bd9ce64d9d7d9299fbf7fe60c8afd055abd682abeba7->leave($__internal_03a1bb37266dcd3d6833bd9ce64d9d7d9299fbf7fe60c8afd055abd682abeba7_prof);

        
        $__internal_16199282a95ddc31ab65cf631c32d8887b8bb7105ce0deaa8ae1a61b25d1f109->leave($__internal_16199282a95ddc31ab65cf631c32d8887b8bb7105ce0deaa8ae1a61b25d1f109_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d0f7c20b15e48f478ff38bd3c45e6de86cc0d4bf629f45519b09d98ef2e710e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0f7c20b15e48f478ff38bd3c45e6de86cc0d4bf629f45519b09d98ef2e710e5->enter($__internal_d0f7c20b15e48f478ff38bd3c45e6de86cc0d4bf629f45519b09d98ef2e710e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c46c463d5f5c03203867878fe02ce39751cd7906f22fc952846ef6c853675103 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c46c463d5f5c03203867878fe02ce39751cd7906f22fc952846ef6c853675103->enter($__internal_c46c463d5f5c03203867878fe02ce39751cd7906f22fc952846ef6c853675103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c46c463d5f5c03203867878fe02ce39751cd7906f22fc952846ef6c853675103->leave($__internal_c46c463d5f5c03203867878fe02ce39751cd7906f22fc952846ef6c853675103_prof);

        
        $__internal_d0f7c20b15e48f478ff38bd3c45e6de86cc0d4bf629f45519b09d98ef2e710e5->leave($__internal_d0f7c20b15e48f478ff38bd3c45e6de86cc0d4bf629f45519b09d98ef2e710e5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f6fba44bb1ffa5df00d6d55f824e26295f217f5118babc0da2f4e92925690136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6fba44bb1ffa5df00d6d55f824e26295f217f5118babc0da2f4e92925690136->enter($__internal_f6fba44bb1ffa5df00d6d55f824e26295f217f5118babc0da2f4e92925690136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_73dfb54f8823d86f89269f0cadd429bba0c5d40f576f5b0891e4448400444c12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73dfb54f8823d86f89269f0cadd429bba0c5d40f576f5b0891e4448400444c12->enter($__internal_73dfb54f8823d86f89269f0cadd429bba0c5d40f576f5b0891e4448400444c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_73dfb54f8823d86f89269f0cadd429bba0c5d40f576f5b0891e4448400444c12->leave($__internal_73dfb54f8823d86f89269f0cadd429bba0c5d40f576f5b0891e4448400444c12_prof);

        
        $__internal_f6fba44bb1ffa5df00d6d55f824e26295f217f5118babc0da2f4e92925690136->leave($__internal_f6fba44bb1ffa5df00d6d55f824e26295f217f5118babc0da2f4e92925690136_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/miner/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
