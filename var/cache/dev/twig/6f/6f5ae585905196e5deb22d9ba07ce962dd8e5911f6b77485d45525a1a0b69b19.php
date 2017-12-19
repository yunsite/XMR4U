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
        $__internal_7d1dbf3070adba67271590717293c55d3b4858e10baa25563cae8728bf1e9463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d1dbf3070adba67271590717293c55d3b4858e10baa25563cae8728bf1e9463->enter($__internal_7d1dbf3070adba67271590717293c55d3b4858e10baa25563cae8728bf1e9463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_0df0770eb4d9f0bf907a30f2a43a866faf0da4566deb58e6b00335cb76c5d332 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0df0770eb4d9f0bf907a30f2a43a866faf0da4566deb58e6b00335cb76c5d332->enter($__internal_0df0770eb4d9f0bf907a30f2a43a866faf0da4566deb58e6b00335cb76c5d332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_7d1dbf3070adba67271590717293c55d3b4858e10baa25563cae8728bf1e9463->leave($__internal_7d1dbf3070adba67271590717293c55d3b4858e10baa25563cae8728bf1e9463_prof);

        
        $__internal_0df0770eb4d9f0bf907a30f2a43a866faf0da4566deb58e6b00335cb76c5d332->leave($__internal_0df0770eb4d9f0bf907a30f2a43a866faf0da4566deb58e6b00335cb76c5d332_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_f3b6f92cf3172a6cb357acadf1c4c1d7c159c3efe2941878873d0c3be4b95617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3b6f92cf3172a6cb357acadf1c4c1d7c159c3efe2941878873d0c3be4b95617->enter($__internal_f3b6f92cf3172a6cb357acadf1c4c1d7c159c3efe2941878873d0c3be4b95617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_9e4f233f2ce98c112f1656952592fd6e0b22a5ef0e8a6aded2cfc7fca96eeebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e4f233f2ce98c112f1656952592fd6e0b22a5ef0e8a6aded2cfc7fca96eeebf->enter($__internal_9e4f233f2ce98c112f1656952592fd6e0b22a5ef0e8a6aded2cfc7fca96eeebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_9e4f233f2ce98c112f1656952592fd6e0b22a5ef0e8a6aded2cfc7fca96eeebf->leave($__internal_9e4f233f2ce98c112f1656952592fd6e0b22a5ef0e8a6aded2cfc7fca96eeebf_prof);

        
        $__internal_f3b6f92cf3172a6cb357acadf1c4c1d7c159c3efe2941878873d0c3be4b95617->leave($__internal_f3b6f92cf3172a6cb357acadf1c4c1d7c159c3efe2941878873d0c3be4b95617_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_5f691af538e7c9c04ed8266c2774b93030f69bd47386901894e73418055bdaa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f691af538e7c9c04ed8266c2774b93030f69bd47386901894e73418055bdaa9->enter($__internal_5f691af538e7c9c04ed8266c2774b93030f69bd47386901894e73418055bdaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_cf090a341def9ca36963b5580e388cf681aef9747d20a3514db88e224306640d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf090a341def9ca36963b5580e388cf681aef9747d20a3514db88e224306640d->enter($__internal_cf090a341def9ca36963b5580e388cf681aef9747d20a3514db88e224306640d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_cf090a341def9ca36963b5580e388cf681aef9747d20a3514db88e224306640d->leave($__internal_cf090a341def9ca36963b5580e388cf681aef9747d20a3514db88e224306640d_prof);

        
        $__internal_5f691af538e7c9c04ed8266c2774b93030f69bd47386901894e73418055bdaa9->leave($__internal_5f691af538e7c9c04ed8266c2774b93030f69bd47386901894e73418055bdaa9_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_648990ec1acb846dd8f81657f58f652d97b9b5bc46bb2ce3cfd2ee7181462a15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_648990ec1acb846dd8f81657f58f652d97b9b5bc46bb2ce3cfd2ee7181462a15->enter($__internal_648990ec1acb846dd8f81657f58f652d97b9b5bc46bb2ce3cfd2ee7181462a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_77b52965b5335e983cc3fe9289c96672d1c8f3dd785e51cd43b947c497c5f0cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77b52965b5335e983cc3fe9289c96672d1c8f3dd785e51cd43b947c497c5f0cc->enter($__internal_77b52965b5335e983cc3fe9289c96672d1c8f3dd785e51cd43b947c497c5f0cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_77b52965b5335e983cc3fe9289c96672d1c8f3dd785e51cd43b947c497c5f0cc->leave($__internal_77b52965b5335e983cc3fe9289c96672d1c8f3dd785e51cd43b947c497c5f0cc_prof);

        
        $__internal_648990ec1acb846dd8f81657f58f652d97b9b5bc46bb2ce3cfd2ee7181462a15->leave($__internal_648990ec1acb846dd8f81657f58f652d97b9b5bc46bb2ce3cfd2ee7181462a15_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_b78fdf13caf0dac2f0b4b069f867ec60f23dbac38829a5c23e785cb172817b75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b78fdf13caf0dac2f0b4b069f867ec60f23dbac38829a5c23e785cb172817b75->enter($__internal_b78fdf13caf0dac2f0b4b069f867ec60f23dbac38829a5c23e785cb172817b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_31e4072d97e93b4a9f573d786a238c2dca8f8ccb13c11b57dbf1da26b984bce7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31e4072d97e93b4a9f573d786a238c2dca8f8ccb13c11b57dbf1da26b984bce7->enter($__internal_31e4072d97e93b4a9f573d786a238c2dca8f8ccb13c11b57dbf1da26b984bce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_31e4072d97e93b4a9f573d786a238c2dca8f8ccb13c11b57dbf1da26b984bce7->leave($__internal_31e4072d97e93b4a9f573d786a238c2dca8f8ccb13c11b57dbf1da26b984bce7_prof);

        
        $__internal_b78fdf13caf0dac2f0b4b069f867ec60f23dbac38829a5c23e785cb172817b75->leave($__internal_b78fdf13caf0dac2f0b4b069f867ec60f23dbac38829a5c23e785cb172817b75_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_f18d6bba659dd33a446469e99a4a30ca0e6a2b0b760e5b16912d199c6a7d3bde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f18d6bba659dd33a446469e99a4a30ca0e6a2b0b760e5b16912d199c6a7d3bde->enter($__internal_f18d6bba659dd33a446469e99a4a30ca0e6a2b0b760e5b16912d199c6a7d3bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_f11d7fedb6a4f1643bbb255a4a466a9f596344d0f22db3e7198f4809a874f6c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f11d7fedb6a4f1643bbb255a4a466a9f596344d0f22db3e7198f4809a874f6c9->enter($__internal_f11d7fedb6a4f1643bbb255a4a466a9f596344d0f22db3e7198f4809a874f6c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_f11d7fedb6a4f1643bbb255a4a466a9f596344d0f22db3e7198f4809a874f6c9->leave($__internal_f11d7fedb6a4f1643bbb255a4a466a9f596344d0f22db3e7198f4809a874f6c9_prof);

        
        $__internal_f18d6bba659dd33a446469e99a4a30ca0e6a2b0b760e5b16912d199c6a7d3bde->leave($__internal_f18d6bba659dd33a446469e99a4a30ca0e6a2b0b760e5b16912d199c6a7d3bde_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_2c22ac52c2cd17efcc627c2807a71072b886a1a48039d567df4ca9949dedc8aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c22ac52c2cd17efcc627c2807a71072b886a1a48039d567df4ca9949dedc8aa->enter($__internal_2c22ac52c2cd17efcc627c2807a71072b886a1a48039d567df4ca9949dedc8aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_8d9b6718148094240898c2ef90ce9eef795faf2bd6344b757f8c8695f92bf6a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d9b6718148094240898c2ef90ce9eef795faf2bd6344b757f8c8695f92bf6a6->enter($__internal_8d9b6718148094240898c2ef90ce9eef795faf2bd6344b757f8c8695f92bf6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_8d9b6718148094240898c2ef90ce9eef795faf2bd6344b757f8c8695f92bf6a6->leave($__internal_8d9b6718148094240898c2ef90ce9eef795faf2bd6344b757f8c8695f92bf6a6_prof);

        
        $__internal_2c22ac52c2cd17efcc627c2807a71072b886a1a48039d567df4ca9949dedc8aa->leave($__internal_2c22ac52c2cd17efcc627c2807a71072b886a1a48039d567df4ca9949dedc8aa_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_058e9dca89de8df2098ec62094abc73355ba3e4b1aa8f04c3bf70ebeba056886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_058e9dca89de8df2098ec62094abc73355ba3e4b1aa8f04c3bf70ebeba056886->enter($__internal_058e9dca89de8df2098ec62094abc73355ba3e4b1aa8f04c3bf70ebeba056886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_374c7117d419f314594dd729fc122435f30694ee4891c2e0c934c0841bef8f74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_374c7117d419f314594dd729fc122435f30694ee4891c2e0c934c0841bef8f74->enter($__internal_374c7117d419f314594dd729fc122435f30694ee4891c2e0c934c0841bef8f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_374c7117d419f314594dd729fc122435f30694ee4891c2e0c934c0841bef8f74->leave($__internal_374c7117d419f314594dd729fc122435f30694ee4891c2e0c934c0841bef8f74_prof);

        
        $__internal_058e9dca89de8df2098ec62094abc73355ba3e4b1aa8f04c3bf70ebeba056886->leave($__internal_058e9dca89de8df2098ec62094abc73355ba3e4b1aa8f04c3bf70ebeba056886_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_be848b27150125d64fc06ca4088e8d2894e345bd0785efb704cf2da66e213d74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be848b27150125d64fc06ca4088e8d2894e345bd0785efb704cf2da66e213d74->enter($__internal_be848b27150125d64fc06ca4088e8d2894e345bd0785efb704cf2da66e213d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_73c0031703718cbce29cf85a519538cbdf95e87727c689fb5fb91b586216097a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73c0031703718cbce29cf85a519538cbdf95e87727c689fb5fb91b586216097a->enter($__internal_73c0031703718cbce29cf85a519538cbdf95e87727c689fb5fb91b586216097a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_73c0031703718cbce29cf85a519538cbdf95e87727c689fb5fb91b586216097a->leave($__internal_73c0031703718cbce29cf85a519538cbdf95e87727c689fb5fb91b586216097a_prof);

        
        $__internal_be848b27150125d64fc06ca4088e8d2894e345bd0785efb704cf2da66e213d74->leave($__internal_be848b27150125d64fc06ca4088e8d2894e345bd0785efb704cf2da66e213d74_prof);

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
