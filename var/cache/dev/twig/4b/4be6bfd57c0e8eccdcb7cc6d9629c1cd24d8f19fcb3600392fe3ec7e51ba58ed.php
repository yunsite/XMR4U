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
        $__internal_dc153cc953bcaa98b60ce6a5e7b7b92132b545e96cf36553b23132c62b2f3733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc153cc953bcaa98b60ce6a5e7b7b92132b545e96cf36553b23132c62b2f3733->enter($__internal_dc153cc953bcaa98b60ce6a5e7b7b92132b545e96cf36553b23132c62b2f3733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_c65a7122cf6c6c66284657bbfa398658af7a6b0bacbc7711ab3d3bbfceaebd0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c65a7122cf6c6c66284657bbfa398658af7a6b0bacbc7711ab3d3bbfceaebd0c->enter($__internal_c65a7122cf6c6c66284657bbfa398658af7a6b0bacbc7711ab3d3bbfceaebd0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_dc153cc953bcaa98b60ce6a5e7b7b92132b545e96cf36553b23132c62b2f3733->leave($__internal_dc153cc953bcaa98b60ce6a5e7b7b92132b545e96cf36553b23132c62b2f3733_prof);

        
        $__internal_c65a7122cf6c6c66284657bbfa398658af7a6b0bacbc7711ab3d3bbfceaebd0c->leave($__internal_c65a7122cf6c6c66284657bbfa398658af7a6b0bacbc7711ab3d3bbfceaebd0c_prof);

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
", "@Framework/Form/form_row.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/form_row.html.php");
    }
}
