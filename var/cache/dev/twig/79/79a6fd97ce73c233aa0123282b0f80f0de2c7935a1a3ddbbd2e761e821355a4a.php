<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_c0f052e2fbd2206ae02dc09377ee51b1711006e5834ec6b822b62e7ab0cad557 extends Twig_Template
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
        $__internal_35cf8bf98cf76c31f65445294f14242fe77d84bc3ad2d65e73b30013ea676548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35cf8bf98cf76c31f65445294f14242fe77d84bc3ad2d65e73b30013ea676548->enter($__internal_35cf8bf98cf76c31f65445294f14242fe77d84bc3ad2d65e73b30013ea676548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_d7a0624ef35323a6e444154cf8688f90fa41898647ab3015c1c7f9c1e616ea69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7a0624ef35323a6e444154cf8688f90fa41898647ab3015c1c7f9c1e616ea69->enter($__internal_d7a0624ef35323a6e444154cf8688f90fa41898647ab3015c1c7f9c1e616ea69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_35cf8bf98cf76c31f65445294f14242fe77d84bc3ad2d65e73b30013ea676548->leave($__internal_35cf8bf98cf76c31f65445294f14242fe77d84bc3ad2d65e73b30013ea676548_prof);

        
        $__internal_d7a0624ef35323a6e444154cf8688f90fa41898647ab3015c1c7f9c1e616ea69->leave($__internal_d7a0624ef35323a6e444154cf8688f90fa41898647ab3015c1c7f9c1e616ea69_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/choice_attributes.html.php");
    }
}
