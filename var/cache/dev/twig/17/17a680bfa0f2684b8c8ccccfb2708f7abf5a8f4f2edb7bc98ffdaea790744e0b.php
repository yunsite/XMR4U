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
        $__internal_6e27790f2594d6f074e7dcc53223a4bf07e5006d97741f1dbcd5bd337c668f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e27790f2594d6f074e7dcc53223a4bf07e5006d97741f1dbcd5bd337c668f53->enter($__internal_6e27790f2594d6f074e7dcc53223a4bf07e5006d97741f1dbcd5bd337c668f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_89987cf01e146cd15353869db73259c35dd56ee19a184579f45928b74a25ed3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89987cf01e146cd15353869db73259c35dd56ee19a184579f45928b74a25ed3c->enter($__internal_89987cf01e146cd15353869db73259c35dd56ee19a184579f45928b74a25ed3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

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
        
        $__internal_6e27790f2594d6f074e7dcc53223a4bf07e5006d97741f1dbcd5bd337c668f53->leave($__internal_6e27790f2594d6f074e7dcc53223a4bf07e5006d97741f1dbcd5bd337c668f53_prof);

        
        $__internal_89987cf01e146cd15353869db73259c35dd56ee19a184579f45928b74a25ed3c->leave($__internal_89987cf01e146cd15353869db73259c35dd56ee19a184579f45928b74a25ed3c_prof);

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
