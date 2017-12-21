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
        $__internal_33ca25ecf7fb01b0b27ac8fad4421f98459f7e8252e206f17c734be1850c82bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33ca25ecf7fb01b0b27ac8fad4421f98459f7e8252e206f17c734be1850c82bd->enter($__internal_33ca25ecf7fb01b0b27ac8fad4421f98459f7e8252e206f17c734be1850c82bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_7e195ba63a06d8e45d9903b5388fecfe265289efeeda15135b3edde6157ee5e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e195ba63a06d8e45d9903b5388fecfe265289efeeda15135b3edde6157ee5e3->enter($__internal_7e195ba63a06d8e45d9903b5388fecfe265289efeeda15135b3edde6157ee5e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_33ca25ecf7fb01b0b27ac8fad4421f98459f7e8252e206f17c734be1850c82bd->leave($__internal_33ca25ecf7fb01b0b27ac8fad4421f98459f7e8252e206f17c734be1850c82bd_prof);

        
        $__internal_7e195ba63a06d8e45d9903b5388fecfe265289efeeda15135b3edde6157ee5e3->leave($__internal_7e195ba63a06d8e45d9903b5388fecfe265289efeeda15135b3edde6157ee5e3_prof);

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
", "@Framework/Form/button_widget.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/button_widget.html.php");
    }
}
