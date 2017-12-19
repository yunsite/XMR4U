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
        $__internal_45f39e5e6c136e11ffa7912da1afb6416d1e194d7306a237d115b5e1773d3e0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45f39e5e6c136e11ffa7912da1afb6416d1e194d7306a237d115b5e1773d3e0d->enter($__internal_45f39e5e6c136e11ffa7912da1afb6416d1e194d7306a237d115b5e1773d3e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_b4aadf12a7c9f3296316d43ef48b5e10ca7742a023f7309417d11a67bd054d45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4aadf12a7c9f3296316d43ef48b5e10ca7742a023f7309417d11a67bd054d45->enter($__internal_b4aadf12a7c9f3296316d43ef48b5e10ca7742a023f7309417d11a67bd054d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

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
        
        $__internal_45f39e5e6c136e11ffa7912da1afb6416d1e194d7306a237d115b5e1773d3e0d->leave($__internal_45f39e5e6c136e11ffa7912da1afb6416d1e194d7306a237d115b5e1773d3e0d_prof);

        
        $__internal_b4aadf12a7c9f3296316d43ef48b5e10ca7742a023f7309417d11a67bd054d45->leave($__internal_b4aadf12a7c9f3296316d43ef48b5e10ca7742a023f7309417d11a67bd054d45_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_df5137379d7edf01be77d4cd9719ad2428876b5d79af7e316ad4221cfb0714a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df5137379d7edf01be77d4cd9719ad2428876b5d79af7e316ad4221cfb0714a2->enter($__internal_df5137379d7edf01be77d4cd9719ad2428876b5d79af7e316ad4221cfb0714a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_2d05a1b1f9edf543e373265a4b564097b5a2ff73811c78b80b1464ba4c53a568 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d05a1b1f9edf543e373265a4b564097b5a2ff73811c78b80b1464ba4c53a568->enter($__internal_2d05a1b1f9edf543e373265a4b564097b5a2ff73811c78b80b1464ba4c53a568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_2d05a1b1f9edf543e373265a4b564097b5a2ff73811c78b80b1464ba4c53a568->leave($__internal_2d05a1b1f9edf543e373265a4b564097b5a2ff73811c78b80b1464ba4c53a568_prof);

        
        $__internal_df5137379d7edf01be77d4cd9719ad2428876b5d79af7e316ad4221cfb0714a2->leave($__internal_df5137379d7edf01be77d4cd9719ad2428876b5d79af7e316ad4221cfb0714a2_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_22ada9bc9d7758bafe00c63ea4a1dca705a21958c5eeafe479fe92133f01f6ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22ada9bc9d7758bafe00c63ea4a1dca705a21958c5eeafe479fe92133f01f6ec->enter($__internal_22ada9bc9d7758bafe00c63ea4a1dca705a21958c5eeafe479fe92133f01f6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_c7d8346374f3814ac4294e98f317e36f1c5d77e6fdb5275e35379daf629c97bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7d8346374f3814ac4294e98f317e36f1c5d77e6fdb5275e35379daf629c97bd->enter($__internal_c7d8346374f3814ac4294e98f317e36f1c5d77e6fdb5275e35379daf629c97bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_c7d8346374f3814ac4294e98f317e36f1c5d77e6fdb5275e35379daf629c97bd->leave($__internal_c7d8346374f3814ac4294e98f317e36f1c5d77e6fdb5275e35379daf629c97bd_prof);

        
        $__internal_22ada9bc9d7758bafe00c63ea4a1dca705a21958c5eeafe479fe92133f01f6ec->leave($__internal_22ada9bc9d7758bafe00c63ea4a1dca705a21958c5eeafe479fe92133f01f6ec_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_78b80a8921ec6bdf79e7034bbc0abc7cce317b3580715ac94da6d82bda8b7b35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78b80a8921ec6bdf79e7034bbc0abc7cce317b3580715ac94da6d82bda8b7b35->enter($__internal_78b80a8921ec6bdf79e7034bbc0abc7cce317b3580715ac94da6d82bda8b7b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_541e51c4c656bee0fd7702887f2fc8fa8c61cfe61f611c3fbd0c294edabf1c20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_541e51c4c656bee0fd7702887f2fc8fa8c61cfe61f611c3fbd0c294edabf1c20->enter($__internal_541e51c4c656bee0fd7702887f2fc8fa8c61cfe61f611c3fbd0c294edabf1c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_541e51c4c656bee0fd7702887f2fc8fa8c61cfe61f611c3fbd0c294edabf1c20->leave($__internal_541e51c4c656bee0fd7702887f2fc8fa8c61cfe61f611c3fbd0c294edabf1c20_prof);

        
        $__internal_78b80a8921ec6bdf79e7034bbc0abc7cce317b3580715ac94da6d82bda8b7b35->leave($__internal_78b80a8921ec6bdf79e7034bbc0abc7cce317b3580715ac94da6d82bda8b7b35_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_adf13aeb4abc7e94fe01874f9c4f3e154b5b3edb3e2bcebd4e3e3c35a1b49aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adf13aeb4abc7e94fe01874f9c4f3e154b5b3edb3e2bcebd4e3e3c35a1b49aff->enter($__internal_adf13aeb4abc7e94fe01874f9c4f3e154b5b3edb3e2bcebd4e3e3c35a1b49aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_eac0fc2faa14f23a94e88164a1503136769d553488988033b925cddc0c507416 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eac0fc2faa14f23a94e88164a1503136769d553488988033b925cddc0c507416->enter($__internal_eac0fc2faa14f23a94e88164a1503136769d553488988033b925cddc0c507416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

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
        
        $__internal_eac0fc2faa14f23a94e88164a1503136769d553488988033b925cddc0c507416->leave($__internal_eac0fc2faa14f23a94e88164a1503136769d553488988033b925cddc0c507416_prof);

        
        $__internal_adf13aeb4abc7e94fe01874f9c4f3e154b5b3edb3e2bcebd4e3e3c35a1b49aff->leave($__internal_adf13aeb4abc7e94fe01874f9c4f3e154b5b3edb3e2bcebd4e3e3c35a1b49aff_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_9c6d9cd751b316cf526d28a8c75a467d88a409bff6a82c012060d83bb213b147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c6d9cd751b316cf526d28a8c75a467d88a409bff6a82c012060d83bb213b147->enter($__internal_9c6d9cd751b316cf526d28a8c75a467d88a409bff6a82c012060d83bb213b147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_c60330a30cea6fbac65172c18c769bd31fbb711c3362fb26d70e4f04add19629 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c60330a30cea6fbac65172c18c769bd31fbb711c3362fb26d70e4f04add19629->enter($__internal_c60330a30cea6fbac65172c18c769bd31fbb711c3362fb26d70e4f04add19629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_c60330a30cea6fbac65172c18c769bd31fbb711c3362fb26d70e4f04add19629->leave($__internal_c60330a30cea6fbac65172c18c769bd31fbb711c3362fb26d70e4f04add19629_prof);

        
        $__internal_9c6d9cd751b316cf526d28a8c75a467d88a409bff6a82c012060d83bb213b147->leave($__internal_9c6d9cd751b316cf526d28a8c75a467d88a409bff6a82c012060d83bb213b147_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_d4547a67a20bcb970ae667c62c3115adfa3435d4446f63b7899a035b1515967d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4547a67a20bcb970ae667c62c3115adfa3435d4446f63b7899a035b1515967d->enter($__internal_d4547a67a20bcb970ae667c62c3115adfa3435d4446f63b7899a035b1515967d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_5d05274dc4e2eb5cb9aac50f8b34597d6d7faf8dad99d008f8f9f91b0970d51c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d05274dc4e2eb5cb9aac50f8b34597d6d7faf8dad99d008f8f9f91b0970d51c->enter($__internal_5d05274dc4e2eb5cb9aac50f8b34597d6d7faf8dad99d008f8f9f91b0970d51c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_5d05274dc4e2eb5cb9aac50f8b34597d6d7faf8dad99d008f8f9f91b0970d51c->leave($__internal_5d05274dc4e2eb5cb9aac50f8b34597d6d7faf8dad99d008f8f9f91b0970d51c_prof);

        
        $__internal_d4547a67a20bcb970ae667c62c3115adfa3435d4446f63b7899a035b1515967d->leave($__internal_d4547a67a20bcb970ae667c62c3115adfa3435d4446f63b7899a035b1515967d_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_d4d478f6813a3825f0a4d5f4377333b4c61def85bf384af4737335c93b8b278c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4d478f6813a3825f0a4d5f4377333b4c61def85bf384af4737335c93b8b278c->enter($__internal_d4d478f6813a3825f0a4d5f4377333b4c61def85bf384af4737335c93b8b278c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_1ebb2e3a105cee1f6c377795814e259f0de544dc183ed88723ebe7b3906fc64a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ebb2e3a105cee1f6c377795814e259f0de544dc183ed88723ebe7b3906fc64a->enter($__internal_1ebb2e3a105cee1f6c377795814e259f0de544dc183ed88723ebe7b3906fc64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_1ebb2e3a105cee1f6c377795814e259f0de544dc183ed88723ebe7b3906fc64a->leave($__internal_1ebb2e3a105cee1f6c377795814e259f0de544dc183ed88723ebe7b3906fc64a_prof);

        
        $__internal_d4d478f6813a3825f0a4d5f4377333b4c61def85bf384af4737335c93b8b278c->leave($__internal_d4d478f6813a3825f0a4d5f4377333b4c61def85bf384af4737335c93b8b278c_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_9e8ceb5c8190b0581cd3dc1560b02e532d6a6a68eb172956a681c52fef567d65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e8ceb5c8190b0581cd3dc1560b02e532d6a6a68eb172956a681c52fef567d65->enter($__internal_9e8ceb5c8190b0581cd3dc1560b02e532d6a6a68eb172956a681c52fef567d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_92a1662b241f0be8bb9e1ed87fd633ddedce52c1b5cbdd67ac78bac7abf7ea20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92a1662b241f0be8bb9e1ed87fd633ddedce52c1b5cbdd67ac78bac7abf7ea20->enter($__internal_92a1662b241f0be8bb9e1ed87fd633ddedce52c1b5cbdd67ac78bac7abf7ea20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_92a1662b241f0be8bb9e1ed87fd633ddedce52c1b5cbdd67ac78bac7abf7ea20->leave($__internal_92a1662b241f0be8bb9e1ed87fd633ddedce52c1b5cbdd67ac78bac7abf7ea20_prof);

        
        $__internal_9e8ceb5c8190b0581cd3dc1560b02e532d6a6a68eb172956a681c52fef567d65->leave($__internal_9e8ceb5c8190b0581cd3dc1560b02e532d6a6a68eb172956a681c52fef567d65_prof);

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
", "bootstrap_4_horizontal_layout.html.twig", "/var/www/miner/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_4_horizontal_layout.html.twig");
    }
}
