<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_0454d05177310d91a484cc99f72384739cc2089308d68774d095ad6f92f88bef extends Twig_Template
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
        $__internal_5f8a49b3cb6fe03a61387b8b8f794bc4b9ee92522ef81e9eeb0c55dd78259f67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f8a49b3cb6fe03a61387b8b8f794bc4b9ee92522ef81e9eeb0c55dd78259f67->enter($__internal_5f8a49b3cb6fe03a61387b8b8f794bc4b9ee92522ef81e9eeb0c55dd78259f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_794ecc3444869fcfa172b2a66123d96a33ef2b1c9d5230627f90c1daf9fc32da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_794ecc3444869fcfa172b2a66123d96a33ef2b1c9d5230627f90c1daf9fc32da->enter($__internal_794ecc3444869fcfa172b2a66123d96a33ef2b1c9d5230627f90c1daf9fc32da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_5f8a49b3cb6fe03a61387b8b8f794bc4b9ee92522ef81e9eeb0c55dd78259f67->leave($__internal_5f8a49b3cb6fe03a61387b8b8f794bc4b9ee92522ef81e9eeb0c55dd78259f67_prof);

        
        $__internal_794ecc3444869fcfa172b2a66123d96a33ef2b1c9d5230627f90c1daf9fc32da->leave($__internal_794ecc3444869fcfa172b2a66123d96a33ef2b1c9d5230627f90c1daf9fc32da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/form_enctype.html.php");
    }
}
