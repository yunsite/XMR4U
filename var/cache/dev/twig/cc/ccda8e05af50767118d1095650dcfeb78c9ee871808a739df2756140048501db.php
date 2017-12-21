<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_9a6c937c6b27ba7a98a64c541bbd51132f812095db519136f7aa17bdc6c9cf94 extends Twig_Template
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
        $__internal_b4d81c635170a69e47f8768daefdafcc660db775bb15aa0fc1b5321df352b0e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4d81c635170a69e47f8768daefdafcc660db775bb15aa0fc1b5321df352b0e3->enter($__internal_b4d81c635170a69e47f8768daefdafcc660db775bb15aa0fc1b5321df352b0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_e9f081ff5a9e25ed408958b9bf66a87369224301ed835944acd060d77dec6476 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9f081ff5a9e25ed408958b9bf66a87369224301ed835944acd060d77dec6476->enter($__internal_e9f081ff5a9e25ed408958b9bf66a87369224301ed835944acd060d77dec6476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_b4d81c635170a69e47f8768daefdafcc660db775bb15aa0fc1b5321df352b0e3->leave($__internal_b4d81c635170a69e47f8768daefdafcc660db775bb15aa0fc1b5321df352b0e3_prof);

        
        $__internal_e9f081ff5a9e25ed408958b9bf66a87369224301ed835944acd060d77dec6476->leave($__internal_e9f081ff5a9e25ed408958b9bf66a87369224301ed835944acd060d77dec6476_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/integer_widget.html.php");
    }
}
