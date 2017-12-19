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
        $__internal_60cad8c115d3c611c10a3cef1df076ab7238b0543a70d53f8f6eb2bee74033fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60cad8c115d3c611c10a3cef1df076ab7238b0543a70d53f8f6eb2bee74033fa->enter($__internal_60cad8c115d3c611c10a3cef1df076ab7238b0543a70d53f8f6eb2bee74033fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_480d3f6644e40792ebfcfd7edea1ab02f217fff527e854d4c14dfb1636620646 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_480d3f6644e40792ebfcfd7edea1ab02f217fff527e854d4c14dfb1636620646->enter($__internal_480d3f6644e40792ebfcfd7edea1ab02f217fff527e854d4c14dfb1636620646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_60cad8c115d3c611c10a3cef1df076ab7238b0543a70d53f8f6eb2bee74033fa->leave($__internal_60cad8c115d3c611c10a3cef1df076ab7238b0543a70d53f8f6eb2bee74033fa_prof);

        
        $__internal_480d3f6644e40792ebfcfd7edea1ab02f217fff527e854d4c14dfb1636620646->leave($__internal_480d3f6644e40792ebfcfd7edea1ab02f217fff527e854d4c14dfb1636620646_prof);

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
", "@Framework/Form/email_widget.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/email_widget.html.php");
    }
}
