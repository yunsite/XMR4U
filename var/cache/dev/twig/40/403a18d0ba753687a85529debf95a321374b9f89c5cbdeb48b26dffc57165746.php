<?php

/* form_div_layout.html.twig */
class __TwigTemplate_3571a470027eefbea8c4629b071c05284e6ed65f4c4c5ac56adfaa71bc99b4f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'range_widget' => array($this, 'block_range_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'tel_widget' => array($this, 'block_tel_widget'),
            'color_widget' => array($this, 'block_color_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1d92b07d625e530f1ab3289fbb71230e6fe97f709489032934f1ad7e23debde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1d92b07d625e530f1ab3289fbb71230e6fe97f709489032934f1ad7e23debde->enter($__internal_b1d92b07d625e530f1ab3289fbb71230e6fe97f709489032934f1ad7e23debde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        $__internal_8dff1b5793b8692fb0fb09f8359963db73c6e0389535ff086f676c1c684e6cf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dff1b5793b8692fb0fb09f8359963db73c6e0389535ff086f676c1c684e6cf1->enter($__internal_8dff1b5793b8692fb0fb09f8359963db73c6e0389535ff086f676c1c684e6cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 87
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 91
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 108
        $this->displayBlock('date_widget', $context, $blocks);
        // line 122
        $this->displayBlock('time_widget', $context, $blocks);
        // line 133
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 168
        $this->displayBlock('number_widget', $context, $blocks);
        // line 174
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 179
        $this->displayBlock('money_widget', $context, $blocks);
        // line 183
        $this->displayBlock('url_widget', $context, $blocks);
        // line 188
        $this->displayBlock('search_widget', $context, $blocks);
        // line 193
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 198
        $this->displayBlock('password_widget', $context, $blocks);
        // line 203
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 208
        $this->displayBlock('email_widget', $context, $blocks);
        // line 213
        $this->displayBlock('range_widget', $context, $blocks);
        // line 218
        $this->displayBlock('button_widget', $context, $blocks);
        // line 232
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 237
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 242
        $this->displayBlock('tel_widget', $context, $blocks);
        // line 247
        $this->displayBlock('color_widget', $context, $blocks);
        // line 254
        $this->displayBlock('form_label', $context, $blocks);
        // line 276
        $this->displayBlock('button_label', $context, $blocks);
        // line 280
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 288
        $this->displayBlock('form_row', $context, $blocks);
        // line 296
        $this->displayBlock('button_row', $context, $blocks);
        // line 302
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 308
        $this->displayBlock('form', $context, $blocks);
        // line 314
        $this->displayBlock('form_start', $context, $blocks);
        // line 328
        $this->displayBlock('form_end', $context, $blocks);
        // line 335
        $this->displayBlock('form_errors', $context, $blocks);
        // line 345
        $this->displayBlock('form_rest', $context, $blocks);
        // line 366
        echo "
";
        // line 369
        $this->displayBlock('form_rows', $context, $blocks);
        // line 375
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 382
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 387
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 392
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_b1d92b07d625e530f1ab3289fbb71230e6fe97f709489032934f1ad7e23debde->leave($__internal_b1d92b07d625e530f1ab3289fbb71230e6fe97f709489032934f1ad7e23debde_prof);

        
        $__internal_8dff1b5793b8692fb0fb09f8359963db73c6e0389535ff086f676c1c684e6cf1->leave($__internal_8dff1b5793b8692fb0fb09f8359963db73c6e0389535ff086f676c1c684e6cf1_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_de8557fd9ad0953c56ad4ecb58847d9ca98f458b6e3f1b259b21b8cc5be6e244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de8557fd9ad0953c56ad4ecb58847d9ca98f458b6e3f1b259b21b8cc5be6e244->enter($__internal_de8557fd9ad0953c56ad4ecb58847d9ca98f458b6e3f1b259b21b8cc5be6e244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_e3f7f39759766b92c59d510f989bb45d09b25e049ef804efaaac31e92bb36e60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3f7f39759766b92c59d510f989bb45d09b25e049ef804efaaac31e92bb36e60->enter($__internal_e3f7f39759766b92c59d510f989bb45d09b25e049ef804efaaac31e92bb36e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 4, $this->getSourceContext()); })())) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_e3f7f39759766b92c59d510f989bb45d09b25e049ef804efaaac31e92bb36e60->leave($__internal_e3f7f39759766b92c59d510f989bb45d09b25e049ef804efaaac31e92bb36e60_prof);

        
        $__internal_de8557fd9ad0953c56ad4ecb58847d9ca98f458b6e3f1b259b21b8cc5be6e244->leave($__internal_de8557fd9ad0953c56ad4ecb58847d9ca98f458b6e3f1b259b21b8cc5be6e244_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_ffdf47771b89a1693d909d6313aaa828736ae0b35a38bc329a7fc1712a1e023e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffdf47771b89a1693d909d6313aaa828736ae0b35a38bc329a7fc1712a1e023e->enter($__internal_ffdf47771b89a1693d909d6313aaa828736ae0b35a38bc329a7fc1712a1e023e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_5eca1bb51d497ac35f5fd205ec22c4544567adce9cbd26addc50151c4e87cfc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eca1bb51d497ac35f5fd205ec22c4544567adce9cbd26addc50151c4e87cfc7->enter($__internal_5eca1bb51d497ac35f5fd205ec22c4544567adce9cbd26addc50151c4e87cfc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 12, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_5eca1bb51d497ac35f5fd205ec22c4544567adce9cbd26addc50151c4e87cfc7->leave($__internal_5eca1bb51d497ac35f5fd205ec22c4544567adce9cbd26addc50151c4e87cfc7_prof);

        
        $__internal_ffdf47771b89a1693d909d6313aaa828736ae0b35a38bc329a7fc1712a1e023e->leave($__internal_ffdf47771b89a1693d909d6313aaa828736ae0b35a38bc329a7fc1712a1e023e_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_f4608e4c5e9f1aa130bebbb5c46fc16bd9d5910e0e819d59727f30fa992f64e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4608e4c5e9f1aa130bebbb5c46fc16bd9d5910e0e819d59727f30fa992f64e9->enter($__internal_f4608e4c5e9f1aa130bebbb5c46fc16bd9d5910e0e819d59727f30fa992f64e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_a42232c557f777afcdc3d41693b3fd766933ae4e8de757cbcf4764877b3b3fc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a42232c557f777afcdc3d41693b3fd766933ae4e8de757cbcf4764877b3b3fc9->enter($__internal_a42232c557f777afcdc3d41693b3fd766933ae4e8de757cbcf4764877b3b3fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()))) {
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_a42232c557f777afcdc3d41693b3fd766933ae4e8de757cbcf4764877b3b3fc9->leave($__internal_a42232c557f777afcdc3d41693b3fd766933ae4e8de757cbcf4764877b3b3fc9_prof);

        
        $__internal_f4608e4c5e9f1aa130bebbb5c46fc16bd9d5910e0e819d59727f30fa992f64e9->leave($__internal_f4608e4c5e9f1aa130bebbb5c46fc16bd9d5910e0e819d59727f30fa992f64e9_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_ad1d1c87a5dc6dc007375bf69911e8cfae743da76959ee8262b86b455eed4200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad1d1c87a5dc6dc007375bf69911e8cfae743da76959ee8262b86b455eed4200->enter($__internal_ad1d1c87a5dc6dc007375bf69911e8cfae743da76959ee8262b86b455eed4200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_58309fecc3d810c3712b66803e104ed40e57b4a2c292653522cf5069f6fa138e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58309fecc3d810c3712b66803e104ed40e57b4a2c292653522cf5069f6fa138e->enter($__internal_58309fecc3d810c3712b66803e104ed40e57b4a2c292653522cf5069f6fa138e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 28, $this->getSourceContext()); })()), array("data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 28, $this->getSourceContext()); })()), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_58309fecc3d810c3712b66803e104ed40e57b4a2c292653522cf5069f6fa138e->leave($__internal_58309fecc3d810c3712b66803e104ed40e57b4a2c292653522cf5069f6fa138e_prof);

        
        $__internal_ad1d1c87a5dc6dc007375bf69911e8cfae743da76959ee8262b86b455eed4200->leave($__internal_ad1d1c87a5dc6dc007375bf69911e8cfae743da76959ee8262b86b455eed4200_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_fbdd0cfb3953978a5c9b01a95985f39033cbe7ee236c3847e7c753ba0ea2274e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbdd0cfb3953978a5c9b01a95985f39033cbe7ee236c3847e7c753ba0ea2274e->enter($__internal_fbdd0cfb3953978a5c9b01a95985f39033cbe7ee236c3847e7c753ba0ea2274e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_8fa99b31829283b46f465bc4749f26f5db0a69e05d0dcb39f6e7116f0e56aa57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fa99b31829283b46f465bc4749f26f5db0a69e05d0dcb39f6e7116f0e56aa57->enter($__internal_8fa99b31829283b46f465bc4749f26f5db0a69e05d0dcb39f6e7116f0e56aa57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
        echo "</textarea>";
        
        $__internal_8fa99b31829283b46f465bc4749f26f5db0a69e05d0dcb39f6e7116f0e56aa57->leave($__internal_8fa99b31829283b46f465bc4749f26f5db0a69e05d0dcb39f6e7116f0e56aa57_prof);

        
        $__internal_fbdd0cfb3953978a5c9b01a95985f39033cbe7ee236c3847e7c753ba0ea2274e->leave($__internal_fbdd0cfb3953978a5c9b01a95985f39033cbe7ee236c3847e7c753ba0ea2274e_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_a0f0990da0442d5ac5760cbd7b2e9d87a2bec0179837989379605e0c33f78b84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0f0990da0442d5ac5760cbd7b2e9d87a2bec0179837989379605e0c33f78b84->enter($__internal_a0f0990da0442d5ac5760cbd7b2e9d87a2bec0179837989379605e0c33f78b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        $__internal_1dba19a539ba8a2e00faf66882f6345db2e77550606dafb9c8683423f09cd5a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dba19a539ba8a2e00faf66882f6345db2e77550606dafb9c8683423f09cd5a3->enter($__internal_1dba19a539ba8a2e00faf66882f6345db2e77550606dafb9c8683423f09cd5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 38, $this->getSourceContext()); })())) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_1dba19a539ba8a2e00faf66882f6345db2e77550606dafb9c8683423f09cd5a3->leave($__internal_1dba19a539ba8a2e00faf66882f6345db2e77550606dafb9c8683423f09cd5a3_prof);

        
        $__internal_a0f0990da0442d5ac5760cbd7b2e9d87a2bec0179837989379605e0c33f78b84->leave($__internal_a0f0990da0442d5ac5760cbd7b2e9d87a2bec0179837989379605e0c33f78b84_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_4b1e3d0cd8eb33810d6b7a8a4222209bf717b96c1a5bc126cf6688aa47aed875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b1e3d0cd8eb33810d6b7a8a4222209bf717b96c1a5bc126cf6688aa47aed875->enter($__internal_4b1e3d0cd8eb33810d6b7a8a4222209bf717b96c1a5bc126cf6688aa47aed875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_f6621a6c83471d0b411e015bf58206c49acc18db23fd155fad4c58a2b2841584 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6621a6c83471d0b411e015bf58206c49acc18db23fd155fad4c58a2b2841584->enter($__internal_f6621a6c83471d0b411e015bf58206c49acc18db23fd155fad4c58a2b2841584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 49, $this->getSourceContext()); })())));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_f6621a6c83471d0b411e015bf58206c49acc18db23fd155fad4c58a2b2841584->leave($__internal_f6621a6c83471d0b411e015bf58206c49acc18db23fd155fad4c58a2b2841584_prof);

        
        $__internal_4b1e3d0cd8eb33810d6b7a8a4222209bf717b96c1a5bc126cf6688aa47aed875->leave($__internal_4b1e3d0cd8eb33810d6b7a8a4222209bf717b96c1a5bc126cf6688aa47aed875_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_ebae6aef00dfe0a5cb0d3da0112a0db12c4245e521c3832305340cbcdccd3caf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebae6aef00dfe0a5cb0d3da0112a0db12c4245e521c3832305340cbcdccd3caf->enter($__internal_ebae6aef00dfe0a5cb0d3da0112a0db12c4245e521c3832305340cbcdccd3caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_6d11ba76de095704cb13c6b791637eb7445d1444b7227e6616a940855a0effe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d11ba76de095704cb13c6b791637eb7445d1444b7227e6616a940855a0effe8->enter($__internal_6d11ba76de095704cb13c6b791637eb7445d1444b7227e6616a940855a0effe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if ((((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 55, $this->getSourceContext()); })()) && (null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 55, $this->getSourceContext()); })()))) &&  !(isset($context["placeholder_in_choices"]) || array_key_exists("placeholder_in_choices", $context) ? $context["placeholder_in_choices"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder_in_choices" does not exist.', 55, $this->getSourceContext()); })())) &&  !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 55, $this->getSourceContext()); })())) && ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "size", array(), "any", true, true) || (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 55, $this->getSourceContext()); })()), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 59, $this->getSourceContext()); })()))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 60, $this->getSourceContext()); })()) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 60, $this->getSourceContext()); })())))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })()) != "")) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 60, $this->getSourceContext()); })()) === false)) ? ((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 60, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 62, $this->getSourceContext()); })())) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 63, $this->getSourceContext()); })());
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 65, $this->getSourceContext()); })())) > 0) &&  !(null === (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 65, $this->getSourceContext()); })())))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 66, $this->getSourceContext()); })()), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 69, $this->getSourceContext()); })());
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_6d11ba76de095704cb13c6b791637eb7445d1444b7227e6616a940855a0effe8->leave($__internal_6d11ba76de095704cb13c6b791637eb7445d1444b7227e6616a940855a0effe8_prof);

        
        $__internal_ebae6aef00dfe0a5cb0d3da0112a0db12c4245e521c3832305340cbcdccd3caf->leave($__internal_ebae6aef00dfe0a5cb0d3da0112a0db12c4245e521c3832305340cbcdccd3caf_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_3ff2a654af4b33c2361a670b067b0a484a0b6feb2ef5818422791104d992ca94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ff2a654af4b33c2361a670b067b0a484a0b6feb2ef5818422791104d992ca94->enter($__internal_3ff2a654af4b33c2361a670b067b0a484a0b6feb2ef5818422791104d992ca94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        $__internal_448ec6ef8b6385023d2f87f5b6a2e5fe04157d47b40b393f1f88f1f4e574e386 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_448ec6ef8b6385023d2f87f5b6a2e5fe04157d47b40b393f1f88f1f4e574e386->enter($__internal_448ec6ef8b6385023d2f87f5b6a2e5fe04157d47b40b393f1f88f1f4e574e386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 75, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 77, $this->getSourceContext()); })()) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 77, $this->getSourceContext()); })())))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                echo "<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array())) {
                    $__internal_5d075bb55ede194b2099447ad866eb52dc1d5e125ae3abb744328fb9f0972860 = array("attr" => twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array()));
                    if (!is_array($__internal_5d075bb55ede194b2099447ad866eb52dc1d5e125ae3abb744328fb9f0972860)) {
                        throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                    }
                    $context['_parent'] = $context;
                    $context = array_merge($context, $__internal_5d075bb55ede194b2099447ad866eb52dc1d5e125ae3abb744328fb9f0972860);
                    $this->displayBlock("attributes", $context, $blocks);
                    $context = $context['_parent'];
                }
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 82, $this->getSourceContext()); })()))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 82, $this->getSourceContext()); })()) === false)) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 82, $this->getSourceContext()); })())))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_448ec6ef8b6385023d2f87f5b6a2e5fe04157d47b40b393f1f88f1f4e574e386->leave($__internal_448ec6ef8b6385023d2f87f5b6a2e5fe04157d47b40b393f1f88f1f4e574e386_prof);

        
        $__internal_3ff2a654af4b33c2361a670b067b0a484a0b6feb2ef5818422791104d992ca94->leave($__internal_3ff2a654af4b33c2361a670b067b0a484a0b6feb2ef5818422791104d992ca94_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_ae82298b70a5932c16027b39680881e0f9dfd316bf107df58e9e825193d8b73f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae82298b70a5932c16027b39680881e0f9dfd316bf107df58e9e825193d8b73f->enter($__internal_ae82298b70a5932c16027b39680881e0f9dfd316bf107df58e9e825193d8b73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_4fd8c1ee110af5841b2a279403550053a11fe0971580534f57e0caf07964913c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fd8c1ee110af5841b2a279403550053a11fe0971580534f57e0caf07964913c->enter($__internal_4fd8c1ee110af5841b2a279403550053a11fe0971580534f57e0caf07964913c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 88
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 88, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 88, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_4fd8c1ee110af5841b2a279403550053a11fe0971580534f57e0caf07964913c->leave($__internal_4fd8c1ee110af5841b2a279403550053a11fe0971580534f57e0caf07964913c_prof);

        
        $__internal_ae82298b70a5932c16027b39680881e0f9dfd316bf107df58e9e825193d8b73f->leave($__internal_ae82298b70a5932c16027b39680881e0f9dfd316bf107df58e9e825193d8b73f_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_4d883a5116dc2bfecb4ce522acfffb92948194443d8013784a2b541aa0cc95a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d883a5116dc2bfecb4ce522acfffb92948194443d8013784a2b541aa0cc95a3->enter($__internal_4d883a5116dc2bfecb4ce522acfffb92948194443d8013784a2b541aa0cc95a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_b34f5e9c9c47020aebd655e09aecbb22760f4bd5ae8612f9617dfeb6a2dfe341 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b34f5e9c9c47020aebd655e09aecbb22760f4bd5ae8612f9617dfeb6a2dfe341->enter($__internal_b34f5e9c9c47020aebd655e09aecbb22760f4bd5ae8612f9617dfeb6a2dfe341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 92
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 92, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 92, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_b34f5e9c9c47020aebd655e09aecbb22760f4bd5ae8612f9617dfeb6a2dfe341->leave($__internal_b34f5e9c9c47020aebd655e09aecbb22760f4bd5ae8612f9617dfeb6a2dfe341_prof);

        
        $__internal_4d883a5116dc2bfecb4ce522acfffb92948194443d8013784a2b541aa0cc95a3->leave($__internal_4d883a5116dc2bfecb4ce522acfffb92948194443d8013784a2b541aa0cc95a3_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_2f334cecb4cb115020f337a9a2b62385c784772b33adfef024249ddb8f05718d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f334cecb4cb115020f337a9a2b62385c784772b33adfef024249ddb8f05718d->enter($__internal_2f334cecb4cb115020f337a9a2b62385c784772b33adfef024249ddb8f05718d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_53aa2ed35e349795c59f7278941d459e61e519bf710375c4ed9f9a954d4e577c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53aa2ed35e349795c59f7278941d459e61e519bf710375c4ed9f9a954d4e577c->enter($__internal_53aa2ed35e349795c59f7278941d459e61e519bf710375c4ed9f9a954d4e577c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 96
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 96, $this->getSourceContext()); })()) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 100
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 100, $this->getSourceContext()); })()), "date", array()), 'errors');
            // line 101
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), "time", array()), 'errors');
            // line 102
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 102, $this->getSourceContext()); })()), "date", array()), 'widget');
            // line 103
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 103, $this->getSourceContext()); })()), "time", array()), 'widget');
            // line 104
            echo "</div>";
        }
        
        $__internal_53aa2ed35e349795c59f7278941d459e61e519bf710375c4ed9f9a954d4e577c->leave($__internal_53aa2ed35e349795c59f7278941d459e61e519bf710375c4ed9f9a954d4e577c_prof);

        
        $__internal_2f334cecb4cb115020f337a9a2b62385c784772b33adfef024249ddb8f05718d->leave($__internal_2f334cecb4cb115020f337a9a2b62385c784772b33adfef024249ddb8f05718d_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_481044babb92ba663f79259ad5112157a412fc924845ac493de0fa38f41b4ccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_481044babb92ba663f79259ad5112157a412fc924845ac493de0fa38f41b4ccf->enter($__internal_481044babb92ba663f79259ad5112157a412fc924845ac493de0fa38f41b4ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_28889d81670449d0c1ddcea3ab76c4584b3ae23d60d86241d9070678f48b8b8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28889d81670449d0c1ddcea3ab76c4584b3ae23d60d86241d9070678f48b8b8a->enter($__internal_28889d81670449d0c1ddcea3ab76c4584b3ae23d60d86241d9070678f48b8b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 109
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 109, $this->getSourceContext()); })()) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 113
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "date_pattern" does not exist.', 113, $this->getSourceContext()); })()), array("{{ year }}" =>             // line 114
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 114, $this->getSourceContext()); })()), "year", array()), 'widget'), "{{ month }}" =>             // line 115
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 115, $this->getSourceContext()); })()), "month", array()), 'widget'), "{{ day }}" =>             // line 116
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 116, $this->getSourceContext()); })()), "day", array()), 'widget')));
            // line 118
            echo "</div>";
        }
        
        $__internal_28889d81670449d0c1ddcea3ab76c4584b3ae23d60d86241d9070678f48b8b8a->leave($__internal_28889d81670449d0c1ddcea3ab76c4584b3ae23d60d86241d9070678f48b8b8a_prof);

        
        $__internal_481044babb92ba663f79259ad5112157a412fc924845ac493de0fa38f41b4ccf->leave($__internal_481044babb92ba663f79259ad5112157a412fc924845ac493de0fa38f41b4ccf_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_b6d111f0bf369b3c747e8bfbad6e162669278d41aea609f780ed2349ca5aed97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6d111f0bf369b3c747e8bfbad6e162669278d41aea609f780ed2349ca5aed97->enter($__internal_b6d111f0bf369b3c747e8bfbad6e162669278d41aea609f780ed2349ca5aed97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_4262feeadc776173fefab39b0d2f6511910816b156e70c82b343df7e25c520a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4262feeadc776173fefab39b0d2f6511910816b156e70c82b343df7e25c520a6->enter($__internal_4262feeadc776173fefab39b0d2f6511910816b156e70c82b343df7e25c520a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 123
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 123, $this->getSourceContext()); })()) == "single_text")) {
            // line 124
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 126
            $context["vars"] = ((((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 126, $this->getSourceContext()); })()) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 127
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 128
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "hour", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 128, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "minute", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            }
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 128, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "second", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            }
            // line 129
            echo "        </div>";
        }
        
        $__internal_4262feeadc776173fefab39b0d2f6511910816b156e70c82b343df7e25c520a6->leave($__internal_4262feeadc776173fefab39b0d2f6511910816b156e70c82b343df7e25c520a6_prof);

        
        $__internal_b6d111f0bf369b3c747e8bfbad6e162669278d41aea609f780ed2349ca5aed97->leave($__internal_b6d111f0bf369b3c747e8bfbad6e162669278d41aea609f780ed2349ca5aed97_prof);

    }

    // line 133
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_ec0d70399d70a7099ed24cd94f6229a1055c33cf64dddcdc1e0c81e33650b508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec0d70399d70a7099ed24cd94f6229a1055c33cf64dddcdc1e0c81e33650b508->enter($__internal_ec0d70399d70a7099ed24cd94f6229a1055c33cf64dddcdc1e0c81e33650b508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_4fbe689778afcfa154a80a0ee24447d6b236a7dac484c21ece85b531d35f9288 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fbe689778afcfa154a80a0ee24447d6b236a7dac484c21ece85b531d35f9288->enter($__internal_4fbe689778afcfa154a80a0ee24447d6b236a7dac484c21ece85b531d35f9288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 134
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 134, $this->getSourceContext()); })()) == "single_text")) {
            // line 135
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 137
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 138
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 138, $this->getSourceContext()); })()), 'errors');
            // line 139
            echo "<table class=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) || array_key_exists("table_class", $context) ? $context["table_class"] : (function () { throw new Twig_Error_Runtime('Variable "table_class" does not exist.', 139, $this->getSourceContext()); })()), "")) : ("")), "html", null, true);
            echo "\">
                <thead>
                    <tr>";
            // line 142
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 142, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 142, $this->getSourceContext()); })()), "years", array()), 'label');
                echo "</th>";
            }
            // line 143
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 143, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->getSourceContext()); })()), "months", array()), 'label');
                echo "</th>";
            }
            // line 144
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 144, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 144, $this->getSourceContext()); })()), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 145
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 145, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 145, $this->getSourceContext()); })()), "days", array()), 'label');
                echo "</th>";
            }
            // line 146
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 146, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 146, $this->getSourceContext()); })()), "hours", array()), 'label');
                echo "</th>";
            }
            // line 147
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 147, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 147, $this->getSourceContext()); })()), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 148
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 148, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 148, $this->getSourceContext()); })()), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 149
            echo "</tr>
                </thead>
                <tbody>
                    <tr>";
            // line 153
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 153, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 153, $this->getSourceContext()); })()), "years", array()), 'widget');
                echo "</td>";
            }
            // line 154
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 154, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 154, $this->getSourceContext()); })()), "months", array()), 'widget');
                echo "</td>";
            }
            // line 155
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 155, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 155, $this->getSourceContext()); })()), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 156
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 156, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 156, $this->getSourceContext()); })()), "days", array()), 'widget');
                echo "</td>";
            }
            // line 157
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 157, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 157, $this->getSourceContext()); })()), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 158
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 158, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 158, $this->getSourceContext()); })()), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 159
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 159, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 159, $this->getSourceContext()); })()), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 160
            echo "</tr>
                </tbody>
            </table>";
            // line 163
            if ((isset($context["with_invert"]) || array_key_exists("with_invert", $context) ? $context["with_invert"] : (function () { throw new Twig_Error_Runtime('Variable "with_invert" does not exist.', 163, $this->getSourceContext()); })())) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 163, $this->getSourceContext()); })()), "invert", array()), 'widget');
            }
            // line 164
            echo "</div>";
        }
        
        $__internal_4fbe689778afcfa154a80a0ee24447d6b236a7dac484c21ece85b531d35f9288->leave($__internal_4fbe689778afcfa154a80a0ee24447d6b236a7dac484c21ece85b531d35f9288_prof);

        
        $__internal_ec0d70399d70a7099ed24cd94f6229a1055c33cf64dddcdc1e0c81e33650b508->leave($__internal_ec0d70399d70a7099ed24cd94f6229a1055c33cf64dddcdc1e0c81e33650b508_prof);

    }

    // line 168
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_2666c5594740d27c132c42d9a644bc8d0f50e0c753a71ab9877c62a32181e0b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2666c5594740d27c132c42d9a644bc8d0f50e0c753a71ab9877c62a32181e0b2->enter($__internal_2666c5594740d27c132c42d9a644bc8d0f50e0c753a71ab9877c62a32181e0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_dc92b7924ae4696988544dec14998702d82a0b780eea7229ae3ec810e6d64237 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc92b7924ae4696988544dec14998702d82a0b780eea7229ae3ec810e6d64237->enter($__internal_dc92b7924ae4696988544dec14998702d82a0b780eea7229ae3ec810e6d64237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 170, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_dc92b7924ae4696988544dec14998702d82a0b780eea7229ae3ec810e6d64237->leave($__internal_dc92b7924ae4696988544dec14998702d82a0b780eea7229ae3ec810e6d64237_prof);

        
        $__internal_2666c5594740d27c132c42d9a644bc8d0f50e0c753a71ab9877c62a32181e0b2->leave($__internal_2666c5594740d27c132c42d9a644bc8d0f50e0c753a71ab9877c62a32181e0b2_prof);

    }

    // line 174
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_94361a83bb8f750118770c796e802afa892d5e4f8b793669a395f3f9996b711d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94361a83bb8f750118770c796e802afa892d5e4f8b793669a395f3f9996b711d->enter($__internal_94361a83bb8f750118770c796e802afa892d5e4f8b793669a395f3f9996b711d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        $__internal_833e59984b45af28ec30820ef40a4c27309f5f8625a63c7d2a8ba0f9caaaddd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_833e59984b45af28ec30820ef40a4c27309f5f8625a63c7d2a8ba0f9caaaddd3->enter($__internal_833e59984b45af28ec30820ef40a4c27309f5f8625a63c7d2a8ba0f9caaaddd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 175, $this->getSourceContext()); })()), "number")) : ("number"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_833e59984b45af28ec30820ef40a4c27309f5f8625a63c7d2a8ba0f9caaaddd3->leave($__internal_833e59984b45af28ec30820ef40a4c27309f5f8625a63c7d2a8ba0f9caaaddd3_prof);

        
        $__internal_94361a83bb8f750118770c796e802afa892d5e4f8b793669a395f3f9996b711d->leave($__internal_94361a83bb8f750118770c796e802afa892d5e4f8b793669a395f3f9996b711d_prof);

    }

    // line 179
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_8b8037b3016c4800db9dee819bd0c4d8412f2be5e9adcb355afbb6a5d225657f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b8037b3016c4800db9dee819bd0c4d8412f2be5e9adcb355afbb6a5d225657f->enter($__internal_8b8037b3016c4800db9dee819bd0c4d8412f2be5e9adcb355afbb6a5d225657f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_3eb8d72e720b305e61ae0f4f551087026341c8affc1268dd1fc0ebaac1f326e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eb8d72e720b305e61ae0f4f551087026341c8affc1268dd1fc0ebaac1f326e7->enter($__internal_3eb8d72e720b305e61ae0f4f551087026341c8affc1268dd1fc0ebaac1f326e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 180
        echo twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 180, $this->getSourceContext()); })()), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_3eb8d72e720b305e61ae0f4f551087026341c8affc1268dd1fc0ebaac1f326e7->leave($__internal_3eb8d72e720b305e61ae0f4f551087026341c8affc1268dd1fc0ebaac1f326e7_prof);

        
        $__internal_8b8037b3016c4800db9dee819bd0c4d8412f2be5e9adcb355afbb6a5d225657f->leave($__internal_8b8037b3016c4800db9dee819bd0c4d8412f2be5e9adcb355afbb6a5d225657f_prof);

    }

    // line 183
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_74818ebb1a72cd93920cf65c7e29fe6e77f12c486644b1730badbcece80c4153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74818ebb1a72cd93920cf65c7e29fe6e77f12c486644b1730badbcece80c4153->enter($__internal_74818ebb1a72cd93920cf65c7e29fe6e77f12c486644b1730badbcece80c4153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        $__internal_1aca3df4de6a781378dced63441b747eeb8aeb9913028a766fdc829b61130677 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aca3df4de6a781378dced63441b747eeb8aeb9913028a766fdc829b61130677->enter($__internal_1aca3df4de6a781378dced63441b747eeb8aeb9913028a766fdc829b61130677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 184
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 184, $this->getSourceContext()); })()), "url")) : ("url"));
        // line 185
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_1aca3df4de6a781378dced63441b747eeb8aeb9913028a766fdc829b61130677->leave($__internal_1aca3df4de6a781378dced63441b747eeb8aeb9913028a766fdc829b61130677_prof);

        
        $__internal_74818ebb1a72cd93920cf65c7e29fe6e77f12c486644b1730badbcece80c4153->leave($__internal_74818ebb1a72cd93920cf65c7e29fe6e77f12c486644b1730badbcece80c4153_prof);

    }

    // line 188
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_f799fa4357c11ca6bfba9ba84abda44702c8754b38da7662cc5c60cf860e33df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f799fa4357c11ca6bfba9ba84abda44702c8754b38da7662cc5c60cf860e33df->enter($__internal_f799fa4357c11ca6bfba9ba84abda44702c8754b38da7662cc5c60cf860e33df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        $__internal_3b30107c1a584505cf2d681ce1ed2a74f17b430bd8802d19d04abde85a1d8092 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b30107c1a584505cf2d681ce1ed2a74f17b430bd8802d19d04abde85a1d8092->enter($__internal_3b30107c1a584505cf2d681ce1ed2a74f17b430bd8802d19d04abde85a1d8092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 189
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 189, $this->getSourceContext()); })()), "search")) : ("search"));
        // line 190
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_3b30107c1a584505cf2d681ce1ed2a74f17b430bd8802d19d04abde85a1d8092->leave($__internal_3b30107c1a584505cf2d681ce1ed2a74f17b430bd8802d19d04abde85a1d8092_prof);

        
        $__internal_f799fa4357c11ca6bfba9ba84abda44702c8754b38da7662cc5c60cf860e33df->leave($__internal_f799fa4357c11ca6bfba9ba84abda44702c8754b38da7662cc5c60cf860e33df_prof);

    }

    // line 193
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_84151d6bb42dcc5e199571cfb7a6e1a1d36f4da0256c10e4a0e316c7a9da4aa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84151d6bb42dcc5e199571cfb7a6e1a1d36f4da0256c10e4a0e316c7a9da4aa2->enter($__internal_84151d6bb42dcc5e199571cfb7a6e1a1d36f4da0256c10e4a0e316c7a9da4aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_306a7b3c417abfe625801b4bd0054324d267f0a3403426804a451c6c8ad49195 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_306a7b3c417abfe625801b4bd0054324d267f0a3403426804a451c6c8ad49195->enter($__internal_306a7b3c417abfe625801b4bd0054324d267f0a3403426804a451c6c8ad49195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 194, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 195
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_306a7b3c417abfe625801b4bd0054324d267f0a3403426804a451c6c8ad49195->leave($__internal_306a7b3c417abfe625801b4bd0054324d267f0a3403426804a451c6c8ad49195_prof);

        
        $__internal_84151d6bb42dcc5e199571cfb7a6e1a1d36f4da0256c10e4a0e316c7a9da4aa2->leave($__internal_84151d6bb42dcc5e199571cfb7a6e1a1d36f4da0256c10e4a0e316c7a9da4aa2_prof);

    }

    // line 198
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_a93d9cc51da4200e86109874b86e85c52794ebce3cd1b73134afd5177b738c5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a93d9cc51da4200e86109874b86e85c52794ebce3cd1b73134afd5177b738c5b->enter($__internal_a93d9cc51da4200e86109874b86e85c52794ebce3cd1b73134afd5177b738c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        $__internal_eb7ff333d1b14a97d5e0c633ef14d87f977096fb8c34d96eb1d1a58afdfc92ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb7ff333d1b14a97d5e0c633ef14d87f977096fb8c34d96eb1d1a58afdfc92ba->enter($__internal_eb7ff333d1b14a97d5e0c633ef14d87f977096fb8c34d96eb1d1a58afdfc92ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 199, $this->getSourceContext()); })()), "password")) : ("password"));
        // line 200
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_eb7ff333d1b14a97d5e0c633ef14d87f977096fb8c34d96eb1d1a58afdfc92ba->leave($__internal_eb7ff333d1b14a97d5e0c633ef14d87f977096fb8c34d96eb1d1a58afdfc92ba_prof);

        
        $__internal_a93d9cc51da4200e86109874b86e85c52794ebce3cd1b73134afd5177b738c5b->leave($__internal_a93d9cc51da4200e86109874b86e85c52794ebce3cd1b73134afd5177b738c5b_prof);

    }

    // line 203
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_76aa105b4dc57cf3766e690c38ce6fbf3c974c9503229e78da36dc8ff760e193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76aa105b4dc57cf3766e690c38ce6fbf3c974c9503229e78da36dc8ff760e193->enter($__internal_76aa105b4dc57cf3766e690c38ce6fbf3c974c9503229e78da36dc8ff760e193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        $__internal_006301dbac2f91ec75fbb71512a91cfc140b425f56de02f9481068d20e77d842 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_006301dbac2f91ec75fbb71512a91cfc140b425f56de02f9481068d20e77d842->enter($__internal_006301dbac2f91ec75fbb71512a91cfc140b425f56de02f9481068d20e77d842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 204, $this->getSourceContext()); })()), "hidden")) : ("hidden"));
        // line 205
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_006301dbac2f91ec75fbb71512a91cfc140b425f56de02f9481068d20e77d842->leave($__internal_006301dbac2f91ec75fbb71512a91cfc140b425f56de02f9481068d20e77d842_prof);

        
        $__internal_76aa105b4dc57cf3766e690c38ce6fbf3c974c9503229e78da36dc8ff760e193->leave($__internal_76aa105b4dc57cf3766e690c38ce6fbf3c974c9503229e78da36dc8ff760e193_prof);

    }

    // line 208
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_986d8bbdbebe3aaae289afa9aa5abc3f50dfdce6069214bfe2660e4b0500febd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_986d8bbdbebe3aaae289afa9aa5abc3f50dfdce6069214bfe2660e4b0500febd->enter($__internal_986d8bbdbebe3aaae289afa9aa5abc3f50dfdce6069214bfe2660e4b0500febd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_8f8e7c808b67f00f1c9789f66acb6078faf49331f3f9d3d2b281ee220bfdf859 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f8e7c808b67f00f1c9789f66acb6078faf49331f3f9d3d2b281ee220bfdf859->enter($__internal_8f8e7c808b67f00f1c9789f66acb6078faf49331f3f9d3d2b281ee220bfdf859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 209
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 209, $this->getSourceContext()); })()), "email")) : ("email"));
        // line 210
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_8f8e7c808b67f00f1c9789f66acb6078faf49331f3f9d3d2b281ee220bfdf859->leave($__internal_8f8e7c808b67f00f1c9789f66acb6078faf49331f3f9d3d2b281ee220bfdf859_prof);

        
        $__internal_986d8bbdbebe3aaae289afa9aa5abc3f50dfdce6069214bfe2660e4b0500febd->leave($__internal_986d8bbdbebe3aaae289afa9aa5abc3f50dfdce6069214bfe2660e4b0500febd_prof);

    }

    // line 213
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_fafb653de04d6af48429a6384bdc8f9b98d3ca5890054cff30d499fc2ab90412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fafb653de04d6af48429a6384bdc8f9b98d3ca5890054cff30d499fc2ab90412->enter($__internal_fafb653de04d6af48429a6384bdc8f9b98d3ca5890054cff30d499fc2ab90412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        $__internal_bf1baf6e62103c1ceb9b35ab6d801ce532e0409bad663035371b5786c3139e9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf1baf6e62103c1ceb9b35ab6d801ce532e0409bad663035371b5786c3139e9e->enter($__internal_bf1baf6e62103c1ceb9b35ab6d801ce532e0409bad663035371b5786c3139e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 214
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 214, $this->getSourceContext()); })()), "range")) : ("range"));
        // line 215
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_bf1baf6e62103c1ceb9b35ab6d801ce532e0409bad663035371b5786c3139e9e->leave($__internal_bf1baf6e62103c1ceb9b35ab6d801ce532e0409bad663035371b5786c3139e9e_prof);

        
        $__internal_fafb653de04d6af48429a6384bdc8f9b98d3ca5890054cff30d499fc2ab90412->leave($__internal_fafb653de04d6af48429a6384bdc8f9b98d3ca5890054cff30d499fc2ab90412_prof);

    }

    // line 218
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_6d4b6a1e1a32132322ed061432f1dbb96226a3c19918c7170444636763c28e04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d4b6a1e1a32132322ed061432f1dbb96226a3c19918c7170444636763c28e04->enter($__internal_6d4b6a1e1a32132322ed061432f1dbb96226a3c19918c7170444636763c28e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_8c5a6c3af1cd13b176872cbb6eb10a54167bb4459926dcb7af590ac2faa819fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c5a6c3af1cd13b176872cbb6eb10a54167bb4459926dcb7af590ac2faa819fb->enter($__internal_8c5a6c3af1cd13b176872cbb6eb10a54167bb4459926dcb7af590ac2faa819fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 219
        if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 219, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 219, $this->getSourceContext()); })())))) {
            // line 220
            if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 220, $this->getSourceContext()); })()))) {
                // line 221
                $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 221, $this->getSourceContext()); })()), array("%name%" =>                 // line 222
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 222, $this->getSourceContext()); })()), "%id%" =>                 // line 223
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 223, $this->getSourceContext()); })())));
            } else {
                // line 226
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 226, $this->getSourceContext()); })()));
            }
        }
        // line 229
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 229, $this->getSourceContext()); })()), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 229, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 229, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 229, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 229, $this->getSourceContext()); })())))), "html", null, true);
        echo "</button>";
        
        $__internal_8c5a6c3af1cd13b176872cbb6eb10a54167bb4459926dcb7af590ac2faa819fb->leave($__internal_8c5a6c3af1cd13b176872cbb6eb10a54167bb4459926dcb7af590ac2faa819fb_prof);

        
        $__internal_6d4b6a1e1a32132322ed061432f1dbb96226a3c19918c7170444636763c28e04->leave($__internal_6d4b6a1e1a32132322ed061432f1dbb96226a3c19918c7170444636763c28e04_prof);

    }

    // line 232
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_2f05c5c99ad22d3ca30a1d71cd5c202d58819914754c3d7cad145d34ab8dadd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f05c5c99ad22d3ca30a1d71cd5c202d58819914754c3d7cad145d34ab8dadd1->enter($__internal_2f05c5c99ad22d3ca30a1d71cd5c202d58819914754c3d7cad145d34ab8dadd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        $__internal_095204a926b717edfcc5f5ee949727d0c5b8532960a0a5eeea8150f3f4cfe5d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_095204a926b717edfcc5f5ee949727d0c5b8532960a0a5eeea8150f3f4cfe5d7->enter($__internal_095204a926b717edfcc5f5ee949727d0c5b8532960a0a5eeea8150f3f4cfe5d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 233
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 233, $this->getSourceContext()); })()), "submit")) : ("submit"));
        // line 234
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_095204a926b717edfcc5f5ee949727d0c5b8532960a0a5eeea8150f3f4cfe5d7->leave($__internal_095204a926b717edfcc5f5ee949727d0c5b8532960a0a5eeea8150f3f4cfe5d7_prof);

        
        $__internal_2f05c5c99ad22d3ca30a1d71cd5c202d58819914754c3d7cad145d34ab8dadd1->leave($__internal_2f05c5c99ad22d3ca30a1d71cd5c202d58819914754c3d7cad145d34ab8dadd1_prof);

    }

    // line 237
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_21a17b2ee19698edf4dfdefac5ffd1fdd2106083d8559a7b609e21441ed0d323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21a17b2ee19698edf4dfdefac5ffd1fdd2106083d8559a7b609e21441ed0d323->enter($__internal_21a17b2ee19698edf4dfdefac5ffd1fdd2106083d8559a7b609e21441ed0d323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        $__internal_1e592fa194e195e31f768937c33c822bcc3830e2c88685ec5d050e83a93e511d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e592fa194e195e31f768937c33c822bcc3830e2c88685ec5d050e83a93e511d->enter($__internal_1e592fa194e195e31f768937c33c822bcc3830e2c88685ec5d050e83a93e511d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 238
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 238, $this->getSourceContext()); })()), "reset")) : ("reset"));
        // line 239
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_1e592fa194e195e31f768937c33c822bcc3830e2c88685ec5d050e83a93e511d->leave($__internal_1e592fa194e195e31f768937c33c822bcc3830e2c88685ec5d050e83a93e511d_prof);

        
        $__internal_21a17b2ee19698edf4dfdefac5ffd1fdd2106083d8559a7b609e21441ed0d323->leave($__internal_21a17b2ee19698edf4dfdefac5ffd1fdd2106083d8559a7b609e21441ed0d323_prof);

    }

    // line 242
    public function block_tel_widget($context, array $blocks = array())
    {
        $__internal_73f5f6e3e266adb43804a5830fe1af4197317e5a3af10fa2f631156bad95382d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73f5f6e3e266adb43804a5830fe1af4197317e5a3af10fa2f631156bad95382d->enter($__internal_73f5f6e3e266adb43804a5830fe1af4197317e5a3af10fa2f631156bad95382d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        $__internal_56b0ce39b95994bfba80af827b8ab70f8d7d472f39bf98d828de42a50e20a057 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56b0ce39b95994bfba80af827b8ab70f8d7d472f39bf98d828de42a50e20a057->enter($__internal_56b0ce39b95994bfba80af827b8ab70f8d7d472f39bf98d828de42a50e20a057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        // line 243
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 243, $this->getSourceContext()); })()), "tel")) : ("tel"));
        // line 244
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_56b0ce39b95994bfba80af827b8ab70f8d7d472f39bf98d828de42a50e20a057->leave($__internal_56b0ce39b95994bfba80af827b8ab70f8d7d472f39bf98d828de42a50e20a057_prof);

        
        $__internal_73f5f6e3e266adb43804a5830fe1af4197317e5a3af10fa2f631156bad95382d->leave($__internal_73f5f6e3e266adb43804a5830fe1af4197317e5a3af10fa2f631156bad95382d_prof);

    }

    // line 247
    public function block_color_widget($context, array $blocks = array())
    {
        $__internal_bc4bc00268d28166badc37d999506b2d5bb1b19261af188cbb5246d197389b14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc4bc00268d28166badc37d999506b2d5bb1b19261af188cbb5246d197389b14->enter($__internal_bc4bc00268d28166badc37d999506b2d5bb1b19261af188cbb5246d197389b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        $__internal_1b1c32fd74003aaa71957d4ea686d42d3188d797c262f4f2736aa7fbae71f505 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b1c32fd74003aaa71957d4ea686d42d3188d797c262f4f2736aa7fbae71f505->enter($__internal_1b1c32fd74003aaa71957d4ea686d42d3188d797c262f4f2736aa7fbae71f505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        // line 248
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 248, $this->getSourceContext()); })()), "color")) : ("color"));
        // line 249
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_1b1c32fd74003aaa71957d4ea686d42d3188d797c262f4f2736aa7fbae71f505->leave($__internal_1b1c32fd74003aaa71957d4ea686d42d3188d797c262f4f2736aa7fbae71f505_prof);

        
        $__internal_bc4bc00268d28166badc37d999506b2d5bb1b19261af188cbb5246d197389b14->leave($__internal_bc4bc00268d28166badc37d999506b2d5bb1b19261af188cbb5246d197389b14_prof);

    }

    // line 254
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_65418b842646aeaddf9ed2b7aa8bdeffa6e7ff4cf8a8db28ebd5d0076cbce6fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65418b842646aeaddf9ed2b7aa8bdeffa6e7ff4cf8a8db28ebd5d0076cbce6fe->enter($__internal_65418b842646aeaddf9ed2b7aa8bdeffa6e7ff4cf8a8db28ebd5d0076cbce6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_497b152f2ca707c5287433f60a1fb48c0f8771a28a7b2a96b527d076e93e221e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_497b152f2ca707c5287433f60a1fb48c0f8771a28a7b2a96b527d076e93e221e->enter($__internal_497b152f2ca707c5287433f60a1fb48c0f8771a28a7b2a96b527d076e93e221e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 255
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 255, $this->getSourceContext()); })()) === false)) {
            // line 256
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 256, $this->getSourceContext()); })())) {
                // line 257
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 257, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 257, $this->getSourceContext()); })())));
            }
            // line 259
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 259, $this->getSourceContext()); })())) {
                // line 260
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 260, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 262
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 262, $this->getSourceContext()); })()))) {
                // line 263
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 263, $this->getSourceContext()); })()))) {
                    // line 264
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 264, $this->getSourceContext()); })()), array("%name%" =>                     // line 265
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 265, $this->getSourceContext()); })()), "%id%" =>                     // line 266
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 266, $this->getSourceContext()); })())));
                } else {
                    // line 269
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 269, $this->getSourceContext()); })()));
                }
            }
            // line 272
            echo "<";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 272, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            if ((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 272, $this->getSourceContext()); })())) {
                $__internal_50c3931bcd3bffaa90f13db13261f0afe4671746010e1f8fb1c26beee6549d79 = array("attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 272, $this->getSourceContext()); })()));
                if (!is_array($__internal_50c3931bcd3bffaa90f13db13261f0afe4671746010e1f8fb1c26beee6549d79)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_50c3931bcd3bffaa90f13db13261f0afe4671746010e1f8fb1c26beee6549d79);
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })())))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 272, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            echo ">";
        }
        
        $__internal_497b152f2ca707c5287433f60a1fb48c0f8771a28a7b2a96b527d076e93e221e->leave($__internal_497b152f2ca707c5287433f60a1fb48c0f8771a28a7b2a96b527d076e93e221e_prof);

        
        $__internal_65418b842646aeaddf9ed2b7aa8bdeffa6e7ff4cf8a8db28ebd5d0076cbce6fe->leave($__internal_65418b842646aeaddf9ed2b7aa8bdeffa6e7ff4cf8a8db28ebd5d0076cbce6fe_prof);

    }

    // line 276
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_5f0f0923dbde81a05dc42b779594f26bfb23c51db1f45fef55201dbf905a02b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f0f0923dbde81a05dc42b779594f26bfb23c51db1f45fef55201dbf905a02b4->enter($__internal_5f0f0923dbde81a05dc42b779594f26bfb23c51db1f45fef55201dbf905a02b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        $__internal_5135097edd9efd65150532c44e914ebf6d88bc00a1119702377d47d8ec8bb977 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5135097edd9efd65150532c44e914ebf6d88bc00a1119702377d47d8ec8bb977->enter($__internal_5135097edd9efd65150532c44e914ebf6d88bc00a1119702377d47d8ec8bb977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_5135097edd9efd65150532c44e914ebf6d88bc00a1119702377d47d8ec8bb977->leave($__internal_5135097edd9efd65150532c44e914ebf6d88bc00a1119702377d47d8ec8bb977_prof);

        
        $__internal_5f0f0923dbde81a05dc42b779594f26bfb23c51db1f45fef55201dbf905a02b4->leave($__internal_5f0f0923dbde81a05dc42b779594f26bfb23c51db1f45fef55201dbf905a02b4_prof);

    }

    // line 280
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_25ecb4e7377120099644b90f3a76645f80604186f62e832174eaeb84d436a1a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25ecb4e7377120099644b90f3a76645f80604186f62e832174eaeb84d436a1a0->enter($__internal_25ecb4e7377120099644b90f3a76645f80604186f62e832174eaeb84d436a1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        $__internal_2426e4ec9350e0ba55a03ff9383f15d4743decf89d1671b72d214cde6302e28e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2426e4ec9350e0ba55a03ff9383f15d4743decf89d1671b72d214cde6302e28e->enter($__internal_2426e4ec9350e0ba55a03ff9383f15d4743decf89d1671b72d214cde6302e28e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 285
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_2426e4ec9350e0ba55a03ff9383f15d4743decf89d1671b72d214cde6302e28e->leave($__internal_2426e4ec9350e0ba55a03ff9383f15d4743decf89d1671b72d214cde6302e28e_prof);

        
        $__internal_25ecb4e7377120099644b90f3a76645f80604186f62e832174eaeb84d436a1a0->leave($__internal_25ecb4e7377120099644b90f3a76645f80604186f62e832174eaeb84d436a1a0_prof);

    }

    // line 288
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_aa726295e149d516140050ea96f8c15c6138dde415cf89bf9f567c516260e3e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa726295e149d516140050ea96f8c15c6138dde415cf89bf9f567c516260e3e1->enter($__internal_aa726295e149d516140050ea96f8c15c6138dde415cf89bf9f567c516260e3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_5a45874aca615195abd759a43ba7aea8567078873aada226a5c2eb9915b91ebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a45874aca615195abd759a43ba7aea8567078873aada226a5c2eb9915b91ebf->enter($__internal_5a45874aca615195abd759a43ba7aea8567078873aada226a5c2eb9915b91ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 289
        echo "<div>";
        // line 290
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 290, $this->getSourceContext()); })()), 'label');
        // line 291
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 291, $this->getSourceContext()); })()), 'errors');
        // line 292
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 292, $this->getSourceContext()); })()), 'widget');
        // line 293
        echo "</div>";
        
        $__internal_5a45874aca615195abd759a43ba7aea8567078873aada226a5c2eb9915b91ebf->leave($__internal_5a45874aca615195abd759a43ba7aea8567078873aada226a5c2eb9915b91ebf_prof);

        
        $__internal_aa726295e149d516140050ea96f8c15c6138dde415cf89bf9f567c516260e3e1->leave($__internal_aa726295e149d516140050ea96f8c15c6138dde415cf89bf9f567c516260e3e1_prof);

    }

    // line 296
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_cee645145d034b67f02bb6a95bec3709414f78e6d07adcc58f6a4166712826ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cee645145d034b67f02bb6a95bec3709414f78e6d07adcc58f6a4166712826ec->enter($__internal_cee645145d034b67f02bb6a95bec3709414f78e6d07adcc58f6a4166712826ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_4b0eb392140a44cf7f92b1234c8a3bb422e7bb8a8b8b08cab62c672aa713e8c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b0eb392140a44cf7f92b1234c8a3bb422e7bb8a8b8b08cab62c672aa713e8c1->enter($__internal_4b0eb392140a44cf7f92b1234c8a3bb422e7bb8a8b8b08cab62c672aa713e8c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 297
        echo "<div>";
        // line 298
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 298, $this->getSourceContext()); })()), 'widget');
        // line 299
        echo "</div>";
        
        $__internal_4b0eb392140a44cf7f92b1234c8a3bb422e7bb8a8b8b08cab62c672aa713e8c1->leave($__internal_4b0eb392140a44cf7f92b1234c8a3bb422e7bb8a8b8b08cab62c672aa713e8c1_prof);

        
        $__internal_cee645145d034b67f02bb6a95bec3709414f78e6d07adcc58f6a4166712826ec->leave($__internal_cee645145d034b67f02bb6a95bec3709414f78e6d07adcc58f6a4166712826ec_prof);

    }

    // line 302
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_bb3d1b99f8dd7e6bcb2008ac55e8a66b01095e87954f55281a9242332084b617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb3d1b99f8dd7e6bcb2008ac55e8a66b01095e87954f55281a9242332084b617->enter($__internal_bb3d1b99f8dd7e6bcb2008ac55e8a66b01095e87954f55281a9242332084b617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_48ca409d29ac69434341b49050663edc57b511bbc0c701a2c3885d9059cff3aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48ca409d29ac69434341b49050663edc57b511bbc0c701a2c3885d9059cff3aa->enter($__internal_48ca409d29ac69434341b49050663edc57b511bbc0c701a2c3885d9059cff3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 303, $this->getSourceContext()); })()), 'widget');
        
        $__internal_48ca409d29ac69434341b49050663edc57b511bbc0c701a2c3885d9059cff3aa->leave($__internal_48ca409d29ac69434341b49050663edc57b511bbc0c701a2c3885d9059cff3aa_prof);

        
        $__internal_bb3d1b99f8dd7e6bcb2008ac55e8a66b01095e87954f55281a9242332084b617->leave($__internal_bb3d1b99f8dd7e6bcb2008ac55e8a66b01095e87954f55281a9242332084b617_prof);

    }

    // line 308
    public function block_form($context, array $blocks = array())
    {
        $__internal_a5923bb00d3fbead3a283a67f964e57f4f792b12716ee203a60ed05c4f5f00ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5923bb00d3fbead3a283a67f964e57f4f792b12716ee203a60ed05c4f5f00ac->enter($__internal_a5923bb00d3fbead3a283a67f964e57f4f792b12716ee203a60ed05c4f5f00ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_0031851c5bbc7737ce5164c3c14fb822adbe0ddf0db9396e8bc5322f2c5791de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0031851c5bbc7737ce5164c3c14fb822adbe0ddf0db9396e8bc5322f2c5791de->enter($__internal_0031851c5bbc7737ce5164c3c14fb822adbe0ddf0db9396e8bc5322f2c5791de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 309
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 309, $this->getSourceContext()); })()), 'form_start');
        // line 310
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 310, $this->getSourceContext()); })()), 'widget');
        // line 311
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 311, $this->getSourceContext()); })()), 'form_end');
        
        $__internal_0031851c5bbc7737ce5164c3c14fb822adbe0ddf0db9396e8bc5322f2c5791de->leave($__internal_0031851c5bbc7737ce5164c3c14fb822adbe0ddf0db9396e8bc5322f2c5791de_prof);

        
        $__internal_a5923bb00d3fbead3a283a67f964e57f4f792b12716ee203a60ed05c4f5f00ac->leave($__internal_a5923bb00d3fbead3a283a67f964e57f4f792b12716ee203a60ed05c4f5f00ac_prof);

    }

    // line 314
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_79a68cc415e9fd0def1ecb48785f65e033f3362ef2774093e7f9d072d0b5c708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79a68cc415e9fd0def1ecb48785f65e033f3362ef2774093e7f9d072d0b5c708->enter($__internal_79a68cc415e9fd0def1ecb48785f65e033f3362ef2774093e7f9d072d0b5c708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_9901513aa2f43d4cc1b6edaf073fa1fad5c99e89dd1561eed44b9624df8d497a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9901513aa2f43d4cc1b6edaf073fa1fad5c99e89dd1561eed44b9624df8d497a->enter($__internal_9901513aa2f43d4cc1b6edaf073fa1fad5c99e89dd1561eed44b9624df8d497a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 315
        twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 315, $this->getSourceContext()); })()), "setMethodRendered", array(), "method");
        // line 316
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 316, $this->getSourceContext()); })()));
        // line 317
        if (twig_in_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 317, $this->getSourceContext()); })()), array(0 => "GET", 1 => "POST"))) {
            // line 318
            $context["form_method"] = (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 318, $this->getSourceContext()); })());
        } else {
            // line 320
            $context["form_method"] = "POST";
        }
        // line 322
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 322, $this->getSourceContext()); })()), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 322, $this->getSourceContext()); })())), "html", null, true);
        echo "\"";
        if (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 322, $this->getSourceContext()); })()) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 322, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 322, $this->getSourceContext()); })()));
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
        if ((isset($context["multipart"]) || array_key_exists("multipart", $context) ? $context["multipart"] : (function () { throw new Twig_Error_Runtime('Variable "multipart" does not exist.', 322, $this->getSourceContext()); })())) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 323
        if (((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 323, $this->getSourceContext()); })()) != (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 323, $this->getSourceContext()); })()))) {
            // line 324
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 324, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />";
        }
        
        $__internal_9901513aa2f43d4cc1b6edaf073fa1fad5c99e89dd1561eed44b9624df8d497a->leave($__internal_9901513aa2f43d4cc1b6edaf073fa1fad5c99e89dd1561eed44b9624df8d497a_prof);

        
        $__internal_79a68cc415e9fd0def1ecb48785f65e033f3362ef2774093e7f9d072d0b5c708->leave($__internal_79a68cc415e9fd0def1ecb48785f65e033f3362ef2774093e7f9d072d0b5c708_prof);

    }

    // line 328
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_a58cfcb22b1d9fc730cf2b0122c9eb79b99473685b687c66f9e1a3e9f2fb9313 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a58cfcb22b1d9fc730cf2b0122c9eb79b99473685b687c66f9e1a3e9f2fb9313->enter($__internal_a58cfcb22b1d9fc730cf2b0122c9eb79b99473685b687c66f9e1a3e9f2fb9313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        $__internal_09f4224eec12cb92f902b49474805227c48fdbac27536e8aef0d08ea4ab0ee56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09f4224eec12cb92f902b49474805227c48fdbac27536e8aef0d08ea4ab0ee56->enter($__internal_09f4224eec12cb92f902b49474805227c48fdbac27536e8aef0d08ea4ab0ee56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 329
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) || array_key_exists("render_rest", $context) ? $context["render_rest"] : (function () { throw new Twig_Error_Runtime('Variable "render_rest" does not exist.', 329, $this->getSourceContext()); })()))) {
            // line 330
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 330, $this->getSourceContext()); })()), 'rest');
        }
        // line 332
        echo "</form>";
        
        $__internal_09f4224eec12cb92f902b49474805227c48fdbac27536e8aef0d08ea4ab0ee56->leave($__internal_09f4224eec12cb92f902b49474805227c48fdbac27536e8aef0d08ea4ab0ee56_prof);

        
        $__internal_a58cfcb22b1d9fc730cf2b0122c9eb79b99473685b687c66f9e1a3e9f2fb9313->leave($__internal_a58cfcb22b1d9fc730cf2b0122c9eb79b99473685b687c66f9e1a3e9f2fb9313_prof);

    }

    // line 335
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_7e09f828b898edf201b8b5f526ac9f92b700a63171b63921c2d6c1c67a54378a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e09f828b898edf201b8b5f526ac9f92b700a63171b63921c2d6c1c67a54378a->enter($__internal_7e09f828b898edf201b8b5f526ac9f92b700a63171b63921c2d6c1c67a54378a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_72141dc74040daee7649199eb20292216cba9c4ad7fece0eb012b1772d42069a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72141dc74040daee7649199eb20292216cba9c4ad7fece0eb012b1772d42069a->enter($__internal_72141dc74040daee7649199eb20292216cba9c4ad7fece0eb012b1772d42069a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 336
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 336, $this->getSourceContext()); })())) > 0)) {
            // line 337
            echo "<ul>";
            // line 338
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 338, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 339
                echo "<li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 341
            echo "</ul>";
        }
        
        $__internal_72141dc74040daee7649199eb20292216cba9c4ad7fece0eb012b1772d42069a->leave($__internal_72141dc74040daee7649199eb20292216cba9c4ad7fece0eb012b1772d42069a_prof);

        
        $__internal_7e09f828b898edf201b8b5f526ac9f92b700a63171b63921c2d6c1c67a54378a->leave($__internal_7e09f828b898edf201b8b5f526ac9f92b700a63171b63921c2d6c1c67a54378a_prof);

    }

    // line 345
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_7f30d2a740b60f66023cb56f1256454e023ac8b85c7cb24ff6e44dff1a3bf6ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f30d2a740b60f66023cb56f1256454e023ac8b85c7cb24ff6e44dff1a3bf6ed->enter($__internal_7f30d2a740b60f66023cb56f1256454e023ac8b85c7cb24ff6e44dff1a3bf6ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        $__internal_fa028e39d67df1fe6dda353818b6b76309296b5cc41546edab22fe2c4060950f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa028e39d67df1fe6dda353818b6b76309296b5cc41546edab22fe2c4060950f->enter($__internal_fa028e39d67df1fe6dda353818b6b76309296b5cc41546edab22fe2c4060950f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 346
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 346, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 347
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "rendered", array())) {
                // line 348
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 352
        if (( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 352, $this->getSourceContext()); })()), "methodRendered", array()) && Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 352, $this->getSourceContext()); })())))) {
            // line 353
            twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 353, $this->getSourceContext()); })()), "setMethodRendered", array(), "method");
            // line 354
            $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 354, $this->getSourceContext()); })()));
            // line 355
            if (twig_in_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 355, $this->getSourceContext()); })()), array(0 => "GET", 1 => "POST"))) {
                // line 356
                $context["form_method"] = (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 356, $this->getSourceContext()); })());
            } else {
                // line 358
                $context["form_method"] = "POST";
            }
            // line 361
            if (((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 361, $this->getSourceContext()); })()) != (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 361, $this->getSourceContext()); })()))) {
                // line 362
                echo "<input type=\"hidden\" name=\"_method\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 362, $this->getSourceContext()); })()), "html", null, true);
                echo "\" />";
            }
        }
        
        $__internal_fa028e39d67df1fe6dda353818b6b76309296b5cc41546edab22fe2c4060950f->leave($__internal_fa028e39d67df1fe6dda353818b6b76309296b5cc41546edab22fe2c4060950f_prof);

        
        $__internal_7f30d2a740b60f66023cb56f1256454e023ac8b85c7cb24ff6e44dff1a3bf6ed->leave($__internal_7f30d2a740b60f66023cb56f1256454e023ac8b85c7cb24ff6e44dff1a3bf6ed_prof);

    }

    // line 369
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_a72ef91ce5bd96866ec5b97a090e38cf78952d0b3abaf9b8f9f4df0d5c2cc781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a72ef91ce5bd96866ec5b97a090e38cf78952d0b3abaf9b8f9f4df0d5c2cc781->enter($__internal_a72ef91ce5bd96866ec5b97a090e38cf78952d0b3abaf9b8f9f4df0d5c2cc781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        $__internal_0e04ba91ae8ffacb480f0fd38282757ef3426dd2ab387786ea5cd7754ff537f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e04ba91ae8ffacb480f0fd38282757ef3426dd2ab387786ea5cd7754ff537f5->enter($__internal_0e04ba91ae8ffacb480f0fd38282757ef3426dd2ab387786ea5cd7754ff537f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 370
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 370, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 371
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_0e04ba91ae8ffacb480f0fd38282757ef3426dd2ab387786ea5cd7754ff537f5->leave($__internal_0e04ba91ae8ffacb480f0fd38282757ef3426dd2ab387786ea5cd7754ff537f5_prof);

        
        $__internal_a72ef91ce5bd96866ec5b97a090e38cf78952d0b3abaf9b8f9f4df0d5c2cc781->leave($__internal_a72ef91ce5bd96866ec5b97a090e38cf78952d0b3abaf9b8f9f4df0d5c2cc781_prof);

    }

    // line 375
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_1fa8463a816cb3d695b10d7d2fc99c0eadd942602d966636e3f6c2111209aa61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa8463a816cb3d695b10d7d2fc99c0eadd942602d966636e3f6c2111209aa61->enter($__internal_1fa8463a816cb3d695b10d7d2fc99c0eadd942602d966636e3f6c2111209aa61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_f65b7aa13bd73461f51773d705b33b66b108fd4a55e5227f31fea4d3d1e435c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f65b7aa13bd73461f51773d705b33b66b108fd4a55e5227f31fea4d3d1e435c3->enter($__internal_f65b7aa13bd73461f51773d705b33b66b108fd4a55e5227f31fea4d3d1e435c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 376
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 376, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 376, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        // line 377
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 377, $this->getSourceContext()); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 378
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 378, $this->getSourceContext()); })())) {
            echo " required=\"required\"";
        }
        // line 379
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_f65b7aa13bd73461f51773d705b33b66b108fd4a55e5227f31fea4d3d1e435c3->leave($__internal_f65b7aa13bd73461f51773d705b33b66b108fd4a55e5227f31fea4d3d1e435c3_prof);

        
        $__internal_1fa8463a816cb3d695b10d7d2fc99c0eadd942602d966636e3f6c2111209aa61->leave($__internal_1fa8463a816cb3d695b10d7d2fc99c0eadd942602d966636e3f6c2111209aa61_prof);

    }

    // line 382
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_079893f174c64e9297812ad373682c8899521eb6339bda4f71eb654440139bf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_079893f174c64e9297812ad373682c8899521eb6339bda4f71eb654440139bf7->enter($__internal_079893f174c64e9297812ad373682c8899521eb6339bda4f71eb654440139bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        $__internal_2eb601e375dc9d26c6449e337e1dcbd323ac5ba54a877f4288f21053e555c23c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eb601e375dc9d26c6449e337e1dcbd323ac5ba54a877f4288f21053e555c23c->enter($__internal_2eb601e375dc9d26c6449e337e1dcbd323ac5ba54a877f4288f21053e555c23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 383
        if ( !twig_test_empty((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        // line 384
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_2eb601e375dc9d26c6449e337e1dcbd323ac5ba54a877f4288f21053e555c23c->leave($__internal_2eb601e375dc9d26c6449e337e1dcbd323ac5ba54a877f4288f21053e555c23c_prof);

        
        $__internal_079893f174c64e9297812ad373682c8899521eb6339bda4f71eb654440139bf7->leave($__internal_079893f174c64e9297812ad373682c8899521eb6339bda4f71eb654440139bf7_prof);

    }

    // line 387
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_c783ba78d158f25e2d9274e350d755d3ac8bb42683c657d80dbe74a2895bd390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c783ba78d158f25e2d9274e350d755d3ac8bb42683c657d80dbe74a2895bd390->enter($__internal_c783ba78d158f25e2d9274e350d755d3ac8bb42683c657d80dbe74a2895bd390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        $__internal_a269cb1f117722bde69e58c4b5d123f91d597c38e39ea29d8c6e4bd51eabe7db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a269cb1f117722bde69e58c4b5d123f91d597c38e39ea29d8c6e4bd51eabe7db->enter($__internal_a269cb1f117722bde69e58c4b5d123f91d597c38e39ea29d8c6e4bd51eabe7db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 388
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 388, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 388, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 388, $this->getSourceContext()); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 389
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_a269cb1f117722bde69e58c4b5d123f91d597c38e39ea29d8c6e4bd51eabe7db->leave($__internal_a269cb1f117722bde69e58c4b5d123f91d597c38e39ea29d8c6e4bd51eabe7db_prof);

        
        $__internal_c783ba78d158f25e2d9274e350d755d3ac8bb42683c657d80dbe74a2895bd390->leave($__internal_c783ba78d158f25e2d9274e350d755d3ac8bb42683c657d80dbe74a2895bd390_prof);

    }

    // line 392
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_bc3f56080d5744d0dda96c3d413633bcb0d33fabe173a097e9f86cd2f3729ea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc3f56080d5744d0dda96c3d413633bcb0d33fabe173a097e9f86cd2f3729ea1->enter($__internal_bc3f56080d5744d0dda96c3d413633bcb0d33fabe173a097e9f86cd2f3729ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        $__internal_708c39356fc6347f9f5612786ac2690ab7cfe107f1028c10d1c60f4e3d5ac9c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_708c39356fc6347f9f5612786ac2690ab7cfe107f1028c10d1c60f4e3d5ac9c7->enter($__internal_708c39356fc6347f9f5612786ac2690ab7cfe107f1028c10d1c60f4e3d5ac9c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 393
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 393, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 394
            echo " ";
            // line 395
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 396
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 396, $this->getSourceContext()); })()) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 396, $this->getSourceContext()); })())))), "html", null, true);
                echo "\"";
            } elseif ((            // line 397
$context["attrvalue"] === true)) {
                // line 398
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 399
$context["attrvalue"] === false)) {
                // line 400
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_708c39356fc6347f9f5612786ac2690ab7cfe107f1028c10d1c60f4e3d5ac9c7->leave($__internal_708c39356fc6347f9f5612786ac2690ab7cfe107f1028c10d1c60f4e3d5ac9c7_prof);

        
        $__internal_bc3f56080d5744d0dda96c3d413633bcb0d33fabe173a097e9f86cd2f3729ea1->leave($__internal_bc3f56080d5744d0dda96c3d413633bcb0d33fabe173a097e9f86cd2f3729ea1_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1654 => 400,  1652 => 399,  1647 => 398,  1645 => 397,  1640 => 396,  1638 => 395,  1636 => 394,  1632 => 393,  1623 => 392,  1613 => 389,  1604 => 388,  1595 => 387,  1585 => 384,  1579 => 383,  1570 => 382,  1560 => 379,  1556 => 378,  1552 => 377,  1546 => 376,  1537 => 375,  1523 => 371,  1519 => 370,  1510 => 369,  1496 => 362,  1494 => 361,  1491 => 358,  1488 => 356,  1486 => 355,  1484 => 354,  1482 => 353,  1480 => 352,  1473 => 348,  1471 => 347,  1467 => 346,  1458 => 345,  1447 => 341,  1439 => 339,  1435 => 338,  1433 => 337,  1431 => 336,  1422 => 335,  1412 => 332,  1409 => 330,  1407 => 329,  1398 => 328,  1385 => 324,  1383 => 323,  1356 => 322,  1353 => 320,  1350 => 318,  1348 => 317,  1346 => 316,  1344 => 315,  1335 => 314,  1325 => 311,  1323 => 310,  1321 => 309,  1312 => 308,  1302 => 303,  1293 => 302,  1283 => 299,  1281 => 298,  1279 => 297,  1270 => 296,  1260 => 293,  1258 => 292,  1256 => 291,  1254 => 290,  1252 => 289,  1243 => 288,  1233 => 285,  1224 => 280,  1207 => 276,  1180 => 272,  1176 => 269,  1173 => 266,  1172 => 265,  1171 => 264,  1169 => 263,  1167 => 262,  1164 => 260,  1162 => 259,  1159 => 257,  1157 => 256,  1155 => 255,  1146 => 254,  1136 => 249,  1134 => 248,  1125 => 247,  1115 => 244,  1113 => 243,  1104 => 242,  1094 => 239,  1092 => 238,  1083 => 237,  1073 => 234,  1071 => 233,  1062 => 232,  1046 => 229,  1042 => 226,  1039 => 223,  1038 => 222,  1037 => 221,  1035 => 220,  1033 => 219,  1024 => 218,  1014 => 215,  1012 => 214,  1003 => 213,  993 => 210,  991 => 209,  982 => 208,  972 => 205,  970 => 204,  961 => 203,  951 => 200,  949 => 199,  940 => 198,  929 => 195,  927 => 194,  918 => 193,  908 => 190,  906 => 189,  897 => 188,  887 => 185,  885 => 184,  876 => 183,  866 => 180,  857 => 179,  847 => 176,  845 => 175,  836 => 174,  826 => 171,  824 => 170,  815 => 168,  804 => 164,  800 => 163,  796 => 160,  790 => 159,  784 => 158,  778 => 157,  772 => 156,  766 => 155,  760 => 154,  754 => 153,  749 => 149,  743 => 148,  737 => 147,  731 => 146,  725 => 145,  719 => 144,  713 => 143,  707 => 142,  701 => 139,  699 => 138,  695 => 137,  692 => 135,  690 => 134,  681 => 133,  670 => 129,  660 => 128,  655 => 127,  653 => 126,  650 => 124,  648 => 123,  639 => 122,  628 => 118,  626 => 116,  625 => 115,  624 => 114,  623 => 113,  619 => 112,  616 => 110,  614 => 109,  605 => 108,  594 => 104,  592 => 103,  590 => 102,  588 => 101,  586 => 100,  582 => 99,  579 => 97,  577 => 96,  568 => 95,  548 => 92,  539 => 91,  519 => 88,  510 => 87,  469 => 82,  466 => 80,  464 => 79,  462 => 78,  457 => 77,  455 => 76,  438 => 75,  429 => 74,  419 => 71,  417 => 70,  415 => 69,  409 => 66,  407 => 65,  405 => 64,  403 => 63,  401 => 62,  392 => 60,  390 => 59,  383 => 58,  380 => 56,  378 => 55,  369 => 54,  359 => 51,  353 => 49,  351 => 48,  347 => 47,  343 => 46,  334 => 45,  323 => 41,  320 => 39,  318 => 38,  309 => 37,  295 => 34,  286 => 33,  276 => 30,  273 => 28,  271 => 27,  262 => 26,  252 => 23,  250 => 22,  248 => 21,  245 => 19,  243 => 18,  239 => 17,  230 => 16,  210 => 13,  208 => 12,  199 => 11,  188 => 7,  185 => 5,  183 => 4,  174 => 3,  164 => 392,  162 => 387,  160 => 382,  158 => 375,  156 => 369,  153 => 366,  151 => 345,  149 => 335,  147 => 328,  145 => 314,  143 => 308,  141 => 302,  139 => 296,  137 => 288,  135 => 280,  133 => 276,  131 => 254,  129 => 247,  127 => 242,  125 => 237,  123 => 232,  121 => 218,  119 => 213,  117 => 208,  115 => 203,  113 => 198,  111 => 193,  109 => 188,  107 => 183,  105 => 179,  103 => 174,  101 => 168,  99 => 133,  97 => 122,  95 => 108,  93 => 95,  91 => 91,  89 => 87,  87 => 74,  85 => 54,  83 => 45,  81 => 37,  79 => 33,  77 => 26,  75 => 16,  73 => 11,  71 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Widgets #}

{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
    <div {{ block('widget_container_attributes') }}>
        {%- if form is rootform -%}
            {{ form_errors(form) }}
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
    {% if prototype is defined %}
        {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
    {% endif %}
    {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
    {% if expanded %}
        {{- block('choice_widget_expanded') -}}
    {% else %}
        {{- block('choice_widget_collapsed') -}}
    {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
        {{- form_widget(child) -}}
        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice.attr %}{% with { attr: choice.attr } %}{{ block('attributes') }}{% endwith %}{% endif %}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock radio_widget -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <table class=\"{{ table_class|default('') }}\">
                <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                </tbody>
            </table>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{%- block number_widget -%}
    {# type=\"number\" doesn't work with floats #}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
    {%- set type = type|default('number') -%}
    {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
    {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
    {%- set type = type|default('url') -%}
    {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
    {%- set type = type|default('search') -%}
    {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
    {%- set type = type|default('password') -%}
    {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
    {%- set type = type|default('hidden') -%}
    {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
    {%- set type = type|default('email') -%}
    {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block range_widget -%}
    {% set type = type|default('range') %}
    {{- block('form_widget_simple') -}}
{%- endblock range_widget %}

{%- block button_widget -%}
    {%- if label is not same as(false) and label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {{ block('button_widget') }}
{%- endblock reset_widget -%}

{%- block tel_widget -%}
    {%- set type = type|default('tel') -%}
    {{ block('form_widget_simple') }}
{%- endblock tel_widget -%}

{%- block color_widget -%}
    {%- set type = type|default('color') -%}
    {{ block('form_widget_simple') }}
{%- endblock color_widget -%}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <{{ element|default('label') }}{% if label_attr %}{% with { attr: label_attr } %}{{ block('attributes') }}{% endwith %}{% endif %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</{{ element|default('label') }}>
    {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
    {#
    No need to render the errors here, as all errors are mapped
    to the first child (see RepeatedTypeValidatorExtension).
    #}
    {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
    <div>
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock form_row -%}

{%- block button_row -%}
    <div>
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
    {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
    {{ form_start(form) }}
        {{- form_widget(form) -}}
    {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
    {%- do form.setMethodRendered() -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
    <form name=\"{{ name }}\" method=\"{{ form_method|lower }}\"{% if action != '' %} action=\"{{ action }}\"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
    {%- if not render_rest is defined or render_rest -%}
        {{ form_rest(form) }}
    {%- endif -%}
    </form>
{%- endblock form_end -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
    <ul>
        {%- for error in errors -%}
            <li>{{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
    {% for child in form -%}
        {% if not child.rendered %}
            {{- form_row(child) -}}
        {% endif %}
    {%- endfor -%}

    {% if not form.methodRendered and form is rootform %}
        {%- do form.setMethodRendered() -%}
        {% set method = method|upper %}
        {%- if method in [\"GET\", \"POST\"] -%}
            {% set form_method = method %}
        {%- else -%}
            {% set form_method = \"POST\" %}
        {%- endif -%}

        {%- if form_method != method -%}
            <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
        {%- endif -%}
    {% endif -%}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
    {% for child in form %}
        {{- form_row(child) -}}
    {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"
    {%- if disabled %} disabled=\"disabled\"{% endif -%}
    {%- if required %} required=\"required\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
    {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
    {{ block('attributes') }}
{%- endblock button_attributes -%}

{% block attributes -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}
", "form_div_layout.html.twig", "/Users/Slote/Desktop/XMR4U/vendor/symfony/twig-bridge/Resources/views/Form/form_div_layout.html.twig");
    }
}
