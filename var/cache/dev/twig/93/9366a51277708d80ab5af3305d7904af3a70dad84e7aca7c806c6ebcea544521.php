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
        $__internal_9e21c15bc987a703b3ecdd71f1a701967226bdaf520008091cc54df38987c226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e21c15bc987a703b3ecdd71f1a701967226bdaf520008091cc54df38987c226->enter($__internal_9e21c15bc987a703b3ecdd71f1a701967226bdaf520008091cc54df38987c226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_a1a9c8f8ac0201cd736f5f8eb2a4b9ceebf2876e5ab57c5734ffc0b30258863d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1a9c8f8ac0201cd736f5f8eb2a4b9ceebf2876e5ab57c5734ffc0b30258863d->enter($__internal_a1a9c8f8ac0201cd736f5f8eb2a4b9ceebf2876e5ab57c5734ffc0b30258863d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_9e21c15bc987a703b3ecdd71f1a701967226bdaf520008091cc54df38987c226->leave($__internal_9e21c15bc987a703b3ecdd71f1a701967226bdaf520008091cc54df38987c226_prof);

        
        $__internal_a1a9c8f8ac0201cd736f5f8eb2a4b9ceebf2876e5ab57c5734ffc0b30258863d->leave($__internal_a1a9c8f8ac0201cd736f5f8eb2a4b9ceebf2876e5ab57c5734ffc0b30258863d_prof);

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
", "@Framework/Form/form_rows.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/form_rows.html.php");
    }
}
