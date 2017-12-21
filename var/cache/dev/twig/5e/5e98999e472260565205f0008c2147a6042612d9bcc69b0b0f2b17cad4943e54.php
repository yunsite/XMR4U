<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_379220194f497091136e2f60191792ad517fb1e9e62225e45f18c47adde42853 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'fieldset_form_row' => array($this, 'block_fieldset_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5941863fd9b62a193b8631174d3c5d04b3ad5f3ade3d5890e09e1a1774739629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5941863fd9b62a193b8631174d3c5d04b3ad5f3ade3d5890e09e1a1774739629->enter($__internal_5941863fd9b62a193b8631174d3c5d04b3ad5f3ade3d5890e09e1a1774739629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_25d0e2b942ec7781672f8092849b8803e51ae8fe30dc9e6760fb5633e4baa929 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25d0e2b942ec7781672f8092849b8803e51ae8fe30dc9e6760fb5633e4baa929->enter($__internal_25d0e2b942ec7781672f8092849b8803e51ae8fe30dc9e6760fb5633e4baa929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('submit_row', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('reset_row', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_5941863fd9b62a193b8631174d3c5d04b3ad5f3ade3d5890e09e1a1774739629->leave($__internal_5941863fd9b62a193b8631174d3c5d04b3ad5f3ade3d5890e09e1a1774739629_prof);

        
        $__internal_25d0e2b942ec7781672f8092849b8803e51ae8fe30dc9e6760fb5633e4baa929->leave($__internal_25d0e2b942ec7781672f8092849b8803e51ae8fe30dc9e6760fb5633e4baa929_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_387eb5c509b96476d27ffee3d20e036cbeca761dbb90f4e183e6447b9750ad64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_387eb5c509b96476d27ffee3d20e036cbeca761dbb90f4e183e6447b9750ad64->enter($__internal_387eb5c509b96476d27ffee3d20e036cbeca761dbb90f4e183e6447b9750ad64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_58f2e5c476ade2ca88d7c757699622b61f6924e8b0f9568b41f36f7dd66d7863 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58f2e5c476ade2ca88d7c757699622b61f6924e8b0f9568b41f36f7dd66d7863->enter($__internal_58f2e5c476ade2ca88d7c757699622b61f6924e8b0f9568b41f36f7dd66d7863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 6
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 6, $this->getSourceContext()); })()) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            if (( !array_key_exists("expanded", $context) ||  !(isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 9, $this->getSourceContext()); })()))) {
                // line 10
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 10, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            }
            // line 12
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 12, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 13
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_58f2e5c476ade2ca88d7c757699622b61f6924e8b0f9568b41f36f7dd66d7863->leave($__internal_58f2e5c476ade2ca88d7c757699622b61f6924e8b0f9568b41f36f7dd66d7863_prof);

        
        $__internal_387eb5c509b96476d27ffee3d20e036cbeca761dbb90f4e183e6447b9750ad64->leave($__internal_387eb5c509b96476d27ffee3d20e036cbeca761dbb90f4e183e6447b9750ad64_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_fce83f2a5cff0609cf22f7b74c2c65eecb603f491c84d50a97fa0821bc42000b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce83f2a5cff0609cf22f7b74c2c65eecb603f491c84d50a97fa0821bc42000b->enter($__internal_fce83f2a5cff0609cf22f7b74c2c65eecb603f491c84d50a97fa0821bc42000b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_d0f1c213bdf844c8c49354e96aedfa07c4cda326084f9e54a549774f1ddf629d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0f1c213bdf844c8c49354e96aedfa07c4cda326084f9e54a549774f1ddf629d->enter($__internal_d0f1c213bdf844c8c49354e96aedfa07c4cda326084f9e54a549774f1ddf629d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_d0f1c213bdf844c8c49354e96aedfa07c4cda326084f9e54a549774f1ddf629d->leave($__internal_d0f1c213bdf844c8c49354e96aedfa07c4cda326084f9e54a549774f1ddf629d_prof);

        
        $__internal_fce83f2a5cff0609cf22f7b74c2c65eecb603f491c84d50a97fa0821bc42000b->leave($__internal_fce83f2a5cff0609cf22f7b74c2c65eecb603f491c84d50a97fa0821bc42000b_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_d19db001d4d2388a18ab4a7b8676bbe761e8c747f0aea8bbd1ff79d1386c8312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d19db001d4d2388a18ab4a7b8676bbe761e8c747f0aea8bbd1ff79d1386c8312->enter($__internal_d19db001d4d2388a18ab4a7b8676bbe761e8c747f0aea8bbd1ff79d1386c8312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_f22daba4304130211ad02b99fb6ff769dc07103311700f59fc28fa511bcaa94b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f22daba4304130211ad02b99fb6ff769dc07103311700f59fc28fa511bcaa94b->enter($__internal_f22daba4304130211ad02b99fb6ff769dc07103311700f59fc28fa511bcaa94b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 24
        if ((array_key_exists("expanded", $context) && (isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 24, $this->getSourceContext()); })()))) {
            // line 25
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            echo "<div class=\"form-group row";
            if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 27, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 27, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 27, $this->getSourceContext()); })()))) {
                echo " is-invalid";
            }
            echo "\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), 'label');
            // line 29
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'widget');
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'errors');
            // line 32
            echo "</div>
    ";
            // line 33
            echo "</div>";
        }
        
        $__internal_f22daba4304130211ad02b99fb6ff769dc07103311700f59fc28fa511bcaa94b->leave($__internal_f22daba4304130211ad02b99fb6ff769dc07103311700f59fc28fa511bcaa94b_prof);

        
        $__internal_d19db001d4d2388a18ab4a7b8676bbe761e8c747f0aea8bbd1ff79d1386c8312->leave($__internal_d19db001d4d2388a18ab4a7b8676bbe761e8c747f0aea8bbd1ff79d1386c8312_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_ba523032882931850cf0ac932d470716d5a84b12a25177dd0326bf23f81095e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba523032882931850cf0ac932d470716d5a84b12a25177dd0326bf23f81095e7->enter($__internal_ba523032882931850cf0ac932d470716d5a84b12a25177dd0326bf23f81095e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_801d19277bf8e7ce3a02f8bedb143dceab6b6bddf06ddc7eef17bc3ac8b0b8ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_801d19277bf8e7ce3a02f8bedb143dceab6b6bddf06ddc7eef17bc3ac8b0b8ad->enter($__internal_801d19277bf8e7ce3a02f8bedb143dceab6b6bddf06ddc7eef17bc3ac8b0b8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        // line 38
        echo "<fieldset class=\"form-group\">
        <div class=\"row";
        // line 39
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 39, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 39, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 39, $this->getSourceContext()); })()))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), 'label');
        // line 41
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'widget');
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), 'errors');
        // line 44
        echo "</div>
        </div>
";
        // line 46
        echo "</fieldset>";
        
        $__internal_801d19277bf8e7ce3a02f8bedb143dceab6b6bddf06ddc7eef17bc3ac8b0b8ad->leave($__internal_801d19277bf8e7ce3a02f8bedb143dceab6b6bddf06ddc7eef17bc3ac8b0b8ad_prof);

        
        $__internal_ba523032882931850cf0ac932d470716d5a84b12a25177dd0326bf23f81095e7->leave($__internal_ba523032882931850cf0ac932d470716d5a84b12a25177dd0326bf23f81095e7_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_2faafc36394b8e75405c7b93f1aac90fd01ed0737ab53c8d45966961468200b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2faafc36394b8e75405c7b93f1aac90fd01ed0737ab53c8d45966961468200b0->enter($__internal_2faafc36394b8e75405c7b93f1aac90fd01ed0737ab53c8d45966961468200b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_2715d11425baf9445a022ed91d61a04d533c08f1c689312b12d921bb81087892 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2715d11425baf9445a022ed91d61a04d533c08f1c689312b12d921bb81087892->enter($__internal_2715d11425baf9445a022ed91d61a04d533c08f1c689312b12d921bb81087892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 50
        echo "<div class=\"form-group row\">";
        // line 51
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 52
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), 'widget');
        // line 54
        echo "</div>";
        // line 55
        echo "</div>";
        
        $__internal_2715d11425baf9445a022ed91d61a04d533c08f1c689312b12d921bb81087892->leave($__internal_2715d11425baf9445a022ed91d61a04d533c08f1c689312b12d921bb81087892_prof);

        
        $__internal_2faafc36394b8e75405c7b93f1aac90fd01ed0737ab53c8d45966961468200b0->leave($__internal_2faafc36394b8e75405c7b93f1aac90fd01ed0737ab53c8d45966961468200b0_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_f512686bdb88e05d35884cadf9cf6943cf4eb25ca79740b555f60080b8890ba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f512686bdb88e05d35884cadf9cf6943cf4eb25ca79740b555f60080b8890ba7->enter($__internal_f512686bdb88e05d35884cadf9cf6943cf4eb25ca79740b555f60080b8890ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_d0ea499a9a019a2015ea3814adb9442a7d0d300986e8cdfa12e01599706f7e53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0ea499a9a019a2015ea3814adb9442a7d0d300986e8cdfa12e01599706f7e53->enter($__internal_d0ea499a9a019a2015ea3814adb9442a7d0d300986e8cdfa12e01599706f7e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 59
        echo "<div class=\"form-group row\">";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 61
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'widget');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_d0ea499a9a019a2015ea3814adb9442a7d0d300986e8cdfa12e01599706f7e53->leave($__internal_d0ea499a9a019a2015ea3814adb9442a7d0d300986e8cdfa12e01599706f7e53_prof);

        
        $__internal_f512686bdb88e05d35884cadf9cf6943cf4eb25ca79740b555f60080b8890ba7->leave($__internal_f512686bdb88e05d35884cadf9cf6943cf4eb25ca79740b555f60080b8890ba7_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_dc736a1473c71e2aee9d6c3260a443acaeeba733d72d7f0766105c971a969948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc736a1473c71e2aee9d6c3260a443acaeeba733d72d7f0766105c971a969948->enter($__internal_dc736a1473c71e2aee9d6c3260a443acaeeba733d72d7f0766105c971a969948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_72b463aa04c1ad25cabfc9a5ace5ba9f9e0b33a071ba69a835c188a6fccbdb64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72b463aa04c1ad25cabfc9a5ace5ba9f9e0b33a071ba69a835c188a6fccbdb64->enter($__internal_72b463aa04c1ad25cabfc9a5ace5ba9f9e0b33a071ba69a835c188a6fccbdb64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_72b463aa04c1ad25cabfc9a5ace5ba9f9e0b33a071ba69a835c188a6fccbdb64->leave($__internal_72b463aa04c1ad25cabfc9a5ace5ba9f9e0b33a071ba69a835c188a6fccbdb64_prof);

        
        $__internal_dc736a1473c71e2aee9d6c3260a443acaeeba733d72d7f0766105c971a969948->leave($__internal_dc736a1473c71e2aee9d6c3260a443acaeeba733d72d7f0766105c971a969948_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_6eef63788ea5519aebf2d0d3091d16fa4631773f3b3cf2cbcd7d6de127bcefb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eef63788ea5519aebf2d0d3091d16fa4631773f3b3cf2cbcd7d6de127bcefb3->enter($__internal_6eef63788ea5519aebf2d0d3091d16fa4631773f3b3cf2cbcd7d6de127bcefb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_a41144b44224309e61ba63f400d633626abbb7f43582506ffb6d4252997834b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a41144b44224309e61ba63f400d633626abbb7f43582506ffb6d4252997834b6->enter($__internal_a41144b44224309e61ba63f400d633626abbb7f43582506ffb6d4252997834b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 72
        echo "<div class=\"form-group row\">";
        // line 73
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 74
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->getSourceContext()); })()), 'widget');
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->getSourceContext()); })()), 'errors');
        // line 77
        echo "</div>";
        // line 78
        echo "</div>";
        
        $__internal_a41144b44224309e61ba63f400d633626abbb7f43582506ffb6d4252997834b6->leave($__internal_a41144b44224309e61ba63f400d633626abbb7f43582506ffb6d4252997834b6_prof);

        
        $__internal_6eef63788ea5519aebf2d0d3091d16fa4631773f3b3cf2cbcd7d6de127bcefb3->leave($__internal_6eef63788ea5519aebf2d0d3091d16fa4631773f3b3cf2cbcd7d6de127bcefb3_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  347 => 78,  345 => 77,  343 => 76,  341 => 75,  337 => 74,  333 => 73,  331 => 72,  322 => 71,  312 => 68,  303 => 67,  293 => 64,  291 => 63,  289 => 62,  285 => 61,  281 => 60,  279 => 59,  270 => 58,  260 => 55,  258 => 54,  256 => 53,  252 => 52,  248 => 51,  246 => 50,  237 => 49,  227 => 46,  223 => 44,  221 => 43,  219 => 42,  215 => 41,  213 => 40,  208 => 39,  205 => 38,  196 => 37,  185 => 33,  182 => 32,  180 => 31,  178 => 30,  174 => 29,  172 => 28,  166 => 27,  163 => 25,  161 => 24,  152 => 23,  142 => 18,  133 => 17,  122 => 13,  120 => 12,  117 => 10,  115 => 9,  110 => 7,  108 => 6,  99 => 5,  89 => 71,  86 => 70,  84 => 67,  81 => 66,  79 => 58,  76 => 57,  74 => 49,  71 => 48,  69 => 37,  66 => 36,  64 => 23,  61 => 22,  58 => 20,  56 => 17,  53 => 16,  51 => 5,  48 => 4,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_4_layout.html.twig\" %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- if expanded is not defined or not expanded -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- endif -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    {%- if expanded is defined and expanded -%}
        {{ block('fieldset_form_row') }}
    {%- else -%}
        <div class=\"form-group row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
    {##}</div>
    {%- endif -%}
{%- endblock form_row %}

{% block fieldset_form_row -%}
    <fieldset class=\"form-group\">
        <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
        </div>
{##}</fieldset>
{%- endblock fieldset_form_row %}

{% block submit_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}
", "bootstrap_4_horizontal_layout.html.twig", "/Users/Slote/Desktop/XMR4U/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_4_horizontal_layout.html.twig");
    }
}
