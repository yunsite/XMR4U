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
        $__internal_206e10bd6d3e610c9dc3b98417dcf42b104bbb36110a3dc87335ca6c73f035a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_206e10bd6d3e610c9dc3b98417dcf42b104bbb36110a3dc87335ca6c73f035a8->enter($__internal_206e10bd6d3e610c9dc3b98417dcf42b104bbb36110a3dc87335ca6c73f035a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_3d4ae2f1afd508b49943b2cc0b2980cfaadc7ba3073ebdb081417a13bb3bb9b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d4ae2f1afd508b49943b2cc0b2980cfaadc7ba3073ebdb081417a13bb3bb9b8->enter($__internal_3d4ae2f1afd508b49943b2cc0b2980cfaadc7ba3073ebdb081417a13bb3bb9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_206e10bd6d3e610c9dc3b98417dcf42b104bbb36110a3dc87335ca6c73f035a8->leave($__internal_206e10bd6d3e610c9dc3b98417dcf42b104bbb36110a3dc87335ca6c73f035a8_prof);

        
        $__internal_3d4ae2f1afd508b49943b2cc0b2980cfaadc7ba3073ebdb081417a13bb3bb9b8->leave($__internal_3d4ae2f1afd508b49943b2cc0b2980cfaadc7ba3073ebdb081417a13bb3bb9b8_prof);

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
", "@Framework/Form/form_enctype.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/form_enctype.html.php");
    }
}
