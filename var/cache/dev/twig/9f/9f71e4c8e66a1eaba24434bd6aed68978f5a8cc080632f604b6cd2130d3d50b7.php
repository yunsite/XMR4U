<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_f637df94c984d4eff14a51177bb1016ec8ddafd9cfa4822b93bf178f9af0e138 extends Twig_Template
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
        $__internal_e87c47c445d0d51aba2d8e5a7e19ac5da990d22683526c6cc3eb97678c4cab18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e87c47c445d0d51aba2d8e5a7e19ac5da990d22683526c6cc3eb97678c4cab18->enter($__internal_e87c47c445d0d51aba2d8e5a7e19ac5da990d22683526c6cc3eb97678c4cab18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_bf0c695b32a65316e83e71edf99a5fb6010fe5abe1696994348c61868f035cc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf0c695b32a65316e83e71edf99a5fb6010fe5abe1696994348c61868f035cc5->enter($__internal_bf0c695b32a65316e83e71edf99a5fb6010fe5abe1696994348c61868f035cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e87c47c445d0d51aba2d8e5a7e19ac5da990d22683526c6cc3eb97678c4cab18->leave($__internal_e87c47c445d0d51aba2d8e5a7e19ac5da990d22683526c6cc3eb97678c4cab18_prof);

        
        $__internal_bf0c695b32a65316e83e71edf99a5fb6010fe5abe1696994348c61868f035cc5->leave($__internal_bf0c695b32a65316e83e71edf99a5fb6010fe5abe1696994348c61868f035cc5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/form.html.php");
    }
}
