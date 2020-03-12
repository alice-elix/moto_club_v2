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

/* reunions/indexBackReunion.html.twig */
class __TwigTemplate_674323a65d321f0b283facc9e455d519ce550fddc8e8eecfd65c4a8380648534 extends \Twig\Template
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
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reunions/indexBackReunion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reunions/indexBackReunion.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "reunions/indexBackReunion.html.twig", 1);
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

        echo "<link rel=\"stylesheet\" href=\"/css/styles_back.css\">";
        
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
\t<section class=\"p-2 mb-5 bg-light bg-section-back\">
\t<div class=\"d-flex justify-content-between\">
\t\t<h2>Réunions </h2>
\t\t<a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_reunions");
        echo "\" title=\"Index des réunions sur le site\" class=\"btn btn-info mb-3\" role=\"button\"><i class=\"fas fa-globe-europe\"></i></a>
\t</div>
\t\t<h3 class=\"card-header\">Réunions sans compte rendu</h3>
\t\t";
        // line 15
        if ( !twig_test_empty((isset($context["reusSansCr"]) || array_key_exists("reusSansCr", $context) ? $context["reusSansCr"] : (function () { throw new RuntimeError('Variable "reusSansCr" does not exist.', 15, $this->source); })()))) {
            // line 16
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reusSansCr"]) || array_key_exists("reusSansCr", $context) ? $context["reusSansCr"] : (function () { throw new RuntimeError('Variable "reusSansCr" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reuSansCr"]) {
                // line 17
                echo "\t\t\t  \t<div class=\"card-deck my-4 text-danger\">
\t\t\t    \t<div class=\"card\">
\t\t\t\t  \t  \t<div class=\"card-header\">
\t\t\t\t  \t\t\t<div class=\"card-title py-2\">
\t\t\t\t  \t\t\t\t<div class=\"row\">
\t\t\t\t\t\t  \t        <div class=\"col-md-6\">
\t\t\t\t  \t\t\t\t\t<b>";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reuSansCr"], "getTitre", [], "method", false, false, false, 23), "html", null, true);
                echo "</b>, le ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reuSansCr"], "getDatetimeReu", [], "method", false, false, false, 23), "d/m/Y"), "html", null, true);
                echo " (<em>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reuSansCr"], "getTypeReu", [], "method", false, false, false, 23), "html", null, true);
                echo "</em>)
\t\t\t\t\t\t  \t        </div>
\t\t\t\t  \t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t  \t\t\t\t<a title=\"Supprimer la réunion\" class=\"btn btn-danger float-right btn-reu mx-1\" href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("del_reunion", ["id" => twig_get_attribute($this->env, $this->source, $context["reuSansCr"], "getId", [], "method", false, false, false, 26)]), "html", null, true);
                echo "\" role=\"button\"><i class=\"fas fa-trash-alt\"></i></a>
\t\t\t\t\t\t  \t            <a title=\"Afficher la réunion\" class=\"btn btn-secondary float-right btn-reu mx-1\" href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_back_reunion", ["id" => twig_get_attribute($this->env, $this->source, $context["reuSansCr"], "getId", [], "method", false, false, false, 27)]), "html", null, true);
                echo "\" role=\"button\"><i class=\"far fa-eye\"></i></a>
\t\t\t\t\t\t  \t\t\t\t<a title =\"Ajouter le compte-rendu\" class=\"btn btn-success float-right btn-reu mx-1\" href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_cr", ["id" => twig_get_attribute($this->env, $this->source, $context["reuSansCr"], "getId", [], "method", false, false, false, 28)]), "html", null, true);
                echo "\" role=\"button\"><i class=\"fas fa-pen\"></i></a>\t
\t\t\t\t\t\t  \t        </div>
\t\t\t\t  \t\t\t\t</div>
\t\t\t\t  \t\t\t</div>\t\t     
\t\t\t\t  \t\t\t<div class=\"card-footer small text-muted mb-2\">
\t\t\t\t  \t\t\t\tPublié le ";
                // line 33
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reuSansCr"], "getDatetimePost", [], "method", false, false, false, 33), "d/m/Y"), "html", null, true);
                echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t    </div>
\t\t\t  \t\t</div>
\t\t\t  \t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reuSansCr'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo " 
\t\t";
        } else {
            // line 40
            echo "\t\t  \t<div class=\"card-deck my-4 \">
\t\t    \t<div class=\"card\">
\t\t\t  \t  \t<div class=\"card-header\">
\t\t\t  \t\t\t<div class=\"card-title py-2\">
\t\t\t  \t            <p>Aucune réunion en attente de compte-rendu.</p>
\t\t\t  \t\t\t</div>
\t\t\t  \t    </div>
\t\t  \t\t</div>
\t\t  \t</div>
\t\t";
        }
        // line 50
        echo "\t\t<h3 class=\"card-header\">Futures réunions</h3>
\t\t";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reusNonPassees"]) || array_key_exists("reusNonPassees", $context) ? $context["reusNonPassees"] : (function () { throw new RuntimeError('Variable "reusNonPassees" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reuNonPassee"]) {
            // line 52
            echo "\t\t\t<div class=\"card-deck my-4\">
\t\t\t  \t<div class=\"card\">
\t\t\t\t  \t<div class=\"card-header \">
\t\t\t\t\t\t<div class=\"card-title py-2\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<b>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reuNonPassee"], "getTitre", [], "method", false, false, false, 58), "html", null, true);
            echo "</b>, le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reuNonPassee"], "getDatetimeReu", [], "method", false, false, false, 58), "d/m/Y"), "html", null, true);
            echo " (<em>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reuNonPassee"], "getTypeReu", [], "method", false, false, false, 58), "html", null, true);
            echo "</em>) 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<a title=\"Supprimer la réunion\" class=\"btn btn-danger float-right btn-reu mx-1\" href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("del_reunion", ["id" => twig_get_attribute($this->env, $this->source, $context["reuNonPassee"], "getId", [], "method", false, false, false, 61)]), "html", null, true);
            echo "\" role=\"button\"><i class=\"fas fa-trash-alt\"></i></a>
\t\t\t\t          \t\t\t<a title=\"Afficher la réunion\" class=\"btn btn-secondary float-right btn-reu mx-1\" href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_back_reunion", ["id" => twig_get_attribute($this->env, $this->source, $context["reuNonPassee"], "getId", [], "method", false, false, false, 62)]), "html", null, true);
            echo "\" role=\"button\"><i class=\"far fa-eye\"></i></a>
\t\t\t\t          \t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t  \t\t\t</div>
\t\t\t\t\t\t<div class=\"card-footer small text-muted mb-2\">
\t\t\t\t\t\t\tPubliée le ";
            // line 68
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reuNonPassee"], "getDatetimePost", [], "method", false, false, false, 68), "d/m/Y"), "html", null, true);
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
        // line 73
        echo " 
\t\t<h3 class=\"card-header\">Anciennes réunions</h3>
\t\t";
        // line 75
        if ( !twig_test_empty((isset($context["reunionsPassees"]) || array_key_exists("reunionsPassees", $context) ? $context["reunionsPassees"] : (function () { throw new RuntimeError('Variable "reunionsPassees" does not exist.', 75, $this->source); })()))) {
            // line 76
            echo "
\t\t\t";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reunionsPassees"]) || array_key_exists("reunionsPassees", $context) ? $context["reunionsPassees"] : (function () { throw new RuntimeError('Variable "reunionsPassees" does not exist.', 77, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reunionPassee"]) {
                // line 78
                echo "\t\t\t  \t<div class=\"card-deck my-4\">
\t\t\t    \t<div class=\"card\">
\t\t\t\t  \t  \t<div class=\"card-header\"> 
\t\t\t\t  \t\t\t<div class=\"card-title py-2\">
\t\t\t\t  \t\t\t\t<div class=\"row\">
\t\t\t\t  \t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t  \t\t\t\t\t\t<b>";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reunionPassee"], "getTitre", [], "method", false, false, false, 84), "html", null, true);
                echo "</b>, le ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reunionPassee"], "getDatetimeReu", [], "method", false, false, false, 84), "d/m/Y"), "html", null, true);
                echo " (<em>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reunionPassee"], "getTypeReu", [], "method", false, false, false, 84), "html", null, true);
                echo "</em>)
\t\t\t\t  \t\t\t\t\t</div>
\t\t\t\t  \t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t  \t\t\t\t<a title=\"Supprimer la réunion\" class=\"btn btn-danger float-right btn-reu mx-1\" href=\"";
                // line 87
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("del_reunion", ["id" => twig_get_attribute($this->env, $this->source, $context["reunionPassee"], "getId", [], "method", false, false, false, 87)]), "html", null, true);
                echo "\" role=\"button\"><i class=\"fas fa-trash-alt\"></i></a>
\t\t\t\t\t\t  \t\t\t\t";
                // line 89
                echo "\t\t\t\t\t\t  \t            <a title=\"Afficher la réunion\" class=\"btn btn-secondary float-right btn-reu mx-1\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_back_reunion", ["id" => twig_get_attribute($this->env, $this->source, $context["reunionPassee"], "getId", [], "method", false, false, false, 89)]), "html", null, true);
                echo "\" role=\"button\"><i class=\"far fa-eye\"></i></a>
\t\t\t\t  \t\t\t\t\t</div>
\t\t\t\t  \t\t\t\t</div>
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"card-footer small text-muted mb-2\">
\t\t\t\t  \t\t\t\tPubliée le ";
                // line 94
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reunionPassee"], "getDatetimePost", [], "method", false, false, false, 94), "d/m/Y"), "html", null, true);
                echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t    </div>
\t\t\t  \t\t</div>
\t\t\t  \t</div>

\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reunionPassee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "\t\t";
        }
        // line 102
        echo "
\t\t 
\t</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 108
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
        return "reunions/indexBackReunion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 108,  300 => 102,  297 => 101,  284 => 94,  275 => 89,  271 => 87,  261 => 84,  253 => 78,  249 => 77,  246 => 76,  244 => 75,  240 => 73,  228 => 68,  219 => 62,  215 => 61,  205 => 58,  197 => 52,  193 => 51,  190 => 50,  178 => 40,  174 => 38,  162 => 33,  154 => 28,  150 => 27,  146 => 26,  136 => 23,  128 => 17,  123 => 16,  121 => 15,  115 => 12,  109 => 8,  99 => 7,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block title %}Réunions{% endblock %}

{% block stylesheets %}<link rel=\"stylesheet\" href=\"/css/styles_back.css\">{% endblock %}

{% block content %}
    
\t<section class=\"p-2 mb-5 bg-light bg-section-back\">
\t<div class=\"d-flex justify-content-between\">
\t\t<h2>Réunions </h2>
\t\t<a href=\"{{ path('index_reunions') }}\" title=\"Index des réunions sur le site\" class=\"btn btn-info mb-3\" role=\"button\"><i class=\"fas fa-globe-europe\"></i></a>
\t</div>
\t\t<h3 class=\"card-header\">Réunions sans compte rendu</h3>
\t\t{% if reusSansCr is not empty %}
\t\t\t{% for reuSansCr in reusSansCr %}
\t\t\t  \t<div class=\"card-deck my-4 text-danger\">
\t\t\t    \t<div class=\"card\">
\t\t\t\t  \t  \t<div class=\"card-header\">
\t\t\t\t  \t\t\t<div class=\"card-title py-2\">
\t\t\t\t  \t\t\t\t<div class=\"row\">
\t\t\t\t\t\t  \t        <div class=\"col-md-6\">
\t\t\t\t  \t\t\t\t\t<b>{{ reuSansCr.getTitre() }}</b>, le {{ reuSansCr.getDatetimeReu()|date(\"d/m/Y\") }} (<em>{{ reuSansCr.getTypeReu() }}</em>)
\t\t\t\t\t\t  \t        </div>
\t\t\t\t  \t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t  \t\t\t\t<a title=\"Supprimer la réunion\" class=\"btn btn-danger float-right btn-reu mx-1\" href=\"{{ path('del_reunion', {id : reuSansCr.getId()}) }}\" role=\"button\"><i class=\"fas fa-trash-alt\"></i></a>
\t\t\t\t\t\t  \t            <a title=\"Afficher la réunion\" class=\"btn btn-secondary float-right btn-reu mx-1\" href=\"{{ path('view_back_reunion', {id : reuSansCr.getId()}) }}\" role=\"button\"><i class=\"far fa-eye\"></i></a>
\t\t\t\t\t\t  \t\t\t\t<a title =\"Ajouter le compte-rendu\" class=\"btn btn-success float-right btn-reu mx-1\" href=\"{{ path('add_cr', {id : reuSansCr.getId()}) }}\" role=\"button\"><i class=\"fas fa-pen\"></i></a>\t
\t\t\t\t\t\t  \t        </div>
\t\t\t\t  \t\t\t\t</div>
\t\t\t\t  \t\t\t</div>\t\t     
\t\t\t\t  \t\t\t<div class=\"card-footer small text-muted mb-2\">
\t\t\t\t  \t\t\t\tPublié le {{ reuSansCr.getDatetimePost()|date(\"d/m/Y\") }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t    </div>
\t\t\t  \t\t</div>
\t\t\t  \t</div>
\t\t\t{%  endfor %} 
\t\t{% else %}
\t\t  \t<div class=\"card-deck my-4 \">
\t\t    \t<div class=\"card\">
\t\t\t  \t  \t<div class=\"card-header\">
\t\t\t  \t\t\t<div class=\"card-title py-2\">
\t\t\t  \t            <p>Aucune réunion en attente de compte-rendu.</p>
\t\t\t  \t\t\t</div>
\t\t\t  \t    </div>
\t\t  \t\t</div>
\t\t  \t</div>
\t\t{% endif %}
\t\t<h3 class=\"card-header\">Futures réunions</h3>
\t\t{% for reuNonPassee in reusNonPassees %}
\t\t\t<div class=\"card-deck my-4\">
\t\t\t  \t<div class=\"card\">
\t\t\t\t  \t<div class=\"card-header \">
\t\t\t\t\t\t<div class=\"card-title py-2\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<b>{{ reuNonPassee.getTitre() }}</b>, le {{ reuNonPassee.getDatetimeReu()|date(\"d/m/Y\") }} (<em>{{ reuNonPassee.getTypeReu() }}</em>) 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<a title=\"Supprimer la réunion\" class=\"btn btn-danger float-right btn-reu mx-1\" href=\"{{ path('del_reunion', {id : reuNonPassee.getId()}) }}\" role=\"button\"><i class=\"fas fa-trash-alt\"></i></a>
\t\t\t\t          \t\t\t<a title=\"Afficher la réunion\" class=\"btn btn-secondary float-right btn-reu mx-1\" href=\"{{ path('view_back_reunion', {id : reuNonPassee.getId()}) }}\" role=\"button\"><i class=\"far fa-eye\"></i></a>
\t\t\t\t          \t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t  \t\t\t</div>
\t\t\t\t\t\t<div class=\"card-footer small text-muted mb-2\">
\t\t\t\t\t\t\tPubliée le {{ reuNonPassee.getDatetimePost()|date(\"d/m/Y\") }}
\t\t\t\t\t\t</div>
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t{%  endfor %} 
\t\t<h3 class=\"card-header\">Anciennes réunions</h3>
\t\t{% if reunionsPassees is not empty %}

\t\t\t{% for reunionPassee in reunionsPassees %}
\t\t\t  \t<div class=\"card-deck my-4\">
\t\t\t    \t<div class=\"card\">
\t\t\t\t  \t  \t<div class=\"card-header\"> 
\t\t\t\t  \t\t\t<div class=\"card-title py-2\">
\t\t\t\t  \t\t\t\t<div class=\"row\">
\t\t\t\t  \t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t  \t\t\t\t\t\t<b>{{ reunionPassee.getTitre() }}</b>, le {{ reunionPassee.getDatetimeReu()|date(\"d/m/Y\") }} (<em>{{ reunionPassee.getTypeReu() }}</em>)
\t\t\t\t  \t\t\t\t\t</div>
\t\t\t\t  \t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t  \t\t\t\t<a title=\"Supprimer la réunion\" class=\"btn btn-danger float-right btn-reu mx-1\" href=\"{{ path('del_reunion', {id : reunionPassee.getId()}) }}\" role=\"button\"><i class=\"fas fa-trash-alt\"></i></a>
\t\t\t\t\t\t  \t\t\t\t{#<a class=\"btn btn-success float-right mx-1\" href=\"{{ path('edit_cr', {id : crTrouve.getId()}) }}\" role=\"button\">Modifier le CR</a>#}
\t\t\t\t\t\t  \t            <a title=\"Afficher la réunion\" class=\"btn btn-secondary float-right btn-reu mx-1\" href=\"{{ path('view_back_reunion', {id : reunionPassee.getId()}) }}\" role=\"button\"><i class=\"far fa-eye\"></i></a>
\t\t\t\t  \t\t\t\t\t</div>
\t\t\t\t  \t\t\t\t</div>
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"card-footer small text-muted mb-2\">
\t\t\t\t  \t\t\t\tPubliée le {{ reunionPassee.getDatetimePost()|date(\"d/m/Y\") }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t    </div>
\t\t\t  \t\t</div>
\t\t\t  \t</div>

\t\t\t{%  endfor %}
\t\t{% endif %}

\t\t 
\t</section>

{% endblock %}

{% block javascripts %}<script type=\"text/javascript\" src=\"/js/calendar.js\"></script>{% endblock %}
", "reunions/indexBackReunion.html.twig", "C:\\xampp\\htdocs\\moto_club\\templates\\reunions\\indexBackReunion.html.twig");
    }
}
