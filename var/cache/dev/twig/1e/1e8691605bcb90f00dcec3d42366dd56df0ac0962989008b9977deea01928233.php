<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_e576985a581b04a676a37b95241b422799d57f9e67b89181aca5968745a8cfe5 extends Twig_Template
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
        $__internal_cda4c11d07239f3af0d76e1d362b27b57799eb16917a219f2dcac87f096bce3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cda4c11d07239f3af0d76e1d362b27b57799eb16917a219f2dcac87f096bce3d->enter($__internal_cda4c11d07239f3af0d76e1d362b27b57799eb16917a219f2dcac87f096bce3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_bccd74418d825b3e4114ce549b51d28ed7292a7d015b3cc09d7d7229f2f3c204 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bccd74418d825b3e4114ce549b51d28ed7292a7d015b3cc09d7d7229f2f3c204->enter($__internal_bccd74418d825b3e4114ce549b51d28ed7292a7d015b3cc09d7d7229f2f3c204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_cda4c11d07239f3af0d76e1d362b27b57799eb16917a219f2dcac87f096bce3d->leave($__internal_cda4c11d07239f3af0d76e1d362b27b57799eb16917a219f2dcac87f096bce3d_prof);

        
        $__internal_bccd74418d825b3e4114ce549b51d28ed7292a7d015b3cc09d7d7229f2f3c204->leave($__internal_bccd74418d825b3e4114ce549b51d28ed7292a7d015b3cc09d7d7229f2f3c204_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/widget_attributes.html.php");
    }
}
