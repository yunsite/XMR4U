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
        $__internal_b1e5b5fa8bb68f015a7e5691dcdabd2d2e75b89888be152fb6577e72d366ae64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1e5b5fa8bb68f015a7e5691dcdabd2d2e75b89888be152fb6577e72d366ae64->enter($__internal_b1e5b5fa8bb68f015a7e5691dcdabd2d2e75b89888be152fb6577e72d366ae64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_954d84f821603279d4413962235cfdf5172b27641d910f7a408061ce091ee9b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_954d84f821603279d4413962235cfdf5172b27641d910f7a408061ce091ee9b4->enter($__internal_954d84f821603279d4413962235cfdf5172b27641d910f7a408061ce091ee9b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_b1e5b5fa8bb68f015a7e5691dcdabd2d2e75b89888be152fb6577e72d366ae64->leave($__internal_b1e5b5fa8bb68f015a7e5691dcdabd2d2e75b89888be152fb6577e72d366ae64_prof);

        
        $__internal_954d84f821603279d4413962235cfdf5172b27641d910f7a408061ce091ee9b4->leave($__internal_954d84f821603279d4413962235cfdf5172b27641d910f7a408061ce091ee9b4_prof);

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
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
