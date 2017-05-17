<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_55d93e2896641743c6c407412a740b5f126ff4e55691abf303423d7b4ab4c278 extends Twig_Template
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
        $__internal_bb59697d1e02d9a60f9122783b5fd9036bbef207d947b9d541da864d9773e5c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb59697d1e02d9a60f9122783b5fd9036bbef207d947b9d541da864d9773e5c3->enter($__internal_bb59697d1e02d9a60f9122783b5fd9036bbef207d947b9d541da864d9773e5c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_27cde95a41f5076fb7ae00a7a6c700389e066bccb4ae169139b6de1a9c6f7b61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27cde95a41f5076fb7ae00a7a6c700389e066bccb4ae169139b6de1a9c6f7b61->enter($__internal_27cde95a41f5076fb7ae00a7a6c700389e066bccb4ae169139b6de1a9c6f7b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb59697d1e02d9a60f9122783b5fd9036bbef207d947b9d541da864d9773e5c3->leave($__internal_bb59697d1e02d9a60f9122783b5fd9036bbef207d947b9d541da864d9773e5c3_prof);

        
        $__internal_27cde95a41f5076fb7ae00a7a6c700389e066bccb4ae169139b6de1a9c6f7b61->leave($__internal_27cde95a41f5076fb7ae00a7a6c700389e066bccb4ae169139b6de1a9c6f7b61_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_405b087a857f1021c9b043a1183bcba6faf26d7c9f6ee6c7c18852e97098232f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_405b087a857f1021c9b043a1183bcba6faf26d7c9f6ee6c7c18852e97098232f->enter($__internal_405b087a857f1021c9b043a1183bcba6faf26d7c9f6ee6c7c18852e97098232f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_528644df2e107b8c2f279f8dac99cb5ef678eb5e7f6833b6391d12975b1918f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_528644df2e107b8c2f279f8dac99cb5ef678eb5e7f6833b6391d12975b1918f5->enter($__internal_528644df2e107b8c2f279f8dac99cb5ef678eb5e7f6833b6391d12975b1918f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_528644df2e107b8c2f279f8dac99cb5ef678eb5e7f6833b6391d12975b1918f5->leave($__internal_528644df2e107b8c2f279f8dac99cb5ef678eb5e7f6833b6391d12975b1918f5_prof);

        
        $__internal_405b087a857f1021c9b043a1183bcba6faf26d7c9f6ee6c7c18852e97098232f->leave($__internal_405b087a857f1021c9b043a1183bcba6faf26d7c9f6ee6c7c18852e97098232f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_199c3b5c90560b12f84ccdf226183f5e6c76ba04e9662b930b19bb41d2e1b2c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_199c3b5c90560b12f84ccdf226183f5e6c76ba04e9662b930b19bb41d2e1b2c7->enter($__internal_199c3b5c90560b12f84ccdf226183f5e6c76ba04e9662b930b19bb41d2e1b2c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_484203a3aa46a5420b3deebf4db2d89cd6148742ee15fa95aa3f71f0d762a299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_484203a3aa46a5420b3deebf4db2d89cd6148742ee15fa95aa3f71f0d762a299->enter($__internal_484203a3aa46a5420b3deebf4db2d89cd6148742ee15fa95aa3f71f0d762a299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_484203a3aa46a5420b3deebf4db2d89cd6148742ee15fa95aa3f71f0d762a299->leave($__internal_484203a3aa46a5420b3deebf4db2d89cd6148742ee15fa95aa3f71f0d762a299_prof);

        
        $__internal_199c3b5c90560b12f84ccdf226183f5e6c76ba04e9662b930b19bb41d2e1b2c7->leave($__internal_199c3b5c90560b12f84ccdf226183f5e6c76ba04e9662b930b19bb41d2e1b2c7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_38204ecccdce9b016eb6aab66d416fc6ddb14fa11dc51749f29b4544d4d98f95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38204ecccdce9b016eb6aab66d416fc6ddb14fa11dc51749f29b4544d4d98f95->enter($__internal_38204ecccdce9b016eb6aab66d416fc6ddb14fa11dc51749f29b4544d4d98f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3d595582a25da3a93992174b8801a9a35a9513746ea771a5a07e7ce581577a5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d595582a25da3a93992174b8801a9a35a9513746ea771a5a07e7ce581577a5a->enter($__internal_3d595582a25da3a93992174b8801a9a35a9513746ea771a5a07e7ce581577a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_3d595582a25da3a93992174b8801a9a35a9513746ea771a5a07e7ce581577a5a->leave($__internal_3d595582a25da3a93992174b8801a9a35a9513746ea771a5a07e7ce581577a5a_prof);

        
        $__internal_38204ecccdce9b016eb6aab66d416fc6ddb14fa11dc51749f29b4544d4d98f95->leave($__internal_38204ecccdce9b016eb6aab66d416fc6ddb14fa11dc51749f29b4544d4d98f95_prof);

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
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/exception.html.twig", "/Users/ShimmysMacBook/githut/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
