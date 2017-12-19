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
        $__internal_1c74b6da0ab4c39aa7b0f53bfe34c234d38f588d82a496ceedf4e1f7f783a1a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c74b6da0ab4c39aa7b0f53bfe34c234d38f588d82a496ceedf4e1f7f783a1a1->enter($__internal_1c74b6da0ab4c39aa7b0f53bfe34c234d38f588d82a496ceedf4e1f7f783a1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_0b0344fb562ddb6924d8461b5be0a4e97165f5761b45e492ebb252cb74d220f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b0344fb562ddb6924d8461b5be0a4e97165f5761b45e492ebb252cb74d220f6->enter($__internal_0b0344fb562ddb6924d8461b5be0a4e97165f5761b45e492ebb252cb74d220f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_1c74b6da0ab4c39aa7b0f53bfe34c234d38f588d82a496ceedf4e1f7f783a1a1->leave($__internal_1c74b6da0ab4c39aa7b0f53bfe34c234d38f588d82a496ceedf4e1f7f783a1a1_prof);

        
        $__internal_0b0344fb562ddb6924d8461b5be0a4e97165f5761b45e492ebb252cb74d220f6->leave($__internal_0b0344fb562ddb6924d8461b5be0a4e97165f5761b45e492ebb252cb74d220f6_prof);

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
