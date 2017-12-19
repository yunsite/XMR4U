<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_f11648a3ad86d05c7b1c6e0b8ec1a40bfe9061b42130805ff6b2a7f3b829a673 extends Twig_Template
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
        $__internal_0735ce8a37d1a612ce9060a5d9b91cb3664bd42069539ac0a91f7b083575ab2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0735ce8a37d1a612ce9060a5d9b91cb3664bd42069539ac0a91f7b083575ab2c->enter($__internal_0735ce8a37d1a612ce9060a5d9b91cb3664bd42069539ac0a91f7b083575ab2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_620ae2495dd03496e5e4a128a80366d2ed64136e0620763f2191bc24cf91f8eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_620ae2495dd03496e5e4a128a80366d2ed64136e0620763f2191bc24cf91f8eb->enter($__internal_620ae2495dd03496e5e4a128a80366d2ed64136e0620763f2191bc24cf91f8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_0735ce8a37d1a612ce9060a5d9b91cb3664bd42069539ac0a91f7b083575ab2c->leave($__internal_0735ce8a37d1a612ce9060a5d9b91cb3664bd42069539ac0a91f7b083575ab2c_prof);

        
        $__internal_620ae2495dd03496e5e4a128a80366d2ed64136e0620763f2191bc24cf91f8eb->leave($__internal_620ae2495dd03496e5e4a128a80366d2ed64136e0620763f2191bc24cf91f8eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/form_row.html.php");
    }
}
