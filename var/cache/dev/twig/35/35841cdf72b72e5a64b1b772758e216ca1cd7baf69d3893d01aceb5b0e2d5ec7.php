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
        $__internal_af2f307f38cd4160a70a9f6bfcb604283fa06ec02fdf9427d12a394611a79f7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af2f307f38cd4160a70a9f6bfcb604283fa06ec02fdf9427d12a394611a79f7d->enter($__internal_af2f307f38cd4160a70a9f6bfcb604283fa06ec02fdf9427d12a394611a79f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_2a2c11f3d2e84b5c62eac739443a8859dddecf661f4b6e78fce4f685b9b8a247 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a2c11f3d2e84b5c62eac739443a8859dddecf661f4b6e78fce4f685b9b8a247->enter($__internal_2a2c11f3d2e84b5c62eac739443a8859dddecf661f4b6e78fce4f685b9b8a247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_af2f307f38cd4160a70a9f6bfcb604283fa06ec02fdf9427d12a394611a79f7d->leave($__internal_af2f307f38cd4160a70a9f6bfcb604283fa06ec02fdf9427d12a394611a79f7d_prof);

        
        $__internal_2a2c11f3d2e84b5c62eac739443a8859dddecf661f4b6e78fce4f685b9b8a247->leave($__internal_2a2c11f3d2e84b5c62eac739443a8859dddecf661f4b6e78fce4f685b9b8a247_prof);

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
