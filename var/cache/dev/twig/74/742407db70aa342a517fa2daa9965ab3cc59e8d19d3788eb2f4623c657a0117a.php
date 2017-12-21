<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_9b5e7eff2c6c6eca942526c9a4780b98141ae4baafe8fec39393a301c28ba299 extends Twig_Template
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
        $__internal_f39d4d70b99418554fa9435405e46fd3e5203bb70d1930d482188a5348b82265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f39d4d70b99418554fa9435405e46fd3e5203bb70d1930d482188a5348b82265->enter($__internal_f39d4d70b99418554fa9435405e46fd3e5203bb70d1930d482188a5348b82265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_0b7b82289e996706af03b3d48de4bf459fe388641e5468a8178d010e12e34e17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b7b82289e996706af03b3d48de4bf459fe388641e5468a8178d010e12e34e17->enter($__internal_0b7b82289e996706af03b3d48de4bf459fe388641e5468a8178d010e12e34e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_f39d4d70b99418554fa9435405e46fd3e5203bb70d1930d482188a5348b82265->leave($__internal_f39d4d70b99418554fa9435405e46fd3e5203bb70d1930d482188a5348b82265_prof);

        
        $__internal_0b7b82289e996706af03b3d48de4bf459fe388641e5468a8178d010e12e34e17->leave($__internal_0b7b82289e996706af03b3d48de4bf459fe388641e5468a8178d010e12e34e17_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/hidden_widget.html.php");
    }
}
