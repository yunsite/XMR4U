<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_0b29bc258d2a5c7b3b89fddeac201bb804ac6369dd03b10e2bc8e811bb8a90cc extends Twig_Template
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
        $__internal_6b07d591ca4ed23f876618dbfcb17e836daf47d97d3abd363456edd478a0327a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b07d591ca4ed23f876618dbfcb17e836daf47d97d3abd363456edd478a0327a->enter($__internal_6b07d591ca4ed23f876618dbfcb17e836daf47d97d3abd363456edd478a0327a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_89d446c7ee9c5202f3bcdc8098be0b895da1e964b0bd4ad5ead267457d50ea33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89d446c7ee9c5202f3bcdc8098be0b895da1e964b0bd4ad5ead267457d50ea33->enter($__internal_89d446c7ee9c5202f3bcdc8098be0b895da1e964b0bd4ad5ead267457d50ea33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_6b07d591ca4ed23f876618dbfcb17e836daf47d97d3abd363456edd478a0327a->leave($__internal_6b07d591ca4ed23f876618dbfcb17e836daf47d97d3abd363456edd478a0327a_prof);

        
        $__internal_89d446c7ee9c5202f3bcdc8098be0b895da1e964b0bd4ad5ead267457d50ea33->leave($__internal_89d446c7ee9c5202f3bcdc8098be0b895da1e964b0bd4ad5ead267457d50ea33_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/form_rest.html.php");
    }
}
