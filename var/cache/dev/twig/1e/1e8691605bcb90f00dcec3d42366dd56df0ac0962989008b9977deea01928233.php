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
        $__internal_099dbe7c97746c4b15f853e7ec34e1d45e420f8cf20743e0520b79db112fd716 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_099dbe7c97746c4b15f853e7ec34e1d45e420f8cf20743e0520b79db112fd716->enter($__internal_099dbe7c97746c4b15f853e7ec34e1d45e420f8cf20743e0520b79db112fd716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_0009ef903188ec969ed136ac39e143e2c25b888a9ae9943ee364eb7d97ce99f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0009ef903188ec969ed136ac39e143e2c25b888a9ae9943ee364eb7d97ce99f9->enter($__internal_0009ef903188ec969ed136ac39e143e2c25b888a9ae9943ee364eb7d97ce99f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_099dbe7c97746c4b15f853e7ec34e1d45e420f8cf20743e0520b79db112fd716->leave($__internal_099dbe7c97746c4b15f853e7ec34e1d45e420f8cf20743e0520b79db112fd716_prof);

        
        $__internal_0009ef903188ec969ed136ac39e143e2c25b888a9ae9943ee364eb7d97ce99f9->leave($__internal_0009ef903188ec969ed136ac39e143e2c25b888a9ae9943ee364eb7d97ce99f9_prof);

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
