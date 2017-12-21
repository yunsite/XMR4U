<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_f612ccf58740129a782aa99396d2afd3be21350c887d67fb2e93281251236350 extends Twig_Template
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
        $__internal_889be3e2106516eb578fff719f06bdb9432c5ec616605bb453e633e4206f41b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_889be3e2106516eb578fff719f06bdb9432c5ec616605bb453e633e4206f41b5->enter($__internal_889be3e2106516eb578fff719f06bdb9432c5ec616605bb453e633e4206f41b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_51bbd00bb6f501e2116a7afc0279334aae8bd023383b009fab6a792a0f0eb86f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51bbd00bb6f501e2116a7afc0279334aae8bd023383b009fab6a792a0f0eb86f->enter($__internal_51bbd00bb6f501e2116a7afc0279334aae8bd023383b009fab6a792a0f0eb86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_889be3e2106516eb578fff719f06bdb9432c5ec616605bb453e633e4206f41b5->leave($__internal_889be3e2106516eb578fff719f06bdb9432c5ec616605bb453e633e4206f41b5_prof);

        
        $__internal_51bbd00bb6f501e2116a7afc0279334aae8bd023383b009fab6a792a0f0eb86f->leave($__internal_51bbd00bb6f501e2116a7afc0279334aae8bd023383b009fab6a792a0f0eb86f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/form_widget.html.php");
    }
}
