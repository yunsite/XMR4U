<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_c647f4f8918e305f2c80c2c4f4824a7e15466ec74778cba3d33877716e346970 extends Twig_Template
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
        $__internal_88a8214b2e95e5a613700a651edd1112a23cc505f69d01e62ca5538eade182c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88a8214b2e95e5a613700a651edd1112a23cc505f69d01e62ca5538eade182c0->enter($__internal_88a8214b2e95e5a613700a651edd1112a23cc505f69d01e62ca5538eade182c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_e515732d2a705758c6a6766c3097aec877d8ecc0fbe171ecb33e46041ea7db2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e515732d2a705758c6a6766c3097aec877d8ecc0fbe171ecb33e46041ea7db2d->enter($__internal_e515732d2a705758c6a6766c3097aec877d8ecc0fbe171ecb33e46041ea7db2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_88a8214b2e95e5a613700a651edd1112a23cc505f69d01e62ca5538eade182c0->leave($__internal_88a8214b2e95e5a613700a651edd1112a23cc505f69d01e62ca5538eade182c0_prof);

        
        $__internal_e515732d2a705758c6a6766c3097aec877d8ecc0fbe171ecb33e46041ea7db2d->leave($__internal_e515732d2a705758c6a6766c3097aec877d8ecc0fbe171ecb33e46041ea7db2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/radio_widget.html.php");
    }
}
