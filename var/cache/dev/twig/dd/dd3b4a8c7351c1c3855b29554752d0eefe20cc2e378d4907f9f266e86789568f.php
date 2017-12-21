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
        $__internal_f05b1232e2667779d2c42cbea3cb108a514e8556d6aa0c18aa373618ef08aa6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f05b1232e2667779d2c42cbea3cb108a514e8556d6aa0c18aa373618ef08aa6b->enter($__internal_f05b1232e2667779d2c42cbea3cb108a514e8556d6aa0c18aa373618ef08aa6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_5ee36224ceb741b8253d8dd760191047c6e9f2f3c74522e024abe2c4d4f7ea01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ee36224ceb741b8253d8dd760191047c6e9f2f3c74522e024abe2c4d4f7ea01->enter($__internal_5ee36224ceb741b8253d8dd760191047c6e9f2f3c74522e024abe2c4d4f7ea01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f05b1232e2667779d2c42cbea3cb108a514e8556d6aa0c18aa373618ef08aa6b->leave($__internal_f05b1232e2667779d2c42cbea3cb108a514e8556d6aa0c18aa373618ef08aa6b_prof);

        
        $__internal_5ee36224ceb741b8253d8dd760191047c6e9f2f3c74522e024abe2c4d4f7ea01->leave($__internal_5ee36224ceb741b8253d8dd760191047c6e9f2f3c74522e024abe2c4d4f7ea01_prof);

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
