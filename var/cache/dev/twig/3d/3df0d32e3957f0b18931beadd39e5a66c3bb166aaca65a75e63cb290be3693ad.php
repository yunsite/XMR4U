<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_6ec61fd7bd8b18001a9440563a3671808b00f772ef8197933da4e35a1561a258 extends Twig_Template
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
        $__internal_1c01ad528291f7418aeb4877648753e6deaf77db833b8af46cb9911e0f105f3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c01ad528291f7418aeb4877648753e6deaf77db833b8af46cb9911e0f105f3e->enter($__internal_1c01ad528291f7418aeb4877648753e6deaf77db833b8af46cb9911e0f105f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_c9424a0368c36389c196878a7d471f6a053931060a00956d663b580e76498d3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9424a0368c36389c196878a7d471f6a053931060a00956d663b580e76498d3d->enter($__internal_c9424a0368c36389c196878a7d471f6a053931060a00956d663b580e76498d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_1c01ad528291f7418aeb4877648753e6deaf77db833b8af46cb9911e0f105f3e->leave($__internal_1c01ad528291f7418aeb4877648753e6deaf77db833b8af46cb9911e0f105f3e_prof);

        
        $__internal_c9424a0368c36389c196878a7d471f6a053931060a00956d663b580e76498d3d->leave($__internal_c9424a0368c36389c196878a7d471f6a053931060a00956d663b580e76498d3d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/collection_widget.html.php");
    }
}
