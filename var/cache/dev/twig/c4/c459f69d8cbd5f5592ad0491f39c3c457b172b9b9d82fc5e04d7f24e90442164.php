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
        $__internal_e84e0cd2930b8d235223fe72207ac9c66f0c9305112ee1fd8bb7b12c7cf140ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e84e0cd2930b8d235223fe72207ac9c66f0c9305112ee1fd8bb7b12c7cf140ee->enter($__internal_e84e0cd2930b8d235223fe72207ac9c66f0c9305112ee1fd8bb7b12c7cf140ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_c067c5dbd0063d51f0b1956332ba4e2265fddc7044f0b53ec7287a67fa8c4bd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c067c5dbd0063d51f0b1956332ba4e2265fddc7044f0b53ec7287a67fa8c4bd3->enter($__internal_c067c5dbd0063d51f0b1956332ba4e2265fddc7044f0b53ec7287a67fa8c4bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_e84e0cd2930b8d235223fe72207ac9c66f0c9305112ee1fd8bb7b12c7cf140ee->leave($__internal_e84e0cd2930b8d235223fe72207ac9c66f0c9305112ee1fd8bb7b12c7cf140ee_prof);

        
        $__internal_c067c5dbd0063d51f0b1956332ba4e2265fddc7044f0b53ec7287a67fa8c4bd3->leave($__internal_c067c5dbd0063d51f0b1956332ba4e2265fddc7044f0b53ec7287a67fa8c4bd3_prof);

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
