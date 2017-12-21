<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_c70bcd2882ea0eb3ea0a8358433db10fe0115fb52ffa3b8229157791e12ce63e extends Twig_Template
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
        $__internal_63f8df468c37b7d6ea2887f5e901c71e68a1071f099ac589394686ac4ef74abf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63f8df468c37b7d6ea2887f5e901c71e68a1071f099ac589394686ac4ef74abf->enter($__internal_63f8df468c37b7d6ea2887f5e901c71e68a1071f099ac589394686ac4ef74abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_b203f43d9d4e4e232b667cb51be24e44a1c666b078514865d613c304fc6ad9bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b203f43d9d4e4e232b667cb51be24e44a1c666b078514865d613c304fc6ad9bc->enter($__internal_b203f43d9d4e4e232b667cb51be24e44a1c666b078514865d613c304fc6ad9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_63f8df468c37b7d6ea2887f5e901c71e68a1071f099ac589394686ac4ef74abf->leave($__internal_63f8df468c37b7d6ea2887f5e901c71e68a1071f099ac589394686ac4ef74abf_prof);

        
        $__internal_b203f43d9d4e4e232b667cb51be24e44a1c666b078514865d613c304fc6ad9bc->leave($__internal_b203f43d9d4e4e232b667cb51be24e44a1c666b078514865d613c304fc6ad9bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/attributes.html.php");
    }
}
