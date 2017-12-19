<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_0b29bc258d2a5c7b3b89fddeac201bb804ac6369dd03b10e2bc8e811bb8a90cc extends Twig_Template
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
        $__internal_699b43cd8027b3a2d421c227b8124b96e6a30c1b96f1c3e1caf5a21f6c1bd626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_699b43cd8027b3a2d421c227b8124b96e6a30c1b96f1c3e1caf5a21f6c1bd626->enter($__internal_699b43cd8027b3a2d421c227b8124b96e6a30c1b96f1c3e1caf5a21f6c1bd626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_d02930c2e08e312fce42daa5a7c6a044542a084898e60f70474ba7f79454a19f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d02930c2e08e312fce42daa5a7c6a044542a084898e60f70474ba7f79454a19f->enter($__internal_d02930c2e08e312fce42daa5a7c6a044542a084898e60f70474ba7f79454a19f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_699b43cd8027b3a2d421c227b8124b96e6a30c1b96f1c3e1caf5a21f6c1bd626->leave($__internal_699b43cd8027b3a2d421c227b8124b96e6a30c1b96f1c3e1caf5a21f6c1bd626_prof);

        
        $__internal_d02930c2e08e312fce42daa5a7c6a044542a084898e60f70474ba7f79454a19f->leave($__internal_d02930c2e08e312fce42daa5a7c6a044542a084898e60f70474ba7f79454a19f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/form_rest.html.php");
    }
}
