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
        $__internal_4bdadb3ac222a9f93f833a3e9d5b9eedb2e2757a90ab1ca7d82b2e98993b2b34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bdadb3ac222a9f93f833a3e9d5b9eedb2e2757a90ab1ca7d82b2e98993b2b34->enter($__internal_4bdadb3ac222a9f93f833a3e9d5b9eedb2e2757a90ab1ca7d82b2e98993b2b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_47bc117f7b34a4dda99065f0b3f8e7d7d2924db26e0c38d1aaede6702a51a6b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47bc117f7b34a4dda99065f0b3f8e7d7d2924db26e0c38d1aaede6702a51a6b7->enter($__internal_47bc117f7b34a4dda99065f0b3f8e7d7d2924db26e0c38d1aaede6702a51a6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_4bdadb3ac222a9f93f833a3e9d5b9eedb2e2757a90ab1ca7d82b2e98993b2b34->leave($__internal_4bdadb3ac222a9f93f833a3e9d5b9eedb2e2757a90ab1ca7d82b2e98993b2b34_prof);

        
        $__internal_47bc117f7b34a4dda99065f0b3f8e7d7d2924db26e0c38d1aaede6702a51a6b7->leave($__internal_47bc117f7b34a4dda99065f0b3f8e7d7d2924db26e0c38d1aaede6702a51a6b7_prof);

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
