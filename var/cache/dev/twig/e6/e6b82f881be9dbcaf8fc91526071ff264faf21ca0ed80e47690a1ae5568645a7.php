<?php

/* @Framework/Form/color_widget.html.php */
class __TwigTemplate_5e80a67f252834d51fb87410729d2c0006efee1394f04b61eca8b72bf2ea596c extends Twig_Template
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
        $__internal_fcf7736995c1b3132e20921084bc196a70f1f09a87566c7a935b93d79d4816d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcf7736995c1b3132e20921084bc196a70f1f09a87566c7a935b93d79d4816d9->enter($__internal_fcf7736995c1b3132e20921084bc196a70f1f09a87566c7a935b93d79d4816d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        $__internal_98943125c01763bc875c1cb026bce18a7ec34f6624579372b76d13469270ce94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98943125c01763bc875c1cb026bce18a7ec34f6624579372b76d13469270ce94->enter($__internal_98943125c01763bc875c1cb026bce18a7ec34f6624579372b76d13469270ce94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
";
        
        $__internal_fcf7736995c1b3132e20921084bc196a70f1f09a87566c7a935b93d79d4816d9->leave($__internal_fcf7736995c1b3132e20921084bc196a70f1f09a87566c7a935b93d79d4816d9_prof);

        
        $__internal_98943125c01763bc875c1cb026bce18a7ec34f6624579372b76d13469270ce94->leave($__internal_98943125c01763bc875c1cb026bce18a7ec34f6624579372b76d13469270ce94_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/color_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
", "@Framework/Form/color_widget.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/color_widget.html.php");
    }
}
