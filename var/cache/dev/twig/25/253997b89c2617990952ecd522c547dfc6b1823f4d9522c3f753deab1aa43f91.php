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
        $__internal_fdbf8036fbf2ea1db17758e23d2e88db04380af334b1400f3005b06e7757df53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdbf8036fbf2ea1db17758e23d2e88db04380af334b1400f3005b06e7757df53->enter($__internal_fdbf8036fbf2ea1db17758e23d2e88db04380af334b1400f3005b06e7757df53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_ab1174ee28270dacc990983723fd56964a0c52c62913a8d819b3abeef4ca6f4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab1174ee28270dacc990983723fd56964a0c52c62913a8d819b3abeef4ca6f4c->enter($__internal_ab1174ee28270dacc990983723fd56964a0c52c62913a8d819b3abeef4ca6f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_fdbf8036fbf2ea1db17758e23d2e88db04380af334b1400f3005b06e7757df53->leave($__internal_fdbf8036fbf2ea1db17758e23d2e88db04380af334b1400f3005b06e7757df53_prof);

        
        $__internal_ab1174ee28270dacc990983723fd56964a0c52c62913a8d819b3abeef4ca6f4c->leave($__internal_ab1174ee28270dacc990983723fd56964a0c52c62913a8d819b3abeef4ca6f4c_prof);

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
