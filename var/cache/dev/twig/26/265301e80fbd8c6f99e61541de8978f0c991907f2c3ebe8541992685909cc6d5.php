<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_17159e83f0d1bf00acceacae09726532bf0961540b990cc37e7c8bf62607a5ae extends Twig_Template
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
        $__internal_b52c384f73d7dc9f9d2d1b95eb6656793fc6b992418a4408c8cc0d6ed7e426ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b52c384f73d7dc9f9d2d1b95eb6656793fc6b992418a4408c8cc0d6ed7e426ac->enter($__internal_b52c384f73d7dc9f9d2d1b95eb6656793fc6b992418a4408c8cc0d6ed7e426ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_cde89e5980e2ee074b8c37de925159344b1508489220a2fb7a806741299c8999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cde89e5980e2ee074b8c37de925159344b1508489220a2fb7a806741299c8999->enter($__internal_cde89e5980e2ee074b8c37de925159344b1508489220a2fb7a806741299c8999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_b52c384f73d7dc9f9d2d1b95eb6656793fc6b992418a4408c8cc0d6ed7e426ac->leave($__internal_b52c384f73d7dc9f9d2d1b95eb6656793fc6b992418a4408c8cc0d6ed7e426ac_prof);

        
        $__internal_cde89e5980e2ee074b8c37de925159344b1508489220a2fb7a806741299c8999->leave($__internal_cde89e5980e2ee074b8c37de925159344b1508489220a2fb7a806741299c8999_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "/var/www/miner/vendor/symfony/twig-bundle/Resources/views/Exception/error.txt.twig");
    }
}
