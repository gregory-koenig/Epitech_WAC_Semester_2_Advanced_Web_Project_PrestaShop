<?php

/* PrestaShopBundle:Admin/Module/Includes:card_notification_configure.html.twig */
class __TwigTemplate_9265f1e849a90ebf3e0fe9683c9ab0a9bcbfa611ad2c89abb84ef852b792e7bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:card_manage_installed.html.twig", "PrestaShopBundle:Admin/Module/Includes:card_notification_configure.html.twig", 25);
        $this->blocks = array(
            'addon_description' => array($this, 'block_addon_description'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Module/Includes:card_manage_installed.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dff3429e888980610385f90eff061166d11571001fcf96cdc1de731b4e903f82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dff3429e888980610385f90eff061166d11571001fcf96cdc1de731b4e903f82->enter($__internal_dff3429e888980610385f90eff061166d11571001fcf96cdc1de731b4e903f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module/Includes:card_notification_configure.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dff3429e888980610385f90eff061166d11571001fcf96cdc1de731b4e903f82->leave($__internal_dff3429e888980610385f90eff061166d11571001fcf96cdc1de731b4e903f82_prof);

    }

    // line 30
    public function block_addon_description($context, array $blocks = array())
    {
        $__internal_cc6901791e7a76d6f38638d5827b80dfc6128494b77d07bd3774fe18445fce82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc6901791e7a76d6f38638d5827b80dfc6128494b77d07bd3774fe18445fce82->enter($__internal_cc6901791e7a76d6f38638d5827b80dfc6128494b77d07bd3774fe18445fce82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addon_description"));

        // line 31
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "warning", array()), "html", null, true);
        echo "
";
        
        $__internal_cc6901791e7a76d6f38638d5827b80dfc6128494b77d07bd3774fe18445fce82->leave($__internal_cc6901791e7a76d6f38638d5827b80dfc6128494b77d07bd3774fe18445fce82_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module/Includes:card_notification_configure.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 31,  34 => 30,  11 => 25,);
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
{% extends \"PrestaShopBundle:Admin/Module/Includes:card_manage_installed.html.twig\" %}

{# Twig extension for \"Addons to configure\" part in notification page #}

{# Display the warning message instead of the addon description #}
{% block addon_description %}
    {{module.attributes.warning}}
{% endblock %}
", "PrestaShopBundle:Admin/Module/Includes:card_notification_configure.html.twig", "/home/student/Développement/Webacademie/Semestre_2/Prestashop_Fortune/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/card_notification_configure.html.twig");
    }
}
