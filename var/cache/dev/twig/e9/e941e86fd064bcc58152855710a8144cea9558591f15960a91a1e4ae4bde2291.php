<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* photos/view.html.twig */
class __TwigTemplate_aa7946d1d62ceae6775293f350b5ff48d1d5af732d98ecf5403ee3c861fb8d91 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "photos/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "photos/view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "photos/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Album - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 3, $this->source); })()), "getTitre", [], "method", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <!-- Lien du CSS albums -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/stylesportfolio.css\">
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "<section class=\"py-2 mb-5\">
\t<h2 class=\"py-3\">Galerie</h2>
\t<div class=\"d-flex justify-content-between\">
\t\t<span>
\t\t\t<a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_albums");
        echo "\" class=\"btn btn-primary\" role=\"button\"><i class=\"fas fa-angle-left\"></i> Retour aux albums</a>
\t\t</span>
\t\t<span>
\t\t\t";
        // line 18
        if (twig_in_filter("adherent", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "session", [], "any", false, false, false, 18), "get", [0 => "ranks"], "method", false, false, false, 18))) {
            // line 19
            echo "\t\t\t\t<a title=\"Gérer les photos\" class=\"btn btn-secondary\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion_photos", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 19, $this->source); })()), "getId", [], "method", false, false, false, 19)]), "html", null, true);
            echo "\" role=\"button\"><i class=\"fas fa-images\"></i></a>
\t\t\t";
        }
        // line 20
        echo "\t
\t\t\t<a title=\"Afficher la balade\" class=\"btn btn-primary\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_balade", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 21, $this->source); })()), "getId", [], "method", false, false, false, 21)]), "html", null, true);
        echo "\" role=\"button\"><i class=\"fas fa-road\"></i></a>
\t\t</span>
\t</div>
\t<div id=\"content\">
\t    <div class=\"row\">
\t  \t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["photos"]) || array_key_exists("photos", $context) ? $context["photos"] : (function () { throw new RuntimeError('Variable "photos" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ph"]) {
            // line 27
            echo "\t            <div class=\"col-sm-6 col-md-4 col-lg-3\">
                \t<a href=\"";
            // line 28
            echo twig_escape_filter($this->env, (("/" . (isset($context["uploadDir"]) || array_key_exists("uploadDir", $context) ? $context["uploadDir"] : (function () { throw new RuntimeError('Variable "uploadDir" does not exist.', 28, $this->source); })())) . twig_get_attribute($this->env, $this->source, $context["ph"], "getFileName", [], "method", false, false, false, 28)), "html", null, true);
            echo "\" data-fancybox=\"images\" data-caption=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ph"], "getLegende", [], "method", false, false, false, 28), "html", null, true);
            echo "\">
                    \t<figure class=\"photo-fig\">
                            <img class=\"img-fluid\" src=\"";
            // line 30
            echo twig_escape_filter($this->env, (("/" . (isset($context["uploadDir"]) || array_key_exists("uploadDir", $context) ? $context["uploadDir"] : (function () { throw new RuntimeError('Variable "uploadDir" does not exist.', 30, $this->source); })())) . twig_get_attribute($this->env, $this->source, $context["ph"], "getFileName", [], "method", false, false, false, 30)), "html", null, true);
            echo "\">
                    \t</figure>
                \t</a>
\t            </div>                  
\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ph'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo " 
\t    </div>
\t</div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        echo "\t\t<script src = \"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js\"></script>
\t\t<script src = \"https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js\"></script>
\t<!-- <script src=\"test_francy.js\"></script>-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "photos/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 42,  183 => 41,  169 => 34,  158 => 30,  151 => 28,  148 => 27,  144 => 26,  136 => 21,  133 => 20,  127 => 19,  125 => 18,  119 => 15,  113 => 11,  103 => 10,  91 => 5,  81 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Album - {{ balade.getTitre() }}{% endblock %}
{% block stylesheets %}
    <!-- Lien du CSS albums -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/stylesportfolio.css\">
 {% endblock %}


{% block content %}
<section class=\"py-2 mb-5\">
\t<h2 class=\"py-3\">Galerie</h2>
\t<div class=\"d-flex justify-content-between\">
\t\t<span>
\t\t\t<a href=\"{{ path('index_albums') }}\" class=\"btn btn-primary\" role=\"button\"><i class=\"fas fa-angle-left\"></i> Retour aux albums</a>
\t\t</span>
\t\t<span>
\t\t\t{% if 'adherent' in app.session.get('ranks') %}
\t\t\t\t<a title=\"Gérer les photos\" class=\"btn btn-secondary\" href=\"{{ path('gestion_photos', {id: balade.getId()}) }}\" role=\"button\"><i class=\"fas fa-images\"></i></a>
\t\t\t{% endif %}\t
\t\t\t<a title=\"Afficher la balade\" class=\"btn btn-primary\" href=\"{{ path('view_balade', {id: balade.getId()}) }}\" role=\"button\"><i class=\"fas fa-road\"></i></a>
\t\t</span>
\t</div>
\t<div id=\"content\">
\t    <div class=\"row\">
\t  \t\t{% for ph in photos %}
\t            <div class=\"col-sm-6 col-md-4 col-lg-3\">
                \t<a href=\"{{ '/' ~ uploadDir ~ ph.getFileName() }}\" data-fancybox=\"images\" data-caption=\"{{ ph.getLegende() }}\">
                    \t<figure class=\"photo-fig\">
                            <img class=\"img-fluid\" src=\"{{ '/' ~ uploadDir ~ ph.getFileName() }}\">
                    \t</figure>
                \t</a>
\t            </div>                  
\t        {% endfor %} 
\t    </div>
\t</div>
</section>
{% endblock %}


{% block javascripts %}
\t\t<script src = \"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js\"></script>
\t\t<script src = \"https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js\"></script>
\t<!-- <script src=\"test_francy.js\"></script>-->
{% endblock %}
", "photos/view.html.twig", "C:\\xampp\\htdocs\\moto_club_v2\\moto_club_v2\\templates\\photos\\view.html.twig");
    }
}
