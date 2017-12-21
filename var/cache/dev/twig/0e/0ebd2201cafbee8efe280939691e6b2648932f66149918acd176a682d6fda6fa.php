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
        $__internal_66bcd42926e4409b6d57eba41ac12361f101d369de04c3afefcd0333ec9f53bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66bcd42926e4409b6d57eba41ac12361f101d369de04c3afefcd0333ec9f53bd->enter($__internal_66bcd42926e4409b6d57eba41ac12361f101d369de04c3afefcd0333ec9f53bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_67f2151099640ee0b1e613f85d0dc46f585bc3a2e943dfd283073f6b17f2211a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67f2151099640ee0b1e613f85d0dc46f585bc3a2e943dfd283073f6b17f2211a->enter($__internal_67f2151099640ee0b1e613f85d0dc46f585bc3a2e943dfd283073f6b17f2211a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_66bcd42926e4409b6d57eba41ac12361f101d369de04c3afefcd0333ec9f53bd->leave($__internal_66bcd42926e4409b6d57eba41ac12361f101d369de04c3afefcd0333ec9f53bd_prof);

        
        $__internal_67f2151099640ee0b1e613f85d0dc46f585bc3a2e943dfd283073f6b17f2211a->leave($__internal_67f2151099640ee0b1e613f85d0dc46f585bc3a2e943dfd283073f6b17f2211a_prof);

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
