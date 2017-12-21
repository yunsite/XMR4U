<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_f637df94c984d4eff14a51177bb1016ec8ddafd9cfa4822b93bf178f9af0e138 extends Twig_Template
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
        $__internal_76bf8d50fc44616cfc5f19b72c4a1f27881cba5defe520d3c2c34eac7f41a6b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76bf8d50fc44616cfc5f19b72c4a1f27881cba5defe520d3c2c34eac7f41a6b8->enter($__internal_76bf8d50fc44616cfc5f19b72c4a1f27881cba5defe520d3c2c34eac7f41a6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_41a54e495cbab2ab7a9efcf69406b4d7532e2ac27f6590fb91fa1bdfb0700327 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41a54e495cbab2ab7a9efcf69406b4d7532e2ac27f6590fb91fa1bdfb0700327->enter($__internal_41a54e495cbab2ab7a9efcf69406b4d7532e2ac27f6590fb91fa1bdfb0700327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_76bf8d50fc44616cfc5f19b72c4a1f27881cba5defe520d3c2c34eac7f41a6b8->leave($__internal_76bf8d50fc44616cfc5f19b72c4a1f27881cba5defe520d3c2c34eac7f41a6b8_prof);

        
        $__internal_41a54e495cbab2ab7a9efcf69406b4d7532e2ac27f6590fb91fa1bdfb0700327->leave($__internal_41a54e495cbab2ab7a9efcf69406b4d7532e2ac27f6590fb91fa1bdfb0700327_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/form.html.php");
    }
}
