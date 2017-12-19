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
        $__internal_b94658e25a82ba450b5d907944c5d30a100c3fd0e5510b13d9caf58bb91fb208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b94658e25a82ba450b5d907944c5d30a100c3fd0e5510b13d9caf58bb91fb208->enter($__internal_b94658e25a82ba450b5d907944c5d30a100c3fd0e5510b13d9caf58bb91fb208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_e0e3d489996059e9567fe1381a68486fecb3213f6b9e10689753cf9385eaefd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0e3d489996059e9567fe1381a68486fecb3213f6b9e10689753cf9385eaefd9->enter($__internal_e0e3d489996059e9567fe1381a68486fecb3213f6b9e10689753cf9385eaefd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_b94658e25a82ba450b5d907944c5d30a100c3fd0e5510b13d9caf58bb91fb208->leave($__internal_b94658e25a82ba450b5d907944c5d30a100c3fd0e5510b13d9caf58bb91fb208_prof);

        
        $__internal_e0e3d489996059e9567fe1381a68486fecb3213f6b9e10689753cf9385eaefd9->leave($__internal_e0e3d489996059e9567fe1381a68486fecb3213f6b9e10689753cf9385eaefd9_prof);

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
", "@Framework/Form/form.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/form.html.php");
    }
}
