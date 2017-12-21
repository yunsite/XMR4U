<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_41527d2124c1f07d13364f6da4e155d8b56175dc248b032c41aa1094cc41ffe2 extends Twig_Template
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
        $__internal_750058314927991473ff9978c860d82d2c9b044ed5d8e6fa5fe405de556dbf05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_750058314927991473ff9978c860d82d2c9b044ed5d8e6fa5fe405de556dbf05->enter($__internal_750058314927991473ff9978c860d82d2c9b044ed5d8e6fa5fe405de556dbf05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_eb68e3939043189b573a0342a2286ee3477df74975b413f7e9f84755c061f68f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb68e3939043189b573a0342a2286ee3477df74975b413f7e9f84755c061f68f->enter($__internal_eb68e3939043189b573a0342a2286ee3477df74975b413f7e9f84755c061f68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_750058314927991473ff9978c860d82d2c9b044ed5d8e6fa5fe405de556dbf05->leave($__internal_750058314927991473ff9978c860d82d2c9b044ed5d8e6fa5fe405de556dbf05_prof);

        
        $__internal_eb68e3939043189b573a0342a2286ee3477df74975b413f7e9f84755c061f68f->leave($__internal_eb68e3939043189b573a0342a2286ee3477df74975b413f7e9f84755c061f68f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/container_attributes.html.php");
    }
}
