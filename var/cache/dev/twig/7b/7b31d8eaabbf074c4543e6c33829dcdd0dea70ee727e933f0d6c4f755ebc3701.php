<?php

/* :githut:repo.html.twig */
class __TwigTemplate_97bdfa116c0f113e20e6a70e25b4ef41bb7af2843098fb6007762233e713a27b extends Twig_Template
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
        $__internal_afe0ef415c21abd8df9090a43f48785fcd82a826957d57534f017d49c3993a34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afe0ef415c21abd8df9090a43f48785fcd82a826957d57534f017d49c3993a34->enter($__internal_afe0ef415c21abd8df9090a43f48785fcd82a826957d57534f017d49c3993a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":githut:repo.html.twig"));

        $__internal_a685952990106154986b5034fa7d423e45ae0ee733e637b7d24c187258676a5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a685952990106154986b5034fa7d423e45ae0ee733e637b7d24c187258676a5a->enter($__internal_a685952990106154986b5034fa7d423e45ae0ee733e637b7d24c187258676a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":githut:repo.html.twig"));

        // line 1
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["repo"] ?? $this->getContext($context, "repo")), "url", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["repo"] ?? $this->getContext($context, "repo")), "name", array()), "html", null, true);
        echo "</a>
<br/>
<span class=\"small\">";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["repo"] ?? $this->getContext($context, "repo")), "description", array()), "html", null, true);
        echo "</span>
<span class=\"pull-right\">
    ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["repo"] ?? $this->getContext($context, "repo")), "stargazers_count", array()), "html", null, true);
        echo " <i class=\"glyphicon glyphicon-star\"></i>
</span>";
        
        $__internal_afe0ef415c21abd8df9090a43f48785fcd82a826957d57534f017d49c3993a34->leave($__internal_afe0ef415c21abd8df9090a43f48785fcd82a826957d57534f017d49c3993a34_prof);

        
        $__internal_a685952990106154986b5034fa7d423e45ae0ee733e637b7d24c187258676a5a->leave($__internal_a685952990106154986b5034fa7d423e45ae0ee733e637b7d24c187258676a5a_prof);

    }

    public function getTemplateName()
    {
        return ":githut:repo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  33 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"{{ repo.url }}\">{{ repo.name }}</a>
<br/>
<span class=\"small\">{{ repo.description }}</span>
<span class=\"pull-right\">
    {{ repo.stargazers_count }} <i class=\"glyphicon glyphicon-star\"></i>
</span>", ":githut:repo.html.twig", "/Users/ShimmysMacBook/githut/app/Resources/views/githut/repo.html.twig");
    }
}
