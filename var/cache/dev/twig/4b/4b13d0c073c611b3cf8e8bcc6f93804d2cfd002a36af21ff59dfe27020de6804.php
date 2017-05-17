<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_d41b71d1ad96e95e0d41bf3fd97c2c6e667011089e7660e99386b69dccdec098 extends Twig_Template
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
        $__internal_8880f586cebe1b151374b5968ece84f8281b655e0c93712e97138a7abd2cda8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8880f586cebe1b151374b5968ece84f8281b655e0c93712e97138a7abd2cda8c->enter($__internal_8880f586cebe1b151374b5968ece84f8281b655e0c93712e97138a7abd2cda8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_c025c5c1c1da5bf88b8a21326ee7d4a73000b22111a1eadb7544749757c5f906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c025c5c1c1da5bf88b8a21326ee7d4a73000b22111a1eadb7544749757c5f906->enter($__internal_c025c5c1c1da5bf88b8a21326ee7d4a73000b22111a1eadb7544749757c5f906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_8880f586cebe1b151374b5968ece84f8281b655e0c93712e97138a7abd2cda8c->leave($__internal_8880f586cebe1b151374b5968ece84f8281b655e0c93712e97138a7abd2cda8c_prof);

        
        $__internal_c025c5c1c1da5bf88b8a21326ee7d4a73000b22111a1eadb7544749757c5f906->leave($__internal_c025c5c1c1da5bf88b8a21326ee7d4a73000b22111a1eadb7544749757c5f906_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/Users/ShimmysMacBook/githut/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
