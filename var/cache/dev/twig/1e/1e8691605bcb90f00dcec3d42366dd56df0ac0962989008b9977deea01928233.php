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
        $__internal_d542022d072dfe25921e54bcc2bccfd9e6d1c4b2a555913ae9aa3d8cffdc8a23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d542022d072dfe25921e54bcc2bccfd9e6d1c4b2a555913ae9aa3d8cffdc8a23->enter($__internal_d542022d072dfe25921e54bcc2bccfd9e6d1c4b2a555913ae9aa3d8cffdc8a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_4a8720925d42e32aff5e3852ccba1e7a908c0b74273da462bb32e519fdb8e8d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a8720925d42e32aff5e3852ccba1e7a908c0b74273da462bb32e519fdb8e8d9->enter($__internal_4a8720925d42e32aff5e3852ccba1e7a908c0b74273da462bb32e519fdb8e8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_d542022d072dfe25921e54bcc2bccfd9e6d1c4b2a555913ae9aa3d8cffdc8a23->leave($__internal_d542022d072dfe25921e54bcc2bccfd9e6d1c4b2a555913ae9aa3d8cffdc8a23_prof);

        
        $__internal_4a8720925d42e32aff5e3852ccba1e7a908c0b74273da462bb32e519fdb8e8d9->leave($__internal_4a8720925d42e32aff5e3852ccba1e7a908c0b74273da462bb32e519fdb8e8d9_prof);

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
", "@Framework/Form/widget_attributes.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/widget_attributes.html.php");
    }
}
