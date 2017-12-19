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
        $__internal_16b8ff6790fb481fc12cf1cc3389eeb8a6a1bfdc2c3fe00afc7dee8fc55b0d50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16b8ff6790fb481fc12cf1cc3389eeb8a6a1bfdc2c3fe00afc7dee8fc55b0d50->enter($__internal_16b8ff6790fb481fc12cf1cc3389eeb8a6a1bfdc2c3fe00afc7dee8fc55b0d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_cb835cbd793f5f3eb3410e7b4e45f22295a352f88102045b55940b4afca24cd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb835cbd793f5f3eb3410e7b4e45f22295a352f88102045b55940b4afca24cd1->enter($__internal_cb835cbd793f5f3eb3410e7b4e45f22295a352f88102045b55940b4afca24cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_16b8ff6790fb481fc12cf1cc3389eeb8a6a1bfdc2c3fe00afc7dee8fc55b0d50->leave($__internal_16b8ff6790fb481fc12cf1cc3389eeb8a6a1bfdc2c3fe00afc7dee8fc55b0d50_prof);

        
        $__internal_cb835cbd793f5f3eb3410e7b4e45f22295a352f88102045b55940b4afca24cd1->leave($__internal_cb835cbd793f5f3eb3410e7b4e45f22295a352f88102045b55940b4afca24cd1_prof);

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
", "@Framework/Form/password_widget.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/password_widget.html.php");
    }
}
