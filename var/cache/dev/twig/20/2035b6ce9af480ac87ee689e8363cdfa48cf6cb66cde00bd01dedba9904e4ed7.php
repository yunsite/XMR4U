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
        $__internal_1de787c5cf6df07d87c830a8d2b04e4a68f3744e62fe144d05af9dc63f4825fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1de787c5cf6df07d87c830a8d2b04e4a68f3744e62fe144d05af9dc63f4825fb->enter($__internal_1de787c5cf6df07d87c830a8d2b04e4a68f3744e62fe144d05af9dc63f4825fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_56391065d4720b5efe681151f4911fbb1834b9be6cc87b255a122db118d082b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56391065d4720b5efe681151f4911fbb1834b9be6cc87b255a122db118d082b0->enter($__internal_56391065d4720b5efe681151f4911fbb1834b9be6cc87b255a122db118d082b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_1de787c5cf6df07d87c830a8d2b04e4a68f3744e62fe144d05af9dc63f4825fb->leave($__internal_1de787c5cf6df07d87c830a8d2b04e4a68f3744e62fe144d05af9dc63f4825fb_prof);

        
        $__internal_56391065d4720b5efe681151f4911fbb1834b9be6cc87b255a122db118d082b0->leave($__internal_56391065d4720b5efe681151f4911fbb1834b9be6cc87b255a122db118d082b0_prof);

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
