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
        $__internal_f5c8699c3d70de91218ee8cf3dd5feeb9adf465805de45905f9a31aa6bb92b54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5c8699c3d70de91218ee8cf3dd5feeb9adf465805de45905f9a31aa6bb92b54->enter($__internal_f5c8699c3d70de91218ee8cf3dd5feeb9adf465805de45905f9a31aa6bb92b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_93d3d53fa5e4a42a1e614bd36a8b566c9ee28ff57efc5124b62014d5925a1f23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93d3d53fa5e4a42a1e614bd36a8b566c9ee28ff57efc5124b62014d5925a1f23->enter($__internal_93d3d53fa5e4a42a1e614bd36a8b566c9ee28ff57efc5124b62014d5925a1f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

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
        
        $__internal_f5c8699c3d70de91218ee8cf3dd5feeb9adf465805de45905f9a31aa6bb92b54->leave($__internal_f5c8699c3d70de91218ee8cf3dd5feeb9adf465805de45905f9a31aa6bb92b54_prof);

        
        $__internal_93d3d53fa5e4a42a1e614bd36a8b566c9ee28ff57efc5124b62014d5925a1f23->leave($__internal_93d3d53fa5e4a42a1e614bd36a8b566c9ee28ff57efc5124b62014d5925a1f23_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_2dbb4499ffbbe5ba939c63f18c31d096ee111f7e14489755372325a0e2225e8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dbb4499ffbbe5ba939c63f18c31d096ee111f7e14489755372325a0e2225e8d->enter($__internal_2dbb4499ffbbe5ba939c63f18c31d096ee111f7e14489755372325a0e2225e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_76aac494b2a1c1fe22da579e0d36f279be0faf70bf72b9bc43746c66e686c471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76aac494b2a1c1fe22da579e0d36f279be0faf70bf72b9bc43746c66e686c471->enter($__internal_76aac494b2a1c1fe22da579e0d36f279be0faf70bf72b9bc43746c66e686c471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_76aac494b2a1c1fe22da579e0d36f279be0faf70bf72b9bc43746c66e686c471->leave($__internal_76aac494b2a1c1fe22da579e0d36f279be0faf70bf72b9bc43746c66e686c471_prof);

        
        $__internal_2dbb4499ffbbe5ba939c63f18c31d096ee111f7e14489755372325a0e2225e8d->leave($__internal_2dbb4499ffbbe5ba939c63f18c31d096ee111f7e14489755372325a0e2225e8d_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_acbda4648cc5ee41910ab300d63a6cf0acad552495879e3129c65d419479619a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acbda4648cc5ee41910ab300d63a6cf0acad552495879e3129c65d419479619a->enter($__internal_acbda4648cc5ee41910ab300d63a6cf0acad552495879e3129c65d419479619a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_a6819478f59f8d00b84ce05496c10698f59479f3edb5f321cc089ebe90c3ffc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6819478f59f8d00b84ce05496c10698f59479f3edb5f321cc089ebe90c3ffc0->enter($__internal_a6819478f59f8d00b84ce05496c10698f59479f3edb5f321cc089ebe90c3ffc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_a6819478f59f8d00b84ce05496c10698f59479f3edb5f321cc089ebe90c3ffc0->leave($__internal_a6819478f59f8d00b84ce05496c10698f59479f3edb5f321cc089ebe90c3ffc0_prof);

        
        $__internal_acbda4648cc5ee41910ab300d63a6cf0acad552495879e3129c65d419479619a->leave($__internal_acbda4648cc5ee41910ab300d63a6cf0acad552495879e3129c65d419479619a_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_52149dee745e567397b525f500b366496fd7a733cd8ef2d7c7865dd0d05450e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52149dee745e567397b525f500b366496fd7a733cd8ef2d7c7865dd0d05450e7->enter($__internal_52149dee745e567397b525f500b366496fd7a733cd8ef2d7c7865dd0d05450e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_e493e121aa147fc50f16d31a5db00ae8dd0e26055458b64c0f77f14d31c60267 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e493e121aa147fc50f16d31a5db00ae8dd0e26055458b64c0f77f14d31c60267->enter($__internal_e493e121aa147fc50f16d31a5db00ae8dd0e26055458b64c0f77f14d31c60267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_e493e121aa147fc50f16d31a5db00ae8dd0e26055458b64c0f77f14d31c60267->leave($__internal_e493e121aa147fc50f16d31a5db00ae8dd0e26055458b64c0f77f14d31c60267_prof);

        
        $__internal_52149dee745e567397b525f500b366496fd7a733cd8ef2d7c7865dd0d05450e7->leave($__internal_52149dee745e567397b525f500b366496fd7a733cd8ef2d7c7865dd0d05450e7_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_6ea8914dd9a869073bb5f44d316ee42a83b5a50a0a942d28868423146a4ea329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ea8914dd9a869073bb5f44d316ee42a83b5a50a0a942d28868423146a4ea329->enter($__internal_6ea8914dd9a869073bb5f44d316ee42a83b5a50a0a942d28868423146a4ea329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_fd24812c1e558bc4bd9fc6bbee8a1a6d450a6ea03fe5b6afc21252864fa6772c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd24812c1e558bc4bd9fc6bbee8a1a6d450a6ea03fe5b6afc21252864fa6772c->enter($__internal_fd24812c1e558bc4bd9fc6bbee8a1a6d450a6ea03fe5b6afc21252864fa6772c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

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
        
        $__internal_fd24812c1e558bc4bd9fc6bbee8a1a6d450a6ea03fe5b6afc21252864fa6772c->leave($__internal_fd24812c1e558bc4bd9fc6bbee8a1a6d450a6ea03fe5b6afc21252864fa6772c_prof);

        
        $__internal_6ea8914dd9a869073bb5f44d316ee42a83b5a50a0a942d28868423146a4ea329->leave($__internal_6ea8914dd9a869073bb5f44d316ee42a83b5a50a0a942d28868423146a4ea329_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_d34dd9d8330affe6d4c4e16e8b416f520a68fe9a9233ac34e2c163c7a7e69878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d34dd9d8330affe6d4c4e16e8b416f520a68fe9a9233ac34e2c163c7a7e69878->enter($__internal_d34dd9d8330affe6d4c4e16e8b416f520a68fe9a9233ac34e2c163c7a7e69878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_8a0c6fd12cd926c222fa0311ea8c94d749152e3dccee7a0d3b8ddf6eff4c1522 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a0c6fd12cd926c222fa0311ea8c94d749152e3dccee7a0d3b8ddf6eff4c1522->enter($__internal_8a0c6fd12cd926c222fa0311ea8c94d749152e3dccee7a0d3b8ddf6eff4c1522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_8a0c6fd12cd926c222fa0311ea8c94d749152e3dccee7a0d3b8ddf6eff4c1522->leave($__internal_8a0c6fd12cd926c222fa0311ea8c94d749152e3dccee7a0d3b8ddf6eff4c1522_prof);

        
        $__internal_d34dd9d8330affe6d4c4e16e8b416f520a68fe9a9233ac34e2c163c7a7e69878->leave($__internal_d34dd9d8330affe6d4c4e16e8b416f520a68fe9a9233ac34e2c163c7a7e69878_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_9cfb5baba87ec072e3ead477eb5dd688d634135b2ef2db67baf9700d95f0a0c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cfb5baba87ec072e3ead477eb5dd688d634135b2ef2db67baf9700d95f0a0c2->enter($__internal_9cfb5baba87ec072e3ead477eb5dd688d634135b2ef2db67baf9700d95f0a0c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_2123375bcad8b34d3d76990a5631474c566a2d1a1da8f0f9462927b747cb9286 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2123375bcad8b34d3d76990a5631474c566a2d1a1da8f0f9462927b747cb9286->enter($__internal_2123375bcad8b34d3d76990a5631474c566a2d1a1da8f0f9462927b747cb9286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_2123375bcad8b34d3d76990a5631474c566a2d1a1da8f0f9462927b747cb9286->leave($__internal_2123375bcad8b34d3d76990a5631474c566a2d1a1da8f0f9462927b747cb9286_prof);

        
        $__internal_9cfb5baba87ec072e3ead477eb5dd688d634135b2ef2db67baf9700d95f0a0c2->leave($__internal_9cfb5baba87ec072e3ead477eb5dd688d634135b2ef2db67baf9700d95f0a0c2_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_370d1e47b3af2d3e17b1b97f13bc2953094a3ac98d35a15e8037f4d8709ac565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_370d1e47b3af2d3e17b1b97f13bc2953094a3ac98d35a15e8037f4d8709ac565->enter($__internal_370d1e47b3af2d3e17b1b97f13bc2953094a3ac98d35a15e8037f4d8709ac565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_39f0b6e114673c87c0b68bca795088ae78d865d39838491e33b8af8c05bb8857 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39f0b6e114673c87c0b68bca795088ae78d865d39838491e33b8af8c05bb8857->enter($__internal_39f0b6e114673c87c0b68bca795088ae78d865d39838491e33b8af8c05bb8857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_39f0b6e114673c87c0b68bca795088ae78d865d39838491e33b8af8c05bb8857->leave($__internal_39f0b6e114673c87c0b68bca795088ae78d865d39838491e33b8af8c05bb8857_prof);

        
        $__internal_370d1e47b3af2d3e17b1b97f13bc2953094a3ac98d35a15e8037f4d8709ac565->leave($__internal_370d1e47b3af2d3e17b1b97f13bc2953094a3ac98d35a15e8037f4d8709ac565_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_e5ae250cc517022a7285c2452afe83e4e4de78a07fa4da8bb7a0993c46f8fad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5ae250cc517022a7285c2452afe83e4e4de78a07fa4da8bb7a0993c46f8fad1->enter($__internal_e5ae250cc517022a7285c2452afe83e4e4de78a07fa4da8bb7a0993c46f8fad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_b978041b6dcd7c6f82593bdbb1822dcbe93de0880116b8dff656c1689df1d534 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b978041b6dcd7c6f82593bdbb1822dcbe93de0880116b8dff656c1689df1d534->enter($__internal_b978041b6dcd7c6f82593bdbb1822dcbe93de0880116b8dff656c1689df1d534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_b978041b6dcd7c6f82593bdbb1822dcbe93de0880116b8dff656c1689df1d534->leave($__internal_b978041b6dcd7c6f82593bdbb1822dcbe93de0880116b8dff656c1689df1d534_prof);

        
        $__internal_e5ae250cc517022a7285c2452afe83e4e4de78a07fa4da8bb7a0993c46f8fad1->leave($__internal_e5ae250cc517022a7285c2452afe83e4e4de78a07fa4da8bb7a0993c46f8fad1_prof);

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
