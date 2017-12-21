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
        $__internal_a98e7e411d5cc7ba55b5db84157621d28a288d33a1b191c4eaab5ee25d1e115f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a98e7e411d5cc7ba55b5db84157621d28a288d33a1b191c4eaab5ee25d1e115f->enter($__internal_a98e7e411d5cc7ba55b5db84157621d28a288d33a1b191c4eaab5ee25d1e115f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_f7a711efa8215e9771df329064b8ce3b7ccbdc0c9cd14b16b7971511619952fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7a711efa8215e9771df329064b8ce3b7ccbdc0c9cd14b16b7971511619952fe->enter($__internal_f7a711efa8215e9771df329064b8ce3b7ccbdc0c9cd14b16b7971511619952fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a98e7e411d5cc7ba55b5db84157621d28a288d33a1b191c4eaab5ee25d1e115f->leave($__internal_a98e7e411d5cc7ba55b5db84157621d28a288d33a1b191c4eaab5ee25d1e115f_prof);

        
        $__internal_f7a711efa8215e9771df329064b8ce3b7ccbdc0c9cd14b16b7971511619952fe->leave($__internal_f7a711efa8215e9771df329064b8ce3b7ccbdc0c9cd14b16b7971511619952fe_prof);

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
