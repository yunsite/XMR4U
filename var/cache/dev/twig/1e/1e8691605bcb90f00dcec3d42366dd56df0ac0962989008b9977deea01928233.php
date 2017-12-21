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
        $__internal_d9e8760c7dd7aa323aeecc85533e586f6e879b07c41a87a4d22822a958de5709 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9e8760c7dd7aa323aeecc85533e586f6e879b07c41a87a4d22822a958de5709->enter($__internal_d9e8760c7dd7aa323aeecc85533e586f6e879b07c41a87a4d22822a958de5709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_2525fa50c9e4b2e08e373796d52b69c27a8d9134c45ea7ae00568322fe317df5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2525fa50c9e4b2e08e373796d52b69c27a8d9134c45ea7ae00568322fe317df5->enter($__internal_2525fa50c9e4b2e08e373796d52b69c27a8d9134c45ea7ae00568322fe317df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_d9e8760c7dd7aa323aeecc85533e586f6e879b07c41a87a4d22822a958de5709->leave($__internal_d9e8760c7dd7aa323aeecc85533e586f6e879b07c41a87a4d22822a958de5709_prof);

        
        $__internal_2525fa50c9e4b2e08e373796d52b69c27a8d9134c45ea7ae00568322fe317df5->leave($__internal_2525fa50c9e4b2e08e373796d52b69c27a8d9134c45ea7ae00568322fe317df5_prof);

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
