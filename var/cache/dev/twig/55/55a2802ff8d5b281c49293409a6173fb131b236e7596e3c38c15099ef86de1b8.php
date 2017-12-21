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
        $__internal_c066e0f6b1f6c20c28821aff77ccdb5ab19cf1fef90a3739a40c1b905515851d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c066e0f6b1f6c20c28821aff77ccdb5ab19cf1fef90a3739a40c1b905515851d->enter($__internal_c066e0f6b1f6c20c28821aff77ccdb5ab19cf1fef90a3739a40c1b905515851d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_fac573e92f0fb9477885eafdf593843d4c11e0a71e3c5b3c305e933c7b6aa8d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fac573e92f0fb9477885eafdf593843d4c11e0a71e3c5b3c305e933c7b6aa8d7->enter($__internal_fac573e92f0fb9477885eafdf593843d4c11e0a71e3c5b3c305e933c7b6aa8d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_c066e0f6b1f6c20c28821aff77ccdb5ab19cf1fef90a3739a40c1b905515851d->leave($__internal_c066e0f6b1f6c20c28821aff77ccdb5ab19cf1fef90a3739a40c1b905515851d_prof);

        
        $__internal_fac573e92f0fb9477885eafdf593843d4c11e0a71e3c5b3c305e933c7b6aa8d7->leave($__internal_fac573e92f0fb9477885eafdf593843d4c11e0a71e3c5b3c305e933c7b6aa8d7_prof);

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
