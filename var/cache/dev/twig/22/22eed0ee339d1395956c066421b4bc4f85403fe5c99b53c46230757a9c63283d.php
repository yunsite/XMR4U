<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_b53d970f784cc8e0c6648fcd918ff06e251c70f1cf256c875dfd152320ae181c extends Twig_Template
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
        $__internal_96cd14758d43cb75c57ffbe9cb64bdfe13725c2e53bb1d7e35a00e19d256e862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96cd14758d43cb75c57ffbe9cb64bdfe13725c2e53bb1d7e35a00e19d256e862->enter($__internal_96cd14758d43cb75c57ffbe9cb64bdfe13725c2e53bb1d7e35a00e19d256e862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_d06383f0dd5725d5c53f6d84e9a3529537bce2414157334ede5e7e15453987a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d06383f0dd5725d5c53f6d84e9a3529537bce2414157334ede5e7e15453987a5->enter($__internal_d06383f0dd5725d5c53f6d84e9a3529537bce2414157334ede5e7e15453987a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_96cd14758d43cb75c57ffbe9cb64bdfe13725c2e53bb1d7e35a00e19d256e862->leave($__internal_96cd14758d43cb75c57ffbe9cb64bdfe13725c2e53bb1d7e35a00e19d256e862_prof);

        
        $__internal_d06383f0dd5725d5c53f6d84e9a3529537bce2414157334ede5e7e15453987a5->leave($__internal_d06383f0dd5725d5c53f6d84e9a3529537bce2414157334ede5e7e15453987a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/reset_widget.html.php");
    }
}
