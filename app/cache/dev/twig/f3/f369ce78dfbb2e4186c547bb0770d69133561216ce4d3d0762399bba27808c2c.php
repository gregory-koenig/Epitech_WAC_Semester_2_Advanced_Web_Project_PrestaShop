<?php

/* PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_3_layout.html.twig */
class __TwigTemplate_5558e4578670b9d6ae455b48ed1a63615fcb3416c88097f0b98c697788bdcc62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_3_layout.html.twig", 25);
        // line 25
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->loadTemplate("PrestaShopBundle:Admin/TwigTemplateForm:typeahead.html.twig", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_3_layout.html.twig", 26);
        // line 26
        if (!$_trait_1->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PrestaShopBundle:Admin/TwigTemplateForm:typeahead.html.twig".'" cannot be used as a trait.');
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'choice_tree_widget' => array($this, 'block_choice_tree_widget'),
                'choice_tree_item_widget' => array($this, 'block_choice_tree_item_widget'),
                'translatefields_widget' => array($this, 'block_translatefields_widget'),
                'translate_fields_widget' => array($this, 'block_translate_fields_widget'),
                'date_picker_widget' => array($this, 'block_date_picker_widget'),
                '_form_step6_attachments_widget' => array($this, 'block__form_step6_attachments_widget'),
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
        $__internal_1b7ba9148fdc5b28ac3be1bcf85f448698741dd03b2cc0cc8cb5881890e00cb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b7ba9148fdc5b28ac3be1bcf85f448698741dd03b2cc0cc8cb5881890e00cb8->enter($__internal_1b7ba9148fdc5b28ac3be1bcf85f448698741dd03b2cc0cc8cb5881890e00cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_3_layout.html.twig"));

        // line 27
        echo "
";
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('button_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('money_widget', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('date_widget', $context, $blocks);
        // line 99
        echo "
";
        // line 100
        $this->displayBlock('time_widget', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 141
        echo "
";
        // line 142
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('choice_tree_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 175
        $this->displayBlock('choice_tree_item_widget', $context, $blocks);
        // line 213
        echo "
";
        // line 214
        $this->displayBlock('translatefields_widget', $context, $blocks);
        // line 239
        echo "
";
        // line 240
        $this->displayBlock('translate_fields_widget', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('date_picker_widget', $context, $blocks);
        // line 258
        echo "
";
        // line 259
        $this->displayBlock('_form_step6_attachments_widget', $context, $blocks);
        // line 288
        echo "
";
        // line 290
        echo "
";
        // line 291
        $this->displayBlock('form_label', $context, $blocks);
        // line 295
        echo "
";
        // line 296
        $this->displayBlock('choice_label', $context, $blocks);
        // line 301
        echo "
";
        // line 302
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 305
        echo "
";
        // line 306
        $this->displayBlock('radio_label', $context, $blocks);
        // line 309
        echo "
";
        // line 310
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 328
        echo "
";
        // line 330
        echo "
";
        // line 331
        $this->displayBlock('form_row', $context, $blocks);
        // line 338
        echo "
";
        // line 339
        $this->displayBlock('button_row', $context, $blocks);
        // line 344
        echo "
";
        // line 345
        $this->displayBlock('choice_row', $context, $blocks);
        // line 349
        echo "
";
        // line 350
        $this->displayBlock('date_row', $context, $blocks);
        // line 354
        echo "
";
        // line 355
        $this->displayBlock('time_row', $context, $blocks);
        // line 359
        echo "
";
        // line 360
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 364
        echo "
";
        // line 365
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 371
        echo "
";
        // line 372
        $this->displayBlock('radio_row', $context, $blocks);
        // line 378
        echo "
";
        // line 380
        echo "
";
        // line 381
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_1b7ba9148fdc5b28ac3be1bcf85f448698741dd03b2cc0cc8cb5881890e00cb8->leave($__internal_1b7ba9148fdc5b28ac3be1bcf85f448698741dd03b2cc0cc8cb5881890e00cb8_prof);

    }

    // line 30
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_f0a8733e3231cdb15a34fe4c337be5e436a78aa540e5bee633377c5aaf015eaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0a8733e3231cdb15a34fe4c337be5e436a78aa540e5bee633377c5aaf015eaf->enter($__internal_f0a8733e3231cdb15a34fe4c337be5e436a78aa540e5bee633377c5aaf015eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 31
        if (( !array_key_exists("type", $context) || ("file" != ($context["type"] ?? $this->getContext($context, "type"))))) {
            // line 32
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 34
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_f0a8733e3231cdb15a34fe4c337be5e436a78aa540e5bee633377c5aaf015eaf->leave($__internal_f0a8733e3231cdb15a34fe4c337be5e436a78aa540e5bee633377c5aaf015eaf_prof);

    }

    // line 37
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_9c9a9e74f20cb20a446427b7eb42ce0cdce1c79915cbb74f83b9cbe4b8520c24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c9a9e74f20cb20a446427b7eb42ce0cdce1c79915cbb74f83b9cbe4b8520c24->enter($__internal_9c9a9e74f20cb20a446427b7eb42ce0cdce1c79915cbb74f83b9cbe4b8520c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 38
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 39
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_9c9a9e74f20cb20a446427b7eb42ce0cdce1c79915cbb74f83b9cbe4b8520c24->leave($__internal_9c9a9e74f20cb20a446427b7eb42ce0cdce1c79915cbb74f83b9cbe4b8520c24_prof);

    }

    // line 42
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_53a04065940b7f52adce3b1a645e0e307d04747fc9634bddac153a1ab8432535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53a04065940b7f52adce3b1a645e0e307d04747fc9634bddac153a1ab8432535->enter($__internal_53a04065940b7f52adce3b1a645e0e307d04747fc9634bddac153a1ab8432535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 43
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 44
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_53a04065940b7f52adce3b1a645e0e307d04747fc9634bddac153a1ab8432535->leave($__internal_53a04065940b7f52adce3b1a645e0e307d04747fc9634bddac153a1ab8432535_prof);

    }

    // line 47
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_87a296c7479bd45cc8d452d9e381239ad7f92b28b54ea52d617a90c127527557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87a296c7479bd45cc8d452d9e381239ad7f92b28b54ea52d617a90c127527557->enter($__internal_87a296c7479bd45cc8d452d9e381239ad7f92b28b54ea52d617a90c127527557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 48
        echo "<div class=\"input-group money-type\">
        ";
        // line 49
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 50
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 51
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 53
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 54
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 55
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 57
        echo "    </div>";
        
        $__internal_87a296c7479bd45cc8d452d9e381239ad7f92b28b54ea52d617a90c127527557->leave($__internal_87a296c7479bd45cc8d452d9e381239ad7f92b28b54ea52d617a90c127527557_prof);

    }

    // line 60
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_c332d037017d47275bd68147520199337a3affb7c0f54377fd617ea494efe615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c332d037017d47275bd68147520199337a3affb7c0f54377fd617ea494efe615->enter($__internal_c332d037017d47275bd68147520199337a3affb7c0f54377fd617ea494efe615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 61
        echo "<div class=\"input-group\">";
        // line 62
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 63
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_c332d037017d47275bd68147520199337a3affb7c0f54377fd617ea494efe615->leave($__internal_c332d037017d47275bd68147520199337a3affb7c0f54377fd617ea494efe615_prof);

    }

    // line 67
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_deb5447359bdb7e449921ee266b783238d46469b35be8887f576ca78a290e299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deb5447359bdb7e449921ee266b783238d46469b35be8887f576ca78a290e299->enter($__internal_deb5447359bdb7e449921ee266b783238d46469b35be8887f576ca78a290e299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 68
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 69
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 71
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 72
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 73
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 74
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 75
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 76
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 77
            echo "</div>";
        }
        
        $__internal_deb5447359bdb7e449921ee266b783238d46469b35be8887f576ca78a290e299->leave($__internal_deb5447359bdb7e449921ee266b783238d46469b35be8887f576ca78a290e299_prof);

    }

    // line 81
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_5309cc83876039367904c37882645e03518bf78637d3650dc082bbfa256a4739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5309cc83876039367904c37882645e03518bf78637d3650dc082bbfa256a4739->enter($__internal_5309cc83876039367904c37882645e03518bf78637d3650dc082bbfa256a4739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 82
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 83
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 85
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 86
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 87
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 89
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 90
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 91
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 92
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 94
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 95
                echo "</div>";
            }
        }
        
        $__internal_5309cc83876039367904c37882645e03518bf78637d3650dc082bbfa256a4739->leave($__internal_5309cc83876039367904c37882645e03518bf78637d3650dc082bbfa256a4739_prof);

    }

    // line 100
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_a2f7700b39f58ae10a3ebc783c3d3c9df9288a4d1f81bfa824e21152c6ba5606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2f7700b39f58ae10a3ebc783c3d3c9df9288a4d1f81bfa824e21152c6ba5606->enter($__internal_a2f7700b39f58ae10a3ebc783c3d3c9df9288a4d1f81bfa824e21152c6ba5606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 101
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 102
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 104
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 105
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 106
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 108
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            echo ":";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 109
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 110
                echo "</div>";
            }
        }
        
        $__internal_a2f7700b39f58ae10a3ebc783c3d3c9df9288a4d1f81bfa824e21152c6ba5606->leave($__internal_a2f7700b39f58ae10a3ebc783c3d3c9df9288a4d1f81bfa824e21152c6ba5606_prof);

    }

    // line 115
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_d8f3dd4b27bfeaeffe39d4a8346a3a92924dc2b8d30962cf5e4c006d988f2534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8f3dd4b27bfeaeffe39d4a8346a3a92924dc2b8d30962cf5e4c006d988f2534->enter($__internal_d8f3dd4b27bfeaeffe39d4a8346a3a92924dc2b8d30962cf5e4c006d988f2534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 116
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 117
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_d8f3dd4b27bfeaeffe39d4a8346a3a92924dc2b8d30962cf5e4c006d988f2534->leave($__internal_d8f3dd4b27bfeaeffe39d4a8346a3a92924dc2b8d30962cf5e4c006d988f2534_prof);

    }

    // line 120
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_9cd2e4f693efd7206d069242c6bb6886a7df7cbd6c2f6286ed0fddcba099d72e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cd2e4f693efd7206d069242c6bb6886a7df7cbd6c2f6286ed0fddcba099d72e->enter($__internal_9cd2e4f693efd7206d069242c6bb6886a7df7cbd6c2f6286ed0fddcba099d72e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 121
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 122
            echo "<div class=\"control-group\">";
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 124
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 125
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 126
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "</div>";
        } else {
            // line 131
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 133
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 134
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 135
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "</div>";
        }
        
        $__internal_9cd2e4f693efd7206d069242c6bb6886a7df7cbd6c2f6286ed0fddcba099d72e->leave($__internal_9cd2e4f693efd7206d069242c6bb6886a7df7cbd6c2f6286ed0fddcba099d72e_prof);

    }

    // line 142
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_13a7bf234f833e9ec295089fbe38dbfaac0201beb261879758e9f55fd3455264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13a7bf234f833e9ec295089fbe38dbfaac0201beb261879758e9f55fd3455264->enter($__internal_13a7bf234f833e9ec295089fbe38dbfaac0201beb261879758e9f55fd3455264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 143
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 144
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 145
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 147
            echo "<div class=\"checkbox\">";
            // line 148
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 149
            echo "</div>";
        }
        
        $__internal_13a7bf234f833e9ec295089fbe38dbfaac0201beb261879758e9f55fd3455264->leave($__internal_13a7bf234f833e9ec295089fbe38dbfaac0201beb261879758e9f55fd3455264_prof);

    }

    // line 153
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_920fc71f8878600bdd95048750066d939b52c0be181e3dc72f53bc962000a2e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_920fc71f8878600bdd95048750066d939b52c0be181e3dc72f53bc962000a2e4->enter($__internal_920fc71f8878600bdd95048750066d939b52c0be181e3dc72f53bc962000a2e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 155
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"radio\">";
            // line 159
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_920fc71f8878600bdd95048750066d939b52c0be181e3dc72f53bc962000a2e4->leave($__internal_920fc71f8878600bdd95048750066d939b52c0be181e3dc72f53bc962000a2e4_prof);

    }

    // line 164
    public function block_choice_tree_widget($context, array $blocks = array())
    {
        $__internal_5b05e28e249bae565ae990b6b2f43a1b78220bc66e240601fbe9bbbae476cdab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b05e28e249bae565ae990b6b2f43a1b78220bc66e240601fbe9bbbae476cdab->enter($__internal_5b05e28e249bae565ae990b6b2f43a1b78220bc66e240601fbe9bbbae476cdab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_tree_widget"));

        // line 165
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"category-tree-overflow\">
        <ul class=\"category-tree\">
            <li class=\"form-control-label text-right main-category\">";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Main category", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</li>";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? $this->getContext($context, "choices")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 169
            echo "            ";
            $this->displayBlock("choice_tree_item_widget", $context, $blocks);
            echo "
        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "</ul>
    </div>";
        
        $__internal_5b05e28e249bae565ae990b6b2f43a1b78220bc66e240601fbe9bbbae476cdab->leave($__internal_5b05e28e249bae565ae990b6b2f43a1b78220bc66e240601fbe9bbbae476cdab_prof);

    }

    // line 175
    public function block_choice_tree_item_widget($context, array $blocks = array())
    {
        $__internal_5bd7e8995a69f4f64b54816b781dc60a186a38120a49a76ffe9af691096bcb93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bd7e8995a69f4f64b54816b781dc60a186a38120a49a76ffe9af691096bcb93->enter($__internal_5bd7e8995a69f4f64b54816b781dc60a186a38120a49a76ffe9af691096bcb93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_tree_item_widget"));

        // line 176
        echo "<li>
        ";
        // line 177
        $context["checked"] = ((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "submitted_values", array(), "any", true, true) && $this->getAttribute(($context["submitted_values"] ?? null), $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "id_category", array()), array(), "array", true, true))) ? ("checked=\"checked\"") : (""));
        // line 178
        echo "        ";
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 179
            echo "<div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" name=\"";
            // line 181
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "full_name", array()), "html", null, true);
            echo "[tree][]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "id_category", array()), "html", null, true);
            echo "\" class=\"category\" ";
            echo twig_escape_filter($this->env, ($context["checked"] ?? $this->getContext($context, "checked")), "html", null, true);
            echo ">
                    ";
            // line 182
            if (($this->getAttribute(($context["child"] ?? null), "active", array(), "any", true, true) && ($this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "active", array()) == 0))) {
                // line 183
                echo "                        <i>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "name", array()), "html", null, true);
                echo "</i>";
            } else {
                // line 185
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "name", array()), "html", null, true);
                echo "
                    ";
            }
            // line 187
            echo "                    ";
            if (array_key_exists("defaultCategory", $context)) {
                // line 188
                echo "                        <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "id_category", array()), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
                    ";
            }
            // line 190
            echo "                </label>
            </div>";
        } else {
            // line 193
            echo "<div class=\"radio\">
                <label>
                    <input type=\"radio\" name=\"form[";
            // line 195
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
            echo "][tree]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "id_category", array()), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["checked"] ?? $this->getContext($context, "checked")), "html", null, true);
            echo " class=\"category\">
                    ";
            // line 196
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "name", array()), "html", null, true);
            echo "
                    ";
            // line 197
            if (array_key_exists("defaultCategory", $context)) {
                // line 198
                echo "                        <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "id_category", array()), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
                    ";
            }
            // line 200
            echo "                </label>
            </div>";
        }
        // line 203
        echo "        ";
        if ($this->getAttribute(($context["child"] ?? null), "children", array(), "any", true, true)) {
            // line 204
            echo "            <ul>
                ";
            // line 205
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "children", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 206
                echo "                    ";
                $context["child"] = $context["item"];
                // line 207
                echo "                    ";
                $this->displayBlock("choice_tree_item_widget", $context, $blocks);
                echo "
                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 209
            echo "</ul>
        ";
        }
        // line 211
        echo "    </li>";
        
        $__internal_5bd7e8995a69f4f64b54816b781dc60a186a38120a49a76ffe9af691096bcb93->leave($__internal_5bd7e8995a69f4f64b54816b781dc60a186a38120a49a76ffe9af691096bcb93_prof);

    }

    // line 214
    public function block_translatefields_widget($context, array $blocks = array())
    {
        $__internal_e3a41284263ca225cd757c4bea71c2921f903e699b97f6d7660bc50f3c706bc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3a41284263ca225cd757c4bea71c2921f903e699b97f6d7660bc50f3c706bc8->enter($__internal_e3a41284263ca225cd757c4bea71c2921f903e699b97f6d7660bc50f3c706bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translatefields_widget"));

        // line 215
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
    <div class=\"translations tabbable\" id=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\">
        ";
        // line 217
        if (((($context["hideTabs"] ?? $this->getContext($context, "hideTabs")) == false) && (twig_length_filter($this->env, ($context["form"] ?? $this->getContext($context, "form"))) > 1))) {
            // line 218
            echo "        <ul class=\"translationsLocales nav nav-tabs\">
            ";
            // line 219
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 220
                echo "                <li class=\"";
                if (($this->getAttribute(($context["defaultLocale"] ?? $this->getContext($context, "defaultLocale")), "id_lang", array()) == $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array()))) {
                    echo "active";
                }
                echo " nav-link\">
                    <a href=\"#\" class=\"nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                // line 221
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "id", array()), "html", null, true);
                echo "\">
                        ";
                // line 222
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "label", array())), "html", null, true);
                echo "
                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 226
            echo "        </ul>
        ";
        }
        // line 228
        echo "
        <div class=\"translationsFields\">
            ";
        // line 230
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 231
            echo "                <div class=\"translationsFields-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "id", array()), "html", null, true);
            echo " translation-field ";
            if (((($context["hideTabs"] ?? $this->getContext($context, "hideTabs")) == false) && (twig_length_filter($this->env, ($context["form"] ?? $this->getContext($context, "form"))) > 1))) {
                echo "panel panel-default";
            }
            echo " ";
            if (($this->getAttribute(($context["defaultLocale"] ?? $this->getContext($context, "defaultLocale")), "id_lang", array()) == $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array()))) {
                echo "visible";
            }
            echo " ";
            if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
                echo "field-error";
            }
            echo " translation-label-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "label", array()), "html", null, true);
            echo "\">
                    ";
            // line 232
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["translationsFields"], 'errors');
            echo "
                    ";
            // line 233
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["translationsFields"], 'widget');
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 236
        echo "        </div>
    </div>
";
        
        $__internal_e3a41284263ca225cd757c4bea71c2921f903e699b97f6d7660bc50f3c706bc8->leave($__internal_e3a41284263ca225cd757c4bea71c2921f903e699b97f6d7660bc50f3c706bc8_prof);

    }

    // line 240
    public function block_translate_fields_widget($context, array $blocks = array())
    {
        $__internal_85de2eff752a0c7dfd4c4ad621c115c8a74cc7191768d968346fcb3de712c4c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85de2eff752a0c7dfd4c4ad621c115c8a74cc7191768d968346fcb3de712c4c8->enter($__internal_85de2eff752a0c7dfd4c4ad621c115c8a74cc7191768d968346fcb3de712c4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translate_fields_widget"));

        // line 241
        if (( !array_key_exists("type", $context) || ("file" != ($context["type"] ?? $this->getContext($context, "type"))))) {
            // line 242
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 244
        $this->displayParentBlock("translate_fields_widget", $context, $blocks);
        
        $__internal_85de2eff752a0c7dfd4c4ad621c115c8a74cc7191768d968346fcb3de712c4c8->leave($__internal_85de2eff752a0c7dfd4c4ad621c115c8a74cc7191768d968346fcb3de712c4c8_prof);

    }

    // line 247
    public function block_date_picker_widget($context, array $blocks = array())
    {
        $__internal_71ca6475973fe51921e6cf9f107e36df1c40a84a6210c9ef292983b3edaa53a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71ca6475973fe51921e6cf9f107e36df1c40a84a6210c9ef292983b3edaa53a6->enter($__internal_71ca6475973fe51921e6cf9f107e36df1c40a84a6210c9ef292983b3edaa53a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_picker_widget"));

        // line 248
        echo "    ";
        ob_start();
        // line 249
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " datepicker"))));
        // line 250
        echo "        <div class=\"input-group datepicker\">
            <input type=\"text\" class=\"form-control\" ";
        // line 251
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>
            <div class=\"input-group-addon\">
                <i class=\"material-icons\">date_range</i>
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_71ca6475973fe51921e6cf9f107e36df1c40a84a6210c9ef292983b3edaa53a6->leave($__internal_71ca6475973fe51921e6cf9f107e36df1c40a84a6210c9ef292983b3edaa53a6_prof);

    }

    // line 259
    public function block__form_step6_attachments_widget($context, array $blocks = array())
    {
        $__internal_1bee7413aa6b797139a82fce4a9464342c3f6d8e9d3d36950bc1bad3d03a487b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bee7413aa6b797139a82fce4a9464342c3f6d8e9d3d36950bc1bad3d03a487b->enter($__internal_1bee7413aa6b797139a82fce4a9464342c3f6d8e9d3d36950bc1bad3d03a487b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_form_step6_attachments_widget"));

        // line 260
        echo "    <div class=\"js-options-no-attachments ";
        echo (((twig_length_filter($this->env, ($context["form"] ?? $this->getContext($context, "form"))) > 0)) ? ("hide") : (""));
        echo "\">
        <small>";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("There is no attachment yet.", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "</small>
    </div>
    <div id=\"product-attachments\" class=\"panel panel-default\">
      <div class=\"panel-body js-options-with-attachments ";
        // line 264
        echo (((twig_length_filter($this->env, ($context["form"] ?? $this->getContext($context, "form"))) == 0)) ? ("hide") : (""));
        echo "\">
        <div>
          <table id=\"product-attachment-file\" class=\"table\">
            <thead class=\"thead-default\">
              <tr>
                <th class=\"col-md-3\"><input type=\"checkbox\" id=\"product-attachment-files-check\" /> ";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Title", array(), "Admin.Global"), "html", null, true);
        echo "</th>
                <th class=\"col-md-6\">";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("File name", array(), "Admin.Global"), "html", null, true);
        echo "</th>
                <th class=\"col-md-2\">";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
              </tr>
            </thead>
            <tbody>";
        // line 275
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 276
            echo "              <tr>
                <td class=\"col-md-3\">";
            // line 277
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
            echo "</td>
                <td class=\"col-md-6 file-name\"><span>";
            // line 278
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "attr", array()), "data", array()), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "file_name", array(), "array"), "html", null, true);
            echo "</span></td>
                <td class=\"col-md-2\">";
            // line 279
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "attr", array()), "data", array()), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "mime", array(), "array"), "html", null, true);
            echo "</td>
              </tr>
            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 282
        echo "</tbody>
          </table>
        </div>
      </div>
    </div>
";
        
        $__internal_1bee7413aa6b797139a82fce4a9464342c3f6d8e9d3d36950bc1bad3d03a487b->leave($__internal_1bee7413aa6b797139a82fce4a9464342c3f6d8e9d3d36950bc1bad3d03a487b_prof);

    }

    // line 291
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_77ce53f52ac8ce6f6352711412e51b73d60ab4662cafe7996fe511952cbce760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77ce53f52ac8ce6f6352711412e51b73d60ab4662cafe7996fe511952cbce760->enter($__internal_77ce53f52ac8ce6f6352711412e51b73d60ab4662cafe7996fe511952cbce760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 292
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 293
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_77ce53f52ac8ce6f6352711412e51b73d60ab4662cafe7996fe511952cbce760->leave($__internal_77ce53f52ac8ce6f6352711412e51b73d60ab4662cafe7996fe511952cbce760_prof);

    }

    // line 296
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_294c766f508a30686246cdc7e219721a845e97962c9d3c57ea643661b7f982bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_294c766f508a30686246cdc7e219721a845e97962c9d3c57ea643661b7f982bc->enter($__internal_294c766f508a30686246cdc7e219721a845e97962c9d3c57ea643661b7f982bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 298
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 299
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_294c766f508a30686246cdc7e219721a845e97962c9d3c57ea643661b7f982bc->leave($__internal_294c766f508a30686246cdc7e219721a845e97962c9d3c57ea643661b7f982bc_prof);

    }

    // line 302
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_579363679d7f4177de7156c37ed858fe2bad257f82a309caa39fcc38c41de674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_579363679d7f4177de7156c37ed858fe2bad257f82a309caa39fcc38c41de674->enter($__internal_579363679d7f4177de7156c37ed858fe2bad257f82a309caa39fcc38c41de674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 303
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_579363679d7f4177de7156c37ed858fe2bad257f82a309caa39fcc38c41de674->leave($__internal_579363679d7f4177de7156c37ed858fe2bad257f82a309caa39fcc38c41de674_prof);

    }

    // line 306
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_84cfaad5a74c9cab9e54b4457c188742590cefd1ba38af971f3fa63b5dcfd454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84cfaad5a74c9cab9e54b4457c188742590cefd1ba38af971f3fa63b5dcfd454->enter($__internal_84cfaad5a74c9cab9e54b4457c188742590cefd1ba38af971f3fa63b5dcfd454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 307
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_84cfaad5a74c9cab9e54b4457c188742590cefd1ba38af971f3fa63b5dcfd454->leave($__internal_84cfaad5a74c9cab9e54b4457c188742590cefd1ba38af971f3fa63b5dcfd454_prof);

    }

    // line 310
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_2a253a0c728c8e64a2d6e5f36174d4d37e1484c8615d1ddcab116168976fa81d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a253a0c728c8e64a2d6e5f36174d4d37e1484c8615d1ddcab116168976fa81d->enter($__internal_2a253a0c728c8e64a2d6e5f36174d4d37e1484c8615d1ddcab116168976fa81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 311
        echo "    ";
        // line 312
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 313
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 314
                echo "    ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 316
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 317
                echo "    ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            }
            // line 319
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 320
                echo "    ";
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
            // line 322
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
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
            // line 323
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            // line 324
            echo (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : (($context["label"] ?? $this->getContext($context, "label"))))) : (""));
            // line 325
            echo "</label>
    ";
        }
        
        $__internal_2a253a0c728c8e64a2d6e5f36174d4d37e1484c8615d1ddcab116168976fa81d->leave($__internal_2a253a0c728c8e64a2d6e5f36174d4d37e1484c8615d1ddcab116168976fa81d_prof);

    }

    // line 331
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_5b075452f6f5d7986d2860e0b0e51532f14052519badb31338cf30de5629d7c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b075452f6f5d7986d2860e0b0e51532f14052519badb31338cf30de5629d7c3->enter($__internal_5b075452f6f5d7986d2860e0b0e51532f14052519badb31338cf30de5629d7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 332
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 333
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 334
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 335
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 336
        echo "</div>";
        
        $__internal_5b075452f6f5d7986d2860e0b0e51532f14052519badb31338cf30de5629d7c3->leave($__internal_5b075452f6f5d7986d2860e0b0e51532f14052519badb31338cf30de5629d7c3_prof);

    }

    // line 339
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_15d1390e6930d79e7e493af67c923a2d803f13ca8ca2147f4a18d601c305c195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d1390e6930d79e7e493af67c923a2d803f13ca8ca2147f4a18d601c305c195->enter($__internal_15d1390e6930d79e7e493af67c923a2d803f13ca8ca2147f4a18d601c305c195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 340
        echo "<div class=\"form-group\">";
        // line 341
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 342
        echo "</div>";
        
        $__internal_15d1390e6930d79e7e493af67c923a2d803f13ca8ca2147f4a18d601c305c195->leave($__internal_15d1390e6930d79e7e493af67c923a2d803f13ca8ca2147f4a18d601c305c195_prof);

    }

    // line 345
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_54d7ffc05b534def77a98fbc0f8cf20d366f0f83d709fa70ce3994b8054a26b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d7ffc05b534def77a98fbc0f8cf20d366f0f83d709fa70ce3994b8054a26b3->enter($__internal_54d7ffc05b534def77a98fbc0f8cf20d366f0f83d709fa70ce3994b8054a26b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 346
        $context["force_error"] = true;
        // line 347
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_54d7ffc05b534def77a98fbc0f8cf20d366f0f83d709fa70ce3994b8054a26b3->leave($__internal_54d7ffc05b534def77a98fbc0f8cf20d366f0f83d709fa70ce3994b8054a26b3_prof);

    }

    // line 350
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_23a2ed9cd34a15fa40e8265afd48e61857a1c8abd96244d11420da3cd7d367b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23a2ed9cd34a15fa40e8265afd48e61857a1c8abd96244d11420da3cd7d367b2->enter($__internal_23a2ed9cd34a15fa40e8265afd48e61857a1c8abd96244d11420da3cd7d367b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 351
        $context["force_error"] = true;
        // line 352
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_23a2ed9cd34a15fa40e8265afd48e61857a1c8abd96244d11420da3cd7d367b2->leave($__internal_23a2ed9cd34a15fa40e8265afd48e61857a1c8abd96244d11420da3cd7d367b2_prof);

    }

    // line 355
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_e34c09203157dafcb1334799d9d8621f0859e9ef2a12a23423e31eed9ae690bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e34c09203157dafcb1334799d9d8621f0859e9ef2a12a23423e31eed9ae690bd->enter($__internal_e34c09203157dafcb1334799d9d8621f0859e9ef2a12a23423e31eed9ae690bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 356
        $context["force_error"] = true;
        // line 357
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e34c09203157dafcb1334799d9d8621f0859e9ef2a12a23423e31eed9ae690bd->leave($__internal_e34c09203157dafcb1334799d9d8621f0859e9ef2a12a23423e31eed9ae690bd_prof);

    }

    // line 360
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_8b950037133f8350b1ae7535cabe7a4c67e0e16c1169af9160de725a4f8b6cd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b950037133f8350b1ae7535cabe7a4c67e0e16c1169af9160de725a4f8b6cd1->enter($__internal_8b950037133f8350b1ae7535cabe7a4c67e0e16c1169af9160de725a4f8b6cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 361
        $context["force_error"] = true;
        // line 362
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8b950037133f8350b1ae7535cabe7a4c67e0e16c1169af9160de725a4f8b6cd1->leave($__internal_8b950037133f8350b1ae7535cabe7a4c67e0e16c1169af9160de725a4f8b6cd1_prof);

    }

    // line 365
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_606649d729667a6ab8b66b10976bb556437782ff3a06e076db0335f774383ca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_606649d729667a6ab8b66b10976bb556437782ff3a06e076db0335f774383ca9->enter($__internal_606649d729667a6ab8b66b10976bb556437782ff3a06e076db0335f774383ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 366
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 367
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 368
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 369
        echo "</div>";
        
        $__internal_606649d729667a6ab8b66b10976bb556437782ff3a06e076db0335f774383ca9->leave($__internal_606649d729667a6ab8b66b10976bb556437782ff3a06e076db0335f774383ca9_prof);

    }

    // line 372
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_33af9bfcfd1895886737bfaac3a4a2fc4a5d324a912f53d338dc965604cb0e83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33af9bfcfd1895886737bfaac3a4a2fc4a5d324a912f53d338dc965604cb0e83->enter($__internal_33af9bfcfd1895886737bfaac3a4a2fc4a5d324a912f53d338dc965604cb0e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 373
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 374
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 375
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 376
        echo "</div>";
        
        $__internal_33af9bfcfd1895886737bfaac3a4a2fc4a5d324a912f53d338dc965604cb0e83->leave($__internal_33af9bfcfd1895886737bfaac3a4a2fc4a5d324a912f53d338dc965604cb0e83_prof);

    }

    // line 381
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_cd634d39e6cabc0dc4ab24dcbcaf9ebc684964808bde6ebbfbcf7d640b0742a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd634d39e6cabc0dc4ab24dcbcaf9ebc684964808bde6ebbfbcf7d640b0742a7->enter($__internal_cd634d39e6cabc0dc4ab24dcbcaf9ebc684964808bde6ebbfbcf7d640b0742a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 382
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 383
            echo "<div class=\"alert alert-danger\">";
            // line 384
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 1)) {
                // line 385
                echo "<ul class=\"alert-text\">";
                // line 386
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 387
                    echo "<li> ";
                    echo twig_escape_filter($this->env, (((null === $this->getAttribute(                    // line 388
$context["error"], "messagePluralization", array()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(                    // line 389
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "form_error")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute(                    // line 390
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messagePluralization", array()), $this->getAttribute($context["error"], "messageParameters", array()), "form_error"))), "html", null, true);
                    // line 391
                    echo "
                    </li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 394
                echo "</ul>";
            } else {
                // line 396
                echo "<div class=\"alert-text\">";
                // line 397
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 398
                    echo "<p> ";
                    echo twig_escape_filter($this->env, (((null === $this->getAttribute(                    // line 399
$context["error"], "messagePluralization", array()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(                    // line 400
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "form_error")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute(                    // line 401
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messagePluralization", array()), $this->getAttribute($context["error"], "messageParameters", array()), "form_error"))), "html", null, true);
                    // line 402
                    echo "
                </p>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 405
                echo "</div>";
            }
            // line 407
            echo "</div>";
        }
        
        $__internal_cd634d39e6cabc0dc4ab24dcbcaf9ebc684964808bde6ebbfbcf7d640b0742a7->leave($__internal_cd634d39e6cabc0dc4ab24dcbcaf9ebc684964808bde6ebbfbcf7d640b0742a7_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1336 => 407,  1333 => 405,  1326 => 402,  1324 => 401,  1323 => 400,  1322 => 399,  1320 => 398,  1316 => 397,  1314 => 396,  1311 => 394,  1304 => 391,  1302 => 390,  1301 => 389,  1300 => 388,  1298 => 387,  1294 => 386,  1292 => 385,  1290 => 384,  1288 => 383,  1286 => 382,  1280 => 381,  1273 => 376,  1271 => 375,  1269 => 374,  1263 => 373,  1257 => 372,  1250 => 369,  1248 => 368,  1246 => 367,  1240 => 366,  1234 => 365,  1227 => 362,  1225 => 361,  1219 => 360,  1212 => 357,  1210 => 356,  1204 => 355,  1197 => 352,  1195 => 351,  1189 => 350,  1182 => 347,  1180 => 346,  1174 => 345,  1167 => 342,  1165 => 341,  1163 => 340,  1157 => 339,  1150 => 336,  1148 => 335,  1146 => 334,  1144 => 333,  1138 => 332,  1132 => 331,  1123 => 325,  1121 => 324,  1119 => 323,  1104 => 322,  1100 => 320,  1097 => 319,  1093 => 317,  1090 => 316,  1086 => 314,  1083 => 313,  1080 => 312,  1078 => 311,  1072 => 310,  1065 => 307,  1059 => 306,  1052 => 303,  1046 => 302,  1039 => 299,  1037 => 298,  1031 => 296,  1024 => 293,  1022 => 292,  1016 => 291,  1004 => 282,  987 => 279,  983 => 278,  979 => 277,  976 => 276,  959 => 275,  953 => 271,  949 => 270,  945 => 269,  937 => 264,  931 => 261,  926 => 260,  920 => 259,  900 => 251,  897 => 250,  894 => 249,  891 => 248,  885 => 247,  878 => 244,  875 => 242,  873 => 241,  867 => 240,  858 => 236,  849 => 233,  845 => 232,  826 => 231,  822 => 230,  818 => 228,  814 => 226,  804 => 222,  800 => 221,  793 => 220,  789 => 219,  786 => 218,  784 => 217,  780 => 216,  775 => 215,  769 => 214,  762 => 211,  758 => 209,  741 => 207,  738 => 206,  721 => 205,  718 => 204,  715 => 203,  711 => 200,  705 => 198,  703 => 197,  699 => 196,  691 => 195,  687 => 193,  683 => 190,  677 => 188,  674 => 187,  669 => 185,  664 => 183,  662 => 182,  654 => 181,  650 => 179,  647 => 178,  645 => 177,  642 => 176,  636 => 175,  628 => 171,  611 => 169,  594 => 168,  591 => 167,  585 => 165,  579 => 164,  571 => 160,  569 => 159,  567 => 158,  564 => 156,  562 => 155,  560 => 154,  554 => 153,  546 => 149,  544 => 148,  542 => 147,  539 => 145,  537 => 144,  535 => 143,  529 => 142,  521 => 138,  515 => 135,  514 => 134,  513 => 133,  509 => 132,  505 => 131,  502 => 129,  496 => 126,  495 => 125,  494 => 124,  490 => 123,  488 => 122,  486 => 121,  480 => 120,  473 => 117,  471 => 116,  465 => 115,  456 => 110,  453 => 109,  445 => 108,  440 => 106,  438 => 105,  436 => 104,  433 => 102,  431 => 101,  425 => 100,  416 => 95,  414 => 94,  412 => 92,  411 => 91,  410 => 90,  409 => 89,  404 => 87,  402 => 86,  400 => 85,  397 => 83,  395 => 82,  389 => 81,  381 => 77,  379 => 76,  377 => 75,  375 => 74,  373 => 73,  369 => 72,  367 => 71,  364 => 69,  362 => 68,  356 => 67,  348 => 63,  346 => 62,  344 => 61,  338 => 60,  331 => 57,  325 => 55,  323 => 54,  321 => 53,  315 => 51,  312 => 50,  310 => 49,  307 => 48,  301 => 47,  294 => 44,  292 => 43,  286 => 42,  279 => 39,  277 => 38,  271 => 37,  264 => 34,  261 => 32,  259 => 31,  253 => 30,  246 => 381,  243 => 380,  240 => 378,  238 => 372,  235 => 371,  233 => 365,  230 => 364,  228 => 360,  225 => 359,  223 => 355,  220 => 354,  218 => 350,  215 => 349,  213 => 345,  210 => 344,  208 => 339,  205 => 338,  203 => 331,  200 => 330,  197 => 328,  195 => 310,  192 => 309,  190 => 306,  187 => 305,  185 => 302,  182 => 301,  180 => 296,  177 => 295,  175 => 291,  172 => 290,  169 => 288,  167 => 259,  164 => 258,  162 => 247,  159 => 246,  157 => 240,  154 => 239,  152 => 214,  149 => 213,  147 => 175,  144 => 174,  142 => 164,  139 => 163,  137 => 153,  134 => 152,  132 => 142,  129 => 141,  127 => 120,  124 => 119,  122 => 115,  119 => 114,  117 => 100,  114 => 99,  112 => 81,  109 => 80,  107 => 67,  104 => 66,  102 => 60,  99 => 59,  97 => 47,  94 => 46,  92 => 42,  89 => 41,  87 => 37,  84 => 36,  82 => 30,  79 => 29,  76 => 27,  21 => 26,  14 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{% use \"PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig\" %}
{% use 'PrestaShopBundle:Admin/TwigTemplateForm:typeahead.html.twig' %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or 'file' != type %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group money-type\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if prepend %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
        {{- date_pattern|replace({
            '{{ year }}': form_widget(form.year),
            '{{ month }}': form_widget(form.month),
            '{{ day }}': form_widget(form.day),
        })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}:{{ form_widget(form.minute) }}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        <div class=\"control-group\">
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default('') -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{% block choice_tree_widget -%}
    <div {{ block('widget_container_attributes') }} class=\"category-tree-overflow\">
        <ul class=\"category-tree\">
            <li class=\"form-control-label text-right main-category\">{{ \"Main category\"|trans({}, 'Admin.Catalog.Feature') }}</li>
            {%- for child in choices %}
            {{ block('choice_tree_item_widget') }}
        {% endfor -%}
        </ul>
    </div>
{%- endblock choice_tree_widget %}

{% block choice_tree_item_widget -%}
    <li>
        {% set checked = (form.vars.submitted_values is defined and submitted_values[child.id_category] is defined) ? 'checked=\"checked\"' : '' %}
        {% if multiple -%}
            <div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" name=\"{{ form.vars.full_name }}[tree][]\" value=\"{{ child.id_category }}\" class=\"category\" {{ checked }}>
                    {% if child.active is defined and child.active == 0 %}
                        <i>{{ child.name }}</i>
                    {%- else -%}
                        {{ child.name }}
                    {% endif %}
                    {% if defaultCategory is defined %}
                        <input type=\"radio\" value=\"{{ child.id_category }}\" name=\"ignore\" class=\"default-category\" />
                    {% endif %}
                </label>
            </div>
        {%- else -%}
            <div class=\"radio\">
                <label>
                    <input type=\"radio\" name=\"form[{{ form.vars.id }}][tree]\" value=\"{{ child.id_category }}\" {{ checked }} class=\"category\">
                    {{ child.name }}
                    {% if defaultCategory is defined %}
                        <input type=\"radio\" value=\"{{ child.id_category }}\" name=\"ignore\" class=\"default-category\" />
                    {% endif %}
                </label>
            </div>
        {%- endif %}
        {% if child.children is defined %}
            <ul>
                {% for item in child.children %}
                    {% set child = item %}
                    {{ block('choice_tree_item_widget') }}
                {% endfor -%}
            </ul>
        {% endif %}
    </li>
{%- endblock choice_tree_item_widget %}

{% block translatefields_widget %}
    {{ form_errors(form) }}
    <div class=\"translations tabbable\" id=\"{{ form.vars.id }}\">
        {% if hideTabs == false and form|length > 1 %}
        <ul class=\"translationsLocales nav nav-tabs\">
            {% for translationsFields in form %}
                <li class=\"{% if defaultLocale.id_lang == translationsFields.vars.name %}active{% endif %} nav-link\">
                    <a href=\"#\" class=\"nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-{{ translationsFields.vars.id }}\">
                        {{ translationsFields.vars.label|capitalize }}
                    </a>
                </li>
            {% endfor %}
        </ul>
        {% endif %}

        <div class=\"translationsFields\">
            {% for translationsFields in form %}
                <div class=\"translationsFields-{{ translationsFields.vars.id }} translation-field {% if hideTabs == false and form|length > 1 %}panel panel-default{% endif %} {% if defaultLocale.id_lang == translationsFields.vars.name %}visible{% endif %} {% if not form.vars.valid %}field-error{% endif %} translation-label-{{ translationsFields.vars.label }}\">
                    {{ form_errors(translationsFields) }}
                    {{ form_widget(translationsFields) }}
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}

{% block translate_fields_widget -%}
    {% if type is not defined or 'file' != type %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock translate_fields_widget %}

{% block date_picker_widget %}
    {% spaceless %}
        {%  set attr = attr|merge({'class': ((attr.class|default('') ~ ' datepicker')|trim)}) %}
        <div class=\"input-group datepicker\">
            <input type=\"text\" class=\"form-control\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
            <div class=\"input-group-addon\">
                <i class=\"material-icons\">date_range</i>
            </div>
        </div>
    {% endspaceless %}
{% endblock date_picker_widget %}

{% block _form_step6_attachments_widget %}
    <div class=\"js-options-no-attachments {{ form|length > 0 ? 'hide' : '' }}\">
        <small>{{ 'There is no attachment yet.'|trans({}, 'Admin.Catalog.Notification') }}</small>
    </div>
    <div id=\"product-attachments\" class=\"panel panel-default\">
      <div class=\"panel-body js-options-with-attachments {{ form|length == 0 ? 'hide' : '' }}\">
        <div>
          <table id=\"product-attachment-file\" class=\"table\">
            <thead class=\"thead-default\">
              <tr>
                <th class=\"col-md-3\"><input type=\"checkbox\" id=\"product-attachment-files-check\" /> {{ 'Title'|trans({}, 'Admin.Global') }}</th>
                <th class=\"col-md-6\">{{ 'File name'|trans({}, 'Admin.Global') }}</th>
                <th class=\"col-md-2\">{{ 'Type'|trans({}, 'Admin.Catalog.Feature') }}</th>
              </tr>
            </thead>
            <tbody>
            {%- for child in form %}
              <tr>
                <td class=\"col-md-3\">{{ form_widget(child) }}</td>
                <td class=\"col-md-6 file-name\"><span>{{ form.vars.attr.data[loop.index0]['file_name'] }}</span></td>
                <td class=\"col-md-2\">{{ form.vars.attr.data[loop.index0]['mime'] }}</td>
              </tr>
            {% endfor -%}
            </tbody>
          </table>
        </div>
      </div>
    </div>
{% endblock %}

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
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
    {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
{% endif %}
        {% if parent_label_class is defined %}
    {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
{% endif %}
        {% if label is not same as(false) and label is empty %}
    {% set label = name|humanize %}
{% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw -}}
            {{- label is not same as(false) ? (translation_domain is same as(false) ? label|raw : label|raw) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

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
    <div class=\"alert alert-danger\">
        {%- if errors|length > 1 -%}
            <ul class=\"alert-text\">
                {%- for error in errors -%}
                    <li> {{
                        error.messagePluralization is null
                        ? error.messageTemplate|trans(error.messageParameters, 'form_error')
                        : error.messageTemplate|transchoice(error.messagePluralization, error.messageParameters, 'form_error')
                        }}
                    </li>
                {%- endfor -%}
            </ul>
        {%- else -%}
            <div class=\"alert-text\">
            {%- for error in errors -%}
                <p> {{
                    error.messagePluralization is null
                    ? error.messageTemplate|trans(error.messageParameters, 'form_error')
                    : error.messageTemplate|transchoice(error.messagePluralization, error.messageParameters, 'form_error')
                    }}
                </p>
            {%- endfor -%}
            </div>
        {%- endif -%}
    </div>
    {%- endif %}
{%- endblock form_errors %}
", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_3_layout.html.twig", "/home/student/Développement/Webacademie/Semestre_2/Prestashop_Fortune/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/bootstrap_3_layout.html.twig");
    }
}
