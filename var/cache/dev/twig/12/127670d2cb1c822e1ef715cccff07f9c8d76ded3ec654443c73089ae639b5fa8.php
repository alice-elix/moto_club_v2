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

/* photos/add.html.twig */
class __TwigTemplate_0e92b0e3137876a8a1a35dad84727991c596c41211ec78d2ed20f5fd4273cc08 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "photos/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "photos/add.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "photos/add.html.twig", 1);
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

        echo "Nouvelle photo";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
\t<div class=\"container\">
\t\t<div class=\"card\">
\t\t\t<div class=\"card-header\">Ajouter une nouvelle photo</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<form method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"photo\" class=\"col-lg-3\">Fichier à ajouter</label>
\t\t\t\t\t\t<input id=\"photo\" class=\"col-lg-9\" name=\"photo\" type=\"file\" value=\"";
        // line 14
        (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "photo", [], "any", true, true, false, 14) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "photo", [], "any", false, false, false, 14)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "photo", [], "any", false, false, false, 14), "html", null, true))) : (print ("")));
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"legende\" class=\"col-lg-3\">Légende</label>
\t\t\t\t\t\t<input id=\"legende\" class=\"col-lg-9 form-control\" name=\"legende\" type=\"text\" value=\"";
        // line 18
        (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "legende", [], "any", true, true, false, 18) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "legende", [], "any", false, false, false, 18)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "legende", [], "any", false, false, false, 18), "html", null, true))) : (print ("")));
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row d-flex justify-content-center\">
\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary btn-lg\" value=\"Ajouter une photo\">
\t\t\t\t\t\t<input type=\"reset\" class=\"btn btn-secondary btn-lg\" value=\"Réinitialiser\">
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 25
        if ( !twig_test_empty((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 25, $this->source); })()))) {
            // line 26
            echo "\t\t\t\t\t\t<div class=\"alert alert-warning\">
\t\t\t\t\t\t\t";
            // line 27
            echo twig_join_filter((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 27, $this->source); })()), "<br>");
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        } elseif ((        // line 29
(isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 29, $this->source); })()) == true)) {
            // line 30
            echo "\t\t\t\t\t\t<div class=\"alert alert-success\">La photo a été ajoutée avec succès.</div>
\t\t\t\t\t";
        }
        // line 32
        echo "\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
\t\t
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "photos/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 32,  127 => 30,  125 => 29,  120 => 27,  117 => 26,  115 => 25,  105 => 18,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block title %}Nouvelle photo{% endblock %}

{% block content %}

\t<div class=\"container\">
\t\t<div class=\"card\">
\t\t\t<div class=\"card-header\">Ajouter une nouvelle photo</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<form method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"photo\" class=\"col-lg-3\">Fichier à ajouter</label>
\t\t\t\t\t\t<input id=\"photo\" class=\"col-lg-9\" name=\"photo\" type=\"file\" value=\"{{ post.photo ?? '' }}\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"legende\" class=\"col-lg-3\">Légende</label>
\t\t\t\t\t\t<input id=\"legende\" class=\"col-lg-9 form-control\" name=\"legende\" type=\"text\" value=\"{{ post.legende ?? '' }}\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row d-flex justify-content-center\">
\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary btn-lg\" value=\"Ajouter une photo\">
\t\t\t\t\t\t<input type=\"reset\" class=\"btn btn-secondary btn-lg\" value=\"Réinitialiser\">
\t\t\t\t\t</div>

\t\t\t\t\t{% if errors is not empty %}
\t\t\t\t\t\t<div class=\"alert alert-warning\">
\t\t\t\t\t\t\t{{ errors|join('<br>')|raw }}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% elseif success == true %}
\t\t\t\t\t\t<div class=\"alert alert-success\">La photo a été ajoutée avec succès.</div>
\t\t\t\t\t{% endif %}
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
\t\t
{% endblock %}
", "photos/add.html.twig", "C:\\xampp\\htdocs\\moto_club\\templates\\photos\\add.html.twig");
    }
}
