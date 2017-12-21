<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_86a99098aca49bdd13d3630d23acb8ae36cbba10459d96e324297eead21f8ac9 extends Twig_Template
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
        $__internal_8f6525f082cdc070e076fb6cdba82710d3dc003d3c9b43260e817b1d6355a6eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f6525f082cdc070e076fb6cdba82710d3dc003d3c9b43260e817b1d6355a6eb->enter($__internal_8f6525f082cdc070e076fb6cdba82710d3dc003d3c9b43260e817b1d6355a6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_cea563904aad090ed8335b3c538266d66d0d7f0de21323a64f2a7052894fa857 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cea563904aad090ed8335b3c538266d66d0d7f0de21323a64f2a7052894fa857->enter($__internal_cea563904aad090ed8335b3c538266d66d0d7f0de21323a64f2a7052894fa857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_8f6525f082cdc070e076fb6cdba82710d3dc003d3c9b43260e817b1d6355a6eb->leave($__internal_8f6525f082cdc070e076fb6cdba82710d3dc003d3c9b43260e817b1d6355a6eb_prof);

        
        $__internal_cea563904aad090ed8335b3c538266d66d0d7f0de21323a64f2a7052894fa857->leave($__internal_cea563904aad090ed8335b3c538266d66d0d7f0de21323a64f2a7052894fa857_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/form_rows.html.php");
    }
}
