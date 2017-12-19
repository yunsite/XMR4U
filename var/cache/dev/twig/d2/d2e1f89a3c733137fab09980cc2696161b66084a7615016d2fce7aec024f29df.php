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
        $__internal_a63b2c96973734a0006e2bf499cccb5c5ac47dbf7d98a0ebdab3305e95369180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a63b2c96973734a0006e2bf499cccb5c5ac47dbf7d98a0ebdab3305e95369180->enter($__internal_a63b2c96973734a0006e2bf499cccb5c5ac47dbf7d98a0ebdab3305e95369180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_cc0d6d37b09af32b05b6400b645b6f28a89d8a84bb422f7770339efab82c8310 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc0d6d37b09af32b05b6400b645b6f28a89d8a84bb422f7770339efab82c8310->enter($__internal_cc0d6d37b09af32b05b6400b645b6f28a89d8a84bb422f7770339efab82c8310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_a63b2c96973734a0006e2bf499cccb5c5ac47dbf7d98a0ebdab3305e95369180->leave($__internal_a63b2c96973734a0006e2bf499cccb5c5ac47dbf7d98a0ebdab3305e95369180_prof);

        
        $__internal_cc0d6d37b09af32b05b6400b645b6f28a89d8a84bb422f7770339efab82c8310->leave($__internal_cc0d6d37b09af32b05b6400b645b6f28a89d8a84bb422f7770339efab82c8310_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_1b4baa8ef163ec10ae506a22e8815ce667dfbbc768f041309dce58b652204403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b4baa8ef163ec10ae506a22e8815ce667dfbbc768f041309dce58b652204403->enter($__internal_1b4baa8ef163ec10ae506a22e8815ce667dfbbc768f041309dce58b652204403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_bd52bfad8406e5e3e66f3dad90fe069d35818078f5878ce27775513d44c79f87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd52bfad8406e5e3e66f3dad90fe069d35818078f5878ce27775513d44c79f87->enter($__internal_bd52bfad8406e5e3e66f3dad90fe069d35818078f5878ce27775513d44c79f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_bd52bfad8406e5e3e66f3dad90fe069d35818078f5878ce27775513d44c79f87->leave($__internal_bd52bfad8406e5e3e66f3dad90fe069d35818078f5878ce27775513d44c79f87_prof);

        
        $__internal_1b4baa8ef163ec10ae506a22e8815ce667dfbbc768f041309dce58b652204403->leave($__internal_1b4baa8ef163ec10ae506a22e8815ce667dfbbc768f041309dce58b652204403_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_89e70c5dd25045c0a81a7795352d5f73b2204c1f31239cd0e949712cbfa403e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e70c5dd25045c0a81a7795352d5f73b2204c1f31239cd0e949712cbfa403e4->enter($__internal_89e70c5dd25045c0a81a7795352d5f73b2204c1f31239cd0e949712cbfa403e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_3ededb829344f3a2b08020c8e0248627badf8896db64bb15c3210f217e6e17f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ededb829344f3a2b08020c8e0248627badf8896db64bb15c3210f217e6e17f0->enter($__internal_3ededb829344f3a2b08020c8e0248627badf8896db64bb15c3210f217e6e17f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_3ededb829344f3a2b08020c8e0248627badf8896db64bb15c3210f217e6e17f0->leave($__internal_3ededb829344f3a2b08020c8e0248627badf8896db64bb15c3210f217e6e17f0_prof);

        
        $__internal_89e70c5dd25045c0a81a7795352d5f73b2204c1f31239cd0e949712cbfa403e4->leave($__internal_89e70c5dd25045c0a81a7795352d5f73b2204c1f31239cd0e949712cbfa403e4_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_188b010ddbc25cbea58271b9e47ff0a10cda22552ee66a877bc1ac9ffd252805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_188b010ddbc25cbea58271b9e47ff0a10cda22552ee66a877bc1ac9ffd252805->enter($__internal_188b010ddbc25cbea58271b9e47ff0a10cda22552ee66a877bc1ac9ffd252805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_364678a9232f8a17f63101b11303661864bfbe40f16281de1c86332fe8f30577 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_364678a9232f8a17f63101b11303661864bfbe40f16281de1c86332fe8f30577->enter($__internal_364678a9232f8a17f63101b11303661864bfbe40f16281de1c86332fe8f30577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_364678a9232f8a17f63101b11303661864bfbe40f16281de1c86332fe8f30577->leave($__internal_364678a9232f8a17f63101b11303661864bfbe40f16281de1c86332fe8f30577_prof);

        
        $__internal_188b010ddbc25cbea58271b9e47ff0a10cda22552ee66a877bc1ac9ffd252805->leave($__internal_188b010ddbc25cbea58271b9e47ff0a10cda22552ee66a877bc1ac9ffd252805_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_13b7117340a09670385c072846ff2f709c357a07f1a7480b436d5ef3f569500b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b7117340a09670385c072846ff2f709c357a07f1a7480b436d5ef3f569500b->enter($__internal_13b7117340a09670385c072846ff2f709c357a07f1a7480b436d5ef3f569500b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_d74b84139861fdf27486217c0915a2d5716b1f23e826ab14e21ddf14bafe4e92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d74b84139861fdf27486217c0915a2d5716b1f23e826ab14e21ddf14bafe4e92->enter($__internal_d74b84139861fdf27486217c0915a2d5716b1f23e826ab14e21ddf14bafe4e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_d74b84139861fdf27486217c0915a2d5716b1f23e826ab14e21ddf14bafe4e92->leave($__internal_d74b84139861fdf27486217c0915a2d5716b1f23e826ab14e21ddf14bafe4e92_prof);

        
        $__internal_13b7117340a09670385c072846ff2f709c357a07f1a7480b436d5ef3f569500b->leave($__internal_13b7117340a09670385c072846ff2f709c357a07f1a7480b436d5ef3f569500b_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_ce9180416a2c2aebd1687239687c2fcc1b0eb529faa04b54a2353b489ef32160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce9180416a2c2aebd1687239687c2fcc1b0eb529faa04b54a2353b489ef32160->enter($__internal_ce9180416a2c2aebd1687239687c2fcc1b0eb529faa04b54a2353b489ef32160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_032788e892aa7359be92c23262bc58406a334eb165a592cbd5b6c25aa9b964b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_032788e892aa7359be92c23262bc58406a334eb165a592cbd5b6c25aa9b964b8->enter($__internal_032788e892aa7359be92c23262bc58406a334eb165a592cbd5b6c25aa9b964b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_032788e892aa7359be92c23262bc58406a334eb165a592cbd5b6c25aa9b964b8->leave($__internal_032788e892aa7359be92c23262bc58406a334eb165a592cbd5b6c25aa9b964b8_prof);

        
        $__internal_ce9180416a2c2aebd1687239687c2fcc1b0eb529faa04b54a2353b489ef32160->leave($__internal_ce9180416a2c2aebd1687239687c2fcc1b0eb529faa04b54a2353b489ef32160_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_1dd897c63c7266f284c2bd94338cf5318a9d092e535bb43d3d4f4d0538c500bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd897c63c7266f284c2bd94338cf5318a9d092e535bb43d3d4f4d0538c500bb->enter($__internal_1dd897c63c7266f284c2bd94338cf5318a9d092e535bb43d3d4f4d0538c500bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_a706e325dcef5a17774d30a6545cf49c63db099e8231708ad856410ed3c10ad5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a706e325dcef5a17774d30a6545cf49c63db099e8231708ad856410ed3c10ad5->enter($__internal_a706e325dcef5a17774d30a6545cf49c63db099e8231708ad856410ed3c10ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_a706e325dcef5a17774d30a6545cf49c63db099e8231708ad856410ed3c10ad5->leave($__internal_a706e325dcef5a17774d30a6545cf49c63db099e8231708ad856410ed3c10ad5_prof);

        
        $__internal_1dd897c63c7266f284c2bd94338cf5318a9d092e535bb43d3d4f4d0538c500bb->leave($__internal_1dd897c63c7266f284c2bd94338cf5318a9d092e535bb43d3d4f4d0538c500bb_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_9c0531103de6cfa92de904efd69794707d9c49e400839b9635cecebebdbbb7bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c0531103de6cfa92de904efd69794707d9c49e400839b9635cecebebdbbb7bc->enter($__internal_9c0531103de6cfa92de904efd69794707d9c49e400839b9635cecebebdbbb7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_85db8a934e09e7cbea82264d674365ada6ec7a05b721c16a8d1fde2d5917e7af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85db8a934e09e7cbea82264d674365ada6ec7a05b721c16a8d1fde2d5917e7af->enter($__internal_85db8a934e09e7cbea82264d674365ada6ec7a05b721c16a8d1fde2d5917e7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_85db8a934e09e7cbea82264d674365ada6ec7a05b721c16a8d1fde2d5917e7af->leave($__internal_85db8a934e09e7cbea82264d674365ada6ec7a05b721c16a8d1fde2d5917e7af_prof);

        
        $__internal_9c0531103de6cfa92de904efd69794707d9c49e400839b9635cecebebdbbb7bc->leave($__internal_9c0531103de6cfa92de904efd69794707d9c49e400839b9635cecebebdbbb7bc_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_b909a8d25a06259592953d6c2476a94a52d3b9530df73ff4a524be85d5946f12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b909a8d25a06259592953d6c2476a94a52d3b9530df73ff4a524be85d5946f12->enter($__internal_b909a8d25a06259592953d6c2476a94a52d3b9530df73ff4a524be85d5946f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_2a61ad9254cea12bc6454f92a814d05d7e595496395aea1da4e0af8536e731f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a61ad9254cea12bc6454f92a814d05d7e595496395aea1da4e0af8536e731f3->enter($__internal_2a61ad9254cea12bc6454f92a814d05d7e595496395aea1da4e0af8536e731f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_2a61ad9254cea12bc6454f92a814d05d7e595496395aea1da4e0af8536e731f3->leave($__internal_2a61ad9254cea12bc6454f92a814d05d7e595496395aea1da4e0af8536e731f3_prof);

        
        $__internal_b909a8d25a06259592953d6c2476a94a52d3b9530df73ff4a524be85d5946f12->leave($__internal_b909a8d25a06259592953d6c2476a94a52d3b9530df73ff4a524be85d5946f12_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_2e4373161a477ed0b2823b77d03c8270c8cf12904883f9c767fa23463e94f136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e4373161a477ed0b2823b77d03c8270c8cf12904883f9c767fa23463e94f136->enter($__internal_2e4373161a477ed0b2823b77d03c8270c8cf12904883f9c767fa23463e94f136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_96976e3b363acfa7add1faaada45f0c69669d1b3e660c74c09292d1a5ce295cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96976e3b363acfa7add1faaada45f0c69669d1b3e660c74c09292d1a5ce295cc->enter($__internal_96976e3b363acfa7add1faaada45f0c69669d1b3e660c74c09292d1a5ce295cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_96976e3b363acfa7add1faaada45f0c69669d1b3e660c74c09292d1a5ce295cc->leave($__internal_96976e3b363acfa7add1faaada45f0c69669d1b3e660c74c09292d1a5ce295cc_prof);

        
        $__internal_2e4373161a477ed0b2823b77d03c8270c8cf12904883f9c767fa23463e94f136->leave($__internal_2e4373161a477ed0b2823b77d03c8270c8cf12904883f9c767fa23463e94f136_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_162a84b2de67f0f934d569eefd671ca8b61ad4bb5e6b04926ed1ffc6ceb0fcab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_162a84b2de67f0f934d569eefd671ca8b61ad4bb5e6b04926ed1ffc6ceb0fcab->enter($__internal_162a84b2de67f0f934d569eefd671ca8b61ad4bb5e6b04926ed1ffc6ceb0fcab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_fb33ce5fa28faf2046c8a34955449c150dd9a8c286a3d0df0b26520c66fb355e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb33ce5fa28faf2046c8a34955449c150dd9a8c286a3d0df0b26520c66fb355e->enter($__internal_fb33ce5fa28faf2046c8a34955449c150dd9a8c286a3d0df0b26520c66fb355e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_fb33ce5fa28faf2046c8a34955449c150dd9a8c286a3d0df0b26520c66fb355e->leave($__internal_fb33ce5fa28faf2046c8a34955449c150dd9a8c286a3d0df0b26520c66fb355e_prof);

        
        $__internal_162a84b2de67f0f934d569eefd671ca8b61ad4bb5e6b04926ed1ffc6ceb0fcab->leave($__internal_162a84b2de67f0f934d569eefd671ca8b61ad4bb5e6b04926ed1ffc6ceb0fcab_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_413adca0c66766f94ea965c7b71c84df3211db3ecb857b8279d9cbbd6063d219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_413adca0c66766f94ea965c7b71c84df3211db3ecb857b8279d9cbbd6063d219->enter($__internal_413adca0c66766f94ea965c7b71c84df3211db3ecb857b8279d9cbbd6063d219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_0d5aa147f88589ce22bfe22223aeb5f1cc43a932e055ecab99adf2c6b228244e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d5aa147f88589ce22bfe22223aeb5f1cc43a932e055ecab99adf2c6b228244e->enter($__internal_0d5aa147f88589ce22bfe22223aeb5f1cc43a932e055ecab99adf2c6b228244e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_0d5aa147f88589ce22bfe22223aeb5f1cc43a932e055ecab99adf2c6b228244e->leave($__internal_0d5aa147f88589ce22bfe22223aeb5f1cc43a932e055ecab99adf2c6b228244e_prof);

        
        $__internal_413adca0c66766f94ea965c7b71c84df3211db3ecb857b8279d9cbbd6063d219->leave($__internal_413adca0c66766f94ea965c7b71c84df3211db3ecb857b8279d9cbbd6063d219_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_fe864282cd67db9d9abad9414f81e08812f6a6a028e76ac7a29af24f30ddb946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe864282cd67db9d9abad9414f81e08812f6a6a028e76ac7a29af24f30ddb946->enter($__internal_fe864282cd67db9d9abad9414f81e08812f6a6a028e76ac7a29af24f30ddb946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_573a5f35940dd9a0f505729fcf6b6628dc4a6976c4968c93da50a6277ccad698 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_573a5f35940dd9a0f505729fcf6b6628dc4a6976c4968c93da50a6277ccad698->enter($__internal_573a5f35940dd9a0f505729fcf6b6628dc4a6976c4968c93da50a6277ccad698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_573a5f35940dd9a0f505729fcf6b6628dc4a6976c4968c93da50a6277ccad698->leave($__internal_573a5f35940dd9a0f505729fcf6b6628dc4a6976c4968c93da50a6277ccad698_prof);

        
        $__internal_fe864282cd67db9d9abad9414f81e08812f6a6a028e76ac7a29af24f30ddb946->leave($__internal_fe864282cd67db9d9abad9414f81e08812f6a6a028e76ac7a29af24f30ddb946_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_a8c009cc9a14a4a03cb108780e109b89750720090e89361780f7e2f1cea6383a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8c009cc9a14a4a03cb108780e109b89750720090e89361780f7e2f1cea6383a->enter($__internal_a8c009cc9a14a4a03cb108780e109b89750720090e89361780f7e2f1cea6383a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_fe6eeab03a838c03d30b6dea73e0cce7697522d3a8a9b82700370e3c98a92d7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe6eeab03a838c03d30b6dea73e0cce7697522d3a8a9b82700370e3c98a92d7d->enter($__internal_fe6eeab03a838c03d30b6dea73e0cce7697522d3a8a9b82700370e3c98a92d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_fe6eeab03a838c03d30b6dea73e0cce7697522d3a8a9b82700370e3c98a92d7d->leave($__internal_fe6eeab03a838c03d30b6dea73e0cce7697522d3a8a9b82700370e3c98a92d7d_prof);

        
        $__internal_a8c009cc9a14a4a03cb108780e109b89750720090e89361780f7e2f1cea6383a->leave($__internal_a8c009cc9a14a4a03cb108780e109b89750720090e89361780f7e2f1cea6383a_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_b47bf58bf1d658f83d3178b213425896ba095e9b6da9d3f4d85b4990bc3e1c91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b47bf58bf1d658f83d3178b213425896ba095e9b6da9d3f4d85b4990bc3e1c91->enter($__internal_b47bf58bf1d658f83d3178b213425896ba095e9b6da9d3f4d85b4990bc3e1c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_8e9807aa7f79d48259bfbabadfdaf5173a012fdde70b770dd13ca815f87a4f7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e9807aa7f79d48259bfbabadfdaf5173a012fdde70b770dd13ca815f87a4f7e->enter($__internal_8e9807aa7f79d48259bfbabadfdaf5173a012fdde70b770dd13ca815f87a4f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8e9807aa7f79d48259bfbabadfdaf5173a012fdde70b770dd13ca815f87a4f7e->leave($__internal_8e9807aa7f79d48259bfbabadfdaf5173a012fdde70b770dd13ca815f87a4f7e_prof);

        
        $__internal_b47bf58bf1d658f83d3178b213425896ba095e9b6da9d3f4d85b4990bc3e1c91->leave($__internal_b47bf58bf1d658f83d3178b213425896ba095e9b6da9d3f4d85b4990bc3e1c91_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_19973da8256f64594e5ac8cfa2f70dfb9229d1d70bfa146541f0302b4b154422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19973da8256f64594e5ac8cfa2f70dfb9229d1d70bfa146541f0302b4b154422->enter($__internal_19973da8256f64594e5ac8cfa2f70dfb9229d1d70bfa146541f0302b4b154422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_61a0f4ccf5e8851d0135ad0d8b14e5cab51817098e436d1dbc9df0e5253107a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61a0f4ccf5e8851d0135ad0d8b14e5cab51817098e436d1dbc9df0e5253107a6->enter($__internal_61a0f4ccf5e8851d0135ad0d8b14e5cab51817098e436d1dbc9df0e5253107a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_61a0f4ccf5e8851d0135ad0d8b14e5cab51817098e436d1dbc9df0e5253107a6->leave($__internal_61a0f4ccf5e8851d0135ad0d8b14e5cab51817098e436d1dbc9df0e5253107a6_prof);

        
        $__internal_19973da8256f64594e5ac8cfa2f70dfb9229d1d70bfa146541f0302b4b154422->leave($__internal_19973da8256f64594e5ac8cfa2f70dfb9229d1d70bfa146541f0302b4b154422_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_000f2f27b94b8af478c7167d6c8c16a4ed148cee90fc98c35b487abf4bb9af29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_000f2f27b94b8af478c7167d6c8c16a4ed148cee90fc98c35b487abf4bb9af29->enter($__internal_000f2f27b94b8af478c7167d6c8c16a4ed148cee90fc98c35b487abf4bb9af29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_c0763a31be57e01c976be72a68b963a113a08b22686ca71b1d8c5d71f0afcac9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0763a31be57e01c976be72a68b963a113a08b22686ca71b1d8c5d71f0afcac9->enter($__internal_c0763a31be57e01c976be72a68b963a113a08b22686ca71b1d8c5d71f0afcac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_c0763a31be57e01c976be72a68b963a113a08b22686ca71b1d8c5d71f0afcac9->leave($__internal_c0763a31be57e01c976be72a68b963a113a08b22686ca71b1d8c5d71f0afcac9_prof);

        
        $__internal_000f2f27b94b8af478c7167d6c8c16a4ed148cee90fc98c35b487abf4bb9af29->leave($__internal_000f2f27b94b8af478c7167d6c8c16a4ed148cee90fc98c35b487abf4bb9af29_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_e580e10eeafed022689147ea1d2e9f0db2c56f02ebf8d47939220abbbb16d3a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e580e10eeafed022689147ea1d2e9f0db2c56f02ebf8d47939220abbbb16d3a7->enter($__internal_e580e10eeafed022689147ea1d2e9f0db2c56f02ebf8d47939220abbbb16d3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_2b7d94a8b8c1bfb25e8de2ed8718055e293605c20a3cb9e0fa896c29efaba00f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b7d94a8b8c1bfb25e8de2ed8718055e293605c20a3cb9e0fa896c29efaba00f->enter($__internal_2b7d94a8b8c1bfb25e8de2ed8718055e293605c20a3cb9e0fa896c29efaba00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_2b7d94a8b8c1bfb25e8de2ed8718055e293605c20a3cb9e0fa896c29efaba00f->leave($__internal_2b7d94a8b8c1bfb25e8de2ed8718055e293605c20a3cb9e0fa896c29efaba00f_prof);

        
        $__internal_e580e10eeafed022689147ea1d2e9f0db2c56f02ebf8d47939220abbbb16d3a7->leave($__internal_e580e10eeafed022689147ea1d2e9f0db2c56f02ebf8d47939220abbbb16d3a7_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_aa803116efc8bbae9f0ed077ae789807446174ed5e198a55112da902a02880bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa803116efc8bbae9f0ed077ae789807446174ed5e198a55112da902a02880bb->enter($__internal_aa803116efc8bbae9f0ed077ae789807446174ed5e198a55112da902a02880bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_17ae012610c61a530df5ea04b87ea1b8cfd6b8d50c19f0c0a57a35addb381e00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17ae012610c61a530df5ea04b87ea1b8cfd6b8d50c19f0c0a57a35addb381e00->enter($__internal_17ae012610c61a530df5ea04b87ea1b8cfd6b8d50c19f0c0a57a35addb381e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_17ae012610c61a530df5ea04b87ea1b8cfd6b8d50c19f0c0a57a35addb381e00->leave($__internal_17ae012610c61a530df5ea04b87ea1b8cfd6b8d50c19f0c0a57a35addb381e00_prof);

        
        $__internal_aa803116efc8bbae9f0ed077ae789807446174ed5e198a55112da902a02880bb->leave($__internal_aa803116efc8bbae9f0ed077ae789807446174ed5e198a55112da902a02880bb_prof);

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
