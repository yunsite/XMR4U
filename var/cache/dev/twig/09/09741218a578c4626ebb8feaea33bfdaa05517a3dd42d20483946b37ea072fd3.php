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
        $__internal_23349e9a5d2ca8b155ea4dc731c5b3cbffa3c392fbca4db2701388bfc0bc2342 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23349e9a5d2ca8b155ea4dc731c5b3cbffa3c392fbca4db2701388bfc0bc2342->enter($__internal_23349e9a5d2ca8b155ea4dc731c5b3cbffa3c392fbca4db2701388bfc0bc2342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_109eafbbaa2908d62fb7925e826f60665a41b29eaec95f122614f1d887fee6e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_109eafbbaa2908d62fb7925e826f60665a41b29eaec95f122614f1d887fee6e8->enter($__internal_109eafbbaa2908d62fb7925e826f60665a41b29eaec95f122614f1d887fee6e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

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
        
        $__internal_23349e9a5d2ca8b155ea4dc731c5b3cbffa3c392fbca4db2701388bfc0bc2342->leave($__internal_23349e9a5d2ca8b155ea4dc731c5b3cbffa3c392fbca4db2701388bfc0bc2342_prof);

        
        $__internal_109eafbbaa2908d62fb7925e826f60665a41b29eaec95f122614f1d887fee6e8->leave($__internal_109eafbbaa2908d62fb7925e826f60665a41b29eaec95f122614f1d887fee6e8_prof);

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
