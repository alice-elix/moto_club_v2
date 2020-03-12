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

/* balades/add.html.twig */
class __TwigTemplate_80b5d7fae2c22ad3b1cfb51db6b0d88994e85a8bea4c3871e13f74a864910faf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "balades/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "balades/add.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "balades/add.html.twig", 1);
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

        echo "Nouvelle balade";
        
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
\t<section class=\"py-2 mb-5\">
\t\t<div class=\"card card-register mx-auto mt-5\">
\t\t\t<div class=\"card-header\">Proposer une nouvelle balade</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<form method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"titre\" class=\"col-lg-3\">Titre</label>
\t\t\t\t\t\t<input id=\"titre\" class=\"col-lg-9 form-control\" name=\"titre\" type=\"text\" value=\"";
        // line 14
        (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "titre", [], "any", true, true, false, 14) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "titre", [], "any", false, false, false, 14)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "titre", [], "any", false, false, false, 14), "html", null, true))) : (print ("")));
        echo "\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"contenu\" class=\"col-lg-3\">Description</label>
\t\t\t\t\t\t<textarea id=\"contenu\" class=\"col-lg-9 form-control\" name=\"contenu\" cols=\"50\" rows=\"6\" required>";
        // line 18
        (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "contenu", [], "any", true, true, false, 18) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "contenu", [], "any", false, false, false, 18)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "contenu", [], "any", false, false, false, 18), "html", null, true))) : (print ("")));
        echo "</textarea>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"date_debut\" class=\"col-lg-3\">Date de début</label>
\t\t\t\t\t\t<input id=\"date_debut\" class=\"col-lg-9 form-control\" name=\"date_debut\" type=\"date\" value=\"";
        // line 22
        (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "date_debut", [], "any", true, true, false, 22) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "date_debut", [], "any", false, false, false, 22)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "date_debut", [], "any", false, false, false, 22), "html", null, true))) : (print ("")));
        echo "\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"date_fin\" class=\"col-lg-3\">Date de fin</label>
\t\t\t\t\t\t<input id=\"date_fin\" class=\"col-lg-9 form-control\" name=\"date_fin\" type=\"date\" value=\"";
        // line 26
        (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "date_fin", [], "any", true, true, false, 26) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "date_fin", [], "any", false, false, false, 26)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "date_fin", [], "any", false, false, false, 26), "html", null, true))) : (print ("")));
        echo "\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"nb_max_pers\" class=\"col-lg-3\">Nombre de participants <em>(facultatif)</em></label>
\t\t\t\t\t\t<input id=\"nb_max_pers\" class=\"col-lg-9 form-control\" name=\"nb_max_pers\" type=\"number\" min=\"0\" value=\"";
        // line 30
        (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "nb_max_pers", [], "any", true, true, false, 30) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "nb_max_pers", [], "any", false, false, false, 30)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "nb_max_pers", [], "any", false, false, false, 30), "html", null, true))) : (print ("")));
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t\t<!-- <div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"gps_file\" class=\"col-lg-3\">Ajouter un fichier GPS</label>
\t\t\t\t\t\t<input id=\"gps_file\" class=\"col-lg-9\" name=\"gps_file\" type=\"file\" value=\"";
        // line 34
        (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "gps_file", [], "any", true, true, false, 34) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "gps_file", [], "any", false, false, false, 34)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "gps_file", [], "any", false, false, false, 34), "html", null, true))) : (print ("")));
        echo "\">
\t\t\t\t\t</div> -->
\t\t\t\t\t<div class=\"form-group row d-flex justify-content-end\">
\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary btn-block m-1\" value=\"Proposer\">
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 40
        if ( !twig_test_empty((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 40, $this->source); })()))) {
            // line 41
            echo "\t\t\t\t\t\t<div class=\"alert alert-warning\">
\t\t\t\t\t\t\t";
            // line 42
            echo twig_join_filter((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 42, $this->source); })()), "<br>");
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        } elseif ((        // line 44
(isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 44, $this->source); })()) == true)) {
            // line 45
            echo "\t\t\t\t\t\t<div class=\"alert alert-success\">La balade a été ajoutée avec succès.</div>
\t\t\t\t\t";
        }
        // line 47
        echo "\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</section>
\t\t
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "balades/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 47,  154 => 45,  152 => 44,  147 => 42,  144 => 41,  142 => 40,  133 => 34,  126 => 30,  119 => 26,  112 => 22,  105 => 18,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block title %}Nouvelle balade{% endblock %}

{% block content %}

\t<section class=\"py-2 mb-5\">
\t\t<div class=\"card card-register mx-auto mt-5\">
\t\t\t<div class=\"card-header\">Proposer une nouvelle balade</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<form method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"titre\" class=\"col-lg-3\">Titre</label>
\t\t\t\t\t\t<input id=\"titre\" class=\"col-lg-9 form-control\" name=\"titre\" type=\"text\" value=\"{{ post.titre ?? '' }}\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"contenu\" class=\"col-lg-3\">Description</label>
\t\t\t\t\t\t<textarea id=\"contenu\" class=\"col-lg-9 form-control\" name=\"contenu\" cols=\"50\" rows=\"6\" required>{{ post.contenu ?? '' }}</textarea>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"date_debut\" class=\"col-lg-3\">Date de début</label>
\t\t\t\t\t\t<input id=\"date_debut\" class=\"col-lg-9 form-control\" name=\"date_debut\" type=\"date\" value=\"{{ post.date_debut ?? '' }}\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"date_fin\" class=\"col-lg-3\">Date de fin</label>
\t\t\t\t\t\t<input id=\"date_fin\" class=\"col-lg-9 form-control\" name=\"date_fin\" type=\"date\" value=\"{{ post.date_fin ?? '' }}\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"nb_max_pers\" class=\"col-lg-3\">Nombre de participants <em>(facultatif)</em></label>
\t\t\t\t\t\t<input id=\"nb_max_pers\" class=\"col-lg-9 form-control\" name=\"nb_max_pers\" type=\"number\" min=\"0\" value=\"{{ post.nb_max_pers ?? '' }}\">
\t\t\t\t\t</div>
\t\t\t\t\t<!-- <div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"gps_file\" class=\"col-lg-3\">Ajouter un fichier GPS</label>
\t\t\t\t\t\t<input id=\"gps_file\" class=\"col-lg-9\" name=\"gps_file\" type=\"file\" value=\"{{ post.gps_file ?? '' }}\">
\t\t\t\t\t</div> -->
\t\t\t\t\t<div class=\"form-group row d-flex justify-content-end\">
\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary btn-block m-1\" value=\"Proposer\">
\t\t\t\t\t</div>

\t\t\t\t\t{% if errors is not empty %}
\t\t\t\t\t\t<div class=\"alert alert-warning\">
\t\t\t\t\t\t\t{{ errors|join('<br>')|raw }}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% elseif success == true %}
\t\t\t\t\t\t<div class=\"alert alert-success\">La balade a été ajoutée avec succès.</div>
\t\t\t\t\t{% endif %}
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</section>
\t\t
{% endblock %}
", "balades/add.html.twig", "C:\\xampp\\htdocs\\moto_club\\templates\\balades\\add.html.twig");
    }
}
