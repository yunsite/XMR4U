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
        $__internal_5544dec00c7b2afdd0a20c20a85f36ed0dbd83ac284d0866b90578d6670b1d60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5544dec00c7b2afdd0a20c20a85f36ed0dbd83ac284d0866b90578d6670b1d60->enter($__internal_5544dec00c7b2afdd0a20c20a85f36ed0dbd83ac284d0866b90578d6670b1d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_a0e81c492beca72bc8742529e37b719f65e0138937f38987cb18c298ef7cd808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0e81c492beca72bc8742529e37b719f65e0138937f38987cb18c298ef7cd808->enter($__internal_a0e81c492beca72bc8742529e37b719f65e0138937f38987cb18c298ef7cd808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_5544dec00c7b2afdd0a20c20a85f36ed0dbd83ac284d0866b90578d6670b1d60->leave($__internal_5544dec00c7b2afdd0a20c20a85f36ed0dbd83ac284d0866b90578d6670b1d60_prof);

        
        $__internal_a0e81c492beca72bc8742529e37b719f65e0138937f38987cb18c298ef7cd808->leave($__internal_a0e81c492beca72bc8742529e37b719f65e0138937f38987cb18c298ef7cd808_prof);

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
", "@Framework/Form/button_attributes.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/button_attributes.html.php");
    }
}
