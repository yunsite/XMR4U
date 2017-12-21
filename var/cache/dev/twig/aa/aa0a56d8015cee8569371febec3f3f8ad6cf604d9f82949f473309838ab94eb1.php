<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_b19702daf31962d58d1adf7900d430090a84dd71ba8c741a1d03bf76171ee25e extends Twig_Template
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
        $__internal_c79ea68932e2bd256ec1c5828195df7da5f2acac5df87addb71f44f9c6f6ae3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c79ea68932e2bd256ec1c5828195df7da5f2acac5df87addb71f44f9c6f6ae3a->enter($__internal_c79ea68932e2bd256ec1c5828195df7da5f2acac5df87addb71f44f9c6f6ae3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_cec25d23a270aa7c5b169932007228f34b7db2a29776a9c5135eb8f15d538cb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cec25d23a270aa7c5b169932007228f34b7db2a29776a9c5135eb8f15d538cb0->enter($__internal_cec25d23a270aa7c5b169932007228f34b7db2a29776a9c5135eb8f15d538cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_c79ea68932e2bd256ec1c5828195df7da5f2acac5df87addb71f44f9c6f6ae3a->leave($__internal_c79ea68932e2bd256ec1c5828195df7da5f2acac5df87addb71f44f9c6f6ae3a_prof);

        
        $__internal_cec25d23a270aa7c5b169932007228f34b7db2a29776a9c5135eb8f15d538cb0->leave($__internal_cec25d23a270aa7c5b169932007228f34b7db2a29776a9c5135eb8f15d538cb0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "/Users/Slote/Desktop/XMR4U/vendor/symfony/twig-bundle/Resources/views/Exception/error.atom.twig");
    }
}
