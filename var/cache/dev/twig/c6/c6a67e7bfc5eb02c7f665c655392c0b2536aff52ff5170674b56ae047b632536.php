<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5b712adbfe12e7c866a4c67439b6a3980ee5996e786786a1cda6ad79515c8c98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_a9b51d806d54250c8d3b89c63cab8cf10748c8f3a0693b3aa03390f0c7218da8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9b51d806d54250c8d3b89c63cab8cf10748c8f3a0693b3aa03390f0c7218da8->enter($__internal_a9b51d806d54250c8d3b89c63cab8cf10748c8f3a0693b3aa03390f0c7218da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_829645c75d22a96431a88e1a3496734d25217b8f4a2d7163885054799d6089ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_829645c75d22a96431a88e1a3496734d25217b8f4a2d7163885054799d6089ed->enter($__internal_829645c75d22a96431a88e1a3496734d25217b8f4a2d7163885054799d6089ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9b51d806d54250c8d3b89c63cab8cf10748c8f3a0693b3aa03390f0c7218da8->leave($__internal_a9b51d806d54250c8d3b89c63cab8cf10748c8f3a0693b3aa03390f0c7218da8_prof);

        
        $__internal_829645c75d22a96431a88e1a3496734d25217b8f4a2d7163885054799d6089ed->leave($__internal_829645c75d22a96431a88e1a3496734d25217b8f4a2d7163885054799d6089ed_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_570ec52503559fb89ad4b75e55515c7aaa0c96f7527b244511d1ebb0fd4418f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_570ec52503559fb89ad4b75e55515c7aaa0c96f7527b244511d1ebb0fd4418f8->enter($__internal_570ec52503559fb89ad4b75e55515c7aaa0c96f7527b244511d1ebb0fd4418f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f35ea8115b45f0931ee21f65191d03a528a98c4ffbc80d9769a1b12233bb833f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f35ea8115b45f0931ee21f65191d03a528a98c4ffbc80d9769a1b12233bb833f->enter($__internal_f35ea8115b45f0931ee21f65191d03a528a98c4ffbc80d9769a1b12233bb833f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f35ea8115b45f0931ee21f65191d03a528a98c4ffbc80d9769a1b12233bb833f->leave($__internal_f35ea8115b45f0931ee21f65191d03a528a98c4ffbc80d9769a1b12233bb833f_prof);

        
        $__internal_570ec52503559fb89ad4b75e55515c7aaa0c96f7527b244511d1ebb0fd4418f8->leave($__internal_570ec52503559fb89ad4b75e55515c7aaa0c96f7527b244511d1ebb0fd4418f8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5bfe4e29b5323bcbcf319727f1f4bdbbdafb25acb56d4724a72b302d27bf9606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bfe4e29b5323bcbcf319727f1f4bdbbdafb25acb56d4724a72b302d27bf9606->enter($__internal_5bfe4e29b5323bcbcf319727f1f4bdbbdafb25acb56d4724a72b302d27bf9606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b3ac2a770206d7132ebb0b73738e4ee66b2e461ffd572325066746a8e283aecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3ac2a770206d7132ebb0b73738e4ee66b2e461ffd572325066746a8e283aecf->enter($__internal_b3ac2a770206d7132ebb0b73738e4ee66b2e461ffd572325066746a8e283aecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b3ac2a770206d7132ebb0b73738e4ee66b2e461ffd572325066746a8e283aecf->leave($__internal_b3ac2a770206d7132ebb0b73738e4ee66b2e461ffd572325066746a8e283aecf_prof);

        
        $__internal_5bfe4e29b5323bcbcf319727f1f4bdbbdafb25acb56d4724a72b302d27bf9606->leave($__internal_5bfe4e29b5323bcbcf319727f1f4bdbbdafb25acb56d4724a72b302d27bf9606_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3fab0cff053dbb7c99c1180ffdf30f4e34ea2e23c96aede9104375828f96c5da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fab0cff053dbb7c99c1180ffdf30f4e34ea2e23c96aede9104375828f96c5da->enter($__internal_3fab0cff053dbb7c99c1180ffdf30f4e34ea2e23c96aede9104375828f96c5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_780e05c157b3ceee4b4b1f5b126e7b748e5b57ffa9c177a5f40908a056525d3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_780e05c157b3ceee4b4b1f5b126e7b748e5b57ffa9c177a5f40908a056525d3d->enter($__internal_780e05c157b3ceee4b4b1f5b126e7b748e5b57ffa9c177a5f40908a056525d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_780e05c157b3ceee4b4b1f5b126e7b748e5b57ffa9c177a5f40908a056525d3d->leave($__internal_780e05c157b3ceee4b4b1f5b126e7b748e5b57ffa9c177a5f40908a056525d3d_prof);

        
        $__internal_3fab0cff053dbb7c99c1180ffdf30f4e34ea2e23c96aede9104375828f96c5da->leave($__internal_3fab0cff053dbb7c99c1180ffdf30f4e34ea2e23c96aede9104375828f96c5da_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/ShimmysMacBook/githut/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
