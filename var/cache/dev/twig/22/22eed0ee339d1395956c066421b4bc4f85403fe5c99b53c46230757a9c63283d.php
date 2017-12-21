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
        $__internal_fbbd91c05330ea736d7f85c0bedd66e6ccd30bd0362ab0911856ece9a0e25c20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbbd91c05330ea736d7f85c0bedd66e6ccd30bd0362ab0911856ece9a0e25c20->enter($__internal_fbbd91c05330ea736d7f85c0bedd66e6ccd30bd0362ab0911856ece9a0e25c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_29f06bd4a6316b3baf93fdd78617c3fe779240b2a32ae6b3a74c65dbdf25a9b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29f06bd4a6316b3baf93fdd78617c3fe779240b2a32ae6b3a74c65dbdf25a9b6->enter($__internal_29f06bd4a6316b3baf93fdd78617c3fe779240b2a32ae6b3a74c65dbdf25a9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_fbbd91c05330ea736d7f85c0bedd66e6ccd30bd0362ab0911856ece9a0e25c20->leave($__internal_fbbd91c05330ea736d7f85c0bedd66e6ccd30bd0362ab0911856ece9a0e25c20_prof);

        
        $__internal_29f06bd4a6316b3baf93fdd78617c3fe779240b2a32ae6b3a74c65dbdf25a9b6->leave($__internal_29f06bd4a6316b3baf93fdd78617c3fe779240b2a32ae6b3a74c65dbdf25a9b6_prof);

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
