<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_f637df94c984d4eff14a51177bb1016ec8ddafd9cfa4822b93bf178f9af0e138 extends Twig_Template
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
        $__internal_73d29dc6dcc0dafa83a377a3823e3ab6d92f55a7c075e21710a3b3fc65de2932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d29dc6dcc0dafa83a377a3823e3ab6d92f55a7c075e21710a3b3fc65de2932->enter($__internal_73d29dc6dcc0dafa83a377a3823e3ab6d92f55a7c075e21710a3b3fc65de2932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_833a59d141231f55af29b078480524b33014c394ec33a3f9459cc80fd9bf97a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_833a59d141231f55af29b078480524b33014c394ec33a3f9459cc80fd9bf97a3->enter($__internal_833a59d141231f55af29b078480524b33014c394ec33a3f9459cc80fd9bf97a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_73d29dc6dcc0dafa83a377a3823e3ab6d92f55a7c075e21710a3b3fc65de2932->leave($__internal_73d29dc6dcc0dafa83a377a3823e3ab6d92f55a7c075e21710a3b3fc65de2932_prof);

        
        $__internal_833a59d141231f55af29b078480524b33014c394ec33a3f9459cc80fd9bf97a3->leave($__internal_833a59d141231f55af29b078480524b33014c394ec33a3f9459cc80fd9bf97a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/form.html.php");
    }
}
