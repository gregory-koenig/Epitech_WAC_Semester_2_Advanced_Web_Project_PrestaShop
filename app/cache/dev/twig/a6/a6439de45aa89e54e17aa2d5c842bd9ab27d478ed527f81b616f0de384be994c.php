<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_858c382bdc46e68fdf8dced6203865af2854f47b8d960b054be5a95abf82c707 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f3ede6e52a1b46df3c77122e37179668a7ec03cab8d52f94c56369b898272cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f3ede6e52a1b46df3c77122e37179668a7ec03cab8d52f94c56369b898272cf->enter($__internal_7f3ede6e52a1b46df3c77122e37179668a7ec03cab8d52f94c56369b898272cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f3ede6e52a1b46df3c77122e37179668a7ec03cab8d52f94c56369b898272cf->leave($__internal_7f3ede6e52a1b46df3c77122e37179668a7ec03cab8d52f94c56369b898272cf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3698f0a163525512515bd4ee16da89fa677f1c3aa576d6d0a928fba923d7daf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3698f0a163525512515bd4ee16da89fa677f1c3aa576d6d0a928fba923d7daf1->enter($__internal_3698f0a163525512515bd4ee16da89fa677f1c3aa576d6d0a928fba923d7daf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_3698f0a163525512515bd4ee16da89fa677f1c3aa576d6d0a928fba923d7daf1->leave($__internal_3698f0a163525512515bd4ee16da89fa677f1c3aa576d6d0a928fba923d7daf1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_061b185284d141dc9178343f789e92a4ea5c7b84e370e189e012b8b10817cf9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_061b185284d141dc9178343f789e92a4ea5c7b84e370e189e012b8b10817cf9d->enter($__internal_061b185284d141dc9178343f789e92a4ea5c7b84e370e189e012b8b10817cf9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_061b185284d141dc9178343f789e92a4ea5c7b84e370e189e012b8b10817cf9d->leave($__internal_061b185284d141dc9178343f789e92a4ea5c7b84e370e189e012b8b10817cf9d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f7807e0b5c141b67ceb84a66f380af56917d491c16b344bd20d25d62616aaadf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7807e0b5c141b67ceb84a66f380af56917d491c16b344bd20d25d62616aaadf->enter($__internal_f7807e0b5c141b67ceb84a66f380af56917d491c16b344bd20d25d62616aaadf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_f7807e0b5c141b67ceb84a66f380af56917d491c16b344bd20d25d62616aaadf->leave($__internal_f7807e0b5c141b67ceb84a66f380af56917d491c16b344bd20d25d62616aaadf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/student/Développement/Webacademie/Semestre_2/Prestashop_Fortune/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
