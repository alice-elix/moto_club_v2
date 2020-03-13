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

/* photos/gestion-photos.html.twig */
class __TwigTemplate_8e4e3d32a847427907d927795c8b1f689a4c80b3ea33d36b115d9117e5cd5886 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "photos/gestion-photos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "photos/gestion-photos.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "photos/gestion-photos.html.twig", 1);
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

        echo "Gestion Photos";
        
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
        echo "\t
\t<section class=\"py-2 mb-5 container\">
\t\t<div class=\"d-flex justify-content-between\">
\t\t\t<span>
\t\t\t\t";
        // line 10
        if (twig_in_filter("bureau", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "session", [], "any", false, false, false, 10), "get", [0 => "ranks"], "method", false, false, false, 10))) {
            // line 11
            echo "\t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion_balades");
            echo "\" class=\"btn btn-secondary\" role=\"button\"><i class=\"fas fa-angle-left\"></i> Retour</a>
\t\t\t\t";
        } else {
            // line 13
            echo "\t\t\t\t\t";
            if (((isset($context["nb_photos"]) || array_key_exists("nb_photos", $context) ? $context["nb_photos"] : (function () { throw new RuntimeError('Variable "nb_photos" does not exist.', 13, $this->source); })()) > 0)) {
                // line 14
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_album", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 14, $this->source); })()), "getId", [], "method", false, false, false, 14)]), "html", null, true);
                echo "\" class=\"btn btn-info\" role=\"button\"><i class=\"fas fa-angle-left\"></i> Retour</a>
\t\t\t\t\t";
            } else {
                // line 16
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_balade", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 16, $this->source); })()), "getId", [], "method", false, false, false, 16)]), "html", null, true);
                echo "\" class=\"btn btn-info\" role=\"button\"><i class=\"fas fa-angle-left\"></i> Retour</a>
\t\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t";
        }
        // line 19
        echo "\t\t\t</span>
\t\t\t<span>
\t\t\t\t
\t\t\t</span>
\t\t</div>\t

\t\t<div class=\"card my-4\">
\t\t    <div class=\"card-header\">
\t\t    \t<div class=\"d-flex justify-content-between align-items-center\">
\t\t    \t\t<span>Ajout de nouvelles photos à l'album <strong>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 28, $this->source); })()), "getTitre", [], "method", false, false, false, 28), "html", null, true);
        echo "</strong></span>
\t\t    \t\t<span>
\t\t    \t\t</span>
\t\t    \t</div>
\t\t    </div>
\t\t  \t<div class=\"card-body\">
\t\t  \t\t<form id=\"add-photo-form\" method=\"post\" enctype=\"multipart/form-data\">
\t\t  \t\t\t<input type=\"hidden\" name=\"action\" value=\"avatar-form\">
\t\t  \t\t\t<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["maxFileSize"]) || array_key_exists("maxFileSize", $context) ? $context["maxFileSize"] : (function () { throw new RuntimeError('Variable "maxFileSize" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "\">
\t\t  \t\t\t<div class=\"profile-avatar-file\">
\t\t  \t\t\t\t<div class=\"form-group row d-flex justify-content-center text-center\">
\t\t  \t\t\t\t\t<label for=\"add-photo-input\" class=\"col-12 \"><strong>Ajouter une photo</strong></label>
\t\t  \t\t\t\t\t<input id=\"add-photo-input\" class=\"text-center\" name=\"photo\" type=\"file\" value=\"Sélectionner une photo\">
\t\t  \t\t\t\t</div>
\t\t  \t\t\t</div>
\t  \t\t\t\t";
        // line 43
        if ( !twig_test_empty((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 43, $this->source); })()))) {
            // line 44
            echo "\t  \t\t\t\t\t<div class=\"alert alert-warning\">";
            echo twig_join_filter((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 44, $this->source); })()), "<br>");
            echo "</div>
\t  \t\t\t\t";
        } elseif ((        // line 45
(isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 45, $this->source); })()) == true)) {
            // line 46
            echo "\t  \t\t\t\t\t<div class=\"alert alert-success\">La photo a été ajoutée avec succès</div>
\t  \t\t\t\t";
        }
        // line 48
        echo "\t\t  \t\t</form>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"card-deck my-4\">
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t<span>Liste des photos</span>
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t";
        // line 58
        if (twig_in_filter("bureau", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "session", [], "any", false, false, false, 58), "get", [0 => "ranks"], "method", false, false, false, 58))) {
            // line 59
            echo "\t\t\t\t\t\t\t\t";
            if (((isset($context["nb_photos"]) || array_key_exists("nb_photos", $context) ? $context["nb_photos"] : (function () { throw new RuntimeError('Variable "nb_photos" does not exist.', 59, $this->source); })()) > 0)) {
                // line 60
                echo "\t\t\t\t\t\t\t\t\t<a title=\"Afficher la galerie\" class=\"btn btn-info\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_album", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 60, $this->source); })()), "getId", [], "method", false, false, false, 60)]), "html", null, true);
                echo "\" role=\"button\"><i class=\"fas fa-globe-europe\"></i></a>
\t\t\t\t\t\t\t\t";
            } else {
                // line 62
                echo "\t\t\t\t\t\t\t\t\t<a title=\"Afficher la balade\" class=\"btn btn-info\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_balade", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 62, $this->source); })()), "getId", [], "method", false, false, false, 62)]), "html", null, true);
                echo "\" role=\"button\"><i class=\"fas fa-globe-europe\"></i></a>
\t\t\t\t\t\t\t\t";
            }
            // line 64
            echo "\t\t\t\t\t\t\t";
        }
        // line 65
        echo "\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div class=\"scrolling-table\">
\t\t\t\t\t\t<table class=\"admin-table-mg\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t<th class=\"text-left\">Photo</th>
\t\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t      \t";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["photos"]) || array_key_exists("photos", $context) ? $context["photos"] : (function () { throw new RuntimeError('Variable "photos" does not exist.', 79, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 80
            echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t    ";
            // line 82
            $context["i"] = ((((isset($context["i"]) || array_key_exists("i", $context))) ? (_twig_default_filter((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 82, $this->source); })()), 0)) : (0)) + 1);
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 82, $this->source); })()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<figure class=\"admin-fig-photo\">
\t\t\t\t\t\t\t\t\t\t\t    <a href=\"";
            // line 86
            echo twig_escape_filter($this->env, (("/" . (isset($context["uploadDir"]) || array_key_exists("uploadDir", $context) ? $context["uploadDir"] : (function () { throw new RuntimeError('Variable "uploadDir" does not exist.', 86, $this->source); })())) . twig_get_attribute($this->env, $this->source, $context["photo"], "getFileName", [], "method", false, false, false, 86)), "html", null, true);
            echo "\" data-fancybox=\"images\" data-caption=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "getLegende", [], "method", false, false, false, 86), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t        <img class=\"img-fluid\" src=\"";
            // line 87
            echo twig_escape_filter($this->env, (("/" . (isset($context["uploadDir"]) || array_key_exists("uploadDir", $context) ? $context["uploadDir"] : (function () { throw new RuntimeError('Variable "uploadDir" does not exist.', 87, $this->source); })())) . twig_get_attribute($this->env, $this->source, $context["photo"], "getFileName", [], "method", false, false, false, 87)), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t    </a>   
\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"d-flex justify-content-center align-items-center flex-nowrap pt-2\">
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a \ttitle=\"Supprimer la photo\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"btn btn-danger\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("del_photo", ["id" => twig_get_attribute($this->env, $this->source, $context["photo"], "getId", [], "method", false, false, false, 96)]), "html", null, true);
            echo "\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"button\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-toggle=\"modal\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-target=\"#modalDelete\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-content=\"Vous êtes sur le point de supprimer une photo liée à la balade <strong>";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 100, $this->source); })()), "getTitre", [], "method", false, false, false, 100), "html", null, true);
            echo "</strong> de manière irréversible. Êtes-vous sûr(e) de vouloir continuer ?\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t      \t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 119
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 120
        echo "
\t<script>
\t\t\$(document).ready(function() {
\t\t\t\$('#add-photo-input').change(function() {

\t\t\t\t\$('#js-error-size').remove();

\t\t\t\t\$form = \$(this).closest('#add-photo-form');

\t\t\t\tif(this.files[0].size < ";
        // line 129
        echo twig_escape_filter($this->env, (isset($context["maxFileSize"]) || array_key_exists("maxFileSize", $context) ? $context["maxFileSize"] : (function () { throw new RuntimeError('Variable "maxFileSize" does not exist.', 129, $this->source); })()), "html", null, true);
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
        return "photos/gestion-photos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 129,  298 => 120,  288 => 119,  269 => 108,  255 => 100,  248 => 96,  236 => 87,  230 => 86,  222 => 82,  218 => 80,  214 => 79,  198 => 65,  195 => 64,  189 => 62,  183 => 60,  180 => 59,  178 => 58,  166 => 48,  162 => 46,  160 => 45,  155 => 44,  153 => 43,  143 => 36,  132 => 28,  121 => 19,  118 => 18,  112 => 16,  106 => 14,  103 => 13,  97 => 11,  95 => 10,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block title %}Gestion Photos{% endblock %}

{% block content %}
\t
\t<section class=\"py-2 mb-5 container\">
\t\t<div class=\"d-flex justify-content-between\">
\t\t\t<span>
\t\t\t\t{% if 'bureau' in app.session.get('ranks') %}
\t\t\t\t\t<a href=\"{{ path('gestion_balades') }}\" class=\"btn btn-secondary\" role=\"button\"><i class=\"fas fa-angle-left\"></i> Retour</a>
\t\t\t\t{% else %}
\t\t\t\t\t{% if nb_photos > 0 %}
\t\t\t\t\t\t<a href=\"{{ path('view_album', {id: balade.getId() }) }}\" class=\"btn btn-info\" role=\"button\"><i class=\"fas fa-angle-left\"></i> Retour</a>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a href=\"{{ path('view_balade', {id: balade.getId() }) }}\" class=\"btn btn-info\" role=\"button\"><i class=\"fas fa-angle-left\"></i> Retour</a>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endif %}
\t\t\t</span>
\t\t\t<span>
\t\t\t\t
\t\t\t</span>
\t\t</div>\t

\t\t<div class=\"card my-4\">
\t\t    <div class=\"card-header\">
\t\t    \t<div class=\"d-flex justify-content-between align-items-center\">
\t\t    \t\t<span>Ajout de nouvelles photos à l'album <strong>{{ balade.getTitre() }}</strong></span>
\t\t    \t\t<span>
\t\t    \t\t</span>
\t\t    \t</div>
\t\t    </div>
\t\t  \t<div class=\"card-body\">
\t\t  \t\t<form id=\"add-photo-form\" method=\"post\" enctype=\"multipart/form-data\">
\t\t  \t\t\t<input type=\"hidden\" name=\"action\" value=\"avatar-form\">
\t\t  \t\t\t<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"{{ maxFileSize }}\">
\t\t  \t\t\t<div class=\"profile-avatar-file\">
\t\t  \t\t\t\t<div class=\"form-group row d-flex justify-content-center text-center\">
\t\t  \t\t\t\t\t<label for=\"add-photo-input\" class=\"col-12 \"><strong>Ajouter une photo</strong></label>
\t\t  \t\t\t\t\t<input id=\"add-photo-input\" class=\"text-center\" name=\"photo\" type=\"file\" value=\"Sélectionner une photo\">
\t\t  \t\t\t\t</div>
\t\t  \t\t\t</div>
\t  \t\t\t\t{% if errors is not empty %}
\t  \t\t\t\t\t<div class=\"alert alert-warning\">{{ errors|join('<br>')|raw }}</div>
\t  \t\t\t\t{% elseif success == true %}
\t  \t\t\t\t\t<div class=\"alert alert-success\">La photo a été ajoutée avec succès</div>
\t  \t\t\t\t{% endif %}
\t\t  \t\t</form>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"card-deck my-4\">
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t<span>Liste des photos</span>
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t{% if 'bureau' in app.session.get('ranks') %}
\t\t\t\t\t\t\t\t{% if nb_photos > 0 %}
\t\t\t\t\t\t\t\t\t<a title=\"Afficher la galerie\" class=\"btn btn-info\" href=\"{{ path('view_album', {id: balade.getId() }) }}\" role=\"button\"><i class=\"fas fa-globe-europe\"></i></a>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<a title=\"Afficher la balade\" class=\"btn btn-info\" href=\"{{ path('view_balade', {id: balade.getId() }) }}\" role=\"button\"><i class=\"fas fa-globe-europe\"></i></a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div class=\"scrolling-table\">
\t\t\t\t\t\t<table class=\"admin-table-mg\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t<th class=\"text-left\">Photo</th>
\t\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t      \t{% for photo in photos %}
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t    {% set i = ( i | default(0) ) + 1 %}{{i}}
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<figure class=\"admin-fig-photo\">
\t\t\t\t\t\t\t\t\t\t\t    <a href=\"{{ '/' ~ uploadDir ~ photo.getFileName() }}\" data-fancybox=\"images\" data-caption=\"{{ photo.getLegende() }}\">
\t\t\t\t\t\t\t\t\t\t\t        <img class=\"img-fluid\" src=\"{{ '/' ~ uploadDir ~ photo.getFileName() }}\">
\t\t\t\t\t\t\t\t\t\t\t    </a>   
\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"d-flex justify-content-center align-items-center flex-nowrap pt-2\">
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a \ttitle=\"Supprimer la photo\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"btn btn-danger\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"{{ path('del_photo', {id: photo.getId()}) }}\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"button\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-toggle=\"modal\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-target=\"#modalDelete\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-content=\"Vous êtes sur le point de supprimer une photo liée à la balade <strong>{{ balade.getTitre() }}</strong> de manière irréversible. Êtes-vous sûr(e) de vouloir continuer ?\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t      \t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

{% endblock %}

{% block javascripts %}

\t<script>
\t\t\$(document).ready(function() {
\t\t\t\$('#add-photo-input').change(function() {

\t\t\t\t\$('#js-error-size').remove();

\t\t\t\t\$form = \$(this).closest('#add-photo-form');

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

{% endblock %}", "photos/gestion-photos.html.twig", "C:\\xampp\\htdocs\\moto_club_v2\\moto_club_v2\\templates\\photos\\gestion-photos.html.twig");
    }
}
