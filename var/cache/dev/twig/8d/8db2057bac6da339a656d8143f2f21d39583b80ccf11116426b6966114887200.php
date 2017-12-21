<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_8f85b68b8eb445766c93e050d7f0bb31d0ca1f8b601ec267fea50b4f3633af11 extends Twig_Template
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
        $__internal_11ba14f78b9b14fbf41b53dbbb0fe984077b5ba74220404d4da1546ed3b0a3c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11ba14f78b9b14fbf41b53dbbb0fe984077b5ba74220404d4da1546ed3b0a3c2->enter($__internal_11ba14f78b9b14fbf41b53dbbb0fe984077b5ba74220404d4da1546ed3b0a3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_ee03422bf8714008cb1dd67af8d9e99c5733f7909cbdbb1f8ae60a7558a64f84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee03422bf8714008cb1dd67af8d9e99c5733f7909cbdbb1f8ae60a7558a64f84->enter($__internal_ee03422bf8714008cb1dd67af8d9e99c5733f7909cbdbb1f8ae60a7558a64f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_11ba14f78b9b14fbf41b53dbbb0fe984077b5ba74220404d4da1546ed3b0a3c2->leave($__internal_11ba14f78b9b14fbf41b53dbbb0fe984077b5ba74220404d4da1546ed3b0a3c2_prof);

        
        $__internal_ee03422bf8714008cb1dd67af8d9e99c5733f7909cbdbb1f8ae60a7558a64f84->leave($__internal_ee03422bf8714008cb1dd67af8d9e99c5733f7909cbdbb1f8ae60a7558a64f84_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
