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
        $__internal_8ea11ea2afc805451530da26daa1116d742f9c8167492e2e4da6cf579af1c640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ea11ea2afc805451530da26daa1116d742f9c8167492e2e4da6cf579af1c640->enter($__internal_8ea11ea2afc805451530da26daa1116d742f9c8167492e2e4da6cf579af1c640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_0e1fc2102b801986485f9db8d275d63642a1ff51739d51e9e058f1acbe93b51a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e1fc2102b801986485f9db8d275d63642a1ff51739d51e9e058f1acbe93b51a->enter($__internal_0e1fc2102b801986485f9db8d275d63642a1ff51739d51e9e058f1acbe93b51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

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
        
        $__internal_8ea11ea2afc805451530da26daa1116d742f9c8167492e2e4da6cf579af1c640->leave($__internal_8ea11ea2afc805451530da26daa1116d742f9c8167492e2e4da6cf579af1c640_prof);

        
        $__internal_0e1fc2102b801986485f9db8d275d63642a1ff51739d51e9e058f1acbe93b51a->leave($__internal_0e1fc2102b801986485f9db8d275d63642a1ff51739d51e9e058f1acbe93b51a_prof);

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
", "@Framework/Form/attributes.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/attributes.html.php");
    }
}
