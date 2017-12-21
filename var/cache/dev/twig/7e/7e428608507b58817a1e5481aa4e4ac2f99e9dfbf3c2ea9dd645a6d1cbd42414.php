<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_31d3c6abd2e1ba11468b8ea19fb6ebcd47272e70b0c6ac8632b33410f10a0099 extends Twig_Template
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
        $__internal_a1f62548d0ee5b77b474eacd28090f293fcd86cbc9202003f09e9a43725f3069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1f62548d0ee5b77b474eacd28090f293fcd86cbc9202003f09e9a43725f3069->enter($__internal_a1f62548d0ee5b77b474eacd28090f293fcd86cbc9202003f09e9a43725f3069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_2feaac5287a94d8aee597c705297ea4411be3ab7d16912b399abf8d78244f62e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2feaac5287a94d8aee597c705297ea4411be3ab7d16912b399abf8d78244f62e->enter($__internal_2feaac5287a94d8aee597c705297ea4411be3ab7d16912b399abf8d78244f62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a1f62548d0ee5b77b474eacd28090f293fcd86cbc9202003f09e9a43725f3069->leave($__internal_a1f62548d0ee5b77b474eacd28090f293fcd86cbc9202003f09e9a43725f3069_prof);

        
        $__internal_2feaac5287a94d8aee597c705297ea4411be3ab7d16912b399abf8d78244f62e->leave($__internal_2feaac5287a94d8aee597c705297ea4411be3ab7d16912b399abf8d78244f62e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/textarea_widget.html.php");
    }
}
