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
class __TwigTemplate_3824f0a8956b3fb7439cf87a98cb8a890378a9d1753585472800da4fc6728307 extends \Twig\Template
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
        echo "\t<h1>Profil</h1>

\t<div class=\"container\">
\t\t<div class=\"card mb-3\">
\t\t    <div class=\"card-header\">Mon avatar</div>
\t\t  \t<div class=\"card-body\">
\t\t  \t\t<form id=\"change-avatar-form\" method=\"post\" enctype=\"multipart/form-data\">
\t\t  \t\t\t<input type=\"hidden\" name=\"action\" value=\"avatar-form\">
\t\t  \t\t\t<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["maxFileSize"]) || array_key_exists("maxFileSize", $context) ? $context["maxFileSize"] : (function () { throw new RuntimeError('Variable "maxFileSize" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "\">

\t\t  \t\t\t<figure class=\"session-avatar profile-avatar\">
\t\t  \t\t\t\t";
        // line 17
        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "session", [], "any", false, false, false, 17), "get", [0 => "avatar"], "method", false, false, false, 17))) {
            // line 18
            echo "\t\t  \t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, ("/uploads/avatars/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "session", [], "any", false, false, false, 18), "get", [0 => "avatar"], "method", false, false, false, 18)), "html", null, true);
            echo "\">
\t\t  \t\t\t\t";
        } else {
            // line 20
            echo "\t\t  \t\t\t\t\t<img src=\"";
            echo "/images/default-user.png";
            echo "\">
\t\t  \t\t\t\t";
        }
        // line 22
        echo "\t\t  \t\t\t</figure>

\t\t  \t\t\t<div class=\"profile-avatar-file\">
\t\t  \t\t\t\t<div class=\"form-group row d-flex justify-content-center text-center\">
\t\t  \t\t\t\t\t<label for=\"change-avatar-input\" class=\"col-12 \"><strong>Changer mon avatar</strong></label>
\t\t  \t\t\t\t\t<input id=\"change-avatar-input\" class=\"text-center\" name=\"avatar\" type=\"file\" value=\"Changer d'avatar\">
\t\t  \t\t\t\t</div>
\t\t  \t\t\t</div>
\t  \t\t\t\t";
        // line 30
        if ( !twig_test_empty((isset($context["av_errors"]) || array_key_exists("av_errors", $context) ? $context["av_errors"] : (function () { throw new RuntimeError('Variable "av_errors" does not exist.', 30, $this->source); })()))) {
            // line 31
            echo "\t  \t\t\t\t\t<div class=\"alert alert-warning\">";
            echo twig_join_filter((isset($context["av_errors"]) || array_key_exists("av_errors", $context) ? $context["av_errors"] : (function () { throw new RuntimeError('Variable "av_errors" does not exist.', 31, $this->source); })()), "<br>");
            echo "</div>
\t  \t\t\t\t";
        } elseif ((        // line 32
(isset($context["av_success"]) || array_key_exists("av_success", $context) ? $context["av_success"] : (function () { throw new RuntimeError('Variable "av_success" does not exist.', 32, $this->source); })()) == true)) {
            // line 33
            echo "\t  \t\t\t\t\t<div class=\"alert alert-success\">L'avatar a été modifié avec succès</div>
\t  \t\t\t\t";
        }
        // line 35
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
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "session", [], "any", false, false, false, 47), "get", [0 => "email"], "method", false, false, false, 47), "html", null, true);
        echo "\" disabled>
\t\t  \t\t\t</div>
\t\t  \t\t\t<div class=\"form-group row\">
\t\t  \t\t\t\t<label for=\"acces\" class=\"col-lg-3\">Accès</label>
\t\t  \t\t\t\t<input id=\"acces\" class=\"col-lg-9 form-control\" name=\"acces\" type=\"text\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "session", [], "any", false, false, false, 51), "get", [0 => "acces"], "method", false, false, false, 51), "html", null, true);
        echo "\" disabled>
\t\t  \t\t\t</div>
\t\t  \t\t\t<div class=\"form-group row\">
\t\t  \t\t\t\t<label for=\"pseudo\" class=\"col-lg-3\">Pseudo</label>
\t\t  \t\t\t\t<input id=\"pseudo\" class=\"col-lg-9 form-control\" name=\"pseudo\" type=\"text\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "pseudo", [], "any", true, true, false, 55) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "pseudo", [], "any", false, false, false, 55)))) ? (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "pseudo", [], "any", false, false, false, 55)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "session", [], "any", false, false, false, 55), "get", [0 => "pseudo"], "method", false, false, false, 55))), "html", null, true);
        echo "\">
\t\t  \t\t\t</div>
\t\t  \t\t\t<div class=\"form-group row\">
\t\t  \t\t\t\t<label for=\"nom\" class=\"col-lg-3\">Nom</label>
\t\t  \t\t\t\t<input id=\"nom\" class=\"col-lg-9 form-control\" name=\"nom\" type=\"text\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "nom", [], "any", true, true, false, 59) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "nom", [], "any", false, false, false, 59)))) ? (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "nom", [], "any", false, false, false, 59)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "session", [], "any", false, false, false, 59), "get", [0 => "nom"], "method", false, false, false, 59))), "html", null, true);
        echo "\">
\t\t  \t\t\t</div>
\t\t  \t\t\t<div class=\"form-group row\">
\t\t  \t\t\t\t<label for=\"prenom\" class=\"col-lg-3\">Prénom</label>
\t\t  \t\t\t\t<input id=\"prenom\" class=\"col-lg-9 form-control\" name=\"prenom\" type=\"text\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "prenom", [], "any", true, true, false, 63) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "prenom", [], "any", false, false, false, 63)))) ? (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "prenom", [], "any", false, false, false, 63)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "session", [], "any", false, false, false, 63), "get", [0 => "prenom"], "method", false, false, false, 63))), "html", null, true);
        echo "\">
\t\t  \t\t\t</div>
\t\t  \t\t\t<div class=\"form-group row\">
\t\t  \t\t\t\t<label for=\"adresse\" class=\"col-lg-3\">Adresse</label>
\t\t  \t\t\t\t<input id=\"adresse\" class=\"col-lg-9 form-control\" name=\"adresse\" type=\"text\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "adresse", [], "any", true, true, false, 67) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "adresse", [], "any", false, false, false, 67)))) ? (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "adresse", [], "any", false, false, false, 67)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "session", [], "any", false, false, false, 67), "get", [0 => "adresse"], "method", false, false, false, 67))), "html", null, true);
        echo "\">
\t\t  \t\t\t</div>
\t\t  \t\t\t<div class=\"form-group row\">
\t\t  \t\t\t\t<label for=\"cp\" class=\"col-lg-3\">Code Postal</label>
\t\t  \t\t\t\t<input id=\"cp\" class=\"col-lg-9 form-control\" name=\"cp\" type=\"text\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "cp", [], "any", true, true, false, 71) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "cp", [], "any", false, false, false, 71)))) ? (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "cp", [], "any", false, false, false, 71)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "session", [], "any", false, false, false, 71), "get", [0 => "cp"], "method", false, false, false, 71))), "html", null, true);
        echo "\">
\t\t  \t\t\t</div>
\t\t  \t\t\t<div class=\"form-group row\">
\t\t  \t\t\t\t<label for=\"ville\" class=\"col-lg-3\">Ville</label>
\t\t  \t\t\t\t<input id=\"ville\" class=\"col-lg-9 form-control\" name=\"ville\" type=\"text\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "ville", [], "any", true, true, false, 75) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "ville", [], "any", false, false, false, 75)))) ? (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "ville", [], "any", false, false, false, 75)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "session", [], "any", false, false, false, 75), "get", [0 => "ville"], "method", false, false, false, 75))), "html", null, true);
        echo "\">
\t\t  \t\t\t</div>
\t\t  \t\t\t<div class=\"form-group row\">
\t\t  \t\t\t\t<label for=\"telephone\" class=\"col-lg-3\">Téléphone</label>
\t\t  \t\t\t\t<input id=\"telephone\" class=\"col-lg-9 form-control\" name=\"telephone\" type=\"text\" maxlength=\"10\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "telephone", [], "any", true, true, false, 79) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "telephone", [], "any", false, false, false, 79)))) ? (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "telephone", [], "any", false, false, false, 79)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "session", [], "any", false, false, false, 79), "get", [0 => "telephone"], "method", false, false, false, 79))), "html", null, true);
        echo "\">
\t\t  \t\t\t</div>
\t\t  \t\t\t<div class=\"form-group row\">
\t\t  \t\t\t\t<label for=\"date_naiss\" class=\"col-lg-3\">Date de naissance</label>
\t\t  \t\t\t\t<input id=\"date_naiss\" class=\"col-lg-9 form-control\" name=\"date_naiss\" type=\"date\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "date_naiss", [], "any", true, true, false, 83) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "date_naiss", [], "any", false, false, false, 83)))) ? (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "date_naiss", [], "any", false, false, false, 83)) : (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "session", [], "any", false, false, false, 83), "get", [0 => "date_naiss"], "method", false, false, false, 83), "Y-m-d"))), "html", null, true);
        echo "\">
\t\t  \t\t\t</div>
\t\t  \t\t\t";
        // line 85
        if ( !twig_test_empty((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 85, $this->source); })()))) {
            // line 86
            echo "\t\t  \t\t\t\t<div class=\"alert alert-warning\">";
            echo twig_join_filter((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 86, $this->source); })()), "<br>");
            echo "</div>
\t\t  \t\t\t";
        } elseif ((        // line 87
(isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 87, $this->source); })()) == true)) {
            // line 88
            echo "\t\t  \t\t\t\t<div class=\"alert alert-success\">Vos modifications ont bien été prises en compte</div>
\t\t  \t\t\t";
        }
        // line 90
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
        // line 116
        if ( !twig_test_empty((isset($context["pwd_errors"]) || array_key_exists("pwd_errors", $context) ? $context["pwd_errors"] : (function () { throw new RuntimeError('Variable "pwd_errors" does not exist.', 116, $this->source); })()))) {
            // line 117
            echo "\t\t  \t\t\t\t<div class=\"alert alert-warning\">";
            echo twig_join_filter((isset($context["pwd_errors"]) || array_key_exists("pwd_errors", $context) ? $context["pwd_errors"] : (function () { throw new RuntimeError('Variable "pwd_errors" does not exist.', 117, $this->source); })()), "<br>");
            echo "</div>
\t\t  \t\t\t";
        } elseif ((        // line 118
(isset($context["pwd_success"]) || array_key_exists("pwd_success", $context) ? $context["pwd_success"] : (function () { throw new RuntimeError('Variable "pwd_success" does not exist.', 118, $this->source); })()) == true)) {
            // line 119
            echo "\t\t  \t\t\t\t<div class=\"alert alert-success\">Votre mot de passe a été modifié avec succès</div>
\t\t  \t\t\t";
        }
        // line 121
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

    // line 134
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 135
        echo "
\t<script>
\t\t\$(document).ready(function() {
\t\t\t\$('#change-avatar-input').change(function() {

\t\t\t\t\$('#js-error-size').remove();

\t\t\t\t\$form = \$(this).closest('#change-avatar-form');

\t\t\t\tif(this.files[0].size < ";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["maxFileSize"]) || array_key_exists("maxFileSize", $context) ? $context["maxFileSize"] : (function () { throw new RuntimeError('Variable "maxFileSize" does not exist.', 144, $this->source); })()), "html", null, true);
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
        return array (  319 => 144,  308 => 135,  298 => 134,  278 => 121,  274 => 119,  272 => 118,  267 => 117,  265 => 116,  237 => 90,  233 => 88,  231 => 87,  226 => 86,  224 => 85,  219 => 83,  212 => 79,  205 => 75,  198 => 71,  191 => 67,  184 => 63,  177 => 59,  170 => 55,  163 => 51,  156 => 47,  142 => 35,  138 => 33,  136 => 32,  131 => 31,  129 => 30,  119 => 22,  113 => 20,  107 => 18,  105 => 17,  99 => 14,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block title %}Profil{% endblock %}

{% block content %}
\t<h1>Profil</h1>

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

{% endblock %}", "users/viewprofile.html.twig", "C:\\xampp\\htdocs\\moto_club\\templates\\users\\viewprofile.html.twig");
    }
}
