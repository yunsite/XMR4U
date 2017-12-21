<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_a841fe3e85ce857f92e8a180257e3b004738a9c64fd47444465f93e4e5e12d07 extends Twig_Template
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
        $__internal_7356df5deb9f17bd1b57112a8732799ed6dc8d005cde2d0465a8014d964499f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7356df5deb9f17bd1b57112a8732799ed6dc8d005cde2d0465a8014d964499f6->enter($__internal_7356df5deb9f17bd1b57112a8732799ed6dc8d005cde2d0465a8014d964499f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_98e635e98e6bcee0e410d40cbf0267d50fd11fb4038b221211275a62c3d3a483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98e635e98e6bcee0e410d40cbf0267d50fd11fb4038b221211275a62c3d3a483->enter($__internal_98e635e98e6bcee0e410d40cbf0267d50fd11fb4038b221211275a62c3d3a483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_7356df5deb9f17bd1b57112a8732799ed6dc8d005cde2d0465a8014d964499f6->leave($__internal_7356df5deb9f17bd1b57112a8732799ed6dc8d005cde2d0465a8014d964499f6_prof);

        
        $__internal_98e635e98e6bcee0e410d40cbf0267d50fd11fb4038b221211275a62c3d3a483->leave($__internal_98e635e98e6bcee0e410d40cbf0267d50fd11fb4038b221211275a62c3d3a483_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/submit_widget.html.php");
    }
}
