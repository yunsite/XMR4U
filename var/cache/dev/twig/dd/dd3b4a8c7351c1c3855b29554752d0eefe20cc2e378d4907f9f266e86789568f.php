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
        $__internal_78887d044eee04c7f00dcbf4567b738730f52c4b6511dea48337371a5d5a392e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78887d044eee04c7f00dcbf4567b738730f52c4b6511dea48337371a5d5a392e->enter($__internal_78887d044eee04c7f00dcbf4567b738730f52c4b6511dea48337371a5d5a392e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_eb4d06e5a592940cf2cd4045a68ac3516382065b5621662543ba32101b5ab8d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb4d06e5a592940cf2cd4045a68ac3516382065b5621662543ba32101b5ab8d9->enter($__internal_eb4d06e5a592940cf2cd4045a68ac3516382065b5621662543ba32101b5ab8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_78887d044eee04c7f00dcbf4567b738730f52c4b6511dea48337371a5d5a392e->leave($__internal_78887d044eee04c7f00dcbf4567b738730f52c4b6511dea48337371a5d5a392e_prof);

        
        $__internal_eb4d06e5a592940cf2cd4045a68ac3516382065b5621662543ba32101b5ab8d9->leave($__internal_eb4d06e5a592940cf2cd4045a68ac3516382065b5621662543ba32101b5ab8d9_prof);

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
