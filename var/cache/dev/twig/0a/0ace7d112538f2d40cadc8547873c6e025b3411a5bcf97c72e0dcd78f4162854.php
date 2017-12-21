<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_c647f4f8918e305f2c80c2c4f4824a7e15466ec74778cba3d33877716e346970 extends Twig_Template
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
        $__internal_14d9c5a2b42f98991982b5d2af754892eb7a9bfe09848b08c036d7cee99a9823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14d9c5a2b42f98991982b5d2af754892eb7a9bfe09848b08c036d7cee99a9823->enter($__internal_14d9c5a2b42f98991982b5d2af754892eb7a9bfe09848b08c036d7cee99a9823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_fce7bab4249cbcfda646cf9b1ef03390b328bf58efbc3b8be6926272b7039952 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fce7bab4249cbcfda646cf9b1ef03390b328bf58efbc3b8be6926272b7039952->enter($__internal_fce7bab4249cbcfda646cf9b1ef03390b328bf58efbc3b8be6926272b7039952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_14d9c5a2b42f98991982b5d2af754892eb7a9bfe09848b08c036d7cee99a9823->leave($__internal_14d9c5a2b42f98991982b5d2af754892eb7a9bfe09848b08c036d7cee99a9823_prof);

        
        $__internal_fce7bab4249cbcfda646cf9b1ef03390b328bf58efbc3b8be6926272b7039952->leave($__internal_fce7bab4249cbcfda646cf9b1ef03390b328bf58efbc3b8be6926272b7039952_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/radio_widget.html.php");
    }
}
