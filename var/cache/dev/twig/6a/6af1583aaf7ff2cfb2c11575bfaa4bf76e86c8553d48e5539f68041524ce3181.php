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
        $__internal_4ba8f5bcdf11edab47d45a393f6912a73ef0531e3eb618c1cdbd72faa190a110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ba8f5bcdf11edab47d45a393f6912a73ef0531e3eb618c1cdbd72faa190a110->enter($__internal_4ba8f5bcdf11edab47d45a393f6912a73ef0531e3eb618c1cdbd72faa190a110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_c16882a47639ddac4cf49b39fa91dedbf3f6840d51e617c39635dc95d636873d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c16882a47639ddac4cf49b39fa91dedbf3f6840d51e617c39635dc95d636873d->enter($__internal_c16882a47639ddac4cf49b39fa91dedbf3f6840d51e617c39635dc95d636873d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_4ba8f5bcdf11edab47d45a393f6912a73ef0531e3eb618c1cdbd72faa190a110->leave($__internal_4ba8f5bcdf11edab47d45a393f6912a73ef0531e3eb618c1cdbd72faa190a110_prof);

        
        $__internal_c16882a47639ddac4cf49b39fa91dedbf3f6840d51e617c39635dc95d636873d->leave($__internal_c16882a47639ddac4cf49b39fa91dedbf3f6840d51e617c39635dc95d636873d_prof);

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
