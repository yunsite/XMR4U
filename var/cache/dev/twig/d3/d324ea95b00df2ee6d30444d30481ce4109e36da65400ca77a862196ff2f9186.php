<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_731fbf1a143f71f2d21acfc6fe2ae503ddec11dcef89e2a8c518b3f462a63168 extends Twig_Template
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
        $__internal_5c62c9842d829f52e6e86b4d34f804d81be54655c38a2f9555cbfbe83e5978b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c62c9842d829f52e6e86b4d34f804d81be54655c38a2f9555cbfbe83e5978b4->enter($__internal_5c62c9842d829f52e6e86b4d34f804d81be54655c38a2f9555cbfbe83e5978b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_3f054cac93769199a0b6a6c06ab607abbb3d1291c1bf1b25b96faebdc0167eb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f054cac93769199a0b6a6c06ab607abbb3d1291c1bf1b25b96faebdc0167eb3->enter($__internal_3f054cac93769199a0b6a6c06ab607abbb3d1291c1bf1b25b96faebdc0167eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_5c62c9842d829f52e6e86b4d34f804d81be54655c38a2f9555cbfbe83e5978b4->leave($__internal_5c62c9842d829f52e6e86b4d34f804d81be54655c38a2f9555cbfbe83e5978b4_prof);

        
        $__internal_3f054cac93769199a0b6a6c06ab607abbb3d1291c1bf1b25b96faebdc0167eb3->leave($__internal_3f054cac93769199a0b6a6c06ab607abbb3d1291c1bf1b25b96faebdc0167eb3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "/var/www/miner/vendor/symfony/twig-bundle/Resources/views/Exception/exception.atom.twig");
    }
}
