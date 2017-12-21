<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_f01945f073ca27098264eabcfb24c43c7e8ad6ede63f350d0b0a5482ca8aed5a extends Twig_Template
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
        $__internal_5e5fe90457c4627892eff86ff14716042713417acf079d5b86e09056d8434450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e5fe90457c4627892eff86ff14716042713417acf079d5b86e09056d8434450->enter($__internal_5e5fe90457c4627892eff86ff14716042713417acf079d5b86e09056d8434450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_9974e976f42689d7862b7c08a56c2130a1d7cc6932ced1ae2fada13bf553b67c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9974e976f42689d7862b7c08a56c2130a1d7cc6932ced1ae2fada13bf553b67c->enter($__internal_9974e976f42689d7862b7c08a56c2130a1d7cc6932ced1ae2fada13bf553b67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_5e5fe90457c4627892eff86ff14716042713417acf079d5b86e09056d8434450->leave($__internal_5e5fe90457c4627892eff86ff14716042713417acf079d5b86e09056d8434450_prof);

        
        $__internal_9974e976f42689d7862b7c08a56c2130a1d7cc6932ced1ae2fada13bf553b67c->leave($__internal_9974e976f42689d7862b7c08a56c2130a1d7cc6932ced1ae2fada13bf553b67c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
