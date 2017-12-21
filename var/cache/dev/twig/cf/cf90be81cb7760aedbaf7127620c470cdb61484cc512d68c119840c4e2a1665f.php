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
        $__internal_acd2cf7cdc50567bbd5a2942fb3b13051226dac43e4f97056e1814d5b611edc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acd2cf7cdc50567bbd5a2942fb3b13051226dac43e4f97056e1814d5b611edc5->enter($__internal_acd2cf7cdc50567bbd5a2942fb3b13051226dac43e4f97056e1814d5b611edc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_a01d22cfb4e67b7b5149bbd91506e85cd001870e96a6e6fb9cd47c92d0271d93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a01d22cfb4e67b7b5149bbd91506e85cd001870e96a6e6fb9cd47c92d0271d93->enter($__internal_a01d22cfb4e67b7b5149bbd91506e85cd001870e96a6e6fb9cd47c92d0271d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

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
        
        $__internal_acd2cf7cdc50567bbd5a2942fb3b13051226dac43e4f97056e1814d5b611edc5->leave($__internal_acd2cf7cdc50567bbd5a2942fb3b13051226dac43e4f97056e1814d5b611edc5_prof);

        
        $__internal_a01d22cfb4e67b7b5149bbd91506e85cd001870e96a6e6fb9cd47c92d0271d93->leave($__internal_a01d22cfb4e67b7b5149bbd91506e85cd001870e96a6e6fb9cd47c92d0271d93_prof);

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
