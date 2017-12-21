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
        $__internal_9ec7d97863924f64911cf924f23f2a11be6eb5236c20bbc15b2a4564870323f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ec7d97863924f64911cf924f23f2a11be6eb5236c20bbc15b2a4564870323f7->enter($__internal_9ec7d97863924f64911cf924f23f2a11be6eb5236c20bbc15b2a4564870323f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_afee6593cdd42ef277dcf981cb71f01bf1a2eb27e09057b44416758cff9329e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afee6593cdd42ef277dcf981cb71f01bf1a2eb27e09057b44416758cff9329e3->enter($__internal_afee6593cdd42ef277dcf981cb71f01bf1a2eb27e09057b44416758cff9329e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

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
        
        $__internal_9ec7d97863924f64911cf924f23f2a11be6eb5236c20bbc15b2a4564870323f7->leave($__internal_9ec7d97863924f64911cf924f23f2a11be6eb5236c20bbc15b2a4564870323f7_prof);

        
        $__internal_afee6593cdd42ef277dcf981cb71f01bf1a2eb27e09057b44416758cff9329e3->leave($__internal_afee6593cdd42ef277dcf981cb71f01bf1a2eb27e09057b44416758cff9329e3_prof);

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
