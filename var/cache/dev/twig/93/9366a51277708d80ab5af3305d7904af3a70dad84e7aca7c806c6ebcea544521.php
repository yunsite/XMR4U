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
        $__internal_4e1b3a913408270aa526b16cdfe23d68bf9ec83f4c6ec54663a545e951af2a62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e1b3a913408270aa526b16cdfe23d68bf9ec83f4c6ec54663a545e951af2a62->enter($__internal_4e1b3a913408270aa526b16cdfe23d68bf9ec83f4c6ec54663a545e951af2a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_bae596086c80c444127772833af5b0c6178f4f1edfe80d59efea5a147b4ac2a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bae596086c80c444127772833af5b0c6178f4f1edfe80d59efea5a147b4ac2a6->enter($__internal_bae596086c80c444127772833af5b0c6178f4f1edfe80d59efea5a147b4ac2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_4e1b3a913408270aa526b16cdfe23d68bf9ec83f4c6ec54663a545e951af2a62->leave($__internal_4e1b3a913408270aa526b16cdfe23d68bf9ec83f4c6ec54663a545e951af2a62_prof);

        
        $__internal_bae596086c80c444127772833af5b0c6178f4f1edfe80d59efea5a147b4ac2a6->leave($__internal_bae596086c80c444127772833af5b0c6178f4f1edfe80d59efea5a147b4ac2a6_prof);

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
