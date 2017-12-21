<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_b653a5a190aa17df54bae8aeb31e6ee5382d30034f82f38d00ddd12d5d9c57ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df4ec41db40e396398fe6d580427ca6932491f45fecad39c5d875aa1053460e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df4ec41db40e396398fe6d580427ca6932491f45fecad39c5d875aa1053460e0->enter($__internal_df4ec41db40e396398fe6d580427ca6932491f45fecad39c5d875aa1053460e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_ef15b2ffcd864fcb672802a8a3a26537acd97e39e3134cb0fb5c64617dcdf66a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef15b2ffcd864fcb672802a8a3a26537acd97e39e3134cb0fb5c64617dcdf66a->enter($__internal_ef15b2ffcd864fcb672802a8a3a26537acd97e39e3134cb0fb5c64617dcdf66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('button_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 38
        echo "
";
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('form_label', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('choice_label', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('radio_label', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 88
        echo "
";
        // line 90
        echo "
";
        // line 91
        $this->displayBlock('form_row', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('button_row', $context, $blocks);
        // line 104
        echo "
";
        // line 105
        $this->displayBlock('choice_row', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('date_row', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('time_row', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 124
        echo "
";
        // line 125
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('radio_row', $context, $blocks);
        // line 138
        echo "
";
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_df4ec41db40e396398fe6d580427ca6932491f45fecad39c5d875aa1053460e0->leave($__internal_df4ec41db40e396398fe6d580427ca6932491f45fecad39c5d875aa1053460e0_prof);

        
        $__internal_ef15b2ffcd864fcb672802a8a3a26537acd97e39e3134cb0fb5c64617dcdf66a->leave($__internal_ef15b2ffcd864fcb672802a8a3a26537acd97e39e3134cb0fb5c64617dcdf66a_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_9cb5f4198e10aa4a53e8a782e96f8e2ad89f9c8aa066fac6438d1456fc4d13ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cb5f4198e10aa4a53e8a782e96f8e2ad89f9c8aa066fac6438d1456fc4d13ca->enter($__internal_9cb5f4198e10aa4a53e8a782e96f8e2ad89f9c8aa066fac6438d1456fc4d13ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_974400d77c9d68b1d6a3a3456d19a510b3218dcedabf07f05c98bd3a4e947575 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_974400d77c9d68b1d6a3a3456d19a510b3218dcedabf07f05c98bd3a4e947575->enter($__internal_974400d77c9d68b1d6a3a3456d19a510b3218dcedabf07f05c98bd3a4e947575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_974400d77c9d68b1d6a3a3456d19a510b3218dcedabf07f05c98bd3a4e947575->leave($__internal_974400d77c9d68b1d6a3a3456d19a510b3218dcedabf07f05c98bd3a4e947575_prof);

        
        $__internal_9cb5f4198e10aa4a53e8a782e96f8e2ad89f9c8aa066fac6438d1456fc4d13ca->leave($__internal_9cb5f4198e10aa4a53e8a782e96f8e2ad89f9c8aa066fac6438d1456fc4d13ca_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_f025423aaa43700989342c6a7098b91df4e61840057c19472b4ef7328f6f473b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f025423aaa43700989342c6a7098b91df4e61840057c19472b4ef7328f6f473b->enter($__internal_f025423aaa43700989342c6a7098b91df4e61840057c19472b4ef7328f6f473b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_87e5534d2b7c4025a3d754bab4e20d6874719601269a854d6431f52e146ccf86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87e5534d2b7c4025a3d754bab4e20d6874719601269a854d6431f52e146ccf86->enter($__internal_87e5534d2b7c4025a3d754bab4e20d6874719601269a854d6431f52e146ccf86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_87e5534d2b7c4025a3d754bab4e20d6874719601269a854d6431f52e146ccf86->leave($__internal_87e5534d2b7c4025a3d754bab4e20d6874719601269a854d6431f52e146ccf86_prof);

        
        $__internal_f025423aaa43700989342c6a7098b91df4e61840057c19472b4ef7328f6f473b->leave($__internal_f025423aaa43700989342c6a7098b91df4e61840057c19472b4ef7328f6f473b_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_3a55130728df3a13956013901bdc2ec4c9ad7394bdd96b075fce108ce343da79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a55130728df3a13956013901bdc2ec4c9ad7394bdd96b075fce108ce343da79->enter($__internal_3a55130728df3a13956013901bdc2ec4c9ad7394bdd96b075fce108ce343da79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_640b004533feaf105f15d24a20e0a39c85b10e2a74acef1fefe0092e61684593 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_640b004533feaf105f15d24a20e0a39c85b10e2a74acef1fefe0092e61684593->enter($__internal_640b004533feaf105f15d24a20e0a39c85b10e2a74acef1fefe0092e61684593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 18
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 18, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 19
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 19, $this->getSourceContext()); })()))) {
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 22
            echo "<div class=\"checkbox\">";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 24
            echo "</div>";
        }
        
        $__internal_640b004533feaf105f15d24a20e0a39c85b10e2a74acef1fefe0092e61684593->leave($__internal_640b004533feaf105f15d24a20e0a39c85b10e2a74acef1fefe0092e61684593_prof);

        
        $__internal_3a55130728df3a13956013901bdc2ec4c9ad7394bdd96b075fce108ce343da79->leave($__internal_3a55130728df3a13956013901bdc2ec4c9ad7394bdd96b075fce108ce343da79_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_1b5523ff71a961b53c2e49ce7fc16f2372fcf095675642d4c45bad5931863c9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b5523ff71a961b53c2e49ce7fc16f2372fcf095675642d4c45bad5931863c9e->enter($__internal_1b5523ff71a961b53c2e49ce7fc16f2372fcf095675642d4c45bad5931863c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_ee2b30577c531dc369b4cd03624e3a7142f9f2354ab4191af8d7e50b5cd75bb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee2b30577c531dc369b4cd03624e3a7142f9f2354ab4191af8d7e50b5cd75bb4->enter($__internal_ee2b30577c531dc369b4cd03624e3a7142f9f2354ab4191af8d7e50b5cd75bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 29
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 29, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 30
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 30, $this->getSourceContext()); })()))) {
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 33
            echo "<div class=\"radio\">";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 35
            echo "</div>";
        }
        
        $__internal_ee2b30577c531dc369b4cd03624e3a7142f9f2354ab4191af8d7e50b5cd75bb4->leave($__internal_ee2b30577c531dc369b4cd03624e3a7142f9f2354ab4191af8d7e50b5cd75bb4_prof);

        
        $__internal_1b5523ff71a961b53c2e49ce7fc16f2372fcf095675642d4c45bad5931863c9e->leave($__internal_1b5523ff71a961b53c2e49ce7fc16f2372fcf095675642d4c45bad5931863c9e_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_a71702e76d02dc88c200e6b2d9b052f2b2b6642e461ceadaf9291728a54879e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a71702e76d02dc88c200e6b2d9b052f2b2b6642e461ceadaf9291728a54879e4->enter($__internal_a71702e76d02dc88c200e6b2d9b052f2b2b6642e461ceadaf9291728a54879e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_4a288dbced6b0c9b8c983af58ffa61d09c580dfdbafd28b5a8568b2e3d9e3bbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a288dbced6b0c9b8c983af58ffa61d09c580dfdbafd28b5a8568b2e3d9e3bbd->enter($__internal_4a288dbced6b0c9b8c983af58ffa61d09c580dfdbafd28b5a8568b2e3d9e3bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_4a288dbced6b0c9b8c983af58ffa61d09c580dfdbafd28b5a8568b2e3d9e3bbd->leave($__internal_4a288dbced6b0c9b8c983af58ffa61d09c580dfdbafd28b5a8568b2e3d9e3bbd_prof);

        
        $__internal_a71702e76d02dc88c200e6b2d9b052f2b2b6642e461ceadaf9291728a54879e4->leave($__internal_a71702e76d02dc88c200e6b2d9b052f2b2b6642e461ceadaf9291728a54879e4_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_b9addbf83aeb94f2bd038f80ec05c1b1019c71d732068eb30ef7870514ba35db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9addbf83aeb94f2bd038f80ec05c1b1019c71d732068eb30ef7870514ba35db->enter($__internal_b9addbf83aeb94f2bd038f80ec05c1b1019c71d732068eb30ef7870514ba35db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_3e815be851a448572b1cb0f2f92801f980346b200f3a1a224f8c54f6988ac2dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e815be851a448572b1cb0f2f92801f980346b200f3a1a224f8c54f6988ac2dc->enter($__internal_3e815be851a448572b1cb0f2f92801f980346b200f3a1a224f8c54f6988ac2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_3e815be851a448572b1cb0f2f92801f980346b200f3a1a224f8c54f6988ac2dc->leave($__internal_3e815be851a448572b1cb0f2f92801f980346b200f3a1a224f8c54f6988ac2dc_prof);

        
        $__internal_b9addbf83aeb94f2bd038f80ec05c1b1019c71d732068eb30ef7870514ba35db->leave($__internal_b9addbf83aeb94f2bd038f80ec05c1b1019c71d732068eb30ef7870514ba35db_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_324f1043f76abca05f4e15e1f504739b654cfa4944f8e90a750ad1bc1800a2d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_324f1043f76abca05f4e15e1f504739b654cfa4944f8e90a750ad1bc1800a2d7->enter($__internal_324f1043f76abca05f4e15e1f504739b654cfa4944f8e90a750ad1bc1800a2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_9ea520b5c8d4e83e191a7b7d1796a14aed29c454743e0d504b67087ec56ef418 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ea520b5c8d4e83e191a7b7d1796a14aed29c454743e0d504b67087ec56ef418->enter($__internal_9ea520b5c8d4e83e191a7b7d1796a14aed29c454743e0d504b67087ec56ef418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_9ea520b5c8d4e83e191a7b7d1796a14aed29c454743e0d504b67087ec56ef418->leave($__internal_9ea520b5c8d4e83e191a7b7d1796a14aed29c454743e0d504b67087ec56ef418_prof);

        
        $__internal_324f1043f76abca05f4e15e1f504739b654cfa4944f8e90a750ad1bc1800a2d7->leave($__internal_324f1043f76abca05f4e15e1f504739b654cfa4944f8e90a750ad1bc1800a2d7_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_157f604cd498abd83ae30b6fe00e06144a3afa3d9788fa6ce700354e3b3dd762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_157f604cd498abd83ae30b6fe00e06144a3afa3d9788fa6ce700354e3b3dd762->enter($__internal_157f604cd498abd83ae30b6fe00e06144a3afa3d9788fa6ce700354e3b3dd762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_bfc7eefe990223c87919290140996bb8f15464ef1bf33e6332b901be77b3dc3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfc7eefe990223c87919290140996bb8f15464ef1bf33e6332b901be77b3dc3f->enter($__internal_bfc7eefe990223c87919290140996bb8f15464ef1bf33e6332b901be77b3dc3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_bfc7eefe990223c87919290140996bb8f15464ef1bf33e6332b901be77b3dc3f->leave($__internal_bfc7eefe990223c87919290140996bb8f15464ef1bf33e6332b901be77b3dc3f_prof);

        
        $__internal_157f604cd498abd83ae30b6fe00e06144a3afa3d9788fa6ce700354e3b3dd762->leave($__internal_157f604cd498abd83ae30b6fe00e06144a3afa3d9788fa6ce700354e3b3dd762_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_8436769dd852c5e5893e1a6594371ee62abba33b4e775484dc55bfbf02a35f42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8436769dd852c5e5893e1a6594371ee62abba33b4e775484dc55bfbf02a35f42->enter($__internal_8436769dd852c5e5893e1a6594371ee62abba33b4e775484dc55bfbf02a35f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_1686ff3f446af0117e1281b36539400bcfd421595dcc8aaeb54524f7101cd2d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1686ff3f446af0117e1281b36539400bcfd421595dcc8aaeb54524f7101cd2d9->enter($__internal_1686ff3f446af0117e1281b36539400bcfd421595dcc8aaeb54524f7101cd2d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 66
        if (array_key_exists("widget", $context)) {
            // line 67
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 67, $this->getSourceContext()); })())) {
                // line 68
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 68, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 70
            if (array_key_exists("parent_label_class", $context)) {
                // line 71
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 71, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 71, $this->getSourceContext()); })())))));
            }
            // line 73
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 73, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 73, $this->getSourceContext()); })())))) {
                // line 74
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 74, $this->getSourceContext()); })()))) {
                    // line 75
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 75, $this->getSourceContext()); })()), array("%name%" =>                     // line 76
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 76, $this->getSourceContext()); })()), "%id%" =>                     // line 77
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 77, $this->getSourceContext()); })())));
                } else {
                    // line 80
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 80, $this->getSourceContext()); })()));
                }
            }
            // line 83
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 83, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 84
            echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 84, $this->getSourceContext()); })());
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })()) === false)) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 84, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 84, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            // line 85
            echo "</label>";
        }
        
        $__internal_1686ff3f446af0117e1281b36539400bcfd421595dcc8aaeb54524f7101cd2d9->leave($__internal_1686ff3f446af0117e1281b36539400bcfd421595dcc8aaeb54524f7101cd2d9_prof);

        
        $__internal_8436769dd852c5e5893e1a6594371ee62abba33b4e775484dc55bfbf02a35f42->leave($__internal_8436769dd852c5e5893e1a6594371ee62abba33b4e775484dc55bfbf02a35f42_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_67a985ae717b0f5309321ac45e99c93b2a7b5e91f5ae3b272b0ca911e717ce1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67a985ae717b0f5309321ac45e99c93b2a7b5e91f5ae3b272b0ca911e717ce1c->enter($__internal_67a985ae717b0f5309321ac45e99c93b2a7b5e91f5ae3b272b0ca911e717ce1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_c8d522cf09a9be63036bc7fd936934a81ea0d470ba1023b7495423481b453ea3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8d522cf09a9be63036bc7fd936934a81ea0d470ba1023b7495423481b453ea3->enter($__internal_c8d522cf09a9be63036bc7fd936934a81ea0d470ba1023b7495423481b453ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 92
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 92, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 92, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 92, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 93, $this->getSourceContext()); })()), 'label');
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->getSourceContext()); })()), 'widget');
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 95, $this->getSourceContext()); })()), 'errors');
        // line 96
        echo "</div>";
        
        $__internal_c8d522cf09a9be63036bc7fd936934a81ea0d470ba1023b7495423481b453ea3->leave($__internal_c8d522cf09a9be63036bc7fd936934a81ea0d470ba1023b7495423481b453ea3_prof);

        
        $__internal_67a985ae717b0f5309321ac45e99c93b2a7b5e91f5ae3b272b0ca911e717ce1c->leave($__internal_67a985ae717b0f5309321ac45e99c93b2a7b5e91f5ae3b272b0ca911e717ce1c_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_cb81cd589d00d55290ebb4b6b3dc8354721875421e3ac15530d907406137d0d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb81cd589d00d55290ebb4b6b3dc8354721875421e3ac15530d907406137d0d7->enter($__internal_cb81cd589d00d55290ebb4b6b3dc8354721875421e3ac15530d907406137d0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_1861b4c204e1b366ffbd905e3404206914ffb510ef8ac70f494d62016b94040e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1861b4c204e1b366ffbd905e3404206914ffb510ef8ac70f494d62016b94040e->enter($__internal_1861b4c204e1b366ffbd905e3404206914ffb510ef8ac70f494d62016b94040e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_1861b4c204e1b366ffbd905e3404206914ffb510ef8ac70f494d62016b94040e->leave($__internal_1861b4c204e1b366ffbd905e3404206914ffb510ef8ac70f494d62016b94040e_prof);

        
        $__internal_cb81cd589d00d55290ebb4b6b3dc8354721875421e3ac15530d907406137d0d7->leave($__internal_cb81cd589d00d55290ebb4b6b3dc8354721875421e3ac15530d907406137d0d7_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_e4b0df13b3f39beb3d40a44be6c522170549d4355f9aa9ff1854540dad88a4b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4b0df13b3f39beb3d40a44be6c522170549d4355f9aa9ff1854540dad88a4b4->enter($__internal_e4b0df13b3f39beb3d40a44be6c522170549d4355f9aa9ff1854540dad88a4b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_163460390406fe57a615ec51a778103935c7b48d1a7f43eb29e0109b8adea8d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_163460390406fe57a615ec51a778103935c7b48d1a7f43eb29e0109b8adea8d1->enter($__internal_163460390406fe57a615ec51a778103935c7b48d1a7f43eb29e0109b8adea8d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_163460390406fe57a615ec51a778103935c7b48d1a7f43eb29e0109b8adea8d1->leave($__internal_163460390406fe57a615ec51a778103935c7b48d1a7f43eb29e0109b8adea8d1_prof);

        
        $__internal_e4b0df13b3f39beb3d40a44be6c522170549d4355f9aa9ff1854540dad88a4b4->leave($__internal_e4b0df13b3f39beb3d40a44be6c522170549d4355f9aa9ff1854540dad88a4b4_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_0fae7f7f2e0a997246e1ea7f7bd3cf3d0edd576da67c99a1c4b97b53de1617aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fae7f7f2e0a997246e1ea7f7bd3cf3d0edd576da67c99a1c4b97b53de1617aa->enter($__internal_0fae7f7f2e0a997246e1ea7f7bd3cf3d0edd576da67c99a1c4b97b53de1617aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_529942f7141261acdabef533592c260bc5d75313989321db7b10b1f36bc31353 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_529942f7141261acdabef533592c260bc5d75313989321db7b10b1f36bc31353->enter($__internal_529942f7141261acdabef533592c260bc5d75313989321db7b10b1f36bc31353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_529942f7141261acdabef533592c260bc5d75313989321db7b10b1f36bc31353->leave($__internal_529942f7141261acdabef533592c260bc5d75313989321db7b10b1f36bc31353_prof);

        
        $__internal_0fae7f7f2e0a997246e1ea7f7bd3cf3d0edd576da67c99a1c4b97b53de1617aa->leave($__internal_0fae7f7f2e0a997246e1ea7f7bd3cf3d0edd576da67c99a1c4b97b53de1617aa_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_d79a53fa321f8310a5f9ea623f7cfe2c060d07447bc8d782df4f5c31c14cd7d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d79a53fa321f8310a5f9ea623f7cfe2c060d07447bc8d782df4f5c31c14cd7d1->enter($__internal_d79a53fa321f8310a5f9ea623f7cfe2c060d07447bc8d782df4f5c31c14cd7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_979ca594003b13b39829c622856a48cb9b5979de8ca1c67182e3c177937e16a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_979ca594003b13b39829c622856a48cb9b5979de8ca1c67182e3c177937e16a8->enter($__internal_979ca594003b13b39829c622856a48cb9b5979de8ca1c67182e3c177937e16a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_979ca594003b13b39829c622856a48cb9b5979de8ca1c67182e3c177937e16a8->leave($__internal_979ca594003b13b39829c622856a48cb9b5979de8ca1c67182e3c177937e16a8_prof);

        
        $__internal_d79a53fa321f8310a5f9ea623f7cfe2c060d07447bc8d782df4f5c31c14cd7d1->leave($__internal_d79a53fa321f8310a5f9ea623f7cfe2c060d07447bc8d782df4f5c31c14cd7d1_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_99e27d91fdc0c41fc4aa4fe4e65cb094b92a910c47f389cbd400bc554bd1082e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99e27d91fdc0c41fc4aa4fe4e65cb094b92a910c47f389cbd400bc554bd1082e->enter($__internal_99e27d91fdc0c41fc4aa4fe4e65cb094b92a910c47f389cbd400bc554bd1082e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_4205bc7a0360fd96a3715c324d3efc550de131331060382af482d774a61d2955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4205bc7a0360fd96a3715c324d3efc550de131331060382af482d774a61d2955->enter($__internal_4205bc7a0360fd96a3715c324d3efc550de131331060382af482d774a61d2955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4205bc7a0360fd96a3715c324d3efc550de131331060382af482d774a61d2955->leave($__internal_4205bc7a0360fd96a3715c324d3efc550de131331060382af482d774a61d2955_prof);

        
        $__internal_99e27d91fdc0c41fc4aa4fe4e65cb094b92a910c47f389cbd400bc554bd1082e->leave($__internal_99e27d91fdc0c41fc4aa4fe4e65cb094b92a910c47f389cbd400bc554bd1082e_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_bd47a5a66b89d006b5068c5c9bba5a3744c491f23bd3fa021a7c68ee40100c12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd47a5a66b89d006b5068c5c9bba5a3744c491f23bd3fa021a7c68ee40100c12->enter($__internal_bd47a5a66b89d006b5068c5c9bba5a3744c491f23bd3fa021a7c68ee40100c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_f24a74af4a56e570267f177aee01bc2007a6f6f874741f518eb9b76043a5d2d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f24a74af4a56e570267f177aee01bc2007a6f6f874741f518eb9b76043a5d2d0->enter($__internal_f24a74af4a56e570267f177aee01bc2007a6f6f874741f518eb9b76043a5d2d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 126
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 126, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 127, $this->getSourceContext()); })()), 'widget');
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), 'errors');
        // line 129
        echo "</div>";
        
        $__internal_f24a74af4a56e570267f177aee01bc2007a6f6f874741f518eb9b76043a5d2d0->leave($__internal_f24a74af4a56e570267f177aee01bc2007a6f6f874741f518eb9b76043a5d2d0_prof);

        
        $__internal_bd47a5a66b89d006b5068c5c9bba5a3744c491f23bd3fa021a7c68ee40100c12->leave($__internal_bd47a5a66b89d006b5068c5c9bba5a3744c491f23bd3fa021a7c68ee40100c12_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_963e27d27632b63bae4f0053f738b906b03b079410ea8842aa77a51d37bb7b1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_963e27d27632b63bae4f0053f738b906b03b079410ea8842aa77a51d37bb7b1a->enter($__internal_963e27d27632b63bae4f0053f738b906b03b079410ea8842aa77a51d37bb7b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_18bd94b8ba470bb0f606908b1b1ad758c65e8881c7551e364b4e82bf5a876cfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18bd94b8ba470bb0f606908b1b1ad758c65e8881c7551e364b4e82bf5a876cfc->enter($__internal_18bd94b8ba470bb0f606908b1b1ad758c65e8881c7551e364b4e82bf5a876cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 133
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 133, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->getSourceContext()); })()), 'widget');
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 135, $this->getSourceContext()); })()), 'errors');
        // line 136
        echo "</div>";
        
        $__internal_18bd94b8ba470bb0f606908b1b1ad758c65e8881c7551e364b4e82bf5a876cfc->leave($__internal_18bd94b8ba470bb0f606908b1b1ad758c65e8881c7551e364b4e82bf5a876cfc_prof);

        
        $__internal_963e27d27632b63bae4f0053f738b906b03b079410ea8842aa77a51d37bb7b1a->leave($__internal_963e27d27632b63bae4f0053f738b906b03b079410ea8842aa77a51d37bb7b1a_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_44f49616a04d5bd72f0dacdea9c31347ddc6e0231fcb25249903a2df2afaabcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44f49616a04d5bd72f0dacdea9c31347ddc6e0231fcb25249903a2df2afaabcc->enter($__internal_44f49616a04d5bd72f0dacdea9c31347ddc6e0231fcb25249903a2df2afaabcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_a5839e770f43e471efb35c0b7197207b253a0ab27f4c7bcbb0b03248b4a9e005 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5839e770f43e471efb35c0b7197207b253a0ab27f4c7bcbb0b03248b4a9e005->enter($__internal_a5839e770f43e471efb35c0b7197207b253a0ab27f4c7bcbb0b03248b4a9e005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 142
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 142, $this->getSourceContext()); })())) > 0)) {
            // line 143
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->getSourceContext()); })()))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 144
            echo "    <ul class=\"list-unstyled\">";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 145, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 146
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "</ul>
    ";
            // line 149
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 149, $this->getSourceContext()); })()))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_a5839e770f43e471efb35c0b7197207b253a0ab27f4c7bcbb0b03248b4a9e005->leave($__internal_a5839e770f43e471efb35c0b7197207b253a0ab27f4c7bcbb0b03248b4a9e005_prof);

        
        $__internal_44f49616a04d5bd72f0dacdea9c31347ddc6e0231fcb25249903a2df2afaabcc->leave($__internal_44f49616a04d5bd72f0dacdea9c31347ddc6e0231fcb25249903a2df2afaabcc_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  650 => 149,  647 => 148,  639 => 146,  635 => 145,  633 => 144,  627 => 143,  625 => 142,  616 => 141,  606 => 136,  604 => 135,  602 => 134,  596 => 133,  587 => 132,  577 => 129,  575 => 128,  573 => 127,  567 => 126,  558 => 125,  548 => 122,  546 => 121,  537 => 120,  527 => 117,  525 => 116,  516 => 115,  506 => 112,  504 => 111,  495 => 110,  485 => 107,  483 => 106,  474 => 105,  464 => 102,  462 => 101,  460 => 100,  451 => 99,  441 => 96,  439 => 95,  437 => 94,  435 => 93,  429 => 92,  420 => 91,  409 => 85,  405 => 84,  390 => 83,  386 => 80,  383 => 77,  382 => 76,  381 => 75,  379 => 74,  377 => 73,  374 => 71,  372 => 70,  369 => 68,  367 => 67,  365 => 66,  356 => 64,  346 => 61,  344 => 59,  335 => 58,  325 => 55,  323 => 53,  314 => 52,  304 => 49,  302 => 48,  293 => 46,  283 => 43,  281 => 42,  272 => 41,  261 => 35,  259 => 34,  257 => 33,  254 => 31,  252 => 30,  250 => 29,  241 => 28,  230 => 24,  228 => 23,  226 => 22,  223 => 20,  221 => 19,  219 => 18,  210 => 17,  200 => 14,  198 => 13,  189 => 12,  179 => 9,  176 => 7,  174 => 6,  165 => 5,  155 => 141,  152 => 140,  149 => 138,  147 => 132,  144 => 131,  142 => 125,  139 => 124,  137 => 120,  134 => 119,  132 => 115,  129 => 114,  127 => 110,  124 => 109,  122 => 105,  119 => 104,  117 => 99,  114 => 98,  112 => 91,  109 => 90,  106 => 88,  104 => 64,  101 => 63,  99 => 58,  96 => 57,  94 => 52,  91 => 51,  89 => 46,  86 => 45,  84 => 41,  81 => 40,  78 => 38,  76 => 28,  73 => 27,  71 => 17,  68 => 16,  66 => 12,  63 => 11,  61 => 5,  58 => 4,  55 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {%- if widget is defined -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/Users/Slote/Desktop/XMR4U/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
