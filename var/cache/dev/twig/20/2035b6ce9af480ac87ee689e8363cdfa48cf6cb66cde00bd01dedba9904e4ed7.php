<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_67d1e366d8dddf6b4f76c2a56076362460830d5a1e3dbe34f88cf0a0db4d8609 extends Twig_Template
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
        $__internal_e2b9e3eb94757e0f2968cad28567b9229b2e4f8a9c5bd86c559a2a544deab9b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2b9e3eb94757e0f2968cad28567b9229b2e4f8a9c5bd86c559a2a544deab9b2->enter($__internal_e2b9e3eb94757e0f2968cad28567b9229b2e4f8a9c5bd86c559a2a544deab9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_286e8466762d103337bafe1a4c51af15ab1e4d4b510045a30ec4918cdc597723 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_286e8466762d103337bafe1a4c51af15ab1e4d4b510045a30ec4918cdc597723->enter($__internal_286e8466762d103337bafe1a4c51af15ab1e4d4b510045a30ec4918cdc597723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_e2b9e3eb94757e0f2968cad28567b9229b2e4f8a9c5bd86c559a2a544deab9b2->leave($__internal_e2b9e3eb94757e0f2968cad28567b9229b2e4f8a9c5bd86c559a2a544deab9b2_prof);

        
        $__internal_286e8466762d103337bafe1a4c51af15ab1e4d4b510045a30ec4918cdc597723->leave($__internal_286e8466762d103337bafe1a4c51af15ab1e4d4b510045a30ec4918cdc597723_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/password_widget.html.php");
    }
}
