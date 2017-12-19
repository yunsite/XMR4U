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
        $__internal_6933d7d672f1a5ecff985bb25f0fc02ff5b912238acaeb8c845c020c539f8da6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6933d7d672f1a5ecff985bb25f0fc02ff5b912238acaeb8c845c020c539f8da6->enter($__internal_6933d7d672f1a5ecff985bb25f0fc02ff5b912238acaeb8c845c020c539f8da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_7c1ac8489fe1b1a11b7cbf5307e5c7472c119d83946159cae61c5a3ee9291db5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c1ac8489fe1b1a11b7cbf5307e5c7472c119d83946159cae61c5a3ee9291db5->enter($__internal_7c1ac8489fe1b1a11b7cbf5307e5c7472c119d83946159cae61c5a3ee9291db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_6933d7d672f1a5ecff985bb25f0fc02ff5b912238acaeb8c845c020c539f8da6->leave($__internal_6933d7d672f1a5ecff985bb25f0fc02ff5b912238acaeb8c845c020c539f8da6_prof);

        
        $__internal_7c1ac8489fe1b1a11b7cbf5307e5c7472c119d83946159cae61c5a3ee9291db5->leave($__internal_7c1ac8489fe1b1a11b7cbf5307e5c7472c119d83946159cae61c5a3ee9291db5_prof);

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
