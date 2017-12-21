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
        $__internal_2e0ed0bb4d772996efdac24918decfa296233bcabacd47466417abe0931fc8fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e0ed0bb4d772996efdac24918decfa296233bcabacd47466417abe0931fc8fb->enter($__internal_2e0ed0bb4d772996efdac24918decfa296233bcabacd47466417abe0931fc8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_7047d3d1ae3c0f33f2bc7f688453c41f4ebc3de395ffe5a5bf9d3fe1ade782fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7047d3d1ae3c0f33f2bc7f688453c41f4ebc3de395ffe5a5bf9d3fe1ade782fb->enter($__internal_7047d3d1ae3c0f33f2bc7f688453c41f4ebc3de395ffe5a5bf9d3fe1ade782fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_2e0ed0bb4d772996efdac24918decfa296233bcabacd47466417abe0931fc8fb->leave($__internal_2e0ed0bb4d772996efdac24918decfa296233bcabacd47466417abe0931fc8fb_prof);

        
        $__internal_7047d3d1ae3c0f33f2bc7f688453c41f4ebc3de395ffe5a5bf9d3fe1ade782fb->leave($__internal_7047d3d1ae3c0f33f2bc7f688453c41f4ebc3de395ffe5a5bf9d3fe1ade782fb_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_3c62580e13b034df3cc724074a326f7e88b5073245e82f00d38fe1f719e06320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c62580e13b034df3cc724074a326f7e88b5073245e82f00d38fe1f719e06320->enter($__internal_3c62580e13b034df3cc724074a326f7e88b5073245e82f00d38fe1f719e06320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_93d5e0e126e5e0a05b80cf0eb56fc641beb04d68cd4b0c1a319760194c6397a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93d5e0e126e5e0a05b80cf0eb56fc641beb04d68cd4b0c1a319760194c6397a6->enter($__internal_93d5e0e126e5e0a05b80cf0eb56fc641beb04d68cd4b0c1a319760194c6397a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_93d5e0e126e5e0a05b80cf0eb56fc641beb04d68cd4b0c1a319760194c6397a6->leave($__internal_93d5e0e126e5e0a05b80cf0eb56fc641beb04d68cd4b0c1a319760194c6397a6_prof);

        
        $__internal_3c62580e13b034df3cc724074a326f7e88b5073245e82f00d38fe1f719e06320->leave($__internal_3c62580e13b034df3cc724074a326f7e88b5073245e82f00d38fe1f719e06320_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_68546bd24f98774bc6ac29889f1e2f6c858bad9f071fd9ecbe62af666ae79d05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68546bd24f98774bc6ac29889f1e2f6c858bad9f071fd9ecbe62af666ae79d05->enter($__internal_68546bd24f98774bc6ac29889f1e2f6c858bad9f071fd9ecbe62af666ae79d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_da4882637d49504f57db69deddfa2a6f4220f79cb9792cfa120417af7050acc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da4882637d49504f57db69deddfa2a6f4220f79cb9792cfa120417af7050acc9->enter($__internal_da4882637d49504f57db69deddfa2a6f4220f79cb9792cfa120417af7050acc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_da4882637d49504f57db69deddfa2a6f4220f79cb9792cfa120417af7050acc9->leave($__internal_da4882637d49504f57db69deddfa2a6f4220f79cb9792cfa120417af7050acc9_prof);

        
        $__internal_68546bd24f98774bc6ac29889f1e2f6c858bad9f071fd9ecbe62af666ae79d05->leave($__internal_68546bd24f98774bc6ac29889f1e2f6c858bad9f071fd9ecbe62af666ae79d05_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_924e4b9406295b4d051fee7890a2df0fa9ffea3be6189d9f779a2a9f80c40671 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_924e4b9406295b4d051fee7890a2df0fa9ffea3be6189d9f779a2a9f80c40671->enter($__internal_924e4b9406295b4d051fee7890a2df0fa9ffea3be6189d9f779a2a9f80c40671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_172b161ebaa212b55b18ed3fc3c1b00a935bff51223f104a1b311a71dc615a92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_172b161ebaa212b55b18ed3fc3c1b00a935bff51223f104a1b311a71dc615a92->enter($__internal_172b161ebaa212b55b18ed3fc3c1b00a935bff51223f104a1b311a71dc615a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_172b161ebaa212b55b18ed3fc3c1b00a935bff51223f104a1b311a71dc615a92->leave($__internal_172b161ebaa212b55b18ed3fc3c1b00a935bff51223f104a1b311a71dc615a92_prof);

        
        $__internal_924e4b9406295b4d051fee7890a2df0fa9ffea3be6189d9f779a2a9f80c40671->leave($__internal_924e4b9406295b4d051fee7890a2df0fa9ffea3be6189d9f779a2a9f80c40671_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_e21fe1aba3c5aacce5fb8b1e8b1f2359e0bad2ab3b99595bda687ed4e6f33711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e21fe1aba3c5aacce5fb8b1e8b1f2359e0bad2ab3b99595bda687ed4e6f33711->enter($__internal_e21fe1aba3c5aacce5fb8b1e8b1f2359e0bad2ab3b99595bda687ed4e6f33711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_f7a931e68ec20287b5c712d690632c72f05773f91ce5a20c8ae58573e6db4e88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7a931e68ec20287b5c712d690632c72f05773f91ce5a20c8ae58573e6db4e88->enter($__internal_f7a931e68ec20287b5c712d690632c72f05773f91ce5a20c8ae58573e6db4e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_f7a931e68ec20287b5c712d690632c72f05773f91ce5a20c8ae58573e6db4e88->leave($__internal_f7a931e68ec20287b5c712d690632c72f05773f91ce5a20c8ae58573e6db4e88_prof);

        
        $__internal_e21fe1aba3c5aacce5fb8b1e8b1f2359e0bad2ab3b99595bda687ed4e6f33711->leave($__internal_e21fe1aba3c5aacce5fb8b1e8b1f2359e0bad2ab3b99595bda687ed4e6f33711_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_6f1c6728a4ef4dedac7c021a5885c8d7d130812902112be8e28dccc3e041e01e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f1c6728a4ef4dedac7c021a5885c8d7d130812902112be8e28dccc3e041e01e->enter($__internal_6f1c6728a4ef4dedac7c021a5885c8d7d130812902112be8e28dccc3e041e01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_fcf87884c6219d853f9417ae5a667858d60bfc99ecee8622992a53083281ca0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcf87884c6219d853f9417ae5a667858d60bfc99ecee8622992a53083281ca0d->enter($__internal_fcf87884c6219d853f9417ae5a667858d60bfc99ecee8622992a53083281ca0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_fcf87884c6219d853f9417ae5a667858d60bfc99ecee8622992a53083281ca0d->leave($__internal_fcf87884c6219d853f9417ae5a667858d60bfc99ecee8622992a53083281ca0d_prof);

        
        $__internal_6f1c6728a4ef4dedac7c021a5885c8d7d130812902112be8e28dccc3e041e01e->leave($__internal_6f1c6728a4ef4dedac7c021a5885c8d7d130812902112be8e28dccc3e041e01e_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_86e7ddc715fb1a7861328a8014fb8d6dd14a55f2248ec36b6f998729d6ed5d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86e7ddc715fb1a7861328a8014fb8d6dd14a55f2248ec36b6f998729d6ed5d43->enter($__internal_86e7ddc715fb1a7861328a8014fb8d6dd14a55f2248ec36b6f998729d6ed5d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_078529abba2d8d3f629726335695aea9a6e1dee86b4542fcda866ff0c0ebece8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_078529abba2d8d3f629726335695aea9a6e1dee86b4542fcda866ff0c0ebece8->enter($__internal_078529abba2d8d3f629726335695aea9a6e1dee86b4542fcda866ff0c0ebece8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_078529abba2d8d3f629726335695aea9a6e1dee86b4542fcda866ff0c0ebece8->leave($__internal_078529abba2d8d3f629726335695aea9a6e1dee86b4542fcda866ff0c0ebece8_prof);

        
        $__internal_86e7ddc715fb1a7861328a8014fb8d6dd14a55f2248ec36b6f998729d6ed5d43->leave($__internal_86e7ddc715fb1a7861328a8014fb8d6dd14a55f2248ec36b6f998729d6ed5d43_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_76442a057f9159a782165e7f6e1daaeda6adceb35f606b47a9f35a3d0767286c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76442a057f9159a782165e7f6e1daaeda6adceb35f606b47a9f35a3d0767286c->enter($__internal_76442a057f9159a782165e7f6e1daaeda6adceb35f606b47a9f35a3d0767286c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_66374e92218b415394ee31d053b9886581fce72f33f97c6a5432539738a73000 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66374e92218b415394ee31d053b9886581fce72f33f97c6a5432539738a73000->enter($__internal_66374e92218b415394ee31d053b9886581fce72f33f97c6a5432539738a73000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_66374e92218b415394ee31d053b9886581fce72f33f97c6a5432539738a73000->leave($__internal_66374e92218b415394ee31d053b9886581fce72f33f97c6a5432539738a73000_prof);

        
        $__internal_76442a057f9159a782165e7f6e1daaeda6adceb35f606b47a9f35a3d0767286c->leave($__internal_76442a057f9159a782165e7f6e1daaeda6adceb35f606b47a9f35a3d0767286c_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_a0ac758fda8450a9f5f260dd5620d15916622ca0be85c5a217b1011214caf6a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0ac758fda8450a9f5f260dd5620d15916622ca0be85c5a217b1011214caf6a3->enter($__internal_a0ac758fda8450a9f5f260dd5620d15916622ca0be85c5a217b1011214caf6a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_43287b61e93b1eda44bb46b1c3ab8ad685501a45df089e7f31396e60da3c8b31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43287b61e93b1eda44bb46b1c3ab8ad685501a45df089e7f31396e60da3c8b31->enter($__internal_43287b61e93b1eda44bb46b1c3ab8ad685501a45df089e7f31396e60da3c8b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_43287b61e93b1eda44bb46b1c3ab8ad685501a45df089e7f31396e60da3c8b31->leave($__internal_43287b61e93b1eda44bb46b1c3ab8ad685501a45df089e7f31396e60da3c8b31_prof);

        
        $__internal_a0ac758fda8450a9f5f260dd5620d15916622ca0be85c5a217b1011214caf6a3->leave($__internal_a0ac758fda8450a9f5f260dd5620d15916622ca0be85c5a217b1011214caf6a3_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_6ca06be7b8a9cbaef9c81a8407c513e6596c1e7149561e3575b29a80738c4553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ca06be7b8a9cbaef9c81a8407c513e6596c1e7149561e3575b29a80738c4553->enter($__internal_6ca06be7b8a9cbaef9c81a8407c513e6596c1e7149561e3575b29a80738c4553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_64ff48cb4af2d4560978812beb629df93e145972b9d5d40d831c14f132b0411e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64ff48cb4af2d4560978812beb629df93e145972b9d5d40d831c14f132b0411e->enter($__internal_64ff48cb4af2d4560978812beb629df93e145972b9d5d40d831c14f132b0411e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_64ff48cb4af2d4560978812beb629df93e145972b9d5d40d831c14f132b0411e->leave($__internal_64ff48cb4af2d4560978812beb629df93e145972b9d5d40d831c14f132b0411e_prof);

        
        $__internal_6ca06be7b8a9cbaef9c81a8407c513e6596c1e7149561e3575b29a80738c4553->leave($__internal_6ca06be7b8a9cbaef9c81a8407c513e6596c1e7149561e3575b29a80738c4553_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_b2c5df65d8505ded4d0cc8c197ef7ae842a931cf5d814ea4ba5fcd32c42244b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2c5df65d8505ded4d0cc8c197ef7ae842a931cf5d814ea4ba5fcd32c42244b0->enter($__internal_b2c5df65d8505ded4d0cc8c197ef7ae842a931cf5d814ea4ba5fcd32c42244b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_e0f67025a2be343f4f017a28d980f351842626bae6e8f44a9412f06e4b155bcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0f67025a2be343f4f017a28d980f351842626bae6e8f44a9412f06e4b155bcc->enter($__internal_e0f67025a2be343f4f017a28d980f351842626bae6e8f44a9412f06e4b155bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_e0f67025a2be343f4f017a28d980f351842626bae6e8f44a9412f06e4b155bcc->leave($__internal_e0f67025a2be343f4f017a28d980f351842626bae6e8f44a9412f06e4b155bcc_prof);

        
        $__internal_b2c5df65d8505ded4d0cc8c197ef7ae842a931cf5d814ea4ba5fcd32c42244b0->leave($__internal_b2c5df65d8505ded4d0cc8c197ef7ae842a931cf5d814ea4ba5fcd32c42244b0_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_5fe05ece6f94f7f37ac81315336a972ca21befad86e5ac63bc6544a9cd405938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fe05ece6f94f7f37ac81315336a972ca21befad86e5ac63bc6544a9cd405938->enter($__internal_5fe05ece6f94f7f37ac81315336a972ca21befad86e5ac63bc6544a9cd405938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_2c1209b51f4331ed2abea3756ea4e911d60ec19ee2e84f84d2096ab85d36deeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c1209b51f4331ed2abea3756ea4e911d60ec19ee2e84f84d2096ab85d36deeb->enter($__internal_2c1209b51f4331ed2abea3756ea4e911d60ec19ee2e84f84d2096ab85d36deeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_2c1209b51f4331ed2abea3756ea4e911d60ec19ee2e84f84d2096ab85d36deeb->leave($__internal_2c1209b51f4331ed2abea3756ea4e911d60ec19ee2e84f84d2096ab85d36deeb_prof);

        
        $__internal_5fe05ece6f94f7f37ac81315336a972ca21befad86e5ac63bc6544a9cd405938->leave($__internal_5fe05ece6f94f7f37ac81315336a972ca21befad86e5ac63bc6544a9cd405938_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_4938a827d51403188552e99fb4ff897a7b5b9399945dc0b04c9f386e5f7c5155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4938a827d51403188552e99fb4ff897a7b5b9399945dc0b04c9f386e5f7c5155->enter($__internal_4938a827d51403188552e99fb4ff897a7b5b9399945dc0b04c9f386e5f7c5155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_348a4ba716f97d782756327bad589700de0633b164c8e4aa70dc63a4c92791ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_348a4ba716f97d782756327bad589700de0633b164c8e4aa70dc63a4c92791ca->enter($__internal_348a4ba716f97d782756327bad589700de0633b164c8e4aa70dc63a4c92791ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_348a4ba716f97d782756327bad589700de0633b164c8e4aa70dc63a4c92791ca->leave($__internal_348a4ba716f97d782756327bad589700de0633b164c8e4aa70dc63a4c92791ca_prof);

        
        $__internal_4938a827d51403188552e99fb4ff897a7b5b9399945dc0b04c9f386e5f7c5155->leave($__internal_4938a827d51403188552e99fb4ff897a7b5b9399945dc0b04c9f386e5f7c5155_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_2a8b0df47320f344cc2ee8ac8b6a9a1a4cdea6a6d05ea52cb8b88f1181f567f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a8b0df47320f344cc2ee8ac8b6a9a1a4cdea6a6d05ea52cb8b88f1181f567f0->enter($__internal_2a8b0df47320f344cc2ee8ac8b6a9a1a4cdea6a6d05ea52cb8b88f1181f567f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_1165b555ada7b10f8c312f36ec919bcd9ee8dc8528b7c672018329e79d211168 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1165b555ada7b10f8c312f36ec919bcd9ee8dc8528b7c672018329e79d211168->enter($__internal_1165b555ada7b10f8c312f36ec919bcd9ee8dc8528b7c672018329e79d211168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1165b555ada7b10f8c312f36ec919bcd9ee8dc8528b7c672018329e79d211168->leave($__internal_1165b555ada7b10f8c312f36ec919bcd9ee8dc8528b7c672018329e79d211168_prof);

        
        $__internal_2a8b0df47320f344cc2ee8ac8b6a9a1a4cdea6a6d05ea52cb8b88f1181f567f0->leave($__internal_2a8b0df47320f344cc2ee8ac8b6a9a1a4cdea6a6d05ea52cb8b88f1181f567f0_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_7b71554070a3eabbd84e85298f68dc68749c34da578b3e57cd74ee82b0c1608b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b71554070a3eabbd84e85298f68dc68749c34da578b3e57cd74ee82b0c1608b->enter($__internal_7b71554070a3eabbd84e85298f68dc68749c34da578b3e57cd74ee82b0c1608b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_f437bcad23c094edc20fd9b120247fc3a48ef78d9fd3b7421238e62cb95a54dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f437bcad23c094edc20fd9b120247fc3a48ef78d9fd3b7421238e62cb95a54dc->enter($__internal_f437bcad23c094edc20fd9b120247fc3a48ef78d9fd3b7421238e62cb95a54dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f437bcad23c094edc20fd9b120247fc3a48ef78d9fd3b7421238e62cb95a54dc->leave($__internal_f437bcad23c094edc20fd9b120247fc3a48ef78d9fd3b7421238e62cb95a54dc_prof);

        
        $__internal_7b71554070a3eabbd84e85298f68dc68749c34da578b3e57cd74ee82b0c1608b->leave($__internal_7b71554070a3eabbd84e85298f68dc68749c34da578b3e57cd74ee82b0c1608b_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_e6fbf507042f7d287bf1f38b07665063052345f169897402938cfc8007028024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6fbf507042f7d287bf1f38b07665063052345f169897402938cfc8007028024->enter($__internal_e6fbf507042f7d287bf1f38b07665063052345f169897402938cfc8007028024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_dae2fa689f22948bc92fc916c50cd57033b1858a53e3cb5a8ba4fcf98e19b6fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dae2fa689f22948bc92fc916c50cd57033b1858a53e3cb5a8ba4fcf98e19b6fe->enter($__internal_dae2fa689f22948bc92fc916c50cd57033b1858a53e3cb5a8ba4fcf98e19b6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_dae2fa689f22948bc92fc916c50cd57033b1858a53e3cb5a8ba4fcf98e19b6fe->leave($__internal_dae2fa689f22948bc92fc916c50cd57033b1858a53e3cb5a8ba4fcf98e19b6fe_prof);

        
        $__internal_e6fbf507042f7d287bf1f38b07665063052345f169897402938cfc8007028024->leave($__internal_e6fbf507042f7d287bf1f38b07665063052345f169897402938cfc8007028024_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_61abb0a45cdd180d32ea7f4f5eba9780be8fbb69f51fb2629f9475a72b75f881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61abb0a45cdd180d32ea7f4f5eba9780be8fbb69f51fb2629f9475a72b75f881->enter($__internal_61abb0a45cdd180d32ea7f4f5eba9780be8fbb69f51fb2629f9475a72b75f881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_abe29d2a3b4a48c5f11028e5ca67184f51ba801d9a4e4c3e67a717537de331ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abe29d2a3b4a48c5f11028e5ca67184f51ba801d9a4e4c3e67a717537de331ab->enter($__internal_abe29d2a3b4a48c5f11028e5ca67184f51ba801d9a4e4c3e67a717537de331ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_abe29d2a3b4a48c5f11028e5ca67184f51ba801d9a4e4c3e67a717537de331ab->leave($__internal_abe29d2a3b4a48c5f11028e5ca67184f51ba801d9a4e4c3e67a717537de331ab_prof);

        
        $__internal_61abb0a45cdd180d32ea7f4f5eba9780be8fbb69f51fb2629f9475a72b75f881->leave($__internal_61abb0a45cdd180d32ea7f4f5eba9780be8fbb69f51fb2629f9475a72b75f881_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_daacce385195ed86dd7dc480ec7387df48ec1a077487d13d51b9ef31a8eb6275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daacce385195ed86dd7dc480ec7387df48ec1a077487d13d51b9ef31a8eb6275->enter($__internal_daacce385195ed86dd7dc480ec7387df48ec1a077487d13d51b9ef31a8eb6275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_e49d0a415e1e552f06cdb262aa8eb567d83a0af89ab10a3d70e537e8d56ae753 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e49d0a415e1e552f06cdb262aa8eb567d83a0af89ab10a3d70e537e8d56ae753->enter($__internal_e49d0a415e1e552f06cdb262aa8eb567d83a0af89ab10a3d70e537e8d56ae753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_e49d0a415e1e552f06cdb262aa8eb567d83a0af89ab10a3d70e537e8d56ae753->leave($__internal_e49d0a415e1e552f06cdb262aa8eb567d83a0af89ab10a3d70e537e8d56ae753_prof);

        
        $__internal_daacce385195ed86dd7dc480ec7387df48ec1a077487d13d51b9ef31a8eb6275->leave($__internal_daacce385195ed86dd7dc480ec7387df48ec1a077487d13d51b9ef31a8eb6275_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_3a86eac2098617d6b4bead0ecb790dfada1f24f0ee0e118aff97d4feef99f79f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a86eac2098617d6b4bead0ecb790dfada1f24f0ee0e118aff97d4feef99f79f->enter($__internal_3a86eac2098617d6b4bead0ecb790dfada1f24f0ee0e118aff97d4feef99f79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_55288bedbbcdca496349550a11a2cf23fa6865bc859dbcbe6b6aa6cb6a5996b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55288bedbbcdca496349550a11a2cf23fa6865bc859dbcbe6b6aa6cb6a5996b4->enter($__internal_55288bedbbcdca496349550a11a2cf23fa6865bc859dbcbe6b6aa6cb6a5996b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_55288bedbbcdca496349550a11a2cf23fa6865bc859dbcbe6b6aa6cb6a5996b4->leave($__internal_55288bedbbcdca496349550a11a2cf23fa6865bc859dbcbe6b6aa6cb6a5996b4_prof);

        
        $__internal_3a86eac2098617d6b4bead0ecb790dfada1f24f0ee0e118aff97d4feef99f79f->leave($__internal_3a86eac2098617d6b4bead0ecb790dfada1f24f0ee0e118aff97d4feef99f79f_prof);

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
