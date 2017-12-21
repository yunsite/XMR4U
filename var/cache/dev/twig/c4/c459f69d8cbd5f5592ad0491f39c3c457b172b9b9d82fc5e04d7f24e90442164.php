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
        $__internal_bb529809472d04d86549337cdb5987a1b9074550ca5ecb686abf8e8c1291830b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb529809472d04d86549337cdb5987a1b9074550ca5ecb686abf8e8c1291830b->enter($__internal_bb529809472d04d86549337cdb5987a1b9074550ca5ecb686abf8e8c1291830b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_ababddaca69bd5357401180d34e729cff4543add132e00f5707e5bcbadf7f659 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ababddaca69bd5357401180d34e729cff4543add132e00f5707e5bcbadf7f659->enter($__internal_ababddaca69bd5357401180d34e729cff4543add132e00f5707e5bcbadf7f659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_bb529809472d04d86549337cdb5987a1b9074550ca5ecb686abf8e8c1291830b->leave($__internal_bb529809472d04d86549337cdb5987a1b9074550ca5ecb686abf8e8c1291830b_prof);

        
        $__internal_ababddaca69bd5357401180d34e729cff4543add132e00f5707e5bcbadf7f659->leave($__internal_ababddaca69bd5357401180d34e729cff4543add132e00f5707e5bcbadf7f659_prof);

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
", "@Framework/Form/form_widget_compound.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
