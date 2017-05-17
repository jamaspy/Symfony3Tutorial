<?php

/* base.html.twig */
class __TwigTemplate_800f016a509a651c87e7a376a40b2261c57ba78cdaf77ab1a4537ad4f7850fe4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b46011d93f23e4ca6c55634f5250ab2246d31246aecccf348e983c2ba41c0717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b46011d93f23e4ca6c55634f5250ab2246d31246aecccf348e983c2ba41c0717->enter($__internal_b46011d93f23e4ca6c55634f5250ab2246d31246aecccf348e983c2ba41c0717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_135ce8e414464ba44f0dded01ed690fc88b51d1fd250f9b4a56170e3e21cd095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_135ce8e414464ba44f0dded01ed690fc88b51d1fd250f9b4a56170e3e21cd095->enter($__internal_135ce8e414464ba44f0dded01ed690fc88b51d1fd250f9b4a56170e3e21cd095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
              integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\"
              crossorigin=\"anonymous\">

        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/mystyle.css"), "html", null, true);
        echo "\">

        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

    <nav class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <a class=\"navbar-brand\" href=\"#\">My GitHut</a>
            </div>
            <div id=\"navbar\" class=\"collapse navbar-collapse\">
            </div>
        </div>
    </nav>

    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-sm-12\">
                ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "            </div>
        </div>

    </div><!-- /.container -->



        ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "    </body>
</html>
";
        
        $__internal_b46011d93f23e4ca6c55634f5250ab2246d31246aecccf348e983c2ba41c0717->leave($__internal_b46011d93f23e4ca6c55634f5250ab2246d31246aecccf348e983c2ba41c0717_prof);

        
        $__internal_135ce8e414464ba44f0dded01ed690fc88b51d1fd250f9b4a56170e3e21cd095->leave($__internal_135ce8e414464ba44f0dded01ed690fc88b51d1fd250f9b4a56170e3e21cd095_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f58c102ee822492b8b3e2fcfe6e69e39767d45ce08eff13865e5a1c38a46f7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f58c102ee822492b8b3e2fcfe6e69e39767d45ce08eff13865e5a1c38a46f7c->enter($__internal_7f58c102ee822492b8b3e2fcfe6e69e39767d45ce08eff13865e5a1c38a46f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b546676eaff6e2ad27db5996dd30ed21557770cc21779976964bdf2a62aabea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b546676eaff6e2ad27db5996dd30ed21557770cc21779976964bdf2a62aabea7->enter($__internal_b546676eaff6e2ad27db5996dd30ed21557770cc21779976964bdf2a62aabea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b546676eaff6e2ad27db5996dd30ed21557770cc21779976964bdf2a62aabea7->leave($__internal_b546676eaff6e2ad27db5996dd30ed21557770cc21779976964bdf2a62aabea7_prof);

        
        $__internal_7f58c102ee822492b8b3e2fcfe6e69e39767d45ce08eff13865e5a1c38a46f7c->leave($__internal_7f58c102ee822492b8b3e2fcfe6e69e39767d45ce08eff13865e5a1c38a46f7c_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0cd05c025dc6121a61bc9d6b043fea8e4dad524bb23caeb3312d648291d74d5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cd05c025dc6121a61bc9d6b043fea8e4dad524bb23caeb3312d648291d74d5c->enter($__internal_0cd05c025dc6121a61bc9d6b043fea8e4dad524bb23caeb3312d648291d74d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0d98dda74b6c4ce025a816ef799de429d51a7c37de387df6dbbe43b8284b1b11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d98dda74b6c4ce025a816ef799de429d51a7c37de387df6dbbe43b8284b1b11->enter($__internal_0d98dda74b6c4ce025a816ef799de429d51a7c37de387df6dbbe43b8284b1b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0d98dda74b6c4ce025a816ef799de429d51a7c37de387df6dbbe43b8284b1b11->leave($__internal_0d98dda74b6c4ce025a816ef799de429d51a7c37de387df6dbbe43b8284b1b11_prof);

        
        $__internal_0cd05c025dc6121a61bc9d6b043fea8e4dad524bb23caeb3312d648291d74d5c->leave($__internal_0cd05c025dc6121a61bc9d6b043fea8e4dad524bb23caeb3312d648291d74d5c_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_3eb38f1bd33011e2e25277a43134672747de4d59a94ee82c5db92d82da5fee37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eb38f1bd33011e2e25277a43134672747de4d59a94ee82c5db92d82da5fee37->enter($__internal_3eb38f1bd33011e2e25277a43134672747de4d59a94ee82c5db92d82da5fee37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e6e9f2b9f20657e16fd13219ed8d39fa005c508f2e635abdfdb478430420e02a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6e9f2b9f20657e16fd13219ed8d39fa005c508f2e635abdfdb478430420e02a->enter($__internal_e6e9f2b9f20657e16fd13219ed8d39fa005c508f2e635abdfdb478430420e02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e6e9f2b9f20657e16fd13219ed8d39fa005c508f2e635abdfdb478430420e02a->leave($__internal_e6e9f2b9f20657e16fd13219ed8d39fa005c508f2e635abdfdb478430420e02a_prof);

        
        $__internal_3eb38f1bd33011e2e25277a43134672747de4d59a94ee82c5db92d82da5fee37->leave($__internal_3eb38f1bd33011e2e25277a43134672747de4d59a94ee82c5db92d82da5fee37_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6dbd10e091ee0a544971a79a4d80f7fc8ac7fcf580c8e412cad0634f7bf6a639 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dbd10e091ee0a544971a79a4d80f7fc8ac7fcf580c8e412cad0634f7bf6a639->enter($__internal_6dbd10e091ee0a544971a79a4d80f7fc8ac7fcf580c8e412cad0634f7bf6a639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_35de26a64179a8ada0c2ef956aa480ffcd6a71f806c59041c4dc265d113a8d42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35de26a64179a8ada0c2ef956aa480ffcd6a71f806c59041c4dc265d113a8d42->enter($__internal_35de26a64179a8ada0c2ef956aa480ffcd6a71f806c59041c4dc265d113a8d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_35de26a64179a8ada0c2ef956aa480ffcd6a71f806c59041c4dc265d113a8d42->leave($__internal_35de26a64179a8ada0c2ef956aa480ffcd6a71f806c59041c4dc265d113a8d42_prof);

        
        $__internal_6dbd10e091ee0a544971a79a4d80f7fc8ac7fcf580c8e412cad0634f7bf6a639->leave($__internal_6dbd10e091ee0a544971a79a4d80f7fc8ac7fcf580c8e412cad0634f7bf6a639_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 40,  133 => 32,  116 => 13,  98 => 5,  86 => 41,  84 => 40,  75 => 33,  73 => 32,  51 => 14,  49 => 13,  44 => 11,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>

        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
              integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\"
              crossorigin=\"anonymous\">

        <link rel=\"stylesheet\" href=\"{{ asset('css/mystyle.css') }}\">

        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>

    <nav class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <a class=\"navbar-brand\" href=\"#\">My GitHut</a>
            </div>
            <div id=\"navbar\" class=\"collapse navbar-collapse\">
            </div>
        </div>
    </nav>

    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-sm-12\">
                {% block body %}{% endblock %}
            </div>
        </div>

    </div><!-- /.container -->



        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/ShimmysMacBook/githut/app/Resources/views/base.html.twig");
    }
}
