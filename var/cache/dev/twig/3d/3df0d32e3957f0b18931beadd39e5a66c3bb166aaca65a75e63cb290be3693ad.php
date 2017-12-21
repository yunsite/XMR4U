<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_6ec61fd7bd8b18001a9440563a3671808b00f772ef8197933da4e35a1561a258 extends Twig_Template
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
        $__internal_5de4be97dff48e142a0949a6741953d5fc3b7299885c920ba2bae2f2257ca457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5de4be97dff48e142a0949a6741953d5fc3b7299885c920ba2bae2f2257ca457->enter($__internal_5de4be97dff48e142a0949a6741953d5fc3b7299885c920ba2bae2f2257ca457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_cda97357bbbce8cbd9e05aa70cf30583e07b32fadf7681842b2dfc166bf84dad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cda97357bbbce8cbd9e05aa70cf30583e07b32fadf7681842b2dfc166bf84dad->enter($__internal_cda97357bbbce8cbd9e05aa70cf30583e07b32fadf7681842b2dfc166bf84dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_5de4be97dff48e142a0949a6741953d5fc3b7299885c920ba2bae2f2257ca457->leave($__internal_5de4be97dff48e142a0949a6741953d5fc3b7299885c920ba2bae2f2257ca457_prof);

        
        $__internal_cda97357bbbce8cbd9e05aa70cf30583e07b32fadf7681842b2dfc166bf84dad->leave($__internal_cda97357bbbce8cbd9e05aa70cf30583e07b32fadf7681842b2dfc166bf84dad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/collection_widget.html.php");
    }
}
