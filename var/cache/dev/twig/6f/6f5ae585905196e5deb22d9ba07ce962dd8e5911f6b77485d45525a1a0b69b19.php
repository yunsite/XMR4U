<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_dff92b883a5c39778c6168c1a970ea25eaded6ff6b82bcc51f014f4828bc6f16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7f1529966899a017950d55abeab717980d473147e06d2f0caa8c0fe49fce89b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f1529966899a017950d55abeab717980d473147e06d2f0caa8c0fe49fce89b->enter($__internal_c7f1529966899a017950d55abeab717980d473147e06d2f0caa8c0fe49fce89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_d63f608c81156c91da121a9fc879f409ff62be12a3ff0af3e99d3fd0de5dc790 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d63f608c81156c91da121a9fc879f409ff62be12a3ff0af3e99d3fd0de5dc790->enter($__internal_d63f608c81156c91da121a9fc879f409ff62be12a3ff0af3e99d3fd0de5dc790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('submit_row', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('reset_row', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_c7f1529966899a017950d55abeab717980d473147e06d2f0caa8c0fe49fce89b->leave($__internal_c7f1529966899a017950d55abeab717980d473147e06d2f0caa8c0fe49fce89b_prof);

        
        $__internal_d63f608c81156c91da121a9fc879f409ff62be12a3ff0af3e99d3fd0de5dc790->leave($__internal_d63f608c81156c91da121a9fc879f409ff62be12a3ff0af3e99d3fd0de5dc790_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_5aae56796ad199f9252a777c6fcaf789653c5c7798681084185aae7050687dac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aae56796ad199f9252a777c6fcaf789653c5c7798681084185aae7050687dac->enter($__internal_5aae56796ad199f9252a777c6fcaf789653c5c7798681084185aae7050687dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_302d2ef13b04288cbff94abc23d3a2db31199b7e74d6f8214ae7c3fce9878680 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_302d2ef13b04288cbff94abc23d3a2db31199b7e74d6f8214ae7c3fce9878680->enter($__internal_302d2ef13b04288cbff94abc23d3a2db31199b7e74d6f8214ae7c3fce9878680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_302d2ef13b04288cbff94abc23d3a2db31199b7e74d6f8214ae7c3fce9878680->leave($__internal_302d2ef13b04288cbff94abc23d3a2db31199b7e74d6f8214ae7c3fce9878680_prof);

        
        $__internal_5aae56796ad199f9252a777c6fcaf789653c5c7798681084185aae7050687dac->leave($__internal_5aae56796ad199f9252a777c6fcaf789653c5c7798681084185aae7050687dac_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_d3bf1d601a12bff9dee61fb15925fda50595f68ab6b38f0f2b8ea277f77a11ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3bf1d601a12bff9dee61fb15925fda50595f68ab6b38f0f2b8ea277f77a11ad->enter($__internal_d3bf1d601a12bff9dee61fb15925fda50595f68ab6b38f0f2b8ea277f77a11ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_546de2fc28156370837e15cfb1ec5acc30b85b5875825feb51afe0d616ab3f21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_546de2fc28156370837e15cfb1ec5acc30b85b5875825feb51afe0d616ab3f21->enter($__internal_546de2fc28156370837e15cfb1ec5acc30b85b5875825feb51afe0d616ab3f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 11, $this->getSourceContext()); })()) === false)) {
            // line 12
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 14, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 15
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_546de2fc28156370837e15cfb1ec5acc30b85b5875825feb51afe0d616ab3f21->leave($__internal_546de2fc28156370837e15cfb1ec5acc30b85b5875825feb51afe0d616ab3f21_prof);

        
        $__internal_d3bf1d601a12bff9dee61fb15925fda50595f68ab6b38f0f2b8ea277f77a11ad->leave($__internal_d3bf1d601a12bff9dee61fb15925fda50595f68ab6b38f0f2b8ea277f77a11ad_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_205b4e2db1e4a5d154f65bc98929c1189f5837555a4a7cd9637c8a97ece2ea71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_205b4e2db1e4a5d154f65bc98929c1189f5837555a4a7cd9637c8a97ece2ea71->enter($__internal_205b4e2db1e4a5d154f65bc98929c1189f5837555a4a7cd9637c8a97ece2ea71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_cbbfec167928c18b98c307be1ca170e3601e9c1b138b7d8ce632322ca40982a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbbfec167928c18b98c307be1ca170e3601e9c1b138b7d8ce632322ca40982a6->enter($__internal_cbbfec167928c18b98c307be1ca170e3601e9c1b138b7d8ce632322ca40982a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_cbbfec167928c18b98c307be1ca170e3601e9c1b138b7d8ce632322ca40982a6->leave($__internal_cbbfec167928c18b98c307be1ca170e3601e9c1b138b7d8ce632322ca40982a6_prof);

        
        $__internal_205b4e2db1e4a5d154f65bc98929c1189f5837555a4a7cd9637c8a97ece2ea71->leave($__internal_205b4e2db1e4a5d154f65bc98929c1189f5837555a4a7cd9637c8a97ece2ea71_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_80dc91bc4e12f2b3d91d1ae2f5137f3db77768ffaa52db69e58e5fbeff053ee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80dc91bc4e12f2b3d91d1ae2f5137f3db77768ffaa52db69e58e5fbeff053ee2->enter($__internal_80dc91bc4e12f2b3d91d1ae2f5137f3db77768ffaa52db69e58e5fbeff053ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_fad9a012a231839d386aeb69e2cc452dee16cc44808b4dfe6f25d5eaf92c2ab3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fad9a012a231839d386aeb69e2cc452dee16cc44808b4dfe6f25d5eaf92c2ab3->enter($__internal_fad9a012a231839d386aeb69e2cc452dee16cc44808b4dfe6f25d5eaf92c2ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 26, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 26, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 26, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'label');
        // line 28
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'widget');
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'errors');
        // line 31
        echo "</div>
";
        // line 32
        echo "</div>";
        
        $__internal_fad9a012a231839d386aeb69e2cc452dee16cc44808b4dfe6f25d5eaf92c2ab3->leave($__internal_fad9a012a231839d386aeb69e2cc452dee16cc44808b4dfe6f25d5eaf92c2ab3_prof);

        
        $__internal_80dc91bc4e12f2b3d91d1ae2f5137f3db77768ffaa52db69e58e5fbeff053ee2->leave($__internal_80dc91bc4e12f2b3d91d1ae2f5137f3db77768ffaa52db69e58e5fbeff053ee2_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_f84d81bf33c0744ae8409b22d0aabf4169d014b5ebf829eb32b9dc7245f12c31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f84d81bf33c0744ae8409b22d0aabf4169d014b5ebf829eb32b9dc7245f12c31->enter($__internal_f84d81bf33c0744ae8409b22d0aabf4169d014b5ebf829eb32b9dc7245f12c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_71e2868b3e54b5c900a6fd25b777a4650c47f9e36281ec219ed590443b9ed9da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71e2868b3e54b5c900a6fd25b777a4650c47f9e36281ec219ed590443b9ed9da->enter($__internal_71e2868b3e54b5c900a6fd25b777a4650c47f9e36281ec219ed590443b9ed9da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 36
        echo "<div class=\"form-group\">";
        // line 37
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 38
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), 'widget');
        // line 40
        echo "</div>";
        // line 41
        echo "</div>";
        
        $__internal_71e2868b3e54b5c900a6fd25b777a4650c47f9e36281ec219ed590443b9ed9da->leave($__internal_71e2868b3e54b5c900a6fd25b777a4650c47f9e36281ec219ed590443b9ed9da_prof);

        
        $__internal_f84d81bf33c0744ae8409b22d0aabf4169d014b5ebf829eb32b9dc7245f12c31->leave($__internal_f84d81bf33c0744ae8409b22d0aabf4169d014b5ebf829eb32b9dc7245f12c31_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_be109e7d59ac92e155dd100f398eda1dfac09f541a057258f286f7997cf023b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be109e7d59ac92e155dd100f398eda1dfac09f541a057258f286f7997cf023b3->enter($__internal_be109e7d59ac92e155dd100f398eda1dfac09f541a057258f286f7997cf023b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_dfc6cadda0ccc339e5d84c45c29817eeaaa0fac9a72b96772741a8d55a5fc196 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfc6cadda0ccc339e5d84c45c29817eeaaa0fac9a72b96772741a8d55a5fc196->enter($__internal_dfc6cadda0ccc339e5d84c45c29817eeaaa0fac9a72b96772741a8d55a5fc196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 45
        echo "<div class=\"form-group\">";
        // line 46
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 47
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), 'widget');
        // line 49
        echo "</div>";
        // line 50
        echo "</div>";
        
        $__internal_dfc6cadda0ccc339e5d84c45c29817eeaaa0fac9a72b96772741a8d55a5fc196->leave($__internal_dfc6cadda0ccc339e5d84c45c29817eeaaa0fac9a72b96772741a8d55a5fc196_prof);

        
        $__internal_be109e7d59ac92e155dd100f398eda1dfac09f541a057258f286f7997cf023b3->leave($__internal_be109e7d59ac92e155dd100f398eda1dfac09f541a057258f286f7997cf023b3_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_1577ce8e4564c9e2692258b5ba4bf2663f5f5e9f6f1d8b6552de3e4e5d8c48ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1577ce8e4564c9e2692258b5ba4bf2663f5f5e9f6f1d8b6552de3e4e5d8c48ce->enter($__internal_1577ce8e4564c9e2692258b5ba4bf2663f5f5e9f6f1d8b6552de3e4e5d8c48ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_4e72430eb48a3e1e77260e8cc3eea9345a695583c71d8fc752b7ef9f52f987d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e72430eb48a3e1e77260e8cc3eea9345a695583c71d8fc752b7ef9f52f987d3->enter($__internal_4e72430eb48a3e1e77260e8cc3eea9345a695583c71d8fc752b7ef9f52f987d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_4e72430eb48a3e1e77260e8cc3eea9345a695583c71d8fc752b7ef9f52f987d3->leave($__internal_4e72430eb48a3e1e77260e8cc3eea9345a695583c71d8fc752b7ef9f52f987d3_prof);

        
        $__internal_1577ce8e4564c9e2692258b5ba4bf2663f5f5e9f6f1d8b6552de3e4e5d8c48ce->leave($__internal_1577ce8e4564c9e2692258b5ba4bf2663f5f5e9f6f1d8b6552de3e4e5d8c48ce_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_b109d2771876ed45e8caf5e38220d488f9aac3ba4d8156406e2d2eba9d07a1c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b109d2771876ed45e8caf5e38220d488f9aac3ba4d8156406e2d2eba9d07a1c6->enter($__internal_b109d2771876ed45e8caf5e38220d488f9aac3ba4d8156406e2d2eba9d07a1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_586d710fc11e825e5a01692b1f7fb8d88391e070d4ba5d505a9b40e0e7f87ccb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_586d710fc11e825e5a01692b1f7fb8d88391e070d4ba5d505a9b40e0e7f87ccb->enter($__internal_586d710fc11e825e5a01692b1f7fb8d88391e070d4ba5d505a9b40e0e7f87ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 58
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->getSourceContext()); })()), 'widget');
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'errors');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_586d710fc11e825e5a01692b1f7fb8d88391e070d4ba5d505a9b40e0e7f87ccb->leave($__internal_586d710fc11e825e5a01692b1f7fb8d88391e070d4ba5d505a9b40e0e7f87ccb_prof);

        
        $__internal_b109d2771876ed45e8caf5e38220d488f9aac3ba4d8156406e2d2eba9d07a1c6->leave($__internal_b109d2771876ed45e8caf5e38220d488f9aac3ba4d8156406e2d2eba9d07a1c6_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  320 => 64,  318 => 63,  316 => 62,  314 => 61,  310 => 60,  306 => 59,  300 => 58,  291 => 57,  281 => 54,  272 => 53,  262 => 50,  260 => 49,  258 => 48,  254 => 47,  250 => 46,  248 => 45,  239 => 44,  229 => 41,  227 => 40,  225 => 39,  221 => 38,  217 => 37,  215 => 36,  206 => 35,  196 => 32,  193 => 31,  191 => 30,  189 => 29,  185 => 28,  183 => 27,  177 => 26,  168 => 25,  158 => 20,  149 => 19,  138 => 15,  136 => 14,  131 => 12,  129 => 11,  120 => 10,  110 => 5,  108 => 4,  99 => 3,  89 => 57,  86 => 56,  84 => 53,  81 => 52,  79 => 44,  76 => 43,  74 => 35,  71 => 34,  69 => 25,  66 => 24,  63 => 22,  61 => 19,  58 => 18,  56 => 10,  53 => 9,  50 => 7,  48 => 3,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block submit_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group\">{#--#}
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
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}", "bootstrap_3_horizontal_layout.html.twig", "/var/www/miner/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
