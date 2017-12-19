<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_e37ca4ed96bef96d8ffa2879ebfbd2051dd8e46a77c62cc26f58f06e329b9b94 extends Twig_Template
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
        $__internal_54e3cb3951da3ce6c857e9322a4ae7c665cee4786bffc469ade207fb6b9212d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54e3cb3951da3ce6c857e9322a4ae7c665cee4786bffc469ade207fb6b9212d1->enter($__internal_54e3cb3951da3ce6c857e9322a4ae7c665cee4786bffc469ade207fb6b9212d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_d8d41180c10baa23027a6193180c751ac7dec19c104c9fc4411b67ce650793e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8d41180c10baa23027a6193180c751ac7dec19c104c9fc4411b67ce650793e9->enter($__internal_d8d41180c10baa23027a6193180c751ac7dec19c104c9fc4411b67ce650793e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_54e3cb3951da3ce6c857e9322a4ae7c665cee4786bffc469ade207fb6b9212d1->leave($__internal_54e3cb3951da3ce6c857e9322a4ae7c665cee4786bffc469ade207fb6b9212d1_prof);

        
        $__internal_d8d41180c10baa23027a6193180c751ac7dec19c104c9fc4411b67ce650793e9->leave($__internal_d8d41180c10baa23027a6193180c751ac7dec19c104c9fc4411b67ce650793e9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "/var/www/miner/vendor/symfony/twig-bundle/Resources/views/Exception/error.css.twig");
    }
}
