<?php

/* form_table_layout.html.twig */
class __TwigTemplate_ee7f4f5acea3de45239a7b1a2807835fc149f3b128e1d3ccac9d59f0d00a0ad7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_41182ee6ea0c98aafea78a07ce081d004d013d593baa28fb421baa73c506d06b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41182ee6ea0c98aafea78a07ce081d004d013d593baa28fb421baa73c506d06b->enter($__internal_41182ee6ea0c98aafea78a07ce081d004d013d593baa28fb421baa73c506d06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_3867eada626c4018f1621f036761ec72fd4084c260349982657f66ae1101cccf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3867eada626c4018f1621f036761ec72fd4084c260349982657f66ae1101cccf->enter($__internal_3867eada626c4018f1621f036761ec72fd4084c260349982657f66ae1101cccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_41182ee6ea0c98aafea78a07ce081d004d013d593baa28fb421baa73c506d06b->leave($__internal_41182ee6ea0c98aafea78a07ce081d004d013d593baa28fb421baa73c506d06b_prof);

        
        $__internal_3867eada626c4018f1621f036761ec72fd4084c260349982657f66ae1101cccf->leave($__internal_3867eada626c4018f1621f036761ec72fd4084c260349982657f66ae1101cccf_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_75fedfff34a9c602a05ed8f05903e902393891c57567dfce713447867b302aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75fedfff34a9c602a05ed8f05903e902393891c57567dfce713447867b302aff->enter($__internal_75fedfff34a9c602a05ed8f05903e902393891c57567dfce713447867b302aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_4a4d7d426c93fb1d67d41c4c2a14267d9338f6526357c45cb98a1a35b7ef25fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a4d7d426c93fb1d67d41c4c2a14267d9338f6526357c45cb98a1a35b7ef25fc->enter($__internal_4a4d7d426c93fb1d67d41c4c2a14267d9338f6526357c45cb98a1a35b7ef25fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_4a4d7d426c93fb1d67d41c4c2a14267d9338f6526357c45cb98a1a35b7ef25fc->leave($__internal_4a4d7d426c93fb1d67d41c4c2a14267d9338f6526357c45cb98a1a35b7ef25fc_prof);

        
        $__internal_75fedfff34a9c602a05ed8f05903e902393891c57567dfce713447867b302aff->leave($__internal_75fedfff34a9c602a05ed8f05903e902393891c57567dfce713447867b302aff_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_8ae2e60e344ee1aa6bfedac38743bb5d67d821e1050fc630456a8ce41a5f290e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ae2e60e344ee1aa6bfedac38743bb5d67d821e1050fc630456a8ce41a5f290e->enter($__internal_8ae2e60e344ee1aa6bfedac38743bb5d67d821e1050fc630456a8ce41a5f290e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_afba2fdcf6060807c2c49d616f7cbfe657e795ea4daf1de9abfed7a4f8e1f68c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afba2fdcf6060807c2c49d616f7cbfe657e795ea4daf1de9abfed7a4f8e1f68c->enter($__internal_afba2fdcf6060807c2c49d616f7cbfe657e795ea4daf1de9abfed7a4f8e1f68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_afba2fdcf6060807c2c49d616f7cbfe657e795ea4daf1de9abfed7a4f8e1f68c->leave($__internal_afba2fdcf6060807c2c49d616f7cbfe657e795ea4daf1de9abfed7a4f8e1f68c_prof);

        
        $__internal_8ae2e60e344ee1aa6bfedac38743bb5d67d821e1050fc630456a8ce41a5f290e->leave($__internal_8ae2e60e344ee1aa6bfedac38743bb5d67d821e1050fc630456a8ce41a5f290e_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_0b3b5a236c62775fb8a1b275c10227f49141e45cf69c32a9402f867e517c3823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b3b5a236c62775fb8a1b275c10227f49141e45cf69c32a9402f867e517c3823->enter($__internal_0b3b5a236c62775fb8a1b275c10227f49141e45cf69c32a9402f867e517c3823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_3a3f65be41bd5eec83251a04b227715454442bb0b9fd04ba8cf6cdaa50155043 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a3f65be41bd5eec83251a04b227715454442bb0b9fd04ba8cf6cdaa50155043->enter($__internal_3a3f65be41bd5eec83251a04b227715454442bb0b9fd04ba8cf6cdaa50155043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_3a3f65be41bd5eec83251a04b227715454442bb0b9fd04ba8cf6cdaa50155043->leave($__internal_3a3f65be41bd5eec83251a04b227715454442bb0b9fd04ba8cf6cdaa50155043_prof);

        
        $__internal_0b3b5a236c62775fb8a1b275c10227f49141e45cf69c32a9402f867e517c3823->leave($__internal_0b3b5a236c62775fb8a1b275c10227f49141e45cf69c32a9402f867e517c3823_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_fa95d4ad4551036d2c26ccc8028ee8706761ad7783459e8e9ed4e679e29a6513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa95d4ad4551036d2c26ccc8028ee8706761ad7783459e8e9ed4e679e29a6513->enter($__internal_fa95d4ad4551036d2c26ccc8028ee8706761ad7783459e8e9ed4e679e29a6513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_724032fd41f3d813cbad50378b28060fec51f5e562b05ff7c17d2f1dd4f4fe77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_724032fd41f3d813cbad50378b28060fec51f5e562b05ff7c17d2f1dd4f4fe77->enter($__internal_724032fd41f3d813cbad50378b28060fec51f5e562b05ff7c17d2f1dd4f4fe77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })())) && (twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->getSourceContext()); })())) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_724032fd41f3d813cbad50378b28060fec51f5e562b05ff7c17d2f1dd4f4fe77->leave($__internal_724032fd41f3d813cbad50378b28060fec51f5e562b05ff7c17d2f1dd4f4fe77_prof);

        
        $__internal_fa95d4ad4551036d2c26ccc8028ee8706761ad7783459e8e9ed4e679e29a6513->leave($__internal_fa95d4ad4551036d2c26ccc8028ee8706761ad7783459e8e9ed4e679e29a6513_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/var/www/miner/vendor/symfony/twig-bridge/Resources/views/Form/form_table_layout.html.twig");
    }
}
