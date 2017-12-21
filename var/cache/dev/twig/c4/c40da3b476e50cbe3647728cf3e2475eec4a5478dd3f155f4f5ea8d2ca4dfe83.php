<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_19b9047997bad8644782caa6bdd44a9b163eedeefd08c4b4c7d255dc849b3495 extends Twig_Template
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
        $__internal_48cf31fea60c4804fbed5f3e6d67e7d8828cf36aa229f12f850e4c3dbca94e8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48cf31fea60c4804fbed5f3e6d67e7d8828cf36aa229f12f850e4c3dbca94e8c->enter($__internal_48cf31fea60c4804fbed5f3e6d67e7d8828cf36aa229f12f850e4c3dbca94e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_1d16cd5c819c03f6131890983db1456616695f22e947737c2add9f5020dd0686 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d16cd5c819c03f6131890983db1456616695f22e947737c2add9f5020dd0686->enter($__internal_1d16cd5c819c03f6131890983db1456616695f22e947737c2add9f5020dd0686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_48cf31fea60c4804fbed5f3e6d67e7d8828cf36aa229f12f850e4c3dbca94e8c->leave($__internal_48cf31fea60c4804fbed5f3e6d67e7d8828cf36aa229f12f850e4c3dbca94e8c_prof);

        
        $__internal_1d16cd5c819c03f6131890983db1456616695f22e947737c2add9f5020dd0686->leave($__internal_1d16cd5c819c03f6131890983db1456616695f22e947737c2add9f5020dd0686_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/url_widget.html.php");
    }
}
