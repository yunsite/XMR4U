<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_58482c6193bb308d1945debefda76aadfe9b8b9a4f5e47c98745706c2154006d extends Twig_Template
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
        $__internal_92af33799477477a36584248045869ebd84872782dc1060f6f335635150697c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92af33799477477a36584248045869ebd84872782dc1060f6f335635150697c5->enter($__internal_92af33799477477a36584248045869ebd84872782dc1060f6f335635150697c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_3d2adc464ef26bb1efcf7d47ce54ebd04a5e11e5cad94d6b17afa28008905a61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d2adc464ef26bb1efcf7d47ce54ebd04a5e11e5cad94d6b17afa28008905a61->enter($__internal_3d2adc464ef26bb1efcf7d47ce54ebd04a5e11e5cad94d6b17afa28008905a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_92af33799477477a36584248045869ebd84872782dc1060f6f335635150697c5->leave($__internal_92af33799477477a36584248045869ebd84872782dc1060f6f335635150697c5_prof);

        
        $__internal_3d2adc464ef26bb1efcf7d47ce54ebd04a5e11e5cad94d6b17afa28008905a61->leave($__internal_3d2adc464ef26bb1efcf7d47ce54ebd04a5e11e5cad94d6b17afa28008905a61_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
