<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_b26c7bd25dceaec539aa294ac9e6f4d8b4317013497ea841a5e7ebcdc3778c7d extends Twig_Template
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
        $__internal_12516092047231c05bc0ad3b309fa8c48001b1228eaf529f27bd47822b8e1aa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12516092047231c05bc0ad3b309fa8c48001b1228eaf529f27bd47822b8e1aa1->enter($__internal_12516092047231c05bc0ad3b309fa8c48001b1228eaf529f27bd47822b8e1aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_149a16a70eff62982b7108b97423ad2d043b9b5394498e4090e551f58dc74cb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_149a16a70eff62982b7108b97423ad2d043b9b5394498e4090e551f58dc74cb8->enter($__internal_149a16a70eff62982b7108b97423ad2d043b9b5394498e4090e551f58dc74cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_12516092047231c05bc0ad3b309fa8c48001b1228eaf529f27bd47822b8e1aa1->leave($__internal_12516092047231c05bc0ad3b309fa8c48001b1228eaf529f27bd47822b8e1aa1_prof);

        
        $__internal_149a16a70eff62982b7108b97423ad2d043b9b5394498e4090e551f58dc74cb8->leave($__internal_149a16a70eff62982b7108b97423ad2d043b9b5394498e4090e551f58dc74cb8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
