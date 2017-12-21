<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_f612ccf58740129a782aa99396d2afd3be21350c887d67fb2e93281251236350 extends Twig_Template
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
        $__internal_48026cfaeccb4b2b05fa7be1fdf7c65adbd6668e1012dd4ad562da7d5da91c28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48026cfaeccb4b2b05fa7be1fdf7c65adbd6668e1012dd4ad562da7d5da91c28->enter($__internal_48026cfaeccb4b2b05fa7be1fdf7c65adbd6668e1012dd4ad562da7d5da91c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_63746a6176e18b98d1a694314aef5f8ec1014ae660a69579346341ddbb302e63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63746a6176e18b98d1a694314aef5f8ec1014ae660a69579346341ddbb302e63->enter($__internal_63746a6176e18b98d1a694314aef5f8ec1014ae660a69579346341ddbb302e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_48026cfaeccb4b2b05fa7be1fdf7c65adbd6668e1012dd4ad562da7d5da91c28->leave($__internal_48026cfaeccb4b2b05fa7be1fdf7c65adbd6668e1012dd4ad562da7d5da91c28_prof);

        
        $__internal_63746a6176e18b98d1a694314aef5f8ec1014ae660a69579346341ddbb302e63->leave($__internal_63746a6176e18b98d1a694314aef5f8ec1014ae660a69579346341ddbb302e63_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/form_widget.html.php");
    }
}
