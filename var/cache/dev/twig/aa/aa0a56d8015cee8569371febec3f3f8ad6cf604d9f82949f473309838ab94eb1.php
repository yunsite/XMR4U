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
        $__internal_a771dc4547481230ba115290f7b8df8ecc26239c194d9c65ee1268ac0b9af517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a771dc4547481230ba115290f7b8df8ecc26239c194d9c65ee1268ac0b9af517->enter($__internal_a771dc4547481230ba115290f7b8df8ecc26239c194d9c65ee1268ac0b9af517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_23a4bda2574c62860c40d869927c30468e451f2e871b5b8119ad5a6ff90c4ea1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23a4bda2574c62860c40d869927c30468e451f2e871b5b8119ad5a6ff90c4ea1->enter($__internal_23a4bda2574c62860c40d869927c30468e451f2e871b5b8119ad5a6ff90c4ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_a771dc4547481230ba115290f7b8df8ecc26239c194d9c65ee1268ac0b9af517->leave($__internal_a771dc4547481230ba115290f7b8df8ecc26239c194d9c65ee1268ac0b9af517_prof);

        
        $__internal_23a4bda2574c62860c40d869927c30468e451f2e871b5b8119ad5a6ff90c4ea1->leave($__internal_23a4bda2574c62860c40d869927c30468e451f2e871b5b8119ad5a6ff90c4ea1_prof);

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
