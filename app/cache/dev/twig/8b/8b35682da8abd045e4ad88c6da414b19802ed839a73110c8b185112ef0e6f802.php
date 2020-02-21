<?php

/* PrestaShopBundle:Admin/Module/Includes:card_notification_update.html.twig */
class __TwigTemplate_7a1ecfe84e626ec8ed98f545c362a3348ec37fe993fa1e95b758cab4e8e9e9f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:card_list.html.twig", "PrestaShopBundle:Admin/Module/Includes:card_notification_update.html.twig", 25);
        $this->blocks = array(
            'addon_version' => array($this, 'block_addon_version'),
            'addon_description' => array($this, 'block_addon_description'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Module/Includes:card_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa596090a23048b868f703c4d3c1632ce479ddee97c64282f7ad4a3ba7712134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa596090a23048b868f703c4d3c1632ce479ddee97c64282f7ad4a3ba7712134->enter($__internal_aa596090a23048b868f703c4d3c1632ce479ddee97c64282f7ad4a3ba7712134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module/Includes:card_notification_update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa596090a23048b868f703c4d3c1632ce479ddee97c64282f7ad4a3ba7712134->leave($__internal_aa596090a23048b868f703c4d3c1632ce479ddee97c64282f7ad4a3ba7712134_prof);

    }

    // line 30
    public function block_addon_version($context, array $blocks = array())
    {
        $__internal_c1ef1d41955c8985d8a4f17b9b425dbfc02c230b790104dca89c6e5d6bedea7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1ef1d41955c8985d8a4f17b9b425dbfc02c230b790104dca89c6e5d6bedea7d->enter($__internal_c1ef1d41955c8985d8a4f17b9b425dbfc02c230b790104dca89c6e5d6bedea7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addon_version"));

        // line 31
        echo "  v";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "database", array()), "version", array()), "html", null, true);
        echo " <i class=\"material-icons\" style=\"font-size: 10px; \">arrow_forward</i> v";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "version_available", array()), "html", null, true);
        echo "
";
        
        $__internal_c1ef1d41955c8985d8a4f17b9b425dbfc02c230b790104dca89c6e5d6bedea7d->leave($__internal_c1ef1d41955c8985d8a4f17b9b425dbfc02c230b790104dca89c6e5d6bedea7d_prof);

    }

    // line 35
    public function block_addon_description($context, array $blocks = array())
    {
        $__internal_87d5320a17528d3ed8b1893e85acfcf640c32f2af73aa7d65f153849556ca96d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87d5320a17528d3ed8b1893e85acfcf640c32f2af73aa7d65f153849556ca96d->enter($__internal_87d5320a17528d3ed8b1893e85acfcf640c32f2af73aa7d65f153849556ca96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addon_description"));

        // line 36
        echo "  ";
        if ($this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", array(), "any", false, true), "changeLog", array(), "any", true, true)) {
            // line 37
            echo "    <ul>
      ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "changeLog", array()));
            foreach ($context['_seq'] as $context["version"] => $context["lines"]) {
                // line 39
                echo "        <li><b>";
                echo twig_escape_filter($this->env, $context["version"], "html", null, true);
                echo ":</b>
          ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["lines"]);
                foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                    // line 41
                    echo "            ";
                    echo twig_escape_filter($this->env, $context["line"], "html", null, true);
                    echo "<br/>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['version'], $context['lines'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "    </ul>
  ";
        } else {
            // line 47
            echo "    <i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No changelog provided", array(), "Admin.Modules.Notification"), "html", null, true);
            echo "</i>
  ";
        }
        // line 49
        echo "
";
        
        $__internal_87d5320a17528d3ed8b1893e85acfcf640c32f2af73aa7d65f153849556ca96d->leave($__internal_87d5320a17528d3ed8b1893e85acfcf640c32f2af73aa7d65f153849556ca96d_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module/Includes:card_notification_update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 49,  98 => 47,  94 => 45,  87 => 43,  78 => 41,  74 => 40,  69 => 39,  65 => 38,  62 => 37,  59 => 36,  53 => 35,  41 => 31,  35 => 30,  11 => 25,);
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
{% extends \"PrestaShopBundle:Admin/Module/Includes:card_list.html.twig\" %}

{# Twig extension for \"Addons to update\" part in notification page #}

{# Display \"Old version -> New version\" #}
{% block addon_version %}
  v{{ module.database.version }} <i class=\"material-icons\" style=\"font-size: 10px; \">arrow_forward</i> v{{ module.attributes.version_available }}
{% endblock %}

{# Display changelog instead of the description #}
{% block addon_description %}
  {% if module.attributes.changeLog is defined %}
    <ul>
      {% for version, lines in module.attributes.changeLog %}
        <li><b>{{ version }}:</b>
          {% for line in lines %}
            {{ line }}<br/>
          {% endfor %}
        </li>
      {% endfor %}
    </ul>
  {% else %}
    <i>{{ 'No changelog provided'|trans({}, 'Admin.Modules.Notification') }}</i>
  {% endif %}

{% endblock %}
", "PrestaShopBundle:Admin/Module/Includes:card_notification_update.html.twig", "/home/student/Développement/Webacademie/Semestre_2/Prestashop_Fortune/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/card_notification_update.html.twig");
    }
}
