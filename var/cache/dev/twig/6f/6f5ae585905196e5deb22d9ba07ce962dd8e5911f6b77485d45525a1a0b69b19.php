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
        $__internal_39894f51dd9209324ec327e0f562bade3253e12ccc539fad8e681ff410113a34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39894f51dd9209324ec327e0f562bade3253e12ccc539fad8e681ff410113a34->enter($__internal_39894f51dd9209324ec327e0f562bade3253e12ccc539fad8e681ff410113a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_25f6d740162548489984af260e0ba34b74ee1e53c22c23ea9499deaf183c360d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25f6d740162548489984af260e0ba34b74ee1e53c22c23ea9499deaf183c360d->enter($__internal_25f6d740162548489984af260e0ba34b74ee1e53c22c23ea9499deaf183c360d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_39894f51dd9209324ec327e0f562bade3253e12ccc539fad8e681ff410113a34->leave($__internal_39894f51dd9209324ec327e0f562bade3253e12ccc539fad8e681ff410113a34_prof);

        
        $__internal_25f6d740162548489984af260e0ba34b74ee1e53c22c23ea9499deaf183c360d->leave($__internal_25f6d740162548489984af260e0ba34b74ee1e53c22c23ea9499deaf183c360d_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_68c2faef3e07a322a32795087e7368894628097b1eaabc56e45dd14528db8037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68c2faef3e07a322a32795087e7368894628097b1eaabc56e45dd14528db8037->enter($__internal_68c2faef3e07a322a32795087e7368894628097b1eaabc56e45dd14528db8037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_a9044fc5426ead008457bc249906cddf9ca514925de6b46b3327016f8ade258c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9044fc5426ead008457bc249906cddf9ca514925de6b46b3327016f8ade258c->enter($__internal_a9044fc5426ead008457bc249906cddf9ca514925de6b46b3327016f8ade258c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_a9044fc5426ead008457bc249906cddf9ca514925de6b46b3327016f8ade258c->leave($__internal_a9044fc5426ead008457bc249906cddf9ca514925de6b46b3327016f8ade258c_prof);

        
        $__internal_68c2faef3e07a322a32795087e7368894628097b1eaabc56e45dd14528db8037->leave($__internal_68c2faef3e07a322a32795087e7368894628097b1eaabc56e45dd14528db8037_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_39b7231bb5fa1622a1a65ceaad235269adbbe89046713d7b5c3fbadd21a0a2d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39b7231bb5fa1622a1a65ceaad235269adbbe89046713d7b5c3fbadd21a0a2d6->enter($__internal_39b7231bb5fa1622a1a65ceaad235269adbbe89046713d7b5c3fbadd21a0a2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_11d78205c88cfbb247a49d00f60d49b69f0f780479e264d95f9adb7143a60afa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11d78205c88cfbb247a49d00f60d49b69f0f780479e264d95f9adb7143a60afa->enter($__internal_11d78205c88cfbb247a49d00f60d49b69f0f780479e264d95f9adb7143a60afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_11d78205c88cfbb247a49d00f60d49b69f0f780479e264d95f9adb7143a60afa->leave($__internal_11d78205c88cfbb247a49d00f60d49b69f0f780479e264d95f9adb7143a60afa_prof);

        
        $__internal_39b7231bb5fa1622a1a65ceaad235269adbbe89046713d7b5c3fbadd21a0a2d6->leave($__internal_39b7231bb5fa1622a1a65ceaad235269adbbe89046713d7b5c3fbadd21a0a2d6_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_a10a72ae81115d6a46cab1633ce42fdc3bb5ce6f9000391809e4b8e1507ab71e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a10a72ae81115d6a46cab1633ce42fdc3bb5ce6f9000391809e4b8e1507ab71e->enter($__internal_a10a72ae81115d6a46cab1633ce42fdc3bb5ce6f9000391809e4b8e1507ab71e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_0eb515e87997cf3d2685b5155564b40cecd12973c4cf63164e5d73322f351001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eb515e87997cf3d2685b5155564b40cecd12973c4cf63164e5d73322f351001->enter($__internal_0eb515e87997cf3d2685b5155564b40cecd12973c4cf63164e5d73322f351001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_0eb515e87997cf3d2685b5155564b40cecd12973c4cf63164e5d73322f351001->leave($__internal_0eb515e87997cf3d2685b5155564b40cecd12973c4cf63164e5d73322f351001_prof);

        
        $__internal_a10a72ae81115d6a46cab1633ce42fdc3bb5ce6f9000391809e4b8e1507ab71e->leave($__internal_a10a72ae81115d6a46cab1633ce42fdc3bb5ce6f9000391809e4b8e1507ab71e_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_bfcdc293411f3dccb686208e281f64e8732089dd5aea712e7bc70f6c39ff9bd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfcdc293411f3dccb686208e281f64e8732089dd5aea712e7bc70f6c39ff9bd3->enter($__internal_bfcdc293411f3dccb686208e281f64e8732089dd5aea712e7bc70f6c39ff9bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_5c45aa9339f94b9de5a905170bb85751a977707072fb9ad534571973445a6b19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c45aa9339f94b9de5a905170bb85751a977707072fb9ad534571973445a6b19->enter($__internal_5c45aa9339f94b9de5a905170bb85751a977707072fb9ad534571973445a6b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_5c45aa9339f94b9de5a905170bb85751a977707072fb9ad534571973445a6b19->leave($__internal_5c45aa9339f94b9de5a905170bb85751a977707072fb9ad534571973445a6b19_prof);

        
        $__internal_bfcdc293411f3dccb686208e281f64e8732089dd5aea712e7bc70f6c39ff9bd3->leave($__internal_bfcdc293411f3dccb686208e281f64e8732089dd5aea712e7bc70f6c39ff9bd3_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_f7b507c9e6bea5fd9df4f501d18ee4bc839ae9b33ee603049a09ac9f97a38184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7b507c9e6bea5fd9df4f501d18ee4bc839ae9b33ee603049a09ac9f97a38184->enter($__internal_f7b507c9e6bea5fd9df4f501d18ee4bc839ae9b33ee603049a09ac9f97a38184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_acc5ca6127e86dea4b2c768da095dcbf8896c4419fe1e1d35a3a02ad4f7e5a0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acc5ca6127e86dea4b2c768da095dcbf8896c4419fe1e1d35a3a02ad4f7e5a0e->enter($__internal_acc5ca6127e86dea4b2c768da095dcbf8896c4419fe1e1d35a3a02ad4f7e5a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_acc5ca6127e86dea4b2c768da095dcbf8896c4419fe1e1d35a3a02ad4f7e5a0e->leave($__internal_acc5ca6127e86dea4b2c768da095dcbf8896c4419fe1e1d35a3a02ad4f7e5a0e_prof);

        
        $__internal_f7b507c9e6bea5fd9df4f501d18ee4bc839ae9b33ee603049a09ac9f97a38184->leave($__internal_f7b507c9e6bea5fd9df4f501d18ee4bc839ae9b33ee603049a09ac9f97a38184_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_5800ec0cea4e6ec76dadfe680c04f83858cfcd9437dd1179ecbab4dbf4fe87fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5800ec0cea4e6ec76dadfe680c04f83858cfcd9437dd1179ecbab4dbf4fe87fb->enter($__internal_5800ec0cea4e6ec76dadfe680c04f83858cfcd9437dd1179ecbab4dbf4fe87fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_6f98d088283b6daf6c2d23f39885437b1fb0500adcb29cd0e29b0739c2ee6bcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f98d088283b6daf6c2d23f39885437b1fb0500adcb29cd0e29b0739c2ee6bcc->enter($__internal_6f98d088283b6daf6c2d23f39885437b1fb0500adcb29cd0e29b0739c2ee6bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_6f98d088283b6daf6c2d23f39885437b1fb0500adcb29cd0e29b0739c2ee6bcc->leave($__internal_6f98d088283b6daf6c2d23f39885437b1fb0500adcb29cd0e29b0739c2ee6bcc_prof);

        
        $__internal_5800ec0cea4e6ec76dadfe680c04f83858cfcd9437dd1179ecbab4dbf4fe87fb->leave($__internal_5800ec0cea4e6ec76dadfe680c04f83858cfcd9437dd1179ecbab4dbf4fe87fb_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_f4accf93fc2ab1c3f8fc49e9b2046ca706e6b5057a86b3078e54aba85f33a095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4accf93fc2ab1c3f8fc49e9b2046ca706e6b5057a86b3078e54aba85f33a095->enter($__internal_f4accf93fc2ab1c3f8fc49e9b2046ca706e6b5057a86b3078e54aba85f33a095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_356730fb74eb1c438b02c6e69dadb8037b3b03bf437fc0de70c2e1a6850f2a67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_356730fb74eb1c438b02c6e69dadb8037b3b03bf437fc0de70c2e1a6850f2a67->enter($__internal_356730fb74eb1c438b02c6e69dadb8037b3b03bf437fc0de70c2e1a6850f2a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_356730fb74eb1c438b02c6e69dadb8037b3b03bf437fc0de70c2e1a6850f2a67->leave($__internal_356730fb74eb1c438b02c6e69dadb8037b3b03bf437fc0de70c2e1a6850f2a67_prof);

        
        $__internal_f4accf93fc2ab1c3f8fc49e9b2046ca706e6b5057a86b3078e54aba85f33a095->leave($__internal_f4accf93fc2ab1c3f8fc49e9b2046ca706e6b5057a86b3078e54aba85f33a095_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_cf72ff3333356a7f18d976d6d2810a25f6b4d80d5b404a351022c123a766a414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf72ff3333356a7f18d976d6d2810a25f6b4d80d5b404a351022c123a766a414->enter($__internal_cf72ff3333356a7f18d976d6d2810a25f6b4d80d5b404a351022c123a766a414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_9fc896c87f78f350790628174ffd887b9d34386de65cab980ab6774d43bd1283 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fc896c87f78f350790628174ffd887b9d34386de65cab980ab6774d43bd1283->enter($__internal_9fc896c87f78f350790628174ffd887b9d34386de65cab980ab6774d43bd1283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_9fc896c87f78f350790628174ffd887b9d34386de65cab980ab6774d43bd1283->leave($__internal_9fc896c87f78f350790628174ffd887b9d34386de65cab980ab6774d43bd1283_prof);

        
        $__internal_cf72ff3333356a7f18d976d6d2810a25f6b4d80d5b404a351022c123a766a414->leave($__internal_cf72ff3333356a7f18d976d6d2810a25f6b4d80d5b404a351022c123a766a414_prof);

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
{%- endblock checkbox_row %}", "bootstrap_3_horizontal_layout.html.twig", "/Users/Slote/Desktop/XMR4U/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
