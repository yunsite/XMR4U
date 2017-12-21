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
        $__internal_7c1319f36a4d1f550d2161da763cf1b034fbfd500aa9078f5a277eb956861e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c1319f36a4d1f550d2161da763cf1b034fbfd500aa9078f5a277eb956861e55->enter($__internal_7c1319f36a4d1f550d2161da763cf1b034fbfd500aa9078f5a277eb956861e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_526ebd5bd9e54d68ce90c949dac7b401102f96c0d9856c474d0d41b3a7872d40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_526ebd5bd9e54d68ce90c949dac7b401102f96c0d9856c474d0d41b3a7872d40->enter($__internal_526ebd5bd9e54d68ce90c949dac7b401102f96c0d9856c474d0d41b3a7872d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

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
        
        $__internal_7c1319f36a4d1f550d2161da763cf1b034fbfd500aa9078f5a277eb956861e55->leave($__internal_7c1319f36a4d1f550d2161da763cf1b034fbfd500aa9078f5a277eb956861e55_prof);

        
        $__internal_526ebd5bd9e54d68ce90c949dac7b401102f96c0d9856c474d0d41b3a7872d40->leave($__internal_526ebd5bd9e54d68ce90c949dac7b401102f96c0d9856c474d0d41b3a7872d40_prof);

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
", "@Framework/Form/time_widget.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/time_widget.html.php");
    }
}
