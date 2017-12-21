<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_2efa86dbf06b609003b2f212ee118c79a22a2814e2d61101f6e5f013cdc801c2 extends Twig_Template
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
        $__internal_009504cff2efa2087b75a77ce76154761c6a33cdb90801456f76db2a41dbd74f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_009504cff2efa2087b75a77ce76154761c6a33cdb90801456f76db2a41dbd74f->enter($__internal_009504cff2efa2087b75a77ce76154761c6a33cdb90801456f76db2a41dbd74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_573d1405dbcff7a4b39b9c2b466fe1b809049fe2e6c6f94e9c9bcb51d891a4ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_573d1405dbcff7a4b39b9c2b466fe1b809049fe2e6c6f94e9c9bcb51d891a4ae->enter($__internal_573d1405dbcff7a4b39b9c2b466fe1b809049fe2e6c6f94e9c9bcb51d891a4ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_009504cff2efa2087b75a77ce76154761c6a33cdb90801456f76db2a41dbd74f->leave($__internal_009504cff2efa2087b75a77ce76154761c6a33cdb90801456f76db2a41dbd74f_prof);

        
        $__internal_573d1405dbcff7a4b39b9c2b466fe1b809049fe2e6c6f94e9c9bcb51d891a4ae->leave($__internal_573d1405dbcff7a4b39b9c2b466fe1b809049fe2e6c6f94e9c9bcb51d891a4ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/form_end.html.php");
    }
}
