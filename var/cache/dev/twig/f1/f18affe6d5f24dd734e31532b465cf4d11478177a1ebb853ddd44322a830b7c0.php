<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_ecb06392bb688494e7440c81b0e6ad15fa5a6d122195447c4cea9fa222968f81 extends Twig_Template
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
        $__internal_310a4c7f0cf02175bc47cf3535892ae183e5b727db3b906a8eb43869c190b8b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_310a4c7f0cf02175bc47cf3535892ae183e5b727db3b906a8eb43869c190b8b5->enter($__internal_310a4c7f0cf02175bc47cf3535892ae183e5b727db3b906a8eb43869c190b8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_1c9b915dc933bdd8b524a1ec85e9d37cfb57db2f0a3a3245fddf7ed2c4fbf7a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c9b915dc933bdd8b524a1ec85e9d37cfb57db2f0a3a3245fddf7ed2c4fbf7a6->enter($__internal_1c9b915dc933bdd8b524a1ec85e9d37cfb57db2f0a3a3245fddf7ed2c4fbf7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_310a4c7f0cf02175bc47cf3535892ae183e5b727db3b906a8eb43869c190b8b5->leave($__internal_310a4c7f0cf02175bc47cf3535892ae183e5b727db3b906a8eb43869c190b8b5_prof);

        
        $__internal_1c9b915dc933bdd8b524a1ec85e9d37cfb57db2f0a3a3245fddf7ed2c4fbf7a6->leave($__internal_1c9b915dc933bdd8b524a1ec85e9d37cfb57db2f0a3a3245fddf7ed2c4fbf7a6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "/var/www/miner/vendor/symfony/twig-bundle/Resources/views/Exception/exception.css.twig");
    }
}
