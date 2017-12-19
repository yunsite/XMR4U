<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_87126248fbc1a81c46cef51e3a9385f8253f6716336acf55e4666a5a5e081c67 extends Twig_Template
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
        $__internal_d46fd5bcae25d34eab9da4dfbe5e890f9cdd7c5ae4cba3df18f3655ceff02b56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d46fd5bcae25d34eab9da4dfbe5e890f9cdd7c5ae4cba3df18f3655ceff02b56->enter($__internal_d46fd5bcae25d34eab9da4dfbe5e890f9cdd7c5ae4cba3df18f3655ceff02b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_6563331023c1842b9b0124bb656d2c24e33ff8b3605314ae42341c89266eac65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6563331023c1842b9b0124bb656d2c24e33ff8b3605314ae42341c89266eac65->enter($__internal_6563331023c1842b9b0124bb656d2c24e33ff8b3605314ae42341c89266eac65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_d46fd5bcae25d34eab9da4dfbe5e890f9cdd7c5ae4cba3df18f3655ceff02b56->leave($__internal_d46fd5bcae25d34eab9da4dfbe5e890f9cdd7c5ae4cba3df18f3655ceff02b56_prof);

        
        $__internal_6563331023c1842b9b0124bb656d2c24e33ff8b3605314ae42341c89266eac65->leave($__internal_6563331023c1842b9b0124bb656d2c24e33ff8b3605314ae42341c89266eac65_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
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
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/time_widget.html.php");
    }
}
