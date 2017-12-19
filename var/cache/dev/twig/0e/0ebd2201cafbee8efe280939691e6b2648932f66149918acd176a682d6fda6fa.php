<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_2ab1598f264ef7b322cf18e57690e8261d931f5f54ec750c37f6f87b2460bda1 extends Twig_Template
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
        $__internal_d82d94149152fcbe4212526dea19dfdbb8483e21fff61bac8caf7158f8200c56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d82d94149152fcbe4212526dea19dfdbb8483e21fff61bac8caf7158f8200c56->enter($__internal_d82d94149152fcbe4212526dea19dfdbb8483e21fff61bac8caf7158f8200c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_07274628be9ed0b08ed4ebbaf75075f43c984fccf9eb2f365b7f5d9549ef2420 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07274628be9ed0b08ed4ebbaf75075f43c984fccf9eb2f365b7f5d9549ef2420->enter($__internal_07274628be9ed0b08ed4ebbaf75075f43c984fccf9eb2f365b7f5d9549ef2420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_d82d94149152fcbe4212526dea19dfdbb8483e21fff61bac8caf7158f8200c56->leave($__internal_d82d94149152fcbe4212526dea19dfdbb8483e21fff61bac8caf7158f8200c56_prof);

        
        $__internal_07274628be9ed0b08ed4ebbaf75075f43c984fccf9eb2f365b7f5d9549ef2420->leave($__internal_07274628be9ed0b08ed4ebbaf75075f43c984fccf9eb2f365b7f5d9549ef2420_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/button_widget.html.php");
    }
}
