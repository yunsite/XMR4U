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
        $__internal_866ca2de5905fa0bdb09ee8ff97554ca22d9c8f970a02fd8caf3574966aac143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_866ca2de5905fa0bdb09ee8ff97554ca22d9c8f970a02fd8caf3574966aac143->enter($__internal_866ca2de5905fa0bdb09ee8ff97554ca22d9c8f970a02fd8caf3574966aac143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_cad381702f94b76da057994944c630ab6279ff7459826d9ddb16ae1c1521526d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cad381702f94b76da057994944c630ab6279ff7459826d9ddb16ae1c1521526d->enter($__internal_cad381702f94b76da057994944c630ab6279ff7459826d9ddb16ae1c1521526d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_866ca2de5905fa0bdb09ee8ff97554ca22d9c8f970a02fd8caf3574966aac143->leave($__internal_866ca2de5905fa0bdb09ee8ff97554ca22d9c8f970a02fd8caf3574966aac143_prof);

        
        $__internal_cad381702f94b76da057994944c630ab6279ff7459826d9ddb16ae1c1521526d->leave($__internal_cad381702f94b76da057994944c630ab6279ff7459826d9ddb16ae1c1521526d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_edd4d05696d5d6f070cf5b13775d461fb195c31d67aba01c228156d067c6524a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edd4d05696d5d6f070cf5b13775d461fb195c31d67aba01c228156d067c6524a->enter($__internal_edd4d05696d5d6f070cf5b13775d461fb195c31d67aba01c228156d067c6524a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_92a5502c5e1c41c9a35053243eafd0e0c800b6932918c15297d03d8cb420068e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92a5502c5e1c41c9a35053243eafd0e0c800b6932918c15297d03d8cb420068e->enter($__internal_92a5502c5e1c41c9a35053243eafd0e0c800b6932918c15297d03d8cb420068e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_92a5502c5e1c41c9a35053243eafd0e0c800b6932918c15297d03d8cb420068e->leave($__internal_92a5502c5e1c41c9a35053243eafd0e0c800b6932918c15297d03d8cb420068e_prof);

        
        $__internal_edd4d05696d5d6f070cf5b13775d461fb195c31d67aba01c228156d067c6524a->leave($__internal_edd4d05696d5d6f070cf5b13775d461fb195c31d67aba01c228156d067c6524a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a9fd901540c2287c5a224bb103d0df84538151ca13e936135cfa6e7cf315477d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9fd901540c2287c5a224bb103d0df84538151ca13e936135cfa6e7cf315477d->enter($__internal_a9fd901540c2287c5a224bb103d0df84538151ca13e936135cfa6e7cf315477d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ffac964199b16503f78add9ced5d10031b4898fd5188b6882b28f732ca822820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffac964199b16503f78add9ced5d10031b4898fd5188b6882b28f732ca822820->enter($__internal_ffac964199b16503f78add9ced5d10031b4898fd5188b6882b28f732ca822820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ffac964199b16503f78add9ced5d10031b4898fd5188b6882b28f732ca822820->leave($__internal_ffac964199b16503f78add9ced5d10031b4898fd5188b6882b28f732ca822820_prof);

        
        $__internal_a9fd901540c2287c5a224bb103d0df84538151ca13e936135cfa6e7cf315477d->leave($__internal_a9fd901540c2287c5a224bb103d0df84538151ca13e936135cfa6e7cf315477d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4f07ecfdf881f8451a0bb99344c893f3438aa4a110dc392c6888544c8ec48f1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f07ecfdf881f8451a0bb99344c893f3438aa4a110dc392c6888544c8ec48f1b->enter($__internal_4f07ecfdf881f8451a0bb99344c893f3438aa4a110dc392c6888544c8ec48f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b7896ed350d6b39dca49cadd6614ad0cf7a890851d618d81a6ead1d04647399b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7896ed350d6b39dca49cadd6614ad0cf7a890851d618d81a6ead1d04647399b->enter($__internal_b7896ed350d6b39dca49cadd6614ad0cf7a890851d618d81a6ead1d04647399b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_b7896ed350d6b39dca49cadd6614ad0cf7a890851d618d81a6ead1d04647399b->leave($__internal_b7896ed350d6b39dca49cadd6614ad0cf7a890851d618d81a6ead1d04647399b_prof);

        
        $__internal_4f07ecfdf881f8451a0bb99344c893f3438aa4a110dc392c6888544c8ec48f1b->leave($__internal_4f07ecfdf881f8451a0bb99344c893f3438aa4a110dc392c6888544c8ec48f1b_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/Slote/Desktop/XMR4U/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
