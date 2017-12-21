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
        $__internal_f9723d1ab219d69ab6fe061f2b5633d49b5a59ae664f0b15fef01bd5e5796742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9723d1ab219d69ab6fe061f2b5633d49b5a59ae664f0b15fef01bd5e5796742->enter($__internal_f9723d1ab219d69ab6fe061f2b5633d49b5a59ae664f0b15fef01bd5e5796742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_ba1d3cd9342866bed10ff49dca60284b1662789ee5e2a9a19986267f92670cf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba1d3cd9342866bed10ff49dca60284b1662789ee5e2a9a19986267f92670cf2->enter($__internal_ba1d3cd9342866bed10ff49dca60284b1662789ee5e2a9a19986267f92670cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_f9723d1ab219d69ab6fe061f2b5633d49b5a59ae664f0b15fef01bd5e5796742->leave($__internal_f9723d1ab219d69ab6fe061f2b5633d49b5a59ae664f0b15fef01bd5e5796742_prof);

        
        $__internal_ba1d3cd9342866bed10ff49dca60284b1662789ee5e2a9a19986267f92670cf2->leave($__internal_ba1d3cd9342866bed10ff49dca60284b1662789ee5e2a9a19986267f92670cf2_prof);

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
