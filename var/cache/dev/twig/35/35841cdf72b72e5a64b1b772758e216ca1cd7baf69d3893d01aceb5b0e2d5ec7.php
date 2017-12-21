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
        $__internal_acda047ec9e7e32fd63aed6761bf160b9c658d878864f99362ba340f08fd97eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acda047ec9e7e32fd63aed6761bf160b9c658d878864f99362ba340f08fd97eb->enter($__internal_acda047ec9e7e32fd63aed6761bf160b9c658d878864f99362ba340f08fd97eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_0905790326becb81c41b5c443776db1cfd1a3334a4d5fa79190fcba2572cf7c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0905790326becb81c41b5c443776db1cfd1a3334a4d5fa79190fcba2572cf7c3->enter($__internal_0905790326becb81c41b5c443776db1cfd1a3334a4d5fa79190fcba2572cf7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_acda047ec9e7e32fd63aed6761bf160b9c658d878864f99362ba340f08fd97eb->leave($__internal_acda047ec9e7e32fd63aed6761bf160b9c658d878864f99362ba340f08fd97eb_prof);

        
        $__internal_0905790326becb81c41b5c443776db1cfd1a3334a4d5fa79190fcba2572cf7c3->leave($__internal_0905790326becb81c41b5c443776db1cfd1a3334a4d5fa79190fcba2572cf7c3_prof);

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
", "@Framework/Form/datetime_widget.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/datetime_widget.html.php");
    }
}
