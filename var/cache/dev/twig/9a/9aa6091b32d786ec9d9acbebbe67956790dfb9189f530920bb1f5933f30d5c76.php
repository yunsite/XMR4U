<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_b296eeb42ae1308da2970f9c4f9b0f3aaa6356200a298f72a1831b4649971d44 extends Twig_Template
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
        $__internal_8ba4e7e0d13d71ff2d72e591fc96e692eea1dd51fea6a6171665fc3e2ea2ad92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ba4e7e0d13d71ff2d72e591fc96e692eea1dd51fea6a6171665fc3e2ea2ad92->enter($__internal_8ba4e7e0d13d71ff2d72e591fc96e692eea1dd51fea6a6171665fc3e2ea2ad92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_9c85f49323141f0dba1d1c97adf341b3448c4f2fa26806887a30d0df010bdf47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c85f49323141f0dba1d1c97adf341b3448c4f2fa26806887a30d0df010bdf47->enter($__internal_9c85f49323141f0dba1d1c97adf341b3448c4f2fa26806887a30d0df010bdf47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_8ba4e7e0d13d71ff2d72e591fc96e692eea1dd51fea6a6171665fc3e2ea2ad92->leave($__internal_8ba4e7e0d13d71ff2d72e591fc96e692eea1dd51fea6a6171665fc3e2ea2ad92_prof);

        
        $__internal_9c85f49323141f0dba1d1c97adf341b3448c4f2fa26806887a30d0df010bdf47->leave($__internal_9c85f49323141f0dba1d1c97adf341b3448c4f2fa26806887a30d0df010bdf47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget.html.php");
    }
}
