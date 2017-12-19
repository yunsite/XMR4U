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
        $__internal_286ab58ffb4c706eda8d97f7660ac67c2f84f12ef757b3836b8021f54b25664e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_286ab58ffb4c706eda8d97f7660ac67c2f84f12ef757b3836b8021f54b25664e->enter($__internal_286ab58ffb4c706eda8d97f7660ac67c2f84f12ef757b3836b8021f54b25664e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_d57cd05629b7422e0972db11fe2e025f28ec47d3f2a391a6d858cc42e73f9c4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d57cd05629b7422e0972db11fe2e025f28ec47d3f2a391a6d858cc42e73f9c4c->enter($__internal_d57cd05629b7422e0972db11fe2e025f28ec47d3f2a391a6d858cc42e73f9c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_286ab58ffb4c706eda8d97f7660ac67c2f84f12ef757b3836b8021f54b25664e->leave($__internal_286ab58ffb4c706eda8d97f7660ac67c2f84f12ef757b3836b8021f54b25664e_prof);

        
        $__internal_d57cd05629b7422e0972db11fe2e025f28ec47d3f2a391a6d858cc42e73f9c4c->leave($__internal_d57cd05629b7422e0972db11fe2e025f28ec47d3f2a391a6d858cc42e73f9c4c_prof);

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
", "@Framework/Form/container_attributes.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/container_attributes.html.php");
    }
}
