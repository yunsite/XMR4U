<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_0b29bc258d2a5c7b3b89fddeac201bb804ac6369dd03b10e2bc8e811bb8a90cc extends Twig_Template
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
        $__internal_93363e9267fd3e38b4a6f37b8888dd0d5aa6c629b5b42e2987ac0978c4adcac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93363e9267fd3e38b4a6f37b8888dd0d5aa6c629b5b42e2987ac0978c4adcac1->enter($__internal_93363e9267fd3e38b4a6f37b8888dd0d5aa6c629b5b42e2987ac0978c4adcac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_d6b44e0e652597aededd381b3683e818106c93e2de31cf2e5ee2f9a3b1fc740d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6b44e0e652597aededd381b3683e818106c93e2de31cf2e5ee2f9a3b1fc740d->enter($__internal_d6b44e0e652597aededd381b3683e818106c93e2de31cf2e5ee2f9a3b1fc740d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_93363e9267fd3e38b4a6f37b8888dd0d5aa6c629b5b42e2987ac0978c4adcac1->leave($__internal_93363e9267fd3e38b4a6f37b8888dd0d5aa6c629b5b42e2987ac0978c4adcac1_prof);

        
        $__internal_d6b44e0e652597aededd381b3683e818106c93e2de31cf2e5ee2f9a3b1fc740d->leave($__internal_d6b44e0e652597aededd381b3683e818106c93e2de31cf2e5ee2f9a3b1fc740d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/form_rest.html.php");
    }
}
