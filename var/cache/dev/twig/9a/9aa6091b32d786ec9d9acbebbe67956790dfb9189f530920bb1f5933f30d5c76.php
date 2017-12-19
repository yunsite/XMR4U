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
        $__internal_7d19a7aa2cd34acc27f4a910f8c38868b5704a63f76f8273e0bbbd301887d238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d19a7aa2cd34acc27f4a910f8c38868b5704a63f76f8273e0bbbd301887d238->enter($__internal_7d19a7aa2cd34acc27f4a910f8c38868b5704a63f76f8273e0bbbd301887d238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_ecb4fa2048a6af0f195d3707febeb9763dab664daab226f84dd4b9a6939a345b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecb4fa2048a6af0f195d3707febeb9763dab664daab226f84dd4b9a6939a345b->enter($__internal_ecb4fa2048a6af0f195d3707febeb9763dab664daab226f84dd4b9a6939a345b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_7d19a7aa2cd34acc27f4a910f8c38868b5704a63f76f8273e0bbbd301887d238->leave($__internal_7d19a7aa2cd34acc27f4a910f8c38868b5704a63f76f8273e0bbbd301887d238_prof);

        
        $__internal_ecb4fa2048a6af0f195d3707febeb9763dab664daab226f84dd4b9a6939a345b->leave($__internal_ecb4fa2048a6af0f195d3707febeb9763dab664daab226f84dd4b9a6939a345b_prof);

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
