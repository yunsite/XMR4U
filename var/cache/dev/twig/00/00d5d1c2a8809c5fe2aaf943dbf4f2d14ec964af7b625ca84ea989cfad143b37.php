<?php

/* @Framework/Form/date_widget.html.php */
class __TwigTemplate_5479fc049e4b4432f88976127bf69743e508bee0adcc3e6909c37463f4e76448 extends Twig_Template
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
        $__internal_1e840ac7a85c6dffea2676fdd8d67966378aebaa212973c8bb7eed48a57bafcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e840ac7a85c6dffea2676fdd8d67966378aebaa212973c8bb7eed48a57bafcd->enter($__internal_1e840ac7a85c6dffea2676fdd8d67966378aebaa212973c8bb7eed48a57bafcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        $__internal_b41ba9a16338d5425f20a201a60c89ab761389a6e1abb6fef5434d665ed6a376 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b41ba9a16338d5425f20a201a60c89ab761389a6e1abb6fef5434d665ed6a376->enter($__internal_b41ba9a16338d5425f20a201a60c89ab761389a6e1abb6fef5434d665ed6a376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new Twig_Error_Runtime('Variable "year" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new Twig_Error_Runtime('Variable "month" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["day"]) || array_key_exists("day", $context) ? $context["day"] : (function () { throw new Twig_Error_Runtime('Variable "day" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
";
        
        $__internal_1e840ac7a85c6dffea2676fdd8d67966378aebaa212973c8bb7eed48a57bafcd->leave($__internal_1e840ac7a85c6dffea2676fdd8d67966378aebaa212973c8bb7eed48a57bafcd_prof);

        
        $__internal_b41ba9a16338d5425f20a201a60c89ab761389a6e1abb6fef5434d665ed6a376->leave($__internal_b41ba9a16338d5425f20a201a60c89ab761389a6e1abb6fef5434d665ed6a376_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/date_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('{{ year }}', '{{ month }}', '{{ day }}'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
", "@Framework/Form/date_widget.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/date_widget.html.php");
    }
}
