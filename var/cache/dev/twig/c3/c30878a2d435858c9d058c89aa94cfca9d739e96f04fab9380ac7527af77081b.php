<?php

/* :githut:repos.html.twig */
class __TwigTemplate_aa6a44917f3df74892bcdf91602872e89afd9b20499600109996c859792ef6d0 extends Twig_Template
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
        $__internal_2c6b2d793e6e38931fca97354f6883f7809b227f6e716f3ce6c5d6169ce714c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c6b2d793e6e38931fca97354f6883f7809b227f6e716f3ce6c5d6169ce714c1->enter($__internal_2c6b2d793e6e38931fca97354f6883f7809b227f6e716f3ce6c5d6169ce714c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":githut:repos.html.twig"));

        $__internal_832f5478cb9977c3ea1cfac3a5043c122e586044a8085e0e2d562de2fa620d79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_832f5478cb9977c3ea1cfac3a5043c122e586044a8085e0e2d562de2fa620d79->enter($__internal_832f5478cb9977c3ea1cfac3a5043c122e586044a8085e0e2d562de2fa620d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":githut:repos.html.twig"));

        // line 1
        echo "<div class=\"well\">
    Important Stats:
    <div class=\"pull-right\">
        <span class=\"label label-primary\">Repositories: ";
        // line 4
        echo twig_escape_filter($this->env, ($context["repo_count"] ?? $this->getContext($context, "repo_count")), "html", null, true);
        echo " </span>
        <span class=\"label label-success\">Most Stars: ";
        // line 5
        echo twig_escape_filter($this->env, ($context["most_stars"] ?? $this->getContext($context, "most_stars")), "html", null, true);
        echo " </span>
    </div>
</div>

<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">Repo List</h3>
    </div>

    <ul class=\"list-group\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["repos"] ?? $this->getContext($context, "repos")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["repo"]) {
            // line 16
            echo "            <li class=\"list-group-item\">
                ";
            // line 17
            $this->loadTemplate(":githut:repo.html.twig", ":githut:repos.html.twig", 17)->display($context);
            // line 18
            echo "            </li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </ul>

</div>";
        
        $__internal_2c6b2d793e6e38931fca97354f6883f7809b227f6e716f3ce6c5d6169ce714c1->leave($__internal_2c6b2d793e6e38931fca97354f6883f7809b227f6e716f3ce6c5d6169ce714c1_prof);

        
        $__internal_832f5478cb9977c3ea1cfac3a5043c122e586044a8085e0e2d562de2fa620d79->leave($__internal_832f5478cb9977c3ea1cfac3a5043c122e586044a8085e0e2d562de2fa620d79_prof);

    }

    public function getTemplateName()
    {
        return ":githut:repos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 20,  69 => 18,  67 => 17,  64 => 16,  47 => 15,  34 => 5,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"well\">
    Important Stats:
    <div class=\"pull-right\">
        <span class=\"label label-primary\">Repositories: {{ repo_count }} </span>
        <span class=\"label label-success\">Most Stars: {{ most_stars }} </span>
    </div>
</div>

<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">Repo List</h3>
    </div>

    <ul class=\"list-group\">
        {% for repo in repos %}
            <li class=\"list-group-item\">
                {% include ':githut:repo.html.twig' %}
            </li>
        {% endfor %}
    </ul>

</div>", ":githut:repos.html.twig", "/Users/ShimmysMacBook/githut/app/Resources/views/githut/repos.html.twig");
    }
}
