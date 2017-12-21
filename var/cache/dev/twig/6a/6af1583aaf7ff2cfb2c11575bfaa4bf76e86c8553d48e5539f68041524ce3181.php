<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_34d45534075337db7ecde181cc223eb87120483221bc0db5fb4dce33f3d91c46 extends Twig_Template
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
        $__internal_3cf645a04f708652fe2a63695ba76e257798b2be2fa5d68952c1c19fdea20a9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cf645a04f708652fe2a63695ba76e257798b2be2fa5d68952c1c19fdea20a9c->enter($__internal_3cf645a04f708652fe2a63695ba76e257798b2be2fa5d68952c1c19fdea20a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_d5f2918e897808c9d06b8e414ea030765d1b4342cfc958a2a01cd06289c5037d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5f2918e897808c9d06b8e414ea030765d1b4342cfc958a2a01cd06289c5037d->enter($__internal_d5f2918e897808c9d06b8e414ea030765d1b4342cfc958a2a01cd06289c5037d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_3cf645a04f708652fe2a63695ba76e257798b2be2fa5d68952c1c19fdea20a9c->leave($__internal_3cf645a04f708652fe2a63695ba76e257798b2be2fa5d68952c1c19fdea20a9c_prof);

        
        $__internal_d5f2918e897808c9d06b8e414ea030765d1b4342cfc958a2a01cd06289c5037d->leave($__internal_d5f2918e897808c9d06b8e414ea030765d1b4342cfc958a2a01cd06289c5037d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
