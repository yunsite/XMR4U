<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_29b729fc597f35925cf40d832daafce1455b5ad069bbb58de42e1756bd159392 extends Twig_Template
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
        $__internal_be8574d086067cb6c6ea4c630966ccaee821a92dc5c986932419aa6a1ed85fa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be8574d086067cb6c6ea4c630966ccaee821a92dc5c986932419aa6a1ed85fa8->enter($__internal_be8574d086067cb6c6ea4c630966ccaee821a92dc5c986932419aa6a1ed85fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_68ee4dc796478e5370c70ac0529562057b03ee16242a22d480c279a7f4b3641a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68ee4dc796478e5370c70ac0529562057b03ee16242a22d480c279a7f4b3641a->enter($__internal_68ee4dc796478e5370c70ac0529562057b03ee16242a22d480c279a7f4b3641a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_be8574d086067cb6c6ea4c630966ccaee821a92dc5c986932419aa6a1ed85fa8->leave($__internal_be8574d086067cb6c6ea4c630966ccaee821a92dc5c986932419aa6a1ed85fa8_prof);

        
        $__internal_68ee4dc796478e5370c70ac0529562057b03ee16242a22d480c279a7f4b3641a->leave($__internal_68ee4dc796478e5370c70ac0529562057b03ee16242a22d480c279a7f4b3641a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "/var/www/miner/vendor/symfony/twig-bundle/Resources/views/Exception/exception.rdf.twig");
    }
}
