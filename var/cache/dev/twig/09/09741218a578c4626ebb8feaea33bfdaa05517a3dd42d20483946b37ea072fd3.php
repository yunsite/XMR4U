<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_006e988b100b093918fe7b2c1161b1b7ce2d86ca79caa4e77dd607dcc3c5cb12 extends Twig_Template
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
        $__internal_ddb2a615ed15e46c15c7604baec5b46a6c89a09caa076e24173c1779c2d1b0b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddb2a615ed15e46c15c7604baec5b46a6c89a09caa076e24173c1779c2d1b0b6->enter($__internal_ddb2a615ed15e46c15c7604baec5b46a6c89a09caa076e24173c1779c2d1b0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_782da77aaa5da79ed44999bb72ed66ed68da6fc5b34550f9537b5c992016e2ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_782da77aaa5da79ed44999bb72ed66ed68da6fc5b34550f9537b5c992016e2ba->enter($__internal_782da77aaa5da79ed44999bb72ed66ed68da6fc5b34550f9537b5c992016e2ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_ddb2a615ed15e46c15c7604baec5b46a6c89a09caa076e24173c1779c2d1b0b6->leave($__internal_ddb2a615ed15e46c15c7604baec5b46a6c89a09caa076e24173c1779c2d1b0b6_prof);

        
        $__internal_782da77aaa5da79ed44999bb72ed66ed68da6fc5b34550f9537b5c992016e2ba->leave($__internal_782da77aaa5da79ed44999bb72ed66ed68da6fc5b34550f9537b5c992016e2ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/form_label.html.php");
    }
}
