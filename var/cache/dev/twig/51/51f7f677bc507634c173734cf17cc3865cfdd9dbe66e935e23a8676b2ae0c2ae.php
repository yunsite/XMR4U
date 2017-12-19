<?php

/* @Twig/Exception/error.html.twig */
class __TwigTemplate_5d9732c6af1f4b9ccab6b2d237f031870a1693193c4d31da80464728b01d3bba extends Twig_Template
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
        $__internal_78d8bf94cbde2f14a4ac14ff5d8fc83e68a7a1e37408d8894d46644b271f8c37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78d8bf94cbde2f14a4ac14ff5d8fc83e68a7a1e37408d8894d46644b271f8c37->enter($__internal_78d8bf94cbde2f14a4ac14ff5d8fc83e68a7a1e37408d8894d46644b271f8c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        $__internal_9439e8b8f4da2e605704722fe5252e9eb45f7818894b1aed2d0062d2cee796d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9439e8b8f4da2e605704722fe5252e9eb45f7818894b1aed2d0062d2cee796d8->enter($__internal_9439e8b8f4da2e605704722fe5252e9eb45f7818894b1aed2d0062d2cee796d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <title>An Error Occurred: ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
        echo "\".</h2>

        <div>
            Something is broken. Please let us know what you were doing when this error occurred.
            We will fix it as soon as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
";
        
        $__internal_78d8bf94cbde2f14a4ac14ff5d8fc83e68a7a1e37408d8894d46644b271f8c37->leave($__internal_78d8bf94cbde2f14a4ac14ff5d8fc83e68a7a1e37408d8894d46644b271f8c37_prof);

        
        $__internal_9439e8b8f4da2e605704722fe5252e9eb45f7818894b1aed2d0062d2cee796d8->leave($__internal_9439e8b8f4da2e605704722fe5252e9eb45f7818894b1aed2d0062d2cee796d8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  34 => 5,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <title>An Error Occurred: {{ status_text }}</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"{{ status_code }} {{ status_text }}\".</h2>

        <div>
            Something is broken. Please let us know what you were doing when this error occurred.
            We will fix it as soon as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
", "@Twig/Exception/error.html.twig", "/var/www/miner/vendor/symfony/twig-bundle/Resources/views/Exception/error.html.twig");
    }
}
