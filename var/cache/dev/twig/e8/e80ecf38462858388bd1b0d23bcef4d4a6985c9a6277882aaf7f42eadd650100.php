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
        $__internal_4718b6809921821e1f2994a705508ff06dfb2dc973d10455f97268875c53936d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4718b6809921821e1f2994a705508ff06dfb2dc973d10455f97268875c53936d->enter($__internal_4718b6809921821e1f2994a705508ff06dfb2dc973d10455f97268875c53936d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_05d4d39b33519a4d8a579e507b10a54af056b68f0e5b774f18b31bf6634de8fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05d4d39b33519a4d8a579e507b10a54af056b68f0e5b774f18b31bf6634de8fb->enter($__internal_05d4d39b33519a4d8a579e507b10a54af056b68f0e5b774f18b31bf6634de8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_4718b6809921821e1f2994a705508ff06dfb2dc973d10455f97268875c53936d->leave($__internal_4718b6809921821e1f2994a705508ff06dfb2dc973d10455f97268875c53936d_prof);

        
        $__internal_05d4d39b33519a4d8a579e507b10a54af056b68f0e5b774f18b31bf6634de8fb->leave($__internal_05d4d39b33519a4d8a579e507b10a54af056b68f0e5b774f18b31bf6634de8fb_prof);

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
