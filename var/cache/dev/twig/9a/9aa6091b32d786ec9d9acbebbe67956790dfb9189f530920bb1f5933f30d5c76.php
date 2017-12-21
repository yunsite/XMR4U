<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_b296eeb42ae1308da2970f9c4f9b0f3aaa6356200a298f72a1831b4649971d44 extends Twig_Template
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
        $__internal_c0ab58ec2c4697b98426fca5fcb1fa0c9ab06f4efc11dd8f30b74ea1883a06f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0ab58ec2c4697b98426fca5fcb1fa0c9ab06f4efc11dd8f30b74ea1883a06f9->enter($__internal_c0ab58ec2c4697b98426fca5fcb1fa0c9ab06f4efc11dd8f30b74ea1883a06f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_9180ec3d6edc277a870e77e332a5143889cf9ca5e73d5b95707f8ef8459ed6a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9180ec3d6edc277a870e77e332a5143889cf9ca5e73d5b95707f8ef8459ed6a7->enter($__internal_9180ec3d6edc277a870e77e332a5143889cf9ca5e73d5b95707f8ef8459ed6a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c0ab58ec2c4697b98426fca5fcb1fa0c9ab06f4efc11dd8f30b74ea1883a06f9->leave($__internal_c0ab58ec2c4697b98426fca5fcb1fa0c9ab06f4efc11dd8f30b74ea1883a06f9_prof);

        
        $__internal_9180ec3d6edc277a870e77e332a5143889cf9ca5e73d5b95707f8ef8459ed6a7->leave($__internal_9180ec3d6edc277a870e77e332a5143889cf9ca5e73d5b95707f8ef8459ed6a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget.html.php");
    }
}
