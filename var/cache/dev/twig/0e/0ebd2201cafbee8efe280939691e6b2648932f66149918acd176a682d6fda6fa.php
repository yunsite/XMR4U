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
        $__internal_b6eb77280308a2e9db2c6adc3630212cc5f08daf2e545046b351070becf2999d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6eb77280308a2e9db2c6adc3630212cc5f08daf2e545046b351070becf2999d->enter($__internal_b6eb77280308a2e9db2c6adc3630212cc5f08daf2e545046b351070becf2999d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_0a020e5251c2fb5745ec69fa009a4cc9d97905b1dc5a17352dc2603ceb14a23f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a020e5251c2fb5745ec69fa009a4cc9d97905b1dc5a17352dc2603ceb14a23f->enter($__internal_0a020e5251c2fb5745ec69fa009a4cc9d97905b1dc5a17352dc2603ceb14a23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_b6eb77280308a2e9db2c6adc3630212cc5f08daf2e545046b351070becf2999d->leave($__internal_b6eb77280308a2e9db2c6adc3630212cc5f08daf2e545046b351070becf2999d_prof);

        
        $__internal_0a020e5251c2fb5745ec69fa009a4cc9d97905b1dc5a17352dc2603ceb14a23f->leave($__internal_0a020e5251c2fb5745ec69fa009a4cc9d97905b1dc5a17352dc2603ceb14a23f_prof);

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
