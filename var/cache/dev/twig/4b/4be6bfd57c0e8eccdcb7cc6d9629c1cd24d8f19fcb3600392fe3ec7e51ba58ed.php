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
        $__internal_32a87f9891ee76eebd964984b2e10ea7eeca8f72b0582ae122866adad997b361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32a87f9891ee76eebd964984b2e10ea7eeca8f72b0582ae122866adad997b361->enter($__internal_32a87f9891ee76eebd964984b2e10ea7eeca8f72b0582ae122866adad997b361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_af5a81bc030c950163d378db75c890362f21d9835deedd4cbddbd2fdd4ddc5fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af5a81bc030c950163d378db75c890362f21d9835deedd4cbddbd2fdd4ddc5fa->enter($__internal_af5a81bc030c950163d378db75c890362f21d9835deedd4cbddbd2fdd4ddc5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_32a87f9891ee76eebd964984b2e10ea7eeca8f72b0582ae122866adad997b361->leave($__internal_32a87f9891ee76eebd964984b2e10ea7eeca8f72b0582ae122866adad997b361_prof);

        
        $__internal_af5a81bc030c950163d378db75c890362f21d9835deedd4cbddbd2fdd4ddc5fa->leave($__internal_af5a81bc030c950163d378db75c890362f21d9835deedd4cbddbd2fdd4ddc5fa_prof);

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
