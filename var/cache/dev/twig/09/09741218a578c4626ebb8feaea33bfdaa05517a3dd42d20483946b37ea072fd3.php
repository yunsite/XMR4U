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
        $__internal_d3dd6f505bac488b577a1b4c4f7e22cf63ed4a977af54bd1064f2286010fce97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3dd6f505bac488b577a1b4c4f7e22cf63ed4a977af54bd1064f2286010fce97->enter($__internal_d3dd6f505bac488b577a1b4c4f7e22cf63ed4a977af54bd1064f2286010fce97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_c1cd283f68d94d0e0c4eb6dac746daf920480bdaf3500266e67f0cc4105e647d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1cd283f68d94d0e0c4eb6dac746daf920480bdaf3500266e67f0cc4105e647d->enter($__internal_c1cd283f68d94d0e0c4eb6dac746daf920480bdaf3500266e67f0cc4105e647d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

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
        
        $__internal_d3dd6f505bac488b577a1b4c4f7e22cf63ed4a977af54bd1064f2286010fce97->leave($__internal_d3dd6f505bac488b577a1b4c4f7e22cf63ed4a977af54bd1064f2286010fce97_prof);

        
        $__internal_c1cd283f68d94d0e0c4eb6dac746daf920480bdaf3500266e67f0cc4105e647d->leave($__internal_c1cd283f68d94d0e0c4eb6dac746daf920480bdaf3500266e67f0cc4105e647d_prof);

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
", "@Framework/Form/form_label.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/form_label.html.php");
    }
}
