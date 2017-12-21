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
        $__internal_4fdab479888cd88191462c884f2fab2577cd7fd05f2e90829d625478d37ce665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fdab479888cd88191462c884f2fab2577cd7fd05f2e90829d625478d37ce665->enter($__internal_4fdab479888cd88191462c884f2fab2577cd7fd05f2e90829d625478d37ce665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_7003bf051d5211e56376280d59c229d683282480ee5de4ee1508d199d7feef54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7003bf051d5211e56376280d59c229d683282480ee5de4ee1508d199d7feef54->enter($__internal_7003bf051d5211e56376280d59c229d683282480ee5de4ee1508d199d7feef54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_4fdab479888cd88191462c884f2fab2577cd7fd05f2e90829d625478d37ce665->leave($__internal_4fdab479888cd88191462c884f2fab2577cd7fd05f2e90829d625478d37ce665_prof);

        
        $__internal_7003bf051d5211e56376280d59c229d683282480ee5de4ee1508d199d7feef54->leave($__internal_7003bf051d5211e56376280d59c229d683282480ee5de4ee1508d199d7feef54_prof);

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
