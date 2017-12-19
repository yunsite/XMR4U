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
        $__internal_17428b75015bb55b86c0b8838848f46f3b9705c18b7aa4282ac31ed5c6819c62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17428b75015bb55b86c0b8838848f46f3b9705c18b7aa4282ac31ed5c6819c62->enter($__internal_17428b75015bb55b86c0b8838848f46f3b9705c18b7aa4282ac31ed5c6819c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_5c5c8be15396e860b1368e4a7e74e0d51c7e6d225067df04ab7d7627625e2f2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c5c8be15396e860b1368e4a7e74e0d51c7e6d225067df04ab7d7627625e2f2b->enter($__internal_5c5c8be15396e860b1368e4a7e74e0d51c7e6d225067df04ab7d7627625e2f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_17428b75015bb55b86c0b8838848f46f3b9705c18b7aa4282ac31ed5c6819c62->leave($__internal_17428b75015bb55b86c0b8838848f46f3b9705c18b7aa4282ac31ed5c6819c62_prof);

        
        $__internal_5c5c8be15396e860b1368e4a7e74e0d51c7e6d225067df04ab7d7627625e2f2b->leave($__internal_5c5c8be15396e860b1368e4a7e74e0d51c7e6d225067df04ab7d7627625e2f2b_prof);

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
", "@Twig/Exception/error.atom.twig", "/var/www/miner/vendor/symfony/twig-bundle/Resources/views/Exception/error.atom.twig");
    }
}
