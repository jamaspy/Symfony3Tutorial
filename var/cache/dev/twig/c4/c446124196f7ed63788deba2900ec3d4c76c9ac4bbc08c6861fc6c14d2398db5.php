<?php

/* :githut:profile.html.twig */
class __TwigTemplate_8231684a679583e4325deda32dffc7aefee68438c4ac8aeac912e2cf6da5c8f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e60e46f4199756881f402ec97bd33c47f6ad60243efaf5730ecc5bc62966eb45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e60e46f4199756881f402ec97bd33c47f6ad60243efaf5730ecc5bc62966eb45->enter($__internal_e60e46f4199756881f402ec97bd33c47f6ad60243efaf5730ecc5bc62966eb45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":githut:profile.html.twig"));

        $__internal_d0e9c9392fa63afa9e20265e9f0605ebaa8e046089f371c17076eea35421651d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0e9c9392fa63afa9e20265e9f0605ebaa8e046089f371c17076eea35421651d->enter($__internal_d0e9c9392fa63afa9e20265e9f0605ebaa8e046089f371c17076eea35421651d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":githut:profile.html.twig"));

        // line 1
        echo "<img src=\"";
        echo twig_escape_filter($this->env, ($context["avatar_url"] ?? $this->getContext($context, "avatar_url")), "html", null, true);
        echo "\" class=\"thumbnail img-responsive\"/>

<h1>";
        // line 3
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "</h1>
<h2>";
        // line 4
        echo twig_escape_filter($this->env, ($context["login"] ?? $this->getContext($context, "login")), "html", null, true);
        echo "</h2>

<hr />


<ul class = \"list-unstyled\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["details"] ?? $this->getContext($context, "details")));
        foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
            // line 11
            echo "        <li>";
            echo twig_escape_filter($this->env, $context["detail"], "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
        <li><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["blog"] ?? $this->getContext($context, "blog")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["blog"] ?? $this->getContext($context, "blog")), "html", null, true);
        echo "</a> </li>
</ul>

<hr />

<ul class=\"list-inline\">
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["social_data"] ?? $this->getContext($context, "social_data")));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 21
            echo "            <li>
                <span class=\"social-metric-counter\">";
            // line 22
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</span>
                <br />
                <span class=\"small muted\">";
            // line 24
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</span>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
</ul>";
        
        $__internal_e60e46f4199756881f402ec97bd33c47f6ad60243efaf5730ecc5bc62966eb45->leave($__internal_e60e46f4199756881f402ec97bd33c47f6ad60243efaf5730ecc5bc62966eb45_prof);

        
        $__internal_d0e9c9392fa63afa9e20265e9f0605ebaa8e046089f371c17076eea35421651d->leave($__internal_d0e9c9392fa63afa9e20265e9f0605ebaa8e046089f371c17076eea35421651d_prof);

    }

    public function getTemplateName()
    {
        return ":githut:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 27,  83 => 24,  78 => 22,  75 => 21,  71 => 20,  60 => 14,  57 => 13,  48 => 11,  44 => 10,  35 => 4,  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<img src=\"{{ avatar_url }}\" class=\"thumbnail img-responsive\"/>

<h1>{{ name }}</h1>
<h2>{{ login }}</h2>

<hr />


<ul class = \"list-unstyled\">
    {% for detail in details %}
        <li>{{ detail }}</li>
    {% endfor %}

        <li><a href=\"{{ blog }}\">{{ blog }}</a> </li>
</ul>

<hr />

<ul class=\"list-inline\">
        {% for key, value in social_data %}
            <li>
                <span class=\"social-metric-counter\">{{ value }}</span>
                <br />
                <span class=\"small muted\">{{ key }}</span>
            </li>
        {% endfor %}

</ul>", ":githut:profile.html.twig", "/Users/ShimmysMacBook/githut/app/Resources/views/githut/profile.html.twig");
    }
}
