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
        $__internal_0862cefccf4a1e139134b988e64259486771df5b265e86fc2070155d6605988e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0862cefccf4a1e139134b988e64259486771df5b265e86fc2070155d6605988e->enter($__internal_0862cefccf4a1e139134b988e64259486771df5b265e86fc2070155d6605988e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_d687e0e2ca480404255620453ace59c298db91f7168a759a2a2ab784c665f10c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d687e0e2ca480404255620453ace59c298db91f7168a759a2a2ab784c665f10c->enter($__internal_d687e0e2ca480404255620453ace59c298db91f7168a759a2a2ab784c665f10c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_0862cefccf4a1e139134b988e64259486771df5b265e86fc2070155d6605988e->leave($__internal_0862cefccf4a1e139134b988e64259486771df5b265e86fc2070155d6605988e_prof);

        
        $__internal_d687e0e2ca480404255620453ace59c298db91f7168a759a2a2ab784c665f10c->leave($__internal_d687e0e2ca480404255620453ace59c298db91f7168a759a2a2ab784c665f10c_prof);

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
", "@Framework/FormTable/button_row.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/FormTable/button_row.html.php");
    }
}
