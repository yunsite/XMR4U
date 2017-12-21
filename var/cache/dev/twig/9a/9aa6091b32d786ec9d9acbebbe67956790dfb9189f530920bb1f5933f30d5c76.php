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
        $__internal_d56bd8547817db5dc1b643ec573e5e8f4326e2cfb3f21f02a1f2eafbf87f8643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d56bd8547817db5dc1b643ec573e5e8f4326e2cfb3f21f02a1f2eafbf87f8643->enter($__internal_d56bd8547817db5dc1b643ec573e5e8f4326e2cfb3f21f02a1f2eafbf87f8643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_30fa461c69a3636896cca319167f8259b9d50f89b30148dc82a08da601f0f313 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30fa461c69a3636896cca319167f8259b9d50f89b30148dc82a08da601f0f313->enter($__internal_30fa461c69a3636896cca319167f8259b9d50f89b30148dc82a08da601f0f313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_d56bd8547817db5dc1b643ec573e5e8f4326e2cfb3f21f02a1f2eafbf87f8643->leave($__internal_d56bd8547817db5dc1b643ec573e5e8f4326e2cfb3f21f02a1f2eafbf87f8643_prof);

        
        $__internal_30fa461c69a3636896cca319167f8259b9d50f89b30148dc82a08da601f0f313->leave($__internal_30fa461c69a3636896cca319167f8259b9d50f89b30148dc82a08da601f0f313_prof);

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
", "@Framework/Form/choice_widget.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget.html.php");
    }
}
