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
        $__internal_ac8402610eb0d60ccb5bf040ed3ba083742d732e9d772d50d69f0898b5701704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac8402610eb0d60ccb5bf040ed3ba083742d732e9d772d50d69f0898b5701704->enter($__internal_ac8402610eb0d60ccb5bf040ed3ba083742d732e9d772d50d69f0898b5701704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_de84c1b5099dd28f1c327de6b37ed2db504944d64fe7e212a2ecb4285fa10255 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de84c1b5099dd28f1c327de6b37ed2db504944d64fe7e212a2ecb4285fa10255->enter($__internal_de84c1b5099dd28f1c327de6b37ed2db504944d64fe7e212a2ecb4285fa10255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_ac8402610eb0d60ccb5bf040ed3ba083742d732e9d772d50d69f0898b5701704->leave($__internal_ac8402610eb0d60ccb5bf040ed3ba083742d732e9d772d50d69f0898b5701704_prof);

        
        $__internal_de84c1b5099dd28f1c327de6b37ed2db504944d64fe7e212a2ecb4285fa10255->leave($__internal_de84c1b5099dd28f1c327de6b37ed2db504944d64fe7e212a2ecb4285fa10255_prof);

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
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
