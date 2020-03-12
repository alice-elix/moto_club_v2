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

/* reunions/index.html.twig */
class __TwigTemplate_a32866858141d1570a8c4a79fc8879e3e19c5bf1bdf025d7ffb62c8e3271b112 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reunions/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reunions/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reunions/index.html.twig", 1);
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

        echo "Réunions";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "<link rel=\"stylesheet\" href=\"/css/calendar.css\">";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    
\t<section class=\"py-2 mb-5\">
\t<h2 class=\"py-3\">Réunions </h2>
\t<div class=\"d-flex justify-content-end\">
\t\t<a title=\"Gestion des réunions\"href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_back_reunions");
        echo "\" class=\"btn btn-secondary mt-4 \" role=\"button\"><i class=\"fas fa-cogs\"></i> </a>
\t</div>
\t\t<h3>Réunions à venir</h3>
\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reusNonPassees"]) || array_key_exists("reusNonPassees", $context) ? $context["reusNonPassees"] : (function () { throw new RuntimeError('Variable "reusNonPassees" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reuNonPassee"]) {
            // line 16
            echo "\t\t\t<div class=\"card-deck my-4\">
\t\t\t  \t<div class=\"card\">
\t\t\t\t  \t<div class=\"card-header \">
\t\t\t\t\t\t<div class=\"card-title py-2\">
\t\t\t\t          \t<a title=\"Afficher la reunion\" class=\"btn btn-primary float-right\" data-dt=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reuNonPassee"], "getDatetimeReu", [], "method", false, false, false, 20), "Y-m-d H:i"), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_reunion", ["id" => twig_get_attribute($this->env, $this->source, $context["reuNonPassee"], "getId", [], "method", false, false, false, 20)]), "html", null, true);
            echo "\" role=\"button\"><i class=\"far fa-eye\"></i></a>
\t\t\t\t\t\t\t<b>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reuNonPassee"], "getTitre", [], "method", false, false, false, 21), "html", null, true);
            echo "</b>, le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reuNonPassee"], "getDatetimeReu", [], "method", false, false, false, 21), "d/m/Y"), "html", null, true);
            echo " (<em>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reuNonPassee"], "getTypeReu", [], "method", false, false, false, 21), "html", null, true);
            echo "</em>) \t\t\t\t\t
\t\t\t  \t\t\t</div>
\t\t\t\t\t\t<div class=\"card-footer small text-muted mb-2\">
\t\t\t\t\t\t\tMise à jour le ";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reuNonPassee"], "getDatetimePost", [], "method", false, false, false, 24), "d/m/Y"), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reuNonPassee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo " 


\t\t<h3>Réunions passées</h3>
\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reunionsPassees"]) || array_key_exists("reunionsPassees", $context) ? $context["reunionsPassees"] : (function () { throw new RuntimeError('Variable "reunionsPassees" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reunionPassee"]) {
            // line 34
            echo "\t\t  \t<div class=\"card-deck my-4\">
\t\t    \t<div class=\"card\">
\t\t\t  \t  \t<div class=\"card-header\"> 
\t\t\t  \t\t\t<div class=\"card-title py-2\">
\t\t\t  \t            <a title=\"Afficher la reunion\" class=\"btn btn-primary float-right\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_reunion", ["id" => twig_get_attribute($this->env, $this->source, $context["reunionPassee"], "getId", [], "method", false, false, false, 38)]), "html", null, true);
            echo "\" role=\"button\"><i class=\"far fa-eye\"></i></a>
\t\t\t  \t\t\t\t<b>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reunionPassee"], "getTitre", [], "method", false, false, false, 39), "html", null, true);
            echo "</b>, le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reunionPassee"], "getDatetimeReu", [], "method", false, false, false, 39), "d/m/Y"), "html", null, true);
            echo " (<em>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reunionPassee"], "getTypeReu", [], "method", false, false, false, 39), "html", null, true);
            echo "</em>)
\t\t\t  \t\t\t</div>
\t\t\t  \t\t\t<div class=\"card-footer small text-muted mb-2\">
\t\t\t  \t\t\t\tMise à jour le ";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reunionPassee"], "getDatetimePost", [], "method", false, false, false, 42), "d/m/Y"), "html", null, true);
            echo "
\t\t\t  \t\t\t</div>
\t\t\t  \t    </div>
\t\t  \t\t</div>
\t\t  \t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reunionPassee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo " 
\t</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        echo "<script type=\"text/javascript\" src=\"/js/calendar.js\"></script>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reunions/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 52,  201 => 47,  189 => 42,  179 => 39,  175 => 38,  169 => 34,  165 => 33,  159 => 29,  147 => 24,  137 => 21,  131 => 20,  125 => 16,  121 => 15,  115 => 12,  109 => 8,  99 => 7,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Réunions{% endblock %}

{% block stylesheets %}<link rel=\"stylesheet\" href=\"/css/calendar.css\">{% endblock %}

{% block content %}
    
\t<section class=\"py-2 mb-5\">
\t<h2 class=\"py-3\">Réunions </h2>
\t<div class=\"d-flex justify-content-end\">
\t\t<a title=\"Gestion des réunions\"href=\"{{ path('index_back_reunions') }}\" class=\"btn btn-secondary mt-4 \" role=\"button\"><i class=\"fas fa-cogs\"></i> </a>
\t</div>
\t\t<h3>Réunions à venir</h3>
\t\t{% for reuNonPassee in reusNonPassees %}
\t\t\t<div class=\"card-deck my-4\">
\t\t\t  \t<div class=\"card\">
\t\t\t\t  \t<div class=\"card-header \">
\t\t\t\t\t\t<div class=\"card-title py-2\">
\t\t\t\t          \t<a title=\"Afficher la reunion\" class=\"btn btn-primary float-right\" data-dt=\"{{ reuNonPassee.getDatetimeReu()|date('Y-m-d H:i') }}\" href=\"{{ path('view_reunion', {id : reuNonPassee.getId()}) }}\" role=\"button\"><i class=\"far fa-eye\"></i></a>
\t\t\t\t\t\t\t<b>{{ reuNonPassee.getTitre() }}</b>, le {{ reuNonPassee.getDatetimeReu()|date(\"d/m/Y\") }} (<em>{{ reuNonPassee.getTypeReu() }}</em>) \t\t\t\t\t
\t\t\t  \t\t\t</div>
\t\t\t\t\t\t<div class=\"card-footer small text-muted mb-2\">
\t\t\t\t\t\t\tMise à jour le {{ reuNonPassee.getDatetimePost()|date(\"d/m/Y\") }}
\t\t\t\t\t\t</div>
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t{%  endfor %} 


\t\t<h3>Réunions passées</h3>
\t\t{% for reunionPassee in reunionsPassees %}
\t\t  \t<div class=\"card-deck my-4\">
\t\t    \t<div class=\"card\">
\t\t\t  \t  \t<div class=\"card-header\"> 
\t\t\t  \t\t\t<div class=\"card-title py-2\">
\t\t\t  \t            <a title=\"Afficher la reunion\" class=\"btn btn-primary float-right\" href=\"{{ path('view_reunion', {id : reunionPassee.getId()}) }}\" role=\"button\"><i class=\"far fa-eye\"></i></a>
\t\t\t  \t\t\t\t<b>{{ reunionPassee.getTitre() }}</b>, le {{ reunionPassee.getDatetimeReu()|date(\"d/m/Y\") }} (<em>{{ reunionPassee.getTypeReu() }}</em>)
\t\t\t  \t\t\t</div>
\t\t\t  \t\t\t<div class=\"card-footer small text-muted mb-2\">
\t\t\t  \t\t\t\tMise à jour le {{ reunionPassee.getDatetimePost()|date(\"d/m/Y\") }}
\t\t\t  \t\t\t</div>
\t\t\t  \t    </div>
\t\t  \t\t</div>
\t\t  \t</div>
\t\t{%  endfor %} 
\t</section>

{% endblock %}

{% block javascripts %}<script type=\"text/javascript\" src=\"/js/calendar.js\"></script>{% endblock %}
", "reunions/index.html.twig", "C:\\xampp\\htdocs\\moto_club\\templates\\reunions\\index.html.twig");
    }
}
