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

/* users/viewprofile.html.twig */
class __TwigTemplate_4e63ca51944549a79a29d624df3dae74b58d6235fdae32b30cbdc1b25e25bf62 extends \Twig\Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/viewprofile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/viewprofile.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "users/viewprofile.html.twig", 1);
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

        echo "Profil";
        
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
        echo "\t<div class=\"container\">
\t\t<div class=\"card mb-3\">
\t\t    <div class=\"card-header\">Mon avatar</div>
\t\t  \t<div class=\"card-body\">
\t\t  \t\t<form id=\"change-avatar-form\" method=\"post\" enctype=\"multipart/form-data\">
\t\t  \t\t\t<input type=\"hidden\" name=\"action\" value=\"avatar-form\">
\t\t  \t\t\t<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["maxFileSize"]) || array_key_exists("maxFileSize", $context) ? $context["maxFileSize"] : (function () { throw new RuntimeError('Variable "maxFileSize" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "\">

\t\t  \t\t\t<figure class=\"session-avatar profile-avatar\">
\t\t  \t\t\t\t";
        // line 15
        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "session", [], "any", false, false, false, 15), "get", [0 => "avatar"], "method", false, false, false, 15))) {
            // line 16
            echo "\t\t  \t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, ("/uploads/avatars/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "session", [], "any", false, false, false, 16), "get", [0 => "avatar"], "method", false, false, false, 16)), "html", null, true);
            echo "\">
\t\t  \t\t\t\t";
        } else {
            // line 18
            echo "\t\t  \t\t\t\t\t<img src=\"";
            echo "/images/default-user.png";
            echo "\">
\t\t  \t\t\t\t";
        }
        // line 20
        echo "\t\t  \t\t\t</figure>

\t\t  \t\t\t<div class=\"profile-avatar-file\">
\t\t  \t\t\t\t<div class=\"form-group row d-flex justify-content-center text-center\">
\t\t  \t\t\t\t\t<label for=\"change-avatar-input\" class=\"col-12 \"><strong>Changer mon avatar</strong></label>
\t\t  \t\t\t\t\t<input id=\"change-avatar-input\" class=\"text-center\" name=\"avatar\" type=\"file\" value=\"Changer d'avatar\">
\t\t  \t\t\t\t</div>
\t\t  \t\t\t</div>
\t  \t\t\t\t";
        // line 28
        if ( !twig_test_empty((isset($context["av_errors"]) || array_key_exists("av_errors", $context) ? $context["av_errors"] : (function () { throw new RuntimeError('Variable "av_errors" does not exist.', 28, $this->source); })()))) {
            // line 29
            echo "\t  \t\t\t\t\t<div class=\"alert alert-warning\">";
            echo twig_join_filter((isset($context["av_errors"]) || array_key_exists("av_errors", $context) ? $context["av_errors"] : (function () { throw new RuntimeError('Variable "av_errors" does not exist.', 29, $this->source); })()), "<br>");
            echo "</div>
\t  \t\t\t\t";
        } elseif ((        // line 30
(isset($context["av_success"]) || array_key_exists("av_success", $context) ? $context["av_success"] : (function () { throw new RuntimeError('Variable "av_success" does not exist.', 30, $this->source); })()) == true)) {
            // line 31
            echo "\t  \t\t\t\t\t<div class=\"alert alert-success\">L'avatar a été modifié avec succès</div>
\t  \t\t\t\t";
        }
        // line 33
        echo "\t\t  \t\t</form>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"card mb-3\">
\t\t    <div class=\"card-header\">Mes informations</div>
\t\t  \t<div class=\"card-body\">
\t\t  \t\t<form method=\"post\">
\t\t  \t\t\t<input type=\"hidden\" name=\"action\" value=\"infos-form\">

\t\t  \t\t\t<div class=\"form-group row\">
\t\t  \t\t\t\t<label for=\"email\" class=\"col-lg-3\">Email</label>
\t\t  \t\t\t\t<input id=\"email\" class=\"col-lg-9 form-control\" name=\"email\" type=\"text\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "session", [], "any", false, false, false, 45), "get", [0 => "email"], "method", false, false, false, 45), "html", null, true);
        echo "\" disabled>
\t\t  \t\t\t</div>
\t\t  \t\t\t<div class=\"form-group row\">
\t\t  \t\t\t\t<label for=\"acces\" class=\"col-lg-3\">Accès</label>
\t\t  \t\t\t\t<input id=\"acces\" class=\"col-lg-9 form-control\" name=\"acces\" type=\"text\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "session", [], "any", false, false, false, 49), "get", [0 => "acces"], "method", false, false, false, 49), "html", null, true);
        echo "\" disabled>
\t\t  \t\t\t</div>
\t\t  \t\t\t<div class=\"form-group row\">
\t\t  \t\t\t\t<label for=\"pseudo\" class=\"col-lg-3\">Pseudo</label>
\t\t  \t\t\t\t<input id=\"pseudo\" class=\"col-lg-9 form-control\" name=\"pseudo\" type=\"text\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "pseudo", [], "any", true, true, false, 53) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "pseudo", [], "any", false, false, false, 53)))) ? (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "pseudo", [], "any", false, false, false, 53)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "session", [], "any", false, false, false, 53), "get", [0 => "pseudo"], "method", false, false, false, 53))), "html", null, true);
        echo "\">
\t\t  \t\t\t</div>
\t\t  \t\t\t<div class=\"form-group row\">
\t\t  \t\t\t\t<label for=\"nom\" class=\"col-lg-3\">Nom</label>
\t\t  \t\t\t\t<input id=\"nom\" class=\"col-lg-9 form-control\" name=\"nom\" type=\"text\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "nom", [], "any", true, true, false, 57) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "nom", [], "any", false, false, false, 57)))) ? (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "nom", [], "any", false, false, false, 57)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "session", [], "any", false, false, false, 57), "get", [0 => "nom"], "method", false, false, false, 57))), "html", null, true);
        echo "\">
\t\t  \t\t\t</div>
\t\t  \t\t\t<div class=\"form-group row\">
\t\t  \t\t\t\t<label for=\"prenom\" class=\"col-lg-3\">Prénom</label>
\t\t  \t\t\t\t<input id=\"prenom\" class=\"col-lg-9 form-control\" name=\"prenom\" type=\"text\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "prenom", [], "any", true, true, false, 61) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "prenom", [], "any", false, false, false, 61)))) ? (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "prenom", [], "any", false, false, false, 61)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "session", [], "any", false, false, false, 61), "get", [0 => "prenom"], "method", false, false, false, 61))), "html", null, true);
        echo "\">
\t\t  \t\t\t</div>
\t\t  \t\t\t<div class=\"form-group row\">
\t\t  \t\t\t\t<label for=\"adresse\" class=\"col-lg-3\">Adresse</label>
\t\t  \t\t\t\t<input id=\"adresse\" class=\"col-lg-9 form-control\" name=\"adresse\" type=\"text\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "adresse", [], "any", true, true, false, 65) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "adresse", [], "any", false, false, false, 65)))) ? (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "adresse", [], "any", false, false, false, 65)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "session", [], "any", false, false, false, 65), "get", [0 => "adresse"], "method", false, false, false, 65))), "html", null, true);
        echo "\">
\t\t  \t\t\t</div>
\t\t  \t\t\t<div class=\"form-group row\">
\t\t  \t\t\t\t<label for=\"cp\" class=\"col-lg-3\">Code Postal</label>
\t\t  \t\t\t\t<input id=\"cp\" class=\"col-lg-9 form-control\" name=\"cp\" type=\"text\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "cp", [], "any", true, true, false, 69) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "cp", [], "any", false, false, false, 69)))) ? (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "cp", [], "any", false, false, false, 69)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "session", [], "any", false, false, false, 69), "get", [0 => "cp"], "method", false, false, false, 69))), "html", null, true);
        echo "\">
\t\t  \t\t\t</div>
\t\t  \t\t\t<div class=\"form-group row\">
\t\t  \t\t\t\t<label for=\"ville\" class=\"col-lg-3\">Ville</label>
\t\t  \t\t\t\t<input id=\"ville\" class=\"col-lg-9 form-control\" name=\"ville\" type=\"text\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "ville", [], "any", true, true, false, 73) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "ville", [], "any", false, false, false, 73)))) ? (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "ville", [], "any", false, false, false, 73)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "session", [], "any", false, false, false, 73), "get", [0 => "ville"], "method", false, false, false, 73))), "html", null, true);
        echo "\">
\t\t  \t\t\t</div>
\t\t  \t\t\t<div class=\"form-group row\">
\t\t  \t\t\t\t<label for=\"telephone\" class=\"col-lg-3\">Téléphone</label>
\t\t  \t\t\t\t<input id=\"telephone\" class=\"col-lg-9 form-control\" name=\"telephone\" type=\"text\" maxlength=\"10\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "telephone", [], "any", true, true, false, 77) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "telephone", [], "any", false, false, false, 77)))) ? (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "telephone", [], "any", false, false, false, 77)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "session", [], "any", false, false, false, 77), "get", [0 => "telephone"], "method", false, false, false, 77))), "html", null, true);
        echo "\">
\t\t  \t\t\t</div>
\t\t  \t\t\t<div class=\"form-group row\">
\t\t  \t\t\t\t<label for=\"date_naiss\" class=\"col-lg-3\">Date de naissance</label>
\t\t  \t\t\t\t<input id=\"date_naiss\" class=\"col-lg-9 form-control\" name=\"date_naiss\" type=\"date\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "date_naiss", [], "any", true, true, false, 81) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "date_naiss", [], "any", false, false, false, 81)))) ? (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "date_naiss", [], "any", false, false, false, 81)) : (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "session", [], "any", false, false, false, 81), "get", [0 => "date_naiss"], "method", false, false, false, 81), "Y-m-d"))), "html", null, true);
        echo "\">
\t\t  \t\t\t</div>
\t\t  \t\t\t";
        // line 83
        if ( !twig_test_empty((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 83, $this->source); })()))) {
            // line 84
            echo "\t\t  \t\t\t\t<div class=\"alert alert-warning\">";
            echo twig_join_filter((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 84, $this->source); })()), "<br>");
            echo "</div>
\t\t  \t\t\t";
        } elseif ((        // line 85
(isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 85, $this->source); })()) == true)) {
            // line 86
            echo "\t\t  \t\t\t\t<div class=\"alert alert-success\">Vos modifications ont bien été prises en compte</div>
\t\t  \t\t\t";
        }
        // line 88
        echo "\t\t  \t\t\t<div class=\"form-group row d-flex justify-content-end\">
\t\t  \t\t\t\t<input type=\"submit\" class=\"btn btn-primary btn-lg m-1\" value=\"Enregistrer les modifications\">
\t\t  \t\t\t\t<input type=\"reset\" class=\"btn btn-secondary btn-lg m-1\" value=\"Réinitialiser\">
\t\t  \t\t\t</div>
\t\t  \t\t</form>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"card mb-3\">
\t\t    <div class=\"card-header\">Modifier mon mot de passe</div>
\t\t  \t<div class=\"card-body\">
\t\t  \t\t<form method=\"post\">
\t\t  \t\t\t<input type=\"hidden\" name=\"action\" value=\"pwd-form\">

\t\t  \t\t\t<div class=\"form-group row\">
\t\t  \t\t\t\t<label for=\"current_pwd\" class=\"col-lg-3\">Mot de passe actuel</label>
\t\t  \t\t\t\t<input id=\"current_pwd\" class=\"col-lg-9 form-control\" name=\"current_pwd\" type=\"password\">
\t\t  \t\t\t</div>
\t\t  \t\t\t<div class=\"form-group row\">
\t\t  \t\t\t\t<label for=\"new_pwd\" class=\"col-lg-3\">Nouveau mot de passe</label>
\t\t  \t\t\t\t<input id=\"new_pwd\" class=\"col-lg-9 form-control\" name=\"new_pwd\" type=\"password\">
\t\t  \t\t\t</div>
\t\t  \t\t\t<div class=\"form-group row\">
\t\t  \t\t\t\t<label for=\"new_pwd_confirm\" class=\"col-lg-3\">Confirmation du mot de passe</label>
\t\t  \t\t\t\t<input id=\"new_pwd_confirm\" class=\"col-lg-9 form-control\" name=\"new_pwd_confirm\" type=\"password\">
\t\t  \t\t\t</div>
\t\t  \t\t\t";
        // line 114
        if ( !twig_test_empty((isset($context["pwd_errors"]) || array_key_exists("pwd_errors", $context) ? $context["pwd_errors"] : (function () { throw new RuntimeError('Variable "pwd_errors" does not exist.', 114, $this->source); })()))) {
            // line 115
            echo "\t\t  \t\t\t\t<div class=\"alert alert-warning\">";
            echo twig_join_filter((isset($context["pwd_errors"]) || array_key_exists("pwd_errors", $context) ? $context["pwd_errors"] : (function () { throw new RuntimeError('Variable "pwd_errors" does not exist.', 115, $this->source); })()), "<br>");
            echo "</div>
\t\t  \t\t\t";
        } elseif ((        // line 116
(isset($context["pwd_success"]) || array_key_exists("pwd_success", $context) ? $context["pwd_success"] : (function () { throw new RuntimeError('Variable "pwd_success" does not exist.', 116, $this->source); })()) == true)) {
            // line 117
            echo "\t\t  \t\t\t\t<div class=\"alert alert-success\">Votre mot de passe a été modifié avec succès</div>
\t\t  \t\t\t";
        }
        // line 119
        echo "\t\t  \t\t\t<div class=\"form-group row d-flex justify-content-end\">
\t\t  \t\t\t\t<input type=\"submit\" class=\"btn btn-primary btn-lg m-1\" value=\"Valider\">
\t\t  \t\t\t\t<input type=\"reset\" class=\"btn btn-secondary btn-lg m-1\" value=\"Réinitialiser\">
\t\t  \t\t\t</div>
\t\t  \t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 132
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 133
        echo "
\t<script>
\t\t\$(document).ready(function() {
\t\t\t\$('#change-avatar-input').change(function() {

\t\t\t\t\$('#js-error-size').remove();

\t\t\t\t\$form = \$(this).closest('#change-avatar-form');

\t\t\t\tif(this.files[0].size < ";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["maxFileSize"]) || array_key_exists("maxFileSize", $context) ? $context["maxFileSize"] : (function () { throw new RuntimeError('Variable "maxFileSize" does not exist.', 142, $this->source); })()), "html", null, true);
        echo ") {
\t\t\t\t\t\$form.trigger('submit');
\t\t\t\t}
\t\t\t\telse {
\t\t\t\t\t\$form.find('.alert').remove();
\t\t\t\t\t\$form.append('<div id=\"js-error-size\" class=\"alert alert-warning\">Fichier trop volumineux pour être traîté</div>');
\t\t\t\t}
\t\t\t});
\t\t});
\t</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "users/viewprofile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 142,  306 => 133,  296 => 132,  276 => 119,  272 => 117,  270 => 116,  265 => 115,  263 => 114,  235 => 88,  231 => 86,  229 => 85,  224 => 84,  222 => 83,  217 => 81,  210 => 77,  203 => 73,  196 => 69,  189 => 65,  182 => 61,  175 => 57,  168 => 53,  161 => 49,  154 => 45,  140 => 33,  136 => 31,  134 => 30,  129 => 29,  127 => 28,  117 => 20,  111 => 18,  105 => 16,  103 => 15,  97 => 12,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block title %}Profil{% endblock %}

{% block content %}
\t<div class=\"container\">
\t\t<div class=\"card mb-3\">
\t\t    <div class=\"card-header\">Mon avatar</div>
\t\t  \t<div class=\"card-body\">
\t\t  \t\t<form id=\"change-avatar-form\" method=\"post\" enctype=\"multipart/form-data\">
\t\t  \t\t\t<input type=\"hidden\" name=\"action\" value=\"avatar-form\">
\t\t  \t\t\t<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"{{ maxFileSize }}\">

\t\t  \t\t\t<figure class=\"session-avatar profile-avatar\">
\t\t  \t\t\t\t{% if app.session.get('avatar') is not null %}
\t\t  \t\t\t\t\t<img src=\"{{ '/uploads/avatars/' ~ app.session.get('avatar') }}\">
\t\t  \t\t\t\t{% else %}
\t\t  \t\t\t\t\t<img src=\"{{ '/images/default-user.png' }}\">
\t\t  \t\t\t\t{% endif %}
\t\t  \t\t\t</figure>

\t\t  \t\t\t<div class=\"profile-avatar-file\">
\t\t  \t\t\t\t<div class=\"form-group row d-flex justify-content-center text-center\">
\t\t  \t\t\t\t\t<label for=\"change-avatar-input\" class=\"col-12 \"><strong>Changer mon avatar</strong></label>
\t\t  \t\t\t\t\t<input id=\"change-avatar-input\" class=\"text-center\" name=\"avatar\" type=\"file\" value=\"Changer d'avatar\">
\t\t  \t\t\t\t</div>
\t\t  \t\t\t</div>
\t  \t\t\t\t{% if av_errors is not empty %}
\t  \t\t\t\t\t<div class=\"alert alert-warning\">{{ av_errors|join('<br>')|raw }}</div>
\t  \t\t\t\t{% elseif av_success == true %}
\t  \t\t\t\t\t<div class=\"alert alert-success\">L'avatar a été modifié avec succès</div>
\t  \t\t\t\t{% endif %}
\t\t  \t\t</form>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"card mb-3\">
\t\t    <div class=\"card-header\">Mes informations</div>
\t\t  \t<div class=\"card-body\">
\t\t  \t\t<form method=\"post\">
\t\t  \t\t\t<input type=\"hidden\" name=\"action\" value=\"infos-form\">

\t\t  \t\t\t<div class=\"form-group row\">
\t\t  \t\t\t\t<label for=\"email\" class=\"col-lg-3\">Email</label>
\t\t  \t\t\t\t<input id=\"email\" class=\"col-lg-9 form-control\" name=\"email\" type=\"text\" value=\"{{ app.session.get('email') }}\" disabled>
\t\t  \t\t\t</div>
\t\t  \t\t\t<div class=\"form-group row\">
\t\t  \t\t\t\t<label for=\"acces\" class=\"col-lg-3\">Accès</label>
\t\t  \t\t\t\t<input id=\"acces\" class=\"col-lg-9 form-control\" name=\"acces\" type=\"text\" value=\"{{ app.session.get('acces') }}\" disabled>
\t\t  \t\t\t</div>
\t\t  \t\t\t<div class=\"form-group row\">
\t\t  \t\t\t\t<label for=\"pseudo\" class=\"col-lg-3\">Pseudo</label>
\t\t  \t\t\t\t<input id=\"pseudo\" class=\"col-lg-9 form-control\" name=\"pseudo\" type=\"text\" value=\"{{ post.pseudo ?? app.session.get('pseudo') }}\">
\t\t  \t\t\t</div>
\t\t  \t\t\t<div class=\"form-group row\">
\t\t  \t\t\t\t<label for=\"nom\" class=\"col-lg-3\">Nom</label>
\t\t  \t\t\t\t<input id=\"nom\" class=\"col-lg-9 form-control\" name=\"nom\" type=\"text\" value=\"{{ post.nom ?? app.session.get('nom') }}\">
\t\t  \t\t\t</div>
\t\t  \t\t\t<div class=\"form-group row\">
\t\t  \t\t\t\t<label for=\"prenom\" class=\"col-lg-3\">Prénom</label>
\t\t  \t\t\t\t<input id=\"prenom\" class=\"col-lg-9 form-control\" name=\"prenom\" type=\"text\" value=\"{{ post.prenom ?? app.session.get('prenom') }}\">
\t\t  \t\t\t</div>
\t\t  \t\t\t<div class=\"form-group row\">
\t\t  \t\t\t\t<label for=\"adresse\" class=\"col-lg-3\">Adresse</label>
\t\t  \t\t\t\t<input id=\"adresse\" class=\"col-lg-9 form-control\" name=\"adresse\" type=\"text\" value=\"{{ post.adresse ?? app.session.get('adresse') }}\">
\t\t  \t\t\t</div>
\t\t  \t\t\t<div class=\"form-group row\">
\t\t  \t\t\t\t<label for=\"cp\" class=\"col-lg-3\">Code Postal</label>
\t\t  \t\t\t\t<input id=\"cp\" class=\"col-lg-9 form-control\" name=\"cp\" type=\"text\" value=\"{{ post.cp ?? app.session.get('cp') }}\">
\t\t  \t\t\t</div>
\t\t  \t\t\t<div class=\"form-group row\">
\t\t  \t\t\t\t<label for=\"ville\" class=\"col-lg-3\">Ville</label>
\t\t  \t\t\t\t<input id=\"ville\" class=\"col-lg-9 form-control\" name=\"ville\" type=\"text\" value=\"{{ post.ville ?? app.session.get('ville') }}\">
\t\t  \t\t\t</div>
\t\t  \t\t\t<div class=\"form-group row\">
\t\t  \t\t\t\t<label for=\"telephone\" class=\"col-lg-3\">Téléphone</label>
\t\t  \t\t\t\t<input id=\"telephone\" class=\"col-lg-9 form-control\" name=\"telephone\" type=\"text\" maxlength=\"10\" value=\"{{ post.telephone ?? app.session.get('telephone') }}\">
\t\t  \t\t\t</div>
\t\t  \t\t\t<div class=\"form-group row\">
\t\t  \t\t\t\t<label for=\"date_naiss\" class=\"col-lg-3\">Date de naissance</label>
\t\t  \t\t\t\t<input id=\"date_naiss\" class=\"col-lg-9 form-control\" name=\"date_naiss\" type=\"date\" value=\"{{ post.date_naiss ?? app.session.get('date_naiss')|date('Y-m-d') }}\">
\t\t  \t\t\t</div>
\t\t  \t\t\t{% if errors is not empty %}
\t\t  \t\t\t\t<div class=\"alert alert-warning\">{{ errors|join('<br>')|raw }}</div>
\t\t  \t\t\t{% elseif success == true %}
\t\t  \t\t\t\t<div class=\"alert alert-success\">Vos modifications ont bien été prises en compte</div>
\t\t  \t\t\t{% endif %}
\t\t  \t\t\t<div class=\"form-group row d-flex justify-content-end\">
\t\t  \t\t\t\t<input type=\"submit\" class=\"btn btn-primary btn-lg m-1\" value=\"Enregistrer les modifications\">
\t\t  \t\t\t\t<input type=\"reset\" class=\"btn btn-secondary btn-lg m-1\" value=\"Réinitialiser\">
\t\t  \t\t\t</div>
\t\t  \t\t</form>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"card mb-3\">
\t\t    <div class=\"card-header\">Modifier mon mot de passe</div>
\t\t  \t<div class=\"card-body\">
\t\t  \t\t<form method=\"post\">
\t\t  \t\t\t<input type=\"hidden\" name=\"action\" value=\"pwd-form\">

\t\t  \t\t\t<div class=\"form-group row\">
\t\t  \t\t\t\t<label for=\"current_pwd\" class=\"col-lg-3\">Mot de passe actuel</label>
\t\t  \t\t\t\t<input id=\"current_pwd\" class=\"col-lg-9 form-control\" name=\"current_pwd\" type=\"password\">
\t\t  \t\t\t</div>
\t\t  \t\t\t<div class=\"form-group row\">
\t\t  \t\t\t\t<label for=\"new_pwd\" class=\"col-lg-3\">Nouveau mot de passe</label>
\t\t  \t\t\t\t<input id=\"new_pwd\" class=\"col-lg-9 form-control\" name=\"new_pwd\" type=\"password\">
\t\t  \t\t\t</div>
\t\t  \t\t\t<div class=\"form-group row\">
\t\t  \t\t\t\t<label for=\"new_pwd_confirm\" class=\"col-lg-3\">Confirmation du mot de passe</label>
\t\t  \t\t\t\t<input id=\"new_pwd_confirm\" class=\"col-lg-9 form-control\" name=\"new_pwd_confirm\" type=\"password\">
\t\t  \t\t\t</div>
\t\t  \t\t\t{% if pwd_errors is not empty %}
\t\t  \t\t\t\t<div class=\"alert alert-warning\">{{ pwd_errors|join('<br>')|raw }}</div>
\t\t  \t\t\t{% elseif pwd_success == true %}
\t\t  \t\t\t\t<div class=\"alert alert-success\">Votre mot de passe a été modifié avec succès</div>
\t\t  \t\t\t{% endif %}
\t\t  \t\t\t<div class=\"form-group row d-flex justify-content-end\">
\t\t  \t\t\t\t<input type=\"submit\" class=\"btn btn-primary btn-lg m-1\" value=\"Valider\">
\t\t  \t\t\t\t<input type=\"reset\" class=\"btn btn-secondary btn-lg m-1\" value=\"Réinitialiser\">
\t\t  \t\t\t</div>
\t\t  \t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>


{% endblock %}


{% block javascripts %}

\t<script>
\t\t\$(document).ready(function() {
\t\t\t\$('#change-avatar-input').change(function() {

\t\t\t\t\$('#js-error-size').remove();

\t\t\t\t\$form = \$(this).closest('#change-avatar-form');

\t\t\t\tif(this.files[0].size < {{ maxFileSize }}) {
\t\t\t\t\t\$form.trigger('submit');
\t\t\t\t}
\t\t\t\telse {
\t\t\t\t\t\$form.find('.alert').remove();
\t\t\t\t\t\$form.append('<div id=\"js-error-size\" class=\"alert alert-warning\">Fichier trop volumineux pour être traîté</div>');
\t\t\t\t}
\t\t\t});
\t\t});
\t</script>

{% endblock %}", "users/viewprofile.html.twig", "C:\\xampp\\htdocs\\moto_club_v2\\moto_club_v2\\templates\\users\\viewprofile.html.twig");
    }
}
