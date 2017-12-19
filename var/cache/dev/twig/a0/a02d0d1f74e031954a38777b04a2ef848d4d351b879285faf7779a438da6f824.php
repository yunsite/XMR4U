<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_52379a9e868156aad2b9385139857f6f2e1eadd680e99b0b81150758999f8016 extends Twig_Template
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
        $__internal_95d1424c5fdc0840a1785c239f6a626c17a9a3716c39c37e7b108711851b8550 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95d1424c5fdc0840a1785c239f6a626c17a9a3716c39c37e7b108711851b8550->enter($__internal_95d1424c5fdc0840a1785c239f6a626c17a9a3716c39c37e7b108711851b8550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_b949d9817c215beda6e32b0d0b5872fd483cb8673decb4b07fb57632a7dc11c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b949d9817c215beda6e32b0d0b5872fd483cb8673decb4b07fb57632a7dc11c6->enter($__internal_b949d9817c215beda6e32b0d0b5872fd483cb8673decb4b07fb57632a7dc11c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_95d1424c5fdc0840a1785c239f6a626c17a9a3716c39c37e7b108711851b8550->leave($__internal_95d1424c5fdc0840a1785c239f6a626c17a9a3716c39c37e7b108711851b8550_prof);

        
        $__internal_b949d9817c215beda6e32b0d0b5872fd483cb8673decb4b07fb57632a7dc11c6->leave($__internal_b949d9817c215beda6e32b0d0b5872fd483cb8673decb4b07fb57632a7dc11c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/button_attributes.html.php");
    }
}
