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
        $__internal_812eeee27067777ffa24669fb044aa8825112dadbcd19e4e6bb852dbf6528125 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_812eeee27067777ffa24669fb044aa8825112dadbcd19e4e6bb852dbf6528125->enter($__internal_812eeee27067777ffa24669fb044aa8825112dadbcd19e4e6bb852dbf6528125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_23378e55e081c6211aa3e6fd242d1aed2f1895989c960687450af25759377c67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23378e55e081c6211aa3e6fd242d1aed2f1895989c960687450af25759377c67->enter($__internal_23378e55e081c6211aa3e6fd242d1aed2f1895989c960687450af25759377c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_812eeee27067777ffa24669fb044aa8825112dadbcd19e4e6bb852dbf6528125->leave($__internal_812eeee27067777ffa24669fb044aa8825112dadbcd19e4e6bb852dbf6528125_prof);

        
        $__internal_23378e55e081c6211aa3e6fd242d1aed2f1895989c960687450af25759377c67->leave($__internal_23378e55e081c6211aa3e6fd242d1aed2f1895989c960687450af25759377c67_prof);

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
", "@Framework/Form/form_widget_simple.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
