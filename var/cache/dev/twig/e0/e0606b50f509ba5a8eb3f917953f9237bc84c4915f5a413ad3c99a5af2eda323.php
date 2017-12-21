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
        $__internal_31be91bd7de07c1a11a0758567430cca0e297dc3ac9c5fcfe81633727e40ed90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31be91bd7de07c1a11a0758567430cca0e297dc3ac9c5fcfe81633727e40ed90->enter($__internal_31be91bd7de07c1a11a0758567430cca0e297dc3ac9c5fcfe81633727e40ed90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_3a21927d20abd735fd1b2d18a02a9b8ddc5ec1b7cd414ec57d4d4dc1e969db6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a21927d20abd735fd1b2d18a02a9b8ddc5ec1b7cd414ec57d4d4dc1e969db6a->enter($__internal_3a21927d20abd735fd1b2d18a02a9b8ddc5ec1b7cd414ec57d4d4dc1e969db6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_31be91bd7de07c1a11a0758567430cca0e297dc3ac9c5fcfe81633727e40ed90->leave($__internal_31be91bd7de07c1a11a0758567430cca0e297dc3ac9c5fcfe81633727e40ed90_prof);

        
        $__internal_3a21927d20abd735fd1b2d18a02a9b8ddc5ec1b7cd414ec57d4d4dc1e969db6a->leave($__internal_3a21927d20abd735fd1b2d18a02a9b8ddc5ec1b7cd414ec57d4d4dc1e969db6a_prof);

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
", "@Twig/Exception/exception.rdf.twig", "/Users/Slote/Desktop/XMR4U/vendor/symfony/twig-bundle/Resources/views/Exception/exception.rdf.twig");
    }
}
