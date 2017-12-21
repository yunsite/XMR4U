<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_a841fe3e85ce857f92e8a180257e3b004738a9c64fd47444465f93e4e5e12d07 extends Twig_Template
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
        $__internal_9578cf47a7b9c98fb5a2efedba4e60d5a5529eaa81c87799335d056d25154234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9578cf47a7b9c98fb5a2efedba4e60d5a5529eaa81c87799335d056d25154234->enter($__internal_9578cf47a7b9c98fb5a2efedba4e60d5a5529eaa81c87799335d056d25154234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_1ad96b26adfc57c5e5c51b914a283c5af8b461aa8d260d4059345253f51ed789 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ad96b26adfc57c5e5c51b914a283c5af8b461aa8d260d4059345253f51ed789->enter($__internal_1ad96b26adfc57c5e5c51b914a283c5af8b461aa8d260d4059345253f51ed789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_9578cf47a7b9c98fb5a2efedba4e60d5a5529eaa81c87799335d056d25154234->leave($__internal_9578cf47a7b9c98fb5a2efedba4e60d5a5529eaa81c87799335d056d25154234_prof);

        
        $__internal_1ad96b26adfc57c5e5c51b914a283c5af8b461aa8d260d4059345253f51ed789->leave($__internal_1ad96b26adfc57c5e5c51b914a283c5af8b461aa8d260d4059345253f51ed789_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/submit_widget.html.php");
    }
}
