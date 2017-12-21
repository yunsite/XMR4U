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
        $__internal_b3e174b9067166e63c272c7a51c4c6b5a446c4931a4719604eab1e06324a04d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3e174b9067166e63c272c7a51c4c6b5a446c4931a4719604eab1e06324a04d0->enter($__internal_b3e174b9067166e63c272c7a51c4c6b5a446c4931a4719604eab1e06324a04d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_e077443b1e3aaa6e80b16502fb1c10d93acdcd8d4403ccced29da1d9957a7bb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e077443b1e3aaa6e80b16502fb1c10d93acdcd8d4403ccced29da1d9957a7bb7->enter($__internal_e077443b1e3aaa6e80b16502fb1c10d93acdcd8d4403ccced29da1d9957a7bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_b3e174b9067166e63c272c7a51c4c6b5a446c4931a4719604eab1e06324a04d0->leave($__internal_b3e174b9067166e63c272c7a51c4c6b5a446c4931a4719604eab1e06324a04d0_prof);

        
        $__internal_e077443b1e3aaa6e80b16502fb1c10d93acdcd8d4403ccced29da1d9957a7bb7->leave($__internal_e077443b1e3aaa6e80b16502fb1c10d93acdcd8d4403ccced29da1d9957a7bb7_prof);

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
