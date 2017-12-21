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
        $__internal_489d71f892577df528dde6877a0e7ee12daac2f8c43a6066b57cf6621aaa4777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_489d71f892577df528dde6877a0e7ee12daac2f8c43a6066b57cf6621aaa4777->enter($__internal_489d71f892577df528dde6877a0e7ee12daac2f8c43a6066b57cf6621aaa4777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_c6e1464d5f8737b728d40e848f23f3d79ca41eb644853e5d9ab56bde0bd7065d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6e1464d5f8737b728d40e848f23f3d79ca41eb644853e5d9ab56bde0bd7065d->enter($__internal_c6e1464d5f8737b728d40e848f23f3d79ca41eb644853e5d9ab56bde0bd7065d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_489d71f892577df528dde6877a0e7ee12daac2f8c43a6066b57cf6621aaa4777->leave($__internal_489d71f892577df528dde6877a0e7ee12daac2f8c43a6066b57cf6621aaa4777_prof);

        
        $__internal_c6e1464d5f8737b728d40e848f23f3d79ca41eb644853e5d9ab56bde0bd7065d->leave($__internal_c6e1464d5f8737b728d40e848f23f3d79ca41eb644853e5d9ab56bde0bd7065d_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_14f27c1360340902cd70dae7b10091f019b33801fde15f78cacfc5532574ca66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f27c1360340902cd70dae7b10091f019b33801fde15f78cacfc5532574ca66->enter($__internal_14f27c1360340902cd70dae7b10091f019b33801fde15f78cacfc5532574ca66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_dda20b12bd681a5879e71bfd1c797726f2ee724e28cba1e712949fa7a648a4d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dda20b12bd681a5879e71bfd1c797726f2ee724e28cba1e712949fa7a648a4d2->enter($__internal_dda20b12bd681a5879e71bfd1c797726f2ee724e28cba1e712949fa7a648a4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_dda20b12bd681a5879e71bfd1c797726f2ee724e28cba1e712949fa7a648a4d2->leave($__internal_dda20b12bd681a5879e71bfd1c797726f2ee724e28cba1e712949fa7a648a4d2_prof);

        
        $__internal_14f27c1360340902cd70dae7b10091f019b33801fde15f78cacfc5532574ca66->leave($__internal_14f27c1360340902cd70dae7b10091f019b33801fde15f78cacfc5532574ca66_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_d832c8df60bc566b6e1448dcac1435c2d1207e384f75ebe6d06551e3fcc943cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d832c8df60bc566b6e1448dcac1435c2d1207e384f75ebe6d06551e3fcc943cd->enter($__internal_d832c8df60bc566b6e1448dcac1435c2d1207e384f75ebe6d06551e3fcc943cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_8498d3b8876e8a8fa73478e61c59c21a4f49dcb19c2fe569011d22751b17c999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8498d3b8876e8a8fa73478e61c59c21a4f49dcb19c2fe569011d22751b17c999->enter($__internal_8498d3b8876e8a8fa73478e61c59c21a4f49dcb19c2fe569011d22751b17c999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_8498d3b8876e8a8fa73478e61c59c21a4f49dcb19c2fe569011d22751b17c999->leave($__internal_8498d3b8876e8a8fa73478e61c59c21a4f49dcb19c2fe569011d22751b17c999_prof);

        
        $__internal_d832c8df60bc566b6e1448dcac1435c2d1207e384f75ebe6d06551e3fcc943cd->leave($__internal_d832c8df60bc566b6e1448dcac1435c2d1207e384f75ebe6d06551e3fcc943cd_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_645740d09d045fc6fbd678353d53a93446a40672fe83cc20aeed886de0e05749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_645740d09d045fc6fbd678353d53a93446a40672fe83cc20aeed886de0e05749->enter($__internal_645740d09d045fc6fbd678353d53a93446a40672fe83cc20aeed886de0e05749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_40aaf1eb03e7e0d12b0a75d7d73cd5f85b643f98c7d97534ccfb12e247cff3d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40aaf1eb03e7e0d12b0a75d7d73cd5f85b643f98c7d97534ccfb12e247cff3d0->enter($__internal_40aaf1eb03e7e0d12b0a75d7d73cd5f85b643f98c7d97534ccfb12e247cff3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_40aaf1eb03e7e0d12b0a75d7d73cd5f85b643f98c7d97534ccfb12e247cff3d0->leave($__internal_40aaf1eb03e7e0d12b0a75d7d73cd5f85b643f98c7d97534ccfb12e247cff3d0_prof);

        
        $__internal_645740d09d045fc6fbd678353d53a93446a40672fe83cc20aeed886de0e05749->leave($__internal_645740d09d045fc6fbd678353d53a93446a40672fe83cc20aeed886de0e05749_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_9d6d0ebf34ffdfe9cb57e4549ed23f828dd5434053102dfe19cf2a7b7be530ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d6d0ebf34ffdfe9cb57e4549ed23f828dd5434053102dfe19cf2a7b7be530ec->enter($__internal_9d6d0ebf34ffdfe9cb57e4549ed23f828dd5434053102dfe19cf2a7b7be530ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_56ad28e4fec0a3c72d11272ab5921a83964900ae52e33dbf960241eed3b94620 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56ad28e4fec0a3c72d11272ab5921a83964900ae52e33dbf960241eed3b94620->enter($__internal_56ad28e4fec0a3c72d11272ab5921a83964900ae52e33dbf960241eed3b94620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_56ad28e4fec0a3c72d11272ab5921a83964900ae52e33dbf960241eed3b94620->leave($__internal_56ad28e4fec0a3c72d11272ab5921a83964900ae52e33dbf960241eed3b94620_prof);

        
        $__internal_9d6d0ebf34ffdfe9cb57e4549ed23f828dd5434053102dfe19cf2a7b7be530ec->leave($__internal_9d6d0ebf34ffdfe9cb57e4549ed23f828dd5434053102dfe19cf2a7b7be530ec_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_932b334375a6df89491a8965aa1c8e6e109c5fd6e73246cbd06ba4c3f7a8e9a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_932b334375a6df89491a8965aa1c8e6e109c5fd6e73246cbd06ba4c3f7a8e9a5->enter($__internal_932b334375a6df89491a8965aa1c8e6e109c5fd6e73246cbd06ba4c3f7a8e9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_d4a1a763a3f67086a1aa0928f45ff649ce6a904c993ca41828576840c625cf73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4a1a763a3f67086a1aa0928f45ff649ce6a904c993ca41828576840c625cf73->enter($__internal_d4a1a763a3f67086a1aa0928f45ff649ce6a904c993ca41828576840c625cf73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_d4a1a763a3f67086a1aa0928f45ff649ce6a904c993ca41828576840c625cf73->leave($__internal_d4a1a763a3f67086a1aa0928f45ff649ce6a904c993ca41828576840c625cf73_prof);

        
        $__internal_932b334375a6df89491a8965aa1c8e6e109c5fd6e73246cbd06ba4c3f7a8e9a5->leave($__internal_932b334375a6df89491a8965aa1c8e6e109c5fd6e73246cbd06ba4c3f7a8e9a5_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_395e2b78ea8a601e4e2afd01969b74026176976249d06c63b2714933404e3d68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_395e2b78ea8a601e4e2afd01969b74026176976249d06c63b2714933404e3d68->enter($__internal_395e2b78ea8a601e4e2afd01969b74026176976249d06c63b2714933404e3d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_d7b67232d528fc53dd975a735a309df99f71f0d67b19fe3973a6059424201857 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7b67232d528fc53dd975a735a309df99f71f0d67b19fe3973a6059424201857->enter($__internal_d7b67232d528fc53dd975a735a309df99f71f0d67b19fe3973a6059424201857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_d7b67232d528fc53dd975a735a309df99f71f0d67b19fe3973a6059424201857->leave($__internal_d7b67232d528fc53dd975a735a309df99f71f0d67b19fe3973a6059424201857_prof);

        
        $__internal_395e2b78ea8a601e4e2afd01969b74026176976249d06c63b2714933404e3d68->leave($__internal_395e2b78ea8a601e4e2afd01969b74026176976249d06c63b2714933404e3d68_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_43700b6e98a0ab769e9ca1920d15aa511b0fd37406d90b76e4d9194f1c5207f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43700b6e98a0ab769e9ca1920d15aa511b0fd37406d90b76e4d9194f1c5207f4->enter($__internal_43700b6e98a0ab769e9ca1920d15aa511b0fd37406d90b76e4d9194f1c5207f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_eb7fceedd76651e5098db6a0da63f49e955f74fbb7e035530d78c16a3d95ba03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb7fceedd76651e5098db6a0da63f49e955f74fbb7e035530d78c16a3d95ba03->enter($__internal_eb7fceedd76651e5098db6a0da63f49e955f74fbb7e035530d78c16a3d95ba03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_eb7fceedd76651e5098db6a0da63f49e955f74fbb7e035530d78c16a3d95ba03->leave($__internal_eb7fceedd76651e5098db6a0da63f49e955f74fbb7e035530d78c16a3d95ba03_prof);

        
        $__internal_43700b6e98a0ab769e9ca1920d15aa511b0fd37406d90b76e4d9194f1c5207f4->leave($__internal_43700b6e98a0ab769e9ca1920d15aa511b0fd37406d90b76e4d9194f1c5207f4_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_9207d180f70118d7f4f28d785115c664b9d707ecad9ffd1b0d0c3f510f1f009a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9207d180f70118d7f4f28d785115c664b9d707ecad9ffd1b0d0c3f510f1f009a->enter($__internal_9207d180f70118d7f4f28d785115c664b9d707ecad9ffd1b0d0c3f510f1f009a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_28d45050b8a5a7cad6fbef4f305a78e2af015777b54bac00927b2a3a12658234 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28d45050b8a5a7cad6fbef4f305a78e2af015777b54bac00927b2a3a12658234->enter($__internal_28d45050b8a5a7cad6fbef4f305a78e2af015777b54bac00927b2a3a12658234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_28d45050b8a5a7cad6fbef4f305a78e2af015777b54bac00927b2a3a12658234->leave($__internal_28d45050b8a5a7cad6fbef4f305a78e2af015777b54bac00927b2a3a12658234_prof);

        
        $__internal_9207d180f70118d7f4f28d785115c664b9d707ecad9ffd1b0d0c3f510f1f009a->leave($__internal_9207d180f70118d7f4f28d785115c664b9d707ecad9ffd1b0d0c3f510f1f009a_prof);

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
