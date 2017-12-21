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
        $__internal_fe2c0f61c372c0c5852093452e99cffb842bfdfacf737ff719c3a49b1cdca782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe2c0f61c372c0c5852093452e99cffb842bfdfacf737ff719c3a49b1cdca782->enter($__internal_fe2c0f61c372c0c5852093452e99cffb842bfdfacf737ff719c3a49b1cdca782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_f7e268e3c9b5007b39dcf9b009e14db148b5513213becf1e6ffd11d91f1aea31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7e268e3c9b5007b39dcf9b009e14db148b5513213becf1e6ffd11d91f1aea31->enter($__internal_f7e268e3c9b5007b39dcf9b009e14db148b5513213becf1e6ffd11d91f1aea31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_fe2c0f61c372c0c5852093452e99cffb842bfdfacf737ff719c3a49b1cdca782->leave($__internal_fe2c0f61c372c0c5852093452e99cffb842bfdfacf737ff719c3a49b1cdca782_prof);

        
        $__internal_f7e268e3c9b5007b39dcf9b009e14db148b5513213becf1e6ffd11d91f1aea31->leave($__internal_f7e268e3c9b5007b39dcf9b009e14db148b5513213becf1e6ffd11d91f1aea31_prof);

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
", "@Framework/Form/collection_widget.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/collection_widget.html.php");
    }
}
