<?php

/* default/new.html.twig */
class __TwigTemplate_0826ef6e7e5a82b0e5ba5372b45a4c6ce45458d53b78e8a789aeec763eb62ecb extends Twig_Template
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
        $__internal_abb2053a3230c880438d0f2cbc08c4cc0a19d31aaa13984daca5fc6e8acdc025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abb2053a3230c880438d0f2cbc08c4cc0a19d31aaa13984daca5fc6e8acdc025->enter($__internal_abb2053a3230c880438d0f2cbc08c4cc0a19d31aaa13984daca5fc6e8acdc025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/new.html.twig"));

        $__internal_5318dbce96e3ac42f715e96bab9238bba50ca39a36d221aebe38b4a0fcdb2650 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5318dbce96e3ac42f715e96bab9238bba50ca39a36d221aebe38b4a0fcdb2650->enter($__internal_5318dbce96e3ac42f715e96bab9238bba50ca39a36d221aebe38b4a0fcdb2650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/new.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), 'form_start');
        echo "
";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->getSourceContext()); })()), 'widget');
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_end');
        
        $__internal_abb2053a3230c880438d0f2cbc08c4cc0a19d31aaa13984daca5fc6e8acdc025->leave($__internal_abb2053a3230c880438d0f2cbc08c4cc0a19d31aaa13984daca5fc6e8acdc025_prof);

        
        $__internal_5318dbce96e3ac42f715e96bab9238bba50ca39a36d221aebe38b4a0fcdb2650->leave($__internal_5318dbce96e3ac42f715e96bab9238bba50ca39a36d221aebe38b4a0fcdb2650_prof);

    }

    public function getTemplateName()
    {
        return "default/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 3,  29 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}", "default/new.html.twig", "/var/www/miner/templates/default/new.html.twig");
    }
}
