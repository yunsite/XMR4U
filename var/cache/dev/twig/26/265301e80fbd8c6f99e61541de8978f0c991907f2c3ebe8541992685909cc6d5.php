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
        $__internal_b111b880a763e298d290e51f59fb00fa2848aebb072557e51ca683ac3503a400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b111b880a763e298d290e51f59fb00fa2848aebb072557e51ca683ac3503a400->enter($__internal_b111b880a763e298d290e51f59fb00fa2848aebb072557e51ca683ac3503a400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_1f31d89e2ef1f9847057871961e1eb705bfb10f8fa02223124789685e4ae3000 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f31d89e2ef1f9847057871961e1eb705bfb10f8fa02223124789685e4ae3000->enter($__internal_1f31d89e2ef1f9847057871961e1eb705bfb10f8fa02223124789685e4ae3000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_b111b880a763e298d290e51f59fb00fa2848aebb072557e51ca683ac3503a400->leave($__internal_b111b880a763e298d290e51f59fb00fa2848aebb072557e51ca683ac3503a400_prof);

        
        $__internal_1f31d89e2ef1f9847057871961e1eb705bfb10f8fa02223124789685e4ae3000->leave($__internal_1f31d89e2ef1f9847057871961e1eb705bfb10f8fa02223124789685e4ae3000_prof);

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
