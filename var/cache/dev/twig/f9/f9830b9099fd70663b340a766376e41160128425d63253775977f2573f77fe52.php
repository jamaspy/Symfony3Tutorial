<?php

/* githut/index.html.twig */
class __TwigTemplate_58add34627156cee1e4e8041f82f3ec8893cbed16a7c7ec0665916f0d60ab554 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "githut/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2051e5c4ccd7f7353b7e13704fc4efd50b4a0f46f177fd62022d1c553d2bfd9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2051e5c4ccd7f7353b7e13704fc4efd50b4a0f46f177fd62022d1c553d2bfd9b->enter($__internal_2051e5c4ccd7f7353b7e13704fc4efd50b4a0f46f177fd62022d1c553d2bfd9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "githut/index.html.twig"));

        $__internal_969fa83cb79f2a3ab9ff3b39bce30bbe6832bf7e08a35b1b9dc451bbfebe16c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_969fa83cb79f2a3ab9ff3b39bce30bbe6832bf7e08a35b1b9dc451bbfebe16c4->enter($__internal_969fa83cb79f2a3ab9ff3b39bce30bbe6832bf7e08a35b1b9dc451bbfebe16c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "githut/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2051e5c4ccd7f7353b7e13704fc4efd50b4a0f46f177fd62022d1c553d2bfd9b->leave($__internal_2051e5c4ccd7f7353b7e13704fc4efd50b4a0f46f177fd62022d1c553d2bfd9b_prof);

        
        $__internal_969fa83cb79f2a3ab9ff3b39bce30bbe6832bf7e08a35b1b9dc451bbfebe16c4->leave($__internal_969fa83cb79f2a3ab9ff3b39bce30bbe6832bf7e08a35b1b9dc451bbfebe16c4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e5d2247c187bd17fb8b6c63b06a2a88773afc4b7e9ac230da662a6bab7e1ea0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e5d2247c187bd17fb8b6c63b06a2a88773afc4b7e9ac230da662a6bab7e1ea0->enter($__internal_0e5d2247c187bd17fb8b6c63b06a2a88773afc4b7e9ac230da662a6bab7e1ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d1095344065acba7cb82070bff7b13cdaec53ca8453b9b848447d3974a884e47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1095344065acba7cb82070bff7b13cdaec53ca8453b9b848447d3974a884e47->enter($__internal_d1095344065acba7cb82070bff7b13cdaec53ca8453b9b848447d3974a884e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"col-sm-3\">
        ";
        // line 7
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:GitHut:profile", array("username" => ($context["username"] ?? $this->getContext($context, "username")))));
        echo "
    </div>

    <div class=\"col-sm-9\">
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:GitHut:repos", array("username" => ($context["username"] ?? $this->getContext($context, "username")))));
        echo "
    </div>


";
        
        $__internal_d1095344065acba7cb82070bff7b13cdaec53ca8453b9b848447d3974a884e47->leave($__internal_d1095344065acba7cb82070bff7b13cdaec53ca8453b9b848447d3974a884e47_prof);

        
        $__internal_0e5d2247c187bd17fb8b6c63b06a2a88773afc4b7e9ac230da662a6bab7e1ea0->leave($__internal_0e5d2247c187bd17fb8b6c63b06a2a88773afc4b7e9ac230da662a6bab7e1ea0_prof);

    }

    public function getTemplateName()
    {
        return "githut/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  53 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}

    <div class=\"col-sm-3\">
        {#{% include ':githut:profile.html.twig' %}#}
        {{ render (controller('AppBundle:GitHut:profile' , {'username': username})) }}
    </div>

    <div class=\"col-sm-9\">
        {{ render (controller('AppBundle:GitHut:repos' , {'username': username})) }}
    </div>


{% endblock %}
", "githut/index.html.twig", "/Users/ShimmysMacBook/githut/app/Resources/views/githut/index.html.twig");
    }
}
