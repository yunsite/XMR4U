<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_34d45534075337db7ecde181cc223eb87120483221bc0db5fb4dce33f3d91c46 extends Twig_Template
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
        $__internal_0474084d21dbbac5da848b501901e533bc34bbd8b6d1e77d72f76f44ded3d295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0474084d21dbbac5da848b501901e533bc34bbd8b6d1e77d72f76f44ded3d295->enter($__internal_0474084d21dbbac5da848b501901e533bc34bbd8b6d1e77d72f76f44ded3d295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_bfb9441ed01f79656f1c6508621f815762d130f3ca0c1abafcaf235a7f5c53c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfb9441ed01f79656f1c6508621f815762d130f3ca0c1abafcaf235a7f5c53c5->enter($__internal_bfb9441ed01f79656f1c6508621f815762d130f3ca0c1abafcaf235a7f5c53c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_0474084d21dbbac5da848b501901e533bc34bbd8b6d1e77d72f76f44ded3d295->leave($__internal_0474084d21dbbac5da848b501901e533bc34bbd8b6d1e77d72f76f44ded3d295_prof);

        
        $__internal_bfb9441ed01f79656f1c6508621f815762d130f3ca0c1abafcaf235a7f5c53c5->leave($__internal_bfb9441ed01f79656f1c6508621f815762d130f3ca0c1abafcaf235a7f5c53c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
