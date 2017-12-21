<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_f01945f073ca27098264eabcfb24c43c7e8ad6ede63f350d0b0a5482ca8aed5a extends Twig_Template
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
        $__internal_a1343491b1b970df21c3a8ea4d1944373754a05dd7992124dde1fb7a61e73649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1343491b1b970df21c3a8ea4d1944373754a05dd7992124dde1fb7a61e73649->enter($__internal_a1343491b1b970df21c3a8ea4d1944373754a05dd7992124dde1fb7a61e73649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_9a16df2112fc07d6da5718a723daba3ab572f1705fb037cf4c8a25180f46c259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a16df2112fc07d6da5718a723daba3ab572f1705fb037cf4c8a25180f46c259->enter($__internal_9a16df2112fc07d6da5718a723daba3ab572f1705fb037cf4c8a25180f46c259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_a1343491b1b970df21c3a8ea4d1944373754a05dd7992124dde1fb7a61e73649->leave($__internal_a1343491b1b970df21c3a8ea4d1944373754a05dd7992124dde1fb7a61e73649_prof);

        
        $__internal_9a16df2112fc07d6da5718a723daba3ab572f1705fb037cf4c8a25180f46c259->leave($__internal_9a16df2112fc07d6da5718a723daba3ab572f1705fb037cf4c8a25180f46c259_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
