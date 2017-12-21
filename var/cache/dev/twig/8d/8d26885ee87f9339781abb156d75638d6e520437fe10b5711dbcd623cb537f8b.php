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
        $__internal_f75b1cc58dae2ff8d5fb278382f5c2d98d5b00ccfbb3516f856226ed0edaa761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75b1cc58dae2ff8d5fb278382f5c2d98d5b00ccfbb3516f856226ed0edaa761->enter($__internal_f75b1cc58dae2ff8d5fb278382f5c2d98d5b00ccfbb3516f856226ed0edaa761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_746110e70dc14db790b01a378e9d751e5bf33707b3d9670e571a5807e574478d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_746110e70dc14db790b01a378e9d751e5bf33707b3d9670e571a5807e574478d->enter($__internal_746110e70dc14db790b01a378e9d751e5bf33707b3d9670e571a5807e574478d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_f75b1cc58dae2ff8d5fb278382f5c2d98d5b00ccfbb3516f856226ed0edaa761->leave($__internal_f75b1cc58dae2ff8d5fb278382f5c2d98d5b00ccfbb3516f856226ed0edaa761_prof);

        
        $__internal_746110e70dc14db790b01a378e9d751e5bf33707b3d9670e571a5807e574478d->leave($__internal_746110e70dc14db790b01a378e9d751e5bf33707b3d9670e571a5807e574478d_prof);

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
