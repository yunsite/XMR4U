<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_f2fa8dff221ace5db95d2bc5968e461c9f9c4ae40c0298727f5d983070c4d738 extends Twig_Template
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
        $__internal_eff0f437facf771885cce79bdf8b4263ff736502ad22351fb0b6f9d7d92e68ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eff0f437facf771885cce79bdf8b4263ff736502ad22351fb0b6f9d7d92e68ee->enter($__internal_eff0f437facf771885cce79bdf8b4263ff736502ad22351fb0b6f9d7d92e68ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_914226329ad2907e473391d25fa62ba95c6d7b1090d4026f49cb63f09ecad788 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_914226329ad2907e473391d25fa62ba95c6d7b1090d4026f49cb63f09ecad788->enter($__internal_914226329ad2907e473391d25fa62ba95c6d7b1090d4026f49cb63f09ecad788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_eff0f437facf771885cce79bdf8b4263ff736502ad22351fb0b6f9d7d92e68ee->leave($__internal_eff0f437facf771885cce79bdf8b4263ff736502ad22351fb0b6f9d7d92e68ee_prof);

        
        $__internal_914226329ad2907e473391d25fa62ba95c6d7b1090d4026f49cb63f09ecad788->leave($__internal_914226329ad2907e473391d25fa62ba95c6d7b1090d4026f49cb63f09ecad788_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/email_widget.html.php");
    }
}
