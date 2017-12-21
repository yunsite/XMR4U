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
        $__internal_14b481305c5661f8139baedd103495ec5c5a16d335cf3fa5bc95dfc07f8b3b6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14b481305c5661f8139baedd103495ec5c5a16d335cf3fa5bc95dfc07f8b3b6a->enter($__internal_14b481305c5661f8139baedd103495ec5c5a16d335cf3fa5bc95dfc07f8b3b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_2427d49152028ad821ddecb593d5782ac89e4f4a16b25bb619f94c523f4d6f15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2427d49152028ad821ddecb593d5782ac89e4f4a16b25bb619f94c523f4d6f15->enter($__internal_2427d49152028ad821ddecb593d5782ac89e4f4a16b25bb619f94c523f4d6f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_14b481305c5661f8139baedd103495ec5c5a16d335cf3fa5bc95dfc07f8b3b6a->leave($__internal_14b481305c5661f8139baedd103495ec5c5a16d335cf3fa5bc95dfc07f8b3b6a_prof);

        
        $__internal_2427d49152028ad821ddecb593d5782ac89e4f4a16b25bb619f94c523f4d6f15->leave($__internal_2427d49152028ad821ddecb593d5782ac89e4f4a16b25bb619f94c523f4d6f15_prof);

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
