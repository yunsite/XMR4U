<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_8bf2345ddc2cad11ed3330b26500c45b8b0f6340091b6c803cd359ef18cf2611 extends Twig_Template
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
        $__internal_07fa31be1b15a1000f1d2cd89dcb0867d7838f3784afc7e37c473bb8a8d16c3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07fa31be1b15a1000f1d2cd89dcb0867d7838f3784afc7e37c473bb8a8d16c3f->enter($__internal_07fa31be1b15a1000f1d2cd89dcb0867d7838f3784afc7e37c473bb8a8d16c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_95de39f4ac3cc9d6157a74dcc2cf6469982eabad48770deb67f508b0adee70b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95de39f4ac3cc9d6157a74dcc2cf6469982eabad48770deb67f508b0adee70b5->enter($__internal_95de39f4ac3cc9d6157a74dcc2cf6469982eabad48770deb67f508b0adee70b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_07fa31be1b15a1000f1d2cd89dcb0867d7838f3784afc7e37c473bb8a8d16c3f->leave($__internal_07fa31be1b15a1000f1d2cd89dcb0867d7838f3784afc7e37c473bb8a8d16c3f_prof);

        
        $__internal_95de39f4ac3cc9d6157a74dcc2cf6469982eabad48770deb67f508b0adee70b5->leave($__internal_95de39f4ac3cc9d6157a74dcc2cf6469982eabad48770deb67f508b0adee70b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/button_row.html.php");
    }
}
