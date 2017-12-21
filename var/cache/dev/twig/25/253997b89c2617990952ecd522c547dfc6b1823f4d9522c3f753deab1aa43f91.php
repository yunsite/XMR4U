<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_640602de23ba69e916174986c354c59e6d434facd5c0014a73bf6708ff82f569 extends Twig_Template
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
        $__internal_e0e2b82f95f6307adfd17174dcd1dab1f89c763850668fcb2a35c37b0b349375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e2b82f95f6307adfd17174dcd1dab1f89c763850668fcb2a35c37b0b349375->enter($__internal_e0e2b82f95f6307adfd17174dcd1dab1f89c763850668fcb2a35c37b0b349375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_1805f8feb56bd8cf26e4d78b23e9c71144d6c39fbdb25c0db803712fd4056853 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1805f8feb56bd8cf26e4d78b23e9c71144d6c39fbdb25c0db803712fd4056853->enter($__internal_1805f8feb56bd8cf26e4d78b23e9c71144d6c39fbdb25c0db803712fd4056853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_e0e2b82f95f6307adfd17174dcd1dab1f89c763850668fcb2a35c37b0b349375->leave($__internal_e0e2b82f95f6307adfd17174dcd1dab1f89c763850668fcb2a35c37b0b349375_prof);

        
        $__internal_1805f8feb56bd8cf26e4d78b23e9c71144d6c39fbdb25c0db803712fd4056853->leave($__internal_1805f8feb56bd8cf26e4d78b23e9c71144d6c39fbdb25c0db803712fd4056853_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/form_start.html.php");
    }
}
