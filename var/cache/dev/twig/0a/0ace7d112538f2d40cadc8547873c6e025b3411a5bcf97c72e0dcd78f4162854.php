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
        $__internal_d4036546e33e2b73204688245d3643459c5688cea38e8716b85a2e854397d209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4036546e33e2b73204688245d3643459c5688cea38e8716b85a2e854397d209->enter($__internal_d4036546e33e2b73204688245d3643459c5688cea38e8716b85a2e854397d209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_4e7108cfa9c9d57ddadf6478406c7460a60bce3f52721ce2bb2e849f32d71e76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e7108cfa9c9d57ddadf6478406c7460a60bce3f52721ce2bb2e849f32d71e76->enter($__internal_4e7108cfa9c9d57ddadf6478406c7460a60bce3f52721ce2bb2e849f32d71e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d4036546e33e2b73204688245d3643459c5688cea38e8716b85a2e854397d209->leave($__internal_d4036546e33e2b73204688245d3643459c5688cea38e8716b85a2e854397d209_prof);

        
        $__internal_4e7108cfa9c9d57ddadf6478406c7460a60bce3f52721ce2bb2e849f32d71e76->leave($__internal_4e7108cfa9c9d57ddadf6478406c7460a60bce3f52721ce2bb2e849f32d71e76_prof);

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
