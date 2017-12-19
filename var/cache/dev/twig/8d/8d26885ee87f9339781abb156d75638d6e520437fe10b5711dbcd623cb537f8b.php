<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_4f75bc31970114970b0fdf0ba33e5c15022677cef78210dbec41d5da45bb1a06 extends Twig_Template
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
        $__internal_e7eb5a616bb37b07af5f630a47d76dc0f3c3d66ef97d65b2edeebe8ee723678c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7eb5a616bb37b07af5f630a47d76dc0f3c3d66ef97d65b2edeebe8ee723678c->enter($__internal_e7eb5a616bb37b07af5f630a47d76dc0f3c3d66ef97d65b2edeebe8ee723678c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_1f32282c236a46fbbb508346e0b56cd223895e76ae5f5e261a1d3815d9578d6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f32282c236a46fbbb508346e0b56cd223895e76ae5f5e261a1d3815d9578d6b->enter($__internal_1f32282c236a46fbbb508346e0b56cd223895e76ae5f5e261a1d3815d9578d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_e7eb5a616bb37b07af5f630a47d76dc0f3c3d66ef97d65b2edeebe8ee723678c->leave($__internal_e7eb5a616bb37b07af5f630a47d76dc0f3c3d66ef97d65b2edeebe8ee723678c_prof);

        
        $__internal_1f32282c236a46fbbb508346e0b56cd223895e76ae5f5e261a1d3815d9578d6b->leave($__internal_1f32282c236a46fbbb508346e0b56cd223895e76ae5f5e261a1d3815d9578d6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/FormTable/button_row.html.php");
    }
}
