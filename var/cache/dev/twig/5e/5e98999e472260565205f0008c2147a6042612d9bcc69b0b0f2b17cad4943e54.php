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
        $__internal_5c4926d53a5b4d894ba40a9b1dc270f8c91ab964ee59d06115e6e99a1e10c708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c4926d53a5b4d894ba40a9b1dc270f8c91ab964ee59d06115e6e99a1e10c708->enter($__internal_5c4926d53a5b4d894ba40a9b1dc270f8c91ab964ee59d06115e6e99a1e10c708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_4fbc6e989e4f55da270fe3525d9be0052bf1ce16b2de0f40cace3999d293e8cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fbc6e989e4f55da270fe3525d9be0052bf1ce16b2de0f40cace3999d293e8cb->enter($__internal_4fbc6e989e4f55da270fe3525d9be0052bf1ce16b2de0f40cace3999d293e8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

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
        
        $__internal_5c4926d53a5b4d894ba40a9b1dc270f8c91ab964ee59d06115e6e99a1e10c708->leave($__internal_5c4926d53a5b4d894ba40a9b1dc270f8c91ab964ee59d06115e6e99a1e10c708_prof);

        
        $__internal_4fbc6e989e4f55da270fe3525d9be0052bf1ce16b2de0f40cace3999d293e8cb->leave($__internal_4fbc6e989e4f55da270fe3525d9be0052bf1ce16b2de0f40cace3999d293e8cb_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_7e96032f2d7668c97811abdc4c86f7a4f5e4dccfc8e6fc403b8a2977cbc62f0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e96032f2d7668c97811abdc4c86f7a4f5e4dccfc8e6fc403b8a2977cbc62f0e->enter($__internal_7e96032f2d7668c97811abdc4c86f7a4f5e4dccfc8e6fc403b8a2977cbc62f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_13a70808e0fabe24568385469656a0fb4dbd65ce28533ab2735bbe21d2f2f913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13a70808e0fabe24568385469656a0fb4dbd65ce28533ab2735bbe21d2f2f913->enter($__internal_13a70808e0fabe24568385469656a0fb4dbd65ce28533ab2735bbe21d2f2f913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_13a70808e0fabe24568385469656a0fb4dbd65ce28533ab2735bbe21d2f2f913->leave($__internal_13a70808e0fabe24568385469656a0fb4dbd65ce28533ab2735bbe21d2f2f913_prof);

        
        $__internal_7e96032f2d7668c97811abdc4c86f7a4f5e4dccfc8e6fc403b8a2977cbc62f0e->leave($__internal_7e96032f2d7668c97811abdc4c86f7a4f5e4dccfc8e6fc403b8a2977cbc62f0e_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_b58f4f1a9747ea679b556db12377a576eaa947cb977080d8e6dc139a559cd9d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b58f4f1a9747ea679b556db12377a576eaa947cb977080d8e6dc139a559cd9d5->enter($__internal_b58f4f1a9747ea679b556db12377a576eaa947cb977080d8e6dc139a559cd9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_20519aed1825f5abcbd24c41a02cbc2bf122bbed13ea2a99c08dea154c78c178 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20519aed1825f5abcbd24c41a02cbc2bf122bbed13ea2a99c08dea154c78c178->enter($__internal_20519aed1825f5abcbd24c41a02cbc2bf122bbed13ea2a99c08dea154c78c178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_20519aed1825f5abcbd24c41a02cbc2bf122bbed13ea2a99c08dea154c78c178->leave($__internal_20519aed1825f5abcbd24c41a02cbc2bf122bbed13ea2a99c08dea154c78c178_prof);

        
        $__internal_b58f4f1a9747ea679b556db12377a576eaa947cb977080d8e6dc139a559cd9d5->leave($__internal_b58f4f1a9747ea679b556db12377a576eaa947cb977080d8e6dc139a559cd9d5_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_7ba37b00af5a8bf5336c386caba099a1bf921990aa18bb6cda7711f4e2cde23b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ba37b00af5a8bf5336c386caba099a1bf921990aa18bb6cda7711f4e2cde23b->enter($__internal_7ba37b00af5a8bf5336c386caba099a1bf921990aa18bb6cda7711f4e2cde23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_0d4802bbbd3b58ad00ff664c2ea8d013ecb85deb340cd28d815b51a8d4fc5f88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d4802bbbd3b58ad00ff664c2ea8d013ecb85deb340cd28d815b51a8d4fc5f88->enter($__internal_0d4802bbbd3b58ad00ff664c2ea8d013ecb85deb340cd28d815b51a8d4fc5f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_0d4802bbbd3b58ad00ff664c2ea8d013ecb85deb340cd28d815b51a8d4fc5f88->leave($__internal_0d4802bbbd3b58ad00ff664c2ea8d013ecb85deb340cd28d815b51a8d4fc5f88_prof);

        
        $__internal_7ba37b00af5a8bf5336c386caba099a1bf921990aa18bb6cda7711f4e2cde23b->leave($__internal_7ba37b00af5a8bf5336c386caba099a1bf921990aa18bb6cda7711f4e2cde23b_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_cd1760fb33921f295f60b817f601dac1b059bee1a22a8c942bb3e92ecf192a5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd1760fb33921f295f60b817f601dac1b059bee1a22a8c942bb3e92ecf192a5b->enter($__internal_cd1760fb33921f295f60b817f601dac1b059bee1a22a8c942bb3e92ecf192a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_4095bca8b01de31860d84135c2988b2270be3c706f02c41fd9fe591876b0ce1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4095bca8b01de31860d84135c2988b2270be3c706f02c41fd9fe591876b0ce1d->enter($__internal_4095bca8b01de31860d84135c2988b2270be3c706f02c41fd9fe591876b0ce1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

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
        
        $__internal_4095bca8b01de31860d84135c2988b2270be3c706f02c41fd9fe591876b0ce1d->leave($__internal_4095bca8b01de31860d84135c2988b2270be3c706f02c41fd9fe591876b0ce1d_prof);

        
        $__internal_cd1760fb33921f295f60b817f601dac1b059bee1a22a8c942bb3e92ecf192a5b->leave($__internal_cd1760fb33921f295f60b817f601dac1b059bee1a22a8c942bb3e92ecf192a5b_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_4e1157c7251ada68751daad2647b145c42236288b24970f5e4d14130ae1d4616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e1157c7251ada68751daad2647b145c42236288b24970f5e4d14130ae1d4616->enter($__internal_4e1157c7251ada68751daad2647b145c42236288b24970f5e4d14130ae1d4616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_f358674d73bb21efd8c0ae9cb2573bf95445a7a77faca61f6e86679e7488ff41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f358674d73bb21efd8c0ae9cb2573bf95445a7a77faca61f6e86679e7488ff41->enter($__internal_f358674d73bb21efd8c0ae9cb2573bf95445a7a77faca61f6e86679e7488ff41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_f358674d73bb21efd8c0ae9cb2573bf95445a7a77faca61f6e86679e7488ff41->leave($__internal_f358674d73bb21efd8c0ae9cb2573bf95445a7a77faca61f6e86679e7488ff41_prof);

        
        $__internal_4e1157c7251ada68751daad2647b145c42236288b24970f5e4d14130ae1d4616->leave($__internal_4e1157c7251ada68751daad2647b145c42236288b24970f5e4d14130ae1d4616_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_d48e75161aec242dba9f309c733ce5c331905c29d6cacbd9ecb70e6e5075ae9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d48e75161aec242dba9f309c733ce5c331905c29d6cacbd9ecb70e6e5075ae9f->enter($__internal_d48e75161aec242dba9f309c733ce5c331905c29d6cacbd9ecb70e6e5075ae9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_68264487dfa305abac17f75fc751663599e232eaa9f88ee751a2dc33563baad7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68264487dfa305abac17f75fc751663599e232eaa9f88ee751a2dc33563baad7->enter($__internal_68264487dfa305abac17f75fc751663599e232eaa9f88ee751a2dc33563baad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_68264487dfa305abac17f75fc751663599e232eaa9f88ee751a2dc33563baad7->leave($__internal_68264487dfa305abac17f75fc751663599e232eaa9f88ee751a2dc33563baad7_prof);

        
        $__internal_d48e75161aec242dba9f309c733ce5c331905c29d6cacbd9ecb70e6e5075ae9f->leave($__internal_d48e75161aec242dba9f309c733ce5c331905c29d6cacbd9ecb70e6e5075ae9f_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_34e3b29f5c253e501c1ac030ded0616042ca9931484c7459aeb56699e881f954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34e3b29f5c253e501c1ac030ded0616042ca9931484c7459aeb56699e881f954->enter($__internal_34e3b29f5c253e501c1ac030ded0616042ca9931484c7459aeb56699e881f954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_05f9e05175c39520f3596944720e43fc9ae2baf9b2d28b482316dff7b50bce43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05f9e05175c39520f3596944720e43fc9ae2baf9b2d28b482316dff7b50bce43->enter($__internal_05f9e05175c39520f3596944720e43fc9ae2baf9b2d28b482316dff7b50bce43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_05f9e05175c39520f3596944720e43fc9ae2baf9b2d28b482316dff7b50bce43->leave($__internal_05f9e05175c39520f3596944720e43fc9ae2baf9b2d28b482316dff7b50bce43_prof);

        
        $__internal_34e3b29f5c253e501c1ac030ded0616042ca9931484c7459aeb56699e881f954->leave($__internal_34e3b29f5c253e501c1ac030ded0616042ca9931484c7459aeb56699e881f954_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_8b53e524bc6c1fe9f07e9098de62b2f4b7f0cfaa397920d86402d0de7af2c68c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b53e524bc6c1fe9f07e9098de62b2f4b7f0cfaa397920d86402d0de7af2c68c->enter($__internal_8b53e524bc6c1fe9f07e9098de62b2f4b7f0cfaa397920d86402d0de7af2c68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_5077aee6f1f3f838f6a6c8afe8f29ce9e843a192bc6b48ad629769234c64a57a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5077aee6f1f3f838f6a6c8afe8f29ce9e843a192bc6b48ad629769234c64a57a->enter($__internal_5077aee6f1f3f838f6a6c8afe8f29ce9e843a192bc6b48ad629769234c64a57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_5077aee6f1f3f838f6a6c8afe8f29ce9e843a192bc6b48ad629769234c64a57a->leave($__internal_5077aee6f1f3f838f6a6c8afe8f29ce9e843a192bc6b48ad629769234c64a57a_prof);

        
        $__internal_8b53e524bc6c1fe9f07e9098de62b2f4b7f0cfaa397920d86402d0de7af2c68c->leave($__internal_8b53e524bc6c1fe9f07e9098de62b2f4b7f0cfaa397920d86402d0de7af2c68c_prof);

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
