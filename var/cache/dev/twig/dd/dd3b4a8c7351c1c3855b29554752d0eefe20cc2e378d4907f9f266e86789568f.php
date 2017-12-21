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
        $__internal_ded660a7e9a6c23ed597922ace5d28163764f06af4a51e1c7d25b03e2361415b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ded660a7e9a6c23ed597922ace5d28163764f06af4a51e1c7d25b03e2361415b->enter($__internal_ded660a7e9a6c23ed597922ace5d28163764f06af4a51e1c7d25b03e2361415b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_b7d65e0eded199575b6b8dc717235ad8bea751b0f6fa12b3c977dc5fbba1cbb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7d65e0eded199575b6b8dc717235ad8bea751b0f6fa12b3c977dc5fbba1cbb9->enter($__internal_b7d65e0eded199575b6b8dc717235ad8bea751b0f6fa12b3c977dc5fbba1cbb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_ded660a7e9a6c23ed597922ace5d28163764f06af4a51e1c7d25b03e2361415b->leave($__internal_ded660a7e9a6c23ed597922ace5d28163764f06af4a51e1c7d25b03e2361415b_prof);

        
        $__internal_b7d65e0eded199575b6b8dc717235ad8bea751b0f6fa12b3c977dc5fbba1cbb9->leave($__internal_b7d65e0eded199575b6b8dc717235ad8bea751b0f6fa12b3c977dc5fbba1cbb9_prof);

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
", "@Framework/Form/form_end.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/form_end.html.php");
    }
}
