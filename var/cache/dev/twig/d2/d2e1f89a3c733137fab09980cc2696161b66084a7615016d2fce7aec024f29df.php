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
        $__internal_738b03fcadf9f282c7c043d9b1a6fc1e8213cde211b729bd0bda7c3bc463176d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_738b03fcadf9f282c7c043d9b1a6fc1e8213cde211b729bd0bda7c3bc463176d->enter($__internal_738b03fcadf9f282c7c043d9b1a6fc1e8213cde211b729bd0bda7c3bc463176d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_4eeac604129f5299c58c272cf95ba938d3b058d43450049a0adbbe717d895516 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eeac604129f5299c58c272cf95ba938d3b058d43450049a0adbbe717d895516->enter($__internal_4eeac604129f5299c58c272cf95ba938d3b058d43450049a0adbbe717d895516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_738b03fcadf9f282c7c043d9b1a6fc1e8213cde211b729bd0bda7c3bc463176d->leave($__internal_738b03fcadf9f282c7c043d9b1a6fc1e8213cde211b729bd0bda7c3bc463176d_prof);

        
        $__internal_4eeac604129f5299c58c272cf95ba938d3b058d43450049a0adbbe717d895516->leave($__internal_4eeac604129f5299c58c272cf95ba938d3b058d43450049a0adbbe717d895516_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_8b8decae781536e2079b3ecab85cb2fddde6651cd03bfe49b565479c827dee57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b8decae781536e2079b3ecab85cb2fddde6651cd03bfe49b565479c827dee57->enter($__internal_8b8decae781536e2079b3ecab85cb2fddde6651cd03bfe49b565479c827dee57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_f9a7a3f148bba1d70866a040ef47bc4acd403506e8d3012b6750b984b2445fbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9a7a3f148bba1d70866a040ef47bc4acd403506e8d3012b6750b984b2445fbe->enter($__internal_f9a7a3f148bba1d70866a040ef47bc4acd403506e8d3012b6750b984b2445fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_f9a7a3f148bba1d70866a040ef47bc4acd403506e8d3012b6750b984b2445fbe->leave($__internal_f9a7a3f148bba1d70866a040ef47bc4acd403506e8d3012b6750b984b2445fbe_prof);

        
        $__internal_8b8decae781536e2079b3ecab85cb2fddde6651cd03bfe49b565479c827dee57->leave($__internal_8b8decae781536e2079b3ecab85cb2fddde6651cd03bfe49b565479c827dee57_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_1049ccadd4a39d2d3e7a0c2c5d0ddad672d29d34963cbaebe76ee1ef9bfb56f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1049ccadd4a39d2d3e7a0c2c5d0ddad672d29d34963cbaebe76ee1ef9bfb56f5->enter($__internal_1049ccadd4a39d2d3e7a0c2c5d0ddad672d29d34963cbaebe76ee1ef9bfb56f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_0f5a2d9e589c2796ca298cc07f7e706c052f803e1909fd6424e1480e22dd18ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f5a2d9e589c2796ca298cc07f7e706c052f803e1909fd6424e1480e22dd18ca->enter($__internal_0f5a2d9e589c2796ca298cc07f7e706c052f803e1909fd6424e1480e22dd18ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_0f5a2d9e589c2796ca298cc07f7e706c052f803e1909fd6424e1480e22dd18ca->leave($__internal_0f5a2d9e589c2796ca298cc07f7e706c052f803e1909fd6424e1480e22dd18ca_prof);

        
        $__internal_1049ccadd4a39d2d3e7a0c2c5d0ddad672d29d34963cbaebe76ee1ef9bfb56f5->leave($__internal_1049ccadd4a39d2d3e7a0c2c5d0ddad672d29d34963cbaebe76ee1ef9bfb56f5_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_770add6b82e9c1c33136122ac5c407b5b267039449e43cf5f7a8c47830e10c81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_770add6b82e9c1c33136122ac5c407b5b267039449e43cf5f7a8c47830e10c81->enter($__internal_770add6b82e9c1c33136122ac5c407b5b267039449e43cf5f7a8c47830e10c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_ad921c95b709d9815b82fb751acf59eb0a8a52e1a13410da44aaa471bacddfeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad921c95b709d9815b82fb751acf59eb0a8a52e1a13410da44aaa471bacddfeb->enter($__internal_ad921c95b709d9815b82fb751acf59eb0a8a52e1a13410da44aaa471bacddfeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_ad921c95b709d9815b82fb751acf59eb0a8a52e1a13410da44aaa471bacddfeb->leave($__internal_ad921c95b709d9815b82fb751acf59eb0a8a52e1a13410da44aaa471bacddfeb_prof);

        
        $__internal_770add6b82e9c1c33136122ac5c407b5b267039449e43cf5f7a8c47830e10c81->leave($__internal_770add6b82e9c1c33136122ac5c407b5b267039449e43cf5f7a8c47830e10c81_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_eb68156de040ca322b285440ebe0d82261a38e1a149fae5fcd61191f31e3252c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb68156de040ca322b285440ebe0d82261a38e1a149fae5fcd61191f31e3252c->enter($__internal_eb68156de040ca322b285440ebe0d82261a38e1a149fae5fcd61191f31e3252c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_232482678b235578124b266970adb9b5ce1002e873bff587fb0652c607f0fe40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_232482678b235578124b266970adb9b5ce1002e873bff587fb0652c607f0fe40->enter($__internal_232482678b235578124b266970adb9b5ce1002e873bff587fb0652c607f0fe40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_232482678b235578124b266970adb9b5ce1002e873bff587fb0652c607f0fe40->leave($__internal_232482678b235578124b266970adb9b5ce1002e873bff587fb0652c607f0fe40_prof);

        
        $__internal_eb68156de040ca322b285440ebe0d82261a38e1a149fae5fcd61191f31e3252c->leave($__internal_eb68156de040ca322b285440ebe0d82261a38e1a149fae5fcd61191f31e3252c_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_5726fe3854ebeb41b6a39268b172397568ad890fb3cd3203b9d18fb1386fe87b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5726fe3854ebeb41b6a39268b172397568ad890fb3cd3203b9d18fb1386fe87b->enter($__internal_5726fe3854ebeb41b6a39268b172397568ad890fb3cd3203b9d18fb1386fe87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_abbb2f9a7fa8b591fb0c5ecf3408f72176730c61d40ad62df29cc48306d1d256 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abbb2f9a7fa8b591fb0c5ecf3408f72176730c61d40ad62df29cc48306d1d256->enter($__internal_abbb2f9a7fa8b591fb0c5ecf3408f72176730c61d40ad62df29cc48306d1d256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_abbb2f9a7fa8b591fb0c5ecf3408f72176730c61d40ad62df29cc48306d1d256->leave($__internal_abbb2f9a7fa8b591fb0c5ecf3408f72176730c61d40ad62df29cc48306d1d256_prof);

        
        $__internal_5726fe3854ebeb41b6a39268b172397568ad890fb3cd3203b9d18fb1386fe87b->leave($__internal_5726fe3854ebeb41b6a39268b172397568ad890fb3cd3203b9d18fb1386fe87b_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_2132d9a64b9d8d9b4879c73a32632aea2b4c62410f39c0bf13bd3e104ffc75af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2132d9a64b9d8d9b4879c73a32632aea2b4c62410f39c0bf13bd3e104ffc75af->enter($__internal_2132d9a64b9d8d9b4879c73a32632aea2b4c62410f39c0bf13bd3e104ffc75af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_3b6e4b947d979c246b08d688587e18535c530d76f5a47f9c156ab5715a291e6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b6e4b947d979c246b08d688587e18535c530d76f5a47f9c156ab5715a291e6a->enter($__internal_3b6e4b947d979c246b08d688587e18535c530d76f5a47f9c156ab5715a291e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_3b6e4b947d979c246b08d688587e18535c530d76f5a47f9c156ab5715a291e6a->leave($__internal_3b6e4b947d979c246b08d688587e18535c530d76f5a47f9c156ab5715a291e6a_prof);

        
        $__internal_2132d9a64b9d8d9b4879c73a32632aea2b4c62410f39c0bf13bd3e104ffc75af->leave($__internal_2132d9a64b9d8d9b4879c73a32632aea2b4c62410f39c0bf13bd3e104ffc75af_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_8de795370e87bcd3f49faecc5adc5848c5e5f1a766b493d39b2598250d0fedcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de795370e87bcd3f49faecc5adc5848c5e5f1a766b493d39b2598250d0fedcc->enter($__internal_8de795370e87bcd3f49faecc5adc5848c5e5f1a766b493d39b2598250d0fedcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_931e9ec002b5b8124ec664c37c2103d6fb80433d854b187e0ca47b574b2ce66d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_931e9ec002b5b8124ec664c37c2103d6fb80433d854b187e0ca47b574b2ce66d->enter($__internal_931e9ec002b5b8124ec664c37c2103d6fb80433d854b187e0ca47b574b2ce66d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_931e9ec002b5b8124ec664c37c2103d6fb80433d854b187e0ca47b574b2ce66d->leave($__internal_931e9ec002b5b8124ec664c37c2103d6fb80433d854b187e0ca47b574b2ce66d_prof);

        
        $__internal_8de795370e87bcd3f49faecc5adc5848c5e5f1a766b493d39b2598250d0fedcc->leave($__internal_8de795370e87bcd3f49faecc5adc5848c5e5f1a766b493d39b2598250d0fedcc_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_c86a67916a0337e26a44a13024cce79428e72a8b0d6e14b8bb371b77e305f0fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c86a67916a0337e26a44a13024cce79428e72a8b0d6e14b8bb371b77e305f0fc->enter($__internal_c86a67916a0337e26a44a13024cce79428e72a8b0d6e14b8bb371b77e305f0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_44239976e9c1b96fabc3490bed6d33dddeca52164cf3ddb11fac476f904c9344 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44239976e9c1b96fabc3490bed6d33dddeca52164cf3ddb11fac476f904c9344->enter($__internal_44239976e9c1b96fabc3490bed6d33dddeca52164cf3ddb11fac476f904c9344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_44239976e9c1b96fabc3490bed6d33dddeca52164cf3ddb11fac476f904c9344->leave($__internal_44239976e9c1b96fabc3490bed6d33dddeca52164cf3ddb11fac476f904c9344_prof);

        
        $__internal_c86a67916a0337e26a44a13024cce79428e72a8b0d6e14b8bb371b77e305f0fc->leave($__internal_c86a67916a0337e26a44a13024cce79428e72a8b0d6e14b8bb371b77e305f0fc_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_c783ac4ff4c1ce8efd1b0a784ed195b8c9d292af39dabde5284ede42d615c8cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c783ac4ff4c1ce8efd1b0a784ed195b8c9d292af39dabde5284ede42d615c8cb->enter($__internal_c783ac4ff4c1ce8efd1b0a784ed195b8c9d292af39dabde5284ede42d615c8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_c8fad542a395ece5133946bf9695ee3e5b40a1d9073c337cac0f8e7a89c709af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8fad542a395ece5133946bf9695ee3e5b40a1d9073c337cac0f8e7a89c709af->enter($__internal_c8fad542a395ece5133946bf9695ee3e5b40a1d9073c337cac0f8e7a89c709af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_c8fad542a395ece5133946bf9695ee3e5b40a1d9073c337cac0f8e7a89c709af->leave($__internal_c8fad542a395ece5133946bf9695ee3e5b40a1d9073c337cac0f8e7a89c709af_prof);

        
        $__internal_c783ac4ff4c1ce8efd1b0a784ed195b8c9d292af39dabde5284ede42d615c8cb->leave($__internal_c783ac4ff4c1ce8efd1b0a784ed195b8c9d292af39dabde5284ede42d615c8cb_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_42294e4073f360133c8de8e4f647aa61c64b9d059559e89061ee2fea6ce13c5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42294e4073f360133c8de8e4f647aa61c64b9d059559e89061ee2fea6ce13c5b->enter($__internal_42294e4073f360133c8de8e4f647aa61c64b9d059559e89061ee2fea6ce13c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_0f8cc0e98d58b87fb4f3adc864ab8d475ee6b7a666403776a6938831468d48ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f8cc0e98d58b87fb4f3adc864ab8d475ee6b7a666403776a6938831468d48ab->enter($__internal_0f8cc0e98d58b87fb4f3adc864ab8d475ee6b7a666403776a6938831468d48ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_0f8cc0e98d58b87fb4f3adc864ab8d475ee6b7a666403776a6938831468d48ab->leave($__internal_0f8cc0e98d58b87fb4f3adc864ab8d475ee6b7a666403776a6938831468d48ab_prof);

        
        $__internal_42294e4073f360133c8de8e4f647aa61c64b9d059559e89061ee2fea6ce13c5b->leave($__internal_42294e4073f360133c8de8e4f647aa61c64b9d059559e89061ee2fea6ce13c5b_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_be1daaec08f3312ff0470a60e4e16623c07e17ea2188c247e465c3dd9d2484a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be1daaec08f3312ff0470a60e4e16623c07e17ea2188c247e465c3dd9d2484a7->enter($__internal_be1daaec08f3312ff0470a60e4e16623c07e17ea2188c247e465c3dd9d2484a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_d123d5ea3c685fd39907f82f746e1cedb146b0f70ccb03e451fb7fc22583ce44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d123d5ea3c685fd39907f82f746e1cedb146b0f70ccb03e451fb7fc22583ce44->enter($__internal_d123d5ea3c685fd39907f82f746e1cedb146b0f70ccb03e451fb7fc22583ce44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_d123d5ea3c685fd39907f82f746e1cedb146b0f70ccb03e451fb7fc22583ce44->leave($__internal_d123d5ea3c685fd39907f82f746e1cedb146b0f70ccb03e451fb7fc22583ce44_prof);

        
        $__internal_be1daaec08f3312ff0470a60e4e16623c07e17ea2188c247e465c3dd9d2484a7->leave($__internal_be1daaec08f3312ff0470a60e4e16623c07e17ea2188c247e465c3dd9d2484a7_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_cbf010498996bd9e14ba7df94a4fa9fb3013125ad185b8ed49aa74dbbaaeb98e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbf010498996bd9e14ba7df94a4fa9fb3013125ad185b8ed49aa74dbbaaeb98e->enter($__internal_cbf010498996bd9e14ba7df94a4fa9fb3013125ad185b8ed49aa74dbbaaeb98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_5b9d8d5c8c012e2b875f39a639912a9d80c4b6202c9f76a70a98393284522343 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b9d8d5c8c012e2b875f39a639912a9d80c4b6202c9f76a70a98393284522343->enter($__internal_5b9d8d5c8c012e2b875f39a639912a9d80c4b6202c9f76a70a98393284522343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5b9d8d5c8c012e2b875f39a639912a9d80c4b6202c9f76a70a98393284522343->leave($__internal_5b9d8d5c8c012e2b875f39a639912a9d80c4b6202c9f76a70a98393284522343_prof);

        
        $__internal_cbf010498996bd9e14ba7df94a4fa9fb3013125ad185b8ed49aa74dbbaaeb98e->leave($__internal_cbf010498996bd9e14ba7df94a4fa9fb3013125ad185b8ed49aa74dbbaaeb98e_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_89e1eea558364becdcaadbe1e8f1746f30cc25f011d57a4c3f38c2286baa0162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e1eea558364becdcaadbe1e8f1746f30cc25f011d57a4c3f38c2286baa0162->enter($__internal_89e1eea558364becdcaadbe1e8f1746f30cc25f011d57a4c3f38c2286baa0162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_e912c59838f3ce9968a8c47422b4410e959bca2af396310a5e6a469816cda330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e912c59838f3ce9968a8c47422b4410e959bca2af396310a5e6a469816cda330->enter($__internal_e912c59838f3ce9968a8c47422b4410e959bca2af396310a5e6a469816cda330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e912c59838f3ce9968a8c47422b4410e959bca2af396310a5e6a469816cda330->leave($__internal_e912c59838f3ce9968a8c47422b4410e959bca2af396310a5e6a469816cda330_prof);

        
        $__internal_89e1eea558364becdcaadbe1e8f1746f30cc25f011d57a4c3f38c2286baa0162->leave($__internal_89e1eea558364becdcaadbe1e8f1746f30cc25f011d57a4c3f38c2286baa0162_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_64ffd37ec33e7db9ab63b88c8833ffe938faf2b3e475b2c4e6cbce937ab51849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64ffd37ec33e7db9ab63b88c8833ffe938faf2b3e475b2c4e6cbce937ab51849->enter($__internal_64ffd37ec33e7db9ab63b88c8833ffe938faf2b3e475b2c4e6cbce937ab51849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_9017efee989daf3d8991dff526cbe9dc975b87250c6401345522cbc1ace19608 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9017efee989daf3d8991dff526cbe9dc975b87250c6401345522cbc1ace19608->enter($__internal_9017efee989daf3d8991dff526cbe9dc975b87250c6401345522cbc1ace19608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9017efee989daf3d8991dff526cbe9dc975b87250c6401345522cbc1ace19608->leave($__internal_9017efee989daf3d8991dff526cbe9dc975b87250c6401345522cbc1ace19608_prof);

        
        $__internal_64ffd37ec33e7db9ab63b88c8833ffe938faf2b3e475b2c4e6cbce937ab51849->leave($__internal_64ffd37ec33e7db9ab63b88c8833ffe938faf2b3e475b2c4e6cbce937ab51849_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_a24199a0647cbcc263e80ac0abcd6cdbb1f6b5be5223d3b320ec5e54ba1da9b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a24199a0647cbcc263e80ac0abcd6cdbb1f6b5be5223d3b320ec5e54ba1da9b5->enter($__internal_a24199a0647cbcc263e80ac0abcd6cdbb1f6b5be5223d3b320ec5e54ba1da9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_a75d1f4144a9768e7113f7ad4b376093f28459386f3fb15ef35a10f8b0a27053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a75d1f4144a9768e7113f7ad4b376093f28459386f3fb15ef35a10f8b0a27053->enter($__internal_a75d1f4144a9768e7113f7ad4b376093f28459386f3fb15ef35a10f8b0a27053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a75d1f4144a9768e7113f7ad4b376093f28459386f3fb15ef35a10f8b0a27053->leave($__internal_a75d1f4144a9768e7113f7ad4b376093f28459386f3fb15ef35a10f8b0a27053_prof);

        
        $__internal_a24199a0647cbcc263e80ac0abcd6cdbb1f6b5be5223d3b320ec5e54ba1da9b5->leave($__internal_a24199a0647cbcc263e80ac0abcd6cdbb1f6b5be5223d3b320ec5e54ba1da9b5_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_bf4a613e939aa202298a5eeb54f2e795933ce251028463bf0c69b5c3a57e14f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf4a613e939aa202298a5eeb54f2e795933ce251028463bf0c69b5c3a57e14f2->enter($__internal_bf4a613e939aa202298a5eeb54f2e795933ce251028463bf0c69b5c3a57e14f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_99894bcd1b3bdcac290089e4e5e34e305711ae88b6f80ec547b2af750ab4c2d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99894bcd1b3bdcac290089e4e5e34e305711ae88b6f80ec547b2af750ab4c2d3->enter($__internal_99894bcd1b3bdcac290089e4e5e34e305711ae88b6f80ec547b2af750ab4c2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_99894bcd1b3bdcac290089e4e5e34e305711ae88b6f80ec547b2af750ab4c2d3->leave($__internal_99894bcd1b3bdcac290089e4e5e34e305711ae88b6f80ec547b2af750ab4c2d3_prof);

        
        $__internal_bf4a613e939aa202298a5eeb54f2e795933ce251028463bf0c69b5c3a57e14f2->leave($__internal_bf4a613e939aa202298a5eeb54f2e795933ce251028463bf0c69b5c3a57e14f2_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_688bd94c102e2fc762096aa4d527021b166b6af4f4edb97133ecc6f67f0c356e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_688bd94c102e2fc762096aa4d527021b166b6af4f4edb97133ecc6f67f0c356e->enter($__internal_688bd94c102e2fc762096aa4d527021b166b6af4f4edb97133ecc6f67f0c356e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_cc55fb293663e148cff069656eeeaf0170b9ad83063bde382897bcf77314ac8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc55fb293663e148cff069656eeeaf0170b9ad83063bde382897bcf77314ac8e->enter($__internal_cc55fb293663e148cff069656eeeaf0170b9ad83063bde382897bcf77314ac8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_cc55fb293663e148cff069656eeeaf0170b9ad83063bde382897bcf77314ac8e->leave($__internal_cc55fb293663e148cff069656eeeaf0170b9ad83063bde382897bcf77314ac8e_prof);

        
        $__internal_688bd94c102e2fc762096aa4d527021b166b6af4f4edb97133ecc6f67f0c356e->leave($__internal_688bd94c102e2fc762096aa4d527021b166b6af4f4edb97133ecc6f67f0c356e_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_54ce02de208deb5234be315b4b443763941baba6f6373d04d13e3c7d1cbf3929 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54ce02de208deb5234be315b4b443763941baba6f6373d04d13e3c7d1cbf3929->enter($__internal_54ce02de208deb5234be315b4b443763941baba6f6373d04d13e3c7d1cbf3929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_9dc9d91e9ccc5864d7815525e5f6bc68ea9f027fba79922bd80948bf0a08ad8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dc9d91e9ccc5864d7815525e5f6bc68ea9f027fba79922bd80948bf0a08ad8d->enter($__internal_9dc9d91e9ccc5864d7815525e5f6bc68ea9f027fba79922bd80948bf0a08ad8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_9dc9d91e9ccc5864d7815525e5f6bc68ea9f027fba79922bd80948bf0a08ad8d->leave($__internal_9dc9d91e9ccc5864d7815525e5f6bc68ea9f027fba79922bd80948bf0a08ad8d_prof);

        
        $__internal_54ce02de208deb5234be315b4b443763941baba6f6373d04d13e3c7d1cbf3929->leave($__internal_54ce02de208deb5234be315b4b443763941baba6f6373d04d13e3c7d1cbf3929_prof);

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
", "bootstrap_3_layout.html.twig", "/var/www/miner/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
