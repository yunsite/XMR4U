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
        $__internal_661e55a41458c53257c6aa3e8a7af07adf6889c873fd31007a1d4b2e8e6b1360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_661e55a41458c53257c6aa3e8a7af07adf6889c873fd31007a1d4b2e8e6b1360->enter($__internal_661e55a41458c53257c6aa3e8a7af07adf6889c873fd31007a1d4b2e8e6b1360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_bc605c76a97716a829052f916eeae222cce0346c9d5831a28880f43ae12059ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc605c76a97716a829052f916eeae222cce0346c9d5831a28880f43ae12059ff->enter($__internal_bc605c76a97716a829052f916eeae222cce0346c9d5831a28880f43ae12059ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_661e55a41458c53257c6aa3e8a7af07adf6889c873fd31007a1d4b2e8e6b1360->leave($__internal_661e55a41458c53257c6aa3e8a7af07adf6889c873fd31007a1d4b2e8e6b1360_prof);

        
        $__internal_bc605c76a97716a829052f916eeae222cce0346c9d5831a28880f43ae12059ff->leave($__internal_bc605c76a97716a829052f916eeae222cce0346c9d5831a28880f43ae12059ff_prof);

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
