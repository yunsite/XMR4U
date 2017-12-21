<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_e3cf842618688c5556007f36c0ec1a660351f1ac410af360cfcd9cef786c7ade extends Twig_Template
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
        $__internal_0e2445e3d51676be4bbf52313dae5d60edeb6fc99c63875d7ee0672dc73f4996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e2445e3d51676be4bbf52313dae5d60edeb6fc99c63875d7ee0672dc73f4996->enter($__internal_0e2445e3d51676be4bbf52313dae5d60edeb6fc99c63875d7ee0672dc73f4996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_2a067915467ea34afefaf16e69914f2b6a6c6c34750b88d1d46e424f41db0661 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a067915467ea34afefaf16e69914f2b6a6c6c34750b88d1d46e424f41db0661->enter($__internal_2a067915467ea34afefaf16e69914f2b6a6c6c34750b88d1d46e424f41db0661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_0e2445e3d51676be4bbf52313dae5d60edeb6fc99c63875d7ee0672dc73f4996->leave($__internal_0e2445e3d51676be4bbf52313dae5d60edeb6fc99c63875d7ee0672dc73f4996_prof);

        
        $__internal_2a067915467ea34afefaf16e69914f2b6a6c6c34750b88d1d46e424f41db0661->leave($__internal_2a067915467ea34afefaf16e69914f2b6a6c6c34750b88d1d46e424f41db0661_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/datetime_widget.html.php");
    }
}
