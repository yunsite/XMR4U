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
        $__internal_fb08ea88e6c5a8f72ede88b74684cb84326b4ea5e40f47653c9dc90e3de2db21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb08ea88e6c5a8f72ede88b74684cb84326b4ea5e40f47653c9dc90e3de2db21->enter($__internal_fb08ea88e6c5a8f72ede88b74684cb84326b4ea5e40f47653c9dc90e3de2db21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_51fbcacaecdfe3f7c3738f430442e333090ba9aa56cd0c72e6f205a4bcf5a219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51fbcacaecdfe3f7c3738f430442e333090ba9aa56cd0c72e6f205a4bcf5a219->enter($__internal_51fbcacaecdfe3f7c3738f430442e333090ba9aa56cd0c72e6f205a4bcf5a219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_fb08ea88e6c5a8f72ede88b74684cb84326b4ea5e40f47653c9dc90e3de2db21->leave($__internal_fb08ea88e6c5a8f72ede88b74684cb84326b4ea5e40f47653c9dc90e3de2db21_prof);

        
        $__internal_51fbcacaecdfe3f7c3738f430442e333090ba9aa56cd0c72e6f205a4bcf5a219->leave($__internal_51fbcacaecdfe3f7c3738f430442e333090ba9aa56cd0c72e6f205a4bcf5a219_prof);

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
", "@Framework/Form/submit_widget.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/submit_widget.html.php");
    }
}
