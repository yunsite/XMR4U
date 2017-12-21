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
        $__internal_ddcfe6551196e94247023d723c97e2eabafa57e92e38db99ecc07d52249c3f56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddcfe6551196e94247023d723c97e2eabafa57e92e38db99ecc07d52249c3f56->enter($__internal_ddcfe6551196e94247023d723c97e2eabafa57e92e38db99ecc07d52249c3f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_3738812fc88cc5a4c25eee60358516c089265b305ab2ea6208f8dcfbe4aa9029 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3738812fc88cc5a4c25eee60358516c089265b305ab2ea6208f8dcfbe4aa9029->enter($__internal_3738812fc88cc5a4c25eee60358516c089265b305ab2ea6208f8dcfbe4aa9029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_ddcfe6551196e94247023d723c97e2eabafa57e92e38db99ecc07d52249c3f56->leave($__internal_ddcfe6551196e94247023d723c97e2eabafa57e92e38db99ecc07d52249c3f56_prof);

        
        $__internal_3738812fc88cc5a4c25eee60358516c089265b305ab2ea6208f8dcfbe4aa9029->leave($__internal_3738812fc88cc5a4c25eee60358516c089265b305ab2ea6208f8dcfbe4aa9029_prof);

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
