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
        $__internal_a192567b887515c6bb121fabdd0fb01f7eeb576297681b6526db6205cb1bc4b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a192567b887515c6bb121fabdd0fb01f7eeb576297681b6526db6205cb1bc4b2->enter($__internal_a192567b887515c6bb121fabdd0fb01f7eeb576297681b6526db6205cb1bc4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_975e09a6a5bfd7e1e4d4e981f424db3ee3d256bcd586e5fa7dd67eec49470f6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_975e09a6a5bfd7e1e4d4e981f424db3ee3d256bcd586e5fa7dd67eec49470f6f->enter($__internal_975e09a6a5bfd7e1e4d4e981f424db3ee3d256bcd586e5fa7dd67eec49470f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

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
        
        $__internal_a192567b887515c6bb121fabdd0fb01f7eeb576297681b6526db6205cb1bc4b2->leave($__internal_a192567b887515c6bb121fabdd0fb01f7eeb576297681b6526db6205cb1bc4b2_prof);

        
        $__internal_975e09a6a5bfd7e1e4d4e981f424db3ee3d256bcd586e5fa7dd67eec49470f6f->leave($__internal_975e09a6a5bfd7e1e4d4e981f424db3ee3d256bcd586e5fa7dd67eec49470f6f_prof);

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
