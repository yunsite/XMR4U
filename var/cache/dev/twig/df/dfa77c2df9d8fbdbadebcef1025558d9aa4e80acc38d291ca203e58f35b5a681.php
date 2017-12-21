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
        $__internal_7be243859c48a65c269d0fee80fdb428d843c8dd87a7273a3efec5b720deeb12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7be243859c48a65c269d0fee80fdb428d843c8dd87a7273a3efec5b720deeb12->enter($__internal_7be243859c48a65c269d0fee80fdb428d843c8dd87a7273a3efec5b720deeb12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_d1d5f00863fbedeb36b98fc6892307fbd8cb87da842387421143b4802c55a06f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1d5f00863fbedeb36b98fc6892307fbd8cb87da842387421143b4802c55a06f->enter($__internal_d1d5f00863fbedeb36b98fc6892307fbd8cb87da842387421143b4802c55a06f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_7be243859c48a65c269d0fee80fdb428d843c8dd87a7273a3efec5b720deeb12->leave($__internal_7be243859c48a65c269d0fee80fdb428d843c8dd87a7273a3efec5b720deeb12_prof);

        
        $__internal_d1d5f00863fbedeb36b98fc6892307fbd8cb87da842387421143b4802c55a06f->leave($__internal_d1d5f00863fbedeb36b98fc6892307fbd8cb87da842387421143b4802c55a06f_prof);

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
", "@Framework/Form/form_rest.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/form_rest.html.php");
    }
}
