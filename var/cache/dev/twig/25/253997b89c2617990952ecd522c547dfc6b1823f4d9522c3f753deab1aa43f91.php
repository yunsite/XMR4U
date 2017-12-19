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
        $__internal_514ec3726d802026b469b5795d90219bca4f771d21459e7201c8188bcfe3e409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_514ec3726d802026b469b5795d90219bca4f771d21459e7201c8188bcfe3e409->enter($__internal_514ec3726d802026b469b5795d90219bca4f771d21459e7201c8188bcfe3e409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_535b6e88ec3f3e20eb6b4b86424e0757b812c7d340e764c51722892f65f47397 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_535b6e88ec3f3e20eb6b4b86424e0757b812c7d340e764c51722892f65f47397->enter($__internal_535b6e88ec3f3e20eb6b4b86424e0757b812c7d340e764c51722892f65f47397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_514ec3726d802026b469b5795d90219bca4f771d21459e7201c8188bcfe3e409->leave($__internal_514ec3726d802026b469b5795d90219bca4f771d21459e7201c8188bcfe3e409_prof);

        
        $__internal_535b6e88ec3f3e20eb6b4b86424e0757b812c7d340e764c51722892f65f47397->leave($__internal_535b6e88ec3f3e20eb6b4b86424e0757b812c7d340e764c51722892f65f47397_prof);

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
", "@Framework/Form/form_start.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/form_start.html.php");
    }
}
