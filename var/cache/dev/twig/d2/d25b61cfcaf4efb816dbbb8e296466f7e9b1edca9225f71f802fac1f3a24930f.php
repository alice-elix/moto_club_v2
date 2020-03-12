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

/* balades/index.html.twig */
class __TwigTemplate_46753d7661d92d66e28f49e193340af1d24016b9f0c91136f494771aae4dbe6c extends \Twig\Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "balades/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "balades/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "balades/index.html.twig", 1);
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

        echo "Balades";
        
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
        echo "\t<section class=\"py-2 mb-5\">
\t\t<h2 class=\"py-3\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "</h2>
\t\t<div class=\"d-flex justify-content-between\">
\t\t\t<span>
\t\t\t</span>
\t\t\t<span>
\t\t\t\t";
        // line 12
        if (twig_in_filter("bureau", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "session", [], "any", false, false, false, 12), "get", [0 => "ranks"], "method", false, false, false, 12))) {
            // line 13
            echo "\t\t\t\t\t<a title=\"Gérer les balades\" class=\"btn btn-secondary\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion_balades");
            echo "\" role=\"button\"><i class=\"fas fa-cogs\"></i></a>
\t\t\t\t";
        }
        // line 15
        echo "\t\t\t</span>
\t\t</div>

\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bal_datas"]) || array_key_exists("bal_datas", $context) ? $context["bal_datas"] : (function () { throw new RuntimeError('Variable "bal_datas" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bal_data"]) {
            // line 19
            echo "\t\t\t<div class=\"card-deck my-4\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t<div class=\"card-title\">
\t\t\t\t\t\t\t";
            // line 23
            if ((twig_get_attribute($this->env, $this->source, $context["bal_data"], "nb_photos", [], "any", false, false, false, 23) > 0)) {
                // line 24
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_album", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bal_data"], "balade", [], "any", false, false, false, 24), "getId", [], "method", false, false, false, 24)]), "html", null, true);
                echo "\" class=\"btn btn-primary float-right ml-2\" role=\"button\" title=\"Afficher la galerie (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bal_data"], "nb_photos", [], "any", false, false, false, 24), "html", null, true);
                echo ")\"><i class=\"fas fa-images\"></i></a>
\t\t\t\t\t\t\t";
            } else {
                // line 26
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_album", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bal_data"], "balade", [], "any", false, false, false, 26), "getId", [], "method", false, false, false, 26)]), "html", null, true);
                echo "\" class=\"btn btn-primary disabled float-right ml-2\" role=\"button\" disabled><i class=\"fas fa-images\"></i></a>
\t\t\t\t\t\t\t";
            }
            // line 28
            echo "\t\t\t\t\t\t\t<a title=\"Afficher la balade\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_balade", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bal_data"], "balade", [], "any", false, false, false, 28), "getId", [], "method", false, false, false, 28)]), "html", null, true);
            echo "\" class=\"btn btn-primary float-right\" role=\"button\"><i class=\"far fa-eye\"></i></a>
\t\t\t\t\t\t\t<strong>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bal_data"], "balade", [], "any", false, false, false, 29), "getTitre", [], "method", false, false, false, 29), "html", null, true);
            echo "</strong>
\t\t\t\t\t\t\t";
            // line 30
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bal_data"], "balade", [], "any", false, false, false, 30), "getDateDebut", [], "method", false, false, false, 30) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bal_data"], "balade", [], "any", false, false, false, 30), "getDateFin", [], "method", false, false, false, 30))) {
                // line 31
                echo "\t\t\t\t\t\t\t\t<div>le ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bal_data"], "balade", [], "any", false, false, false, 31), "getDateDebut", [], "method", false, false, false, 31), "d/m/Y"), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t";
            } else {
                // line 33
                echo "\t\t\t\t\t\t\t\t<div>du ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bal_data"], "balade", [], "any", false, false, false, 33), "getDateDebut", [], "method", false, false, false, 33), "d/m/Y"), "html", null, true);
                echo " au ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bal_data"], "balade", [], "any", false, false, false, 33), "getDateFin", [], "method", false, false, false, 33), "d/m/Y"), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t";
            }
            // line 35
            echo "\t\t\t\t\t   </div>
\t\t\t\t\t\t<div class=\"card-footer small text-muted mb-2\">Proposé par ";
            // line 36
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bal_data"], "balade", [], "any", false, false, false, 36), "getUser", [], "method", false, false, false, 36), "getPrenom", [], "method", false, false, false, 36) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bal_data"], "balade", [], "any", false, false, false, 36), "getUser", [], "method", false, false, false, 36), "getNom", [], "method", false, false, false, 36)), "html", null, true);
            echo ", le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bal_data"], "balade", [], "any", false, false, false, 36), "getDatetimePost", [], "method", false, false, false, 36), "d/m/Y"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bal_data"], "balade", [], "any", false, false, false, 36), "getDatetimePost", [], "method", false, false, false, 36), "H:i"), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bal_data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "balades/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 42,  166 => 36,  163 => 35,  155 => 33,  149 => 31,  147 => 30,  143 => 29,  138 => 28,  132 => 26,  124 => 24,  122 => 23,  116 => 19,  112 => 18,  107 => 15,  101 => 13,  99 => 12,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Balades{% endblock %}

{% block content %}
\t<section class=\"py-2 mb-5\">
\t\t<h2 class=\"py-3\">{{page_name}}</h2>
\t\t<div class=\"d-flex justify-content-between\">
\t\t\t<span>
\t\t\t</span>
\t\t\t<span>
\t\t\t\t{% if 'bureau' in app.session.get('ranks') %}
\t\t\t\t\t<a title=\"Gérer les balades\" class=\"btn btn-secondary\" href=\"{{ path('gestion_balades') }}\" role=\"button\"><i class=\"fas fa-cogs\"></i></a>
\t\t\t\t{% endif %}
\t\t\t</span>
\t\t</div>

\t\t{% for bal_data in bal_datas %}
\t\t\t<div class=\"card-deck my-4\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t<div class=\"card-title\">
\t\t\t\t\t\t\t{% if bal_data.nb_photos > 0 %}
\t\t\t\t\t\t\t\t<a href=\"{{ path('view_album', {id: bal_data.balade.getId()}) }}\" class=\"btn btn-primary float-right ml-2\" role=\"button\" title=\"Afficher la galerie ({{bal_data.nb_photos}})\"><i class=\"fas fa-images\"></i></a>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<a href=\"{{ path('view_album', {id: bal_data.balade.getId()}) }}\" class=\"btn btn-primary disabled float-right ml-2\" role=\"button\" disabled><i class=\"fas fa-images\"></i></a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<a title=\"Afficher la balade\" href=\"{{ path('view_balade', {id: bal_data.balade.getId()}) }}\" class=\"btn btn-primary float-right\" role=\"button\"><i class=\"far fa-eye\"></i></a>
\t\t\t\t\t\t\t<strong>{{ bal_data.balade.getTitre() }}</strong>
\t\t\t\t\t\t\t{% if bal_data.balade.getDateDebut() == bal_data.balade.getDateFin() %}
\t\t\t\t\t\t\t\t<div>le {{ bal_data.balade.getDateDebut()|date('d/m/Y') }}</div>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<div>du {{ bal_data.balade.getDateDebut()|date('d/m/Y') }} au {{ bal_data.balade.getDateFin()|date('d/m/Y') }}</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t   </div>
\t\t\t\t\t\t<div class=\"card-footer small text-muted mb-2\">Proposé par {{ bal_data.balade.getUser().getPrenom() ~ ' ' ~ bal_data.balade.getUser().getNom() }}, le {{ bal_data.balade.getDatetimePost()|date('d/m/Y') }} à {{ bal_data.balade.getDatetimePost()|date('H:i') }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endfor %}
\t</section>

{% endblock %}
", "balades/index.html.twig", "C:\\xampp\\htdocs\\moto_club_v2\\moto_club_v2\\templates\\balades\\index.html.twig");
    }
}
