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

/* balades/view.html.twig */
class __TwigTemplate_86fc78adad38b10b681c4fed665597834f8d1a659ecc7aaf40f9ccc81bc83569 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "balades/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "balades/view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "balades/view.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 3, $this->source); })()), "getTitre", [], "method", false, false, false, 3), "html", null, true);
        
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
\t\t<h2>Balade</h2>
\t\t<a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_balades");
        echo "\" class=\"btn btn-secondary mt-4\" role=\"button\"><i class=\"fas fa-angle-left\"></i> Retour aux balades</a>
\t\t
\t\t<div class=\"card-deck my-4\">
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<div class=\"card-title\">

\t\t\t\t\t\t<!-- INSCRIPTION A BALADE -->

\t\t\t\t\t\t";
        // line 17
        if (twig_in_filter("adherent", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "session", [], "any", false, false, false, 17), "get", [0 => "ranks"], "method", false, false, false, 17))) {
            // line 18
            echo "
\t\t\t\t\t\t\t";
            // line 19
            if ( !(isset($context["inscrit"]) || array_key_exists("inscrit", $context) ? $context["inscrit"] : (function () { throw new RuntimeError('Variable "inscrit" does not exist.', 19, $this->source); })())) {
                // line 20
                echo "
\t\t\t\t\t\t\t\t";
                // line 21
                if ( !(isset($context["baladeFull"]) || array_key_exists("baladeFull", $context) ? $context["baladeFull"] : (function () { throw new RuntimeError('Variable "baladeFull" does not exist.', 21, $this->source); })())) {
                    // line 22
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription_balade", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 22, $this->source); })()), "getId", [], "method", false, false, false, 22)]), "html", null, true);
                    echo "\" class=\"btn btn-success float-right ml-4\" role=\"button\">S'inscrire</a>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 24
                    echo "\t\t\t\t\t\t\t\t\t<a class=\"btn btn-success float-right ml-4 disabled\" role=\"button\">S'inscrire</a>
\t\t\t\t\t\t\t\t";
                }
                // line 25
                echo "\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t";
            } else {
                // line 28
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("desinscription_balade", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 28, $this->source); })()), "getId", [], "method", false, false, false, 28)]), "html", null, true);
                echo "\" class=\"btn btn-danger float-right ml-4\" role=\"button\">Se Désinscrire</a>
\t\t\t\t\t\t\t";
            }
            // line 30
            echo "
\t\t\t\t\t\t\t";
            // line 31
            if ( !(null === (isset($context["nbMaxPers"]) || array_key_exists("nbMaxPers", $context) ? $context["nbMaxPers"] : (function () { throw new RuntimeError('Variable "nbMaxPers" does not exist.', 31, $this->source); })()))) {
                // line 32
                echo "\t\t\t\t\t\t\t\t<div class=\"float-right\">Participants : ";
                echo twig_escape_filter($this->env, (((isset($context["nbInscrits"]) || array_key_exists("nbInscrits", $context) ? $context["nbInscrits"] : (function () { throw new RuntimeError('Variable "nbInscrits" does not exist.', 32, $this->source); })()) . " / ") . (isset($context["nbMaxPers"]) || array_key_exists("nbMaxPers", $context) ? $context["nbMaxPers"] : (function () { throw new RuntimeError('Variable "nbMaxPers" does not exist.', 32, $this->source); })())), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t";
            } else {
                // line 34
                echo "\t\t\t\t\t\t\t\t<div class=\"float-right\">Participants : ";
                echo twig_escape_filter($this->env, (isset($context["nbInscrits"]) || array_key_exists("nbInscrits", $context) ? $context["nbInscrits"] : (function () { throw new RuntimeError('Variable "nbInscrits" does not exist.', 34, $this->source); })()), "html", null, true);
                echo " (illimité)</div>
\t\t\t\t\t\t\t";
            }
            // line 36
            echo "
\t\t\t\t\t\t";
        }
        // line 38
        echo "
\t\t\t\t\t\t<!-- CONTENU 'STATIQUE' -->
\t\t\t\t\t\t<strong>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 40, $this->source); })()), "getTitre", [], "method", false, false, false, 40), "html", null, true);
        echo "</strong>
\t\t\t\t\t\t";
        // line 41
        if ((twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 41, $this->source); })()), "getDateDebut", [], "method", false, false, false, 41) == twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 41, $this->source); })()), "getDateFin", [], "method", false, false, false, 41))) {
            // line 42
            echo "\t\t\t\t\t\t\t<div>le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 42, $this->source); })()), "getDateDebut", [], "method", false, false, false, 42), "d/m/Y"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t";
        } else {
            // line 44
            echo "\t\t\t\t\t\t\t<div>du ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 44, $this->source); })()), "getDateDebut", [], "method", false, false, false, 44), "d/m/Y"), "html", null, true);
            echo " au ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 44, $this->source); })()), "getDateFin", [], "method", false, false, false, 44), "d/m/Y"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 46
        echo "\t\t\t\t   </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 48, $this->source); })()), "getContenu", [], "method", false, false, false, 48), "html", null, true);
        echo "</div>
\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t<i>Posté par 
\t\t\t\t\t\t";
        // line 51
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 51, $this->source); })()), "getUser", [], "method", false, false, false, 51), "getPrenom", [], "method", false, false, false, 51) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 51, $this->source); })()), "getUser", [], "method", false, false, false, 51), "getNom", [], "method", false, false, false, 51)), "html", null, true);
        echo " 
\t\t\t\t\t\tle 
\t\t\t\t\t\t";
        // line 53
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 53, $this->source); })()), "getDatetimePost", [], "method", false, false, false, 53), "d F Y"), "html", null, true);
        echo " 
\t\t\t\t\t\tà 
\t\t\t\t\t\t";
        // line 55
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 55, $this->source); })()), "getDatetimePost", [], "method", false, false, false, 55), "H:i"), "html", null, true);
        echo "
\t\t\t\t\t</i>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "balades/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 55,  197 => 53,  192 => 51,  186 => 48,  182 => 46,  174 => 44,  168 => 42,  166 => 41,  162 => 40,  158 => 38,  154 => 36,  148 => 34,  142 => 32,  140 => 31,  137 => 30,  131 => 28,  126 => 25,  122 => 24,  116 => 22,  114 => 21,  111 => 20,  109 => 19,  106 => 18,  104 => 17,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ balade.getTitre() }}{% endblock %}

{% block content %}
\t<section class=\"py-2 mb-5\">
\t\t<h2>Balade</h2>
\t\t<a href=\"{{ path('index_balades') }}\" class=\"btn btn-secondary mt-4\" role=\"button\"><i class=\"fas fa-angle-left\"></i> Retour aux balades</a>
\t\t
\t\t<div class=\"card-deck my-4\">
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<div class=\"card-title\">

\t\t\t\t\t\t<!-- INSCRIPTION A BALADE -->

\t\t\t\t\t\t{% if 'adherent' in app.session.get('ranks') %}

\t\t\t\t\t\t\t{% if not inscrit %}

\t\t\t\t\t\t\t\t{% if not baladeFull %}
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('inscription_balade', {id: balade.getId()}) }}\" class=\"btn btn-success float-right ml-4\" role=\"button\">S'inscrire</a>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-success float-right ml-4 disabled\" role=\"button\">S'inscrire</a>
\t\t\t\t\t\t\t\t{% endif %}\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<a href=\"{{ path('desinscription_balade', {id: balade.getId()}) }}\" class=\"btn btn-danger float-right ml-4\" role=\"button\">Se Désinscrire</a>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t{% if nbMaxPers is not null %}
\t\t\t\t\t\t\t\t<div class=\"float-right\">Participants : {{ nbInscrits ~ ' / ' ~ nbMaxPers }}</div>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<div class=\"float-right\">Participants : {{ nbInscrits }} (illimité)</div>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t<!-- CONTENU 'STATIQUE' -->
\t\t\t\t\t\t<strong>{{ balade.getTitre() }}</strong>
\t\t\t\t\t\t{% if balade.getDateDebut() == balade.getDateFin() %}
\t\t\t\t\t\t\t<div>le {{ balade.getDateDebut()|date('d/m/Y') }}</div>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<div>du {{ balade.getDateDebut()|date('d/m/Y') }} au {{ balade.getDateFin()|date('d/m/Y') }}</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t   </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">{{ balade.getContenu() }}</div>
\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t<i>Posté par 
\t\t\t\t\t\t{{ balade.getUser().getPrenom() ~ ' ' ~ balade.getUser().getNom() }} 
\t\t\t\t\t\tle 
\t\t\t\t\t\t{{ balade.getDatetimePost()|date('d F Y') }} 
\t\t\t\t\t\tà 
\t\t\t\t\t\t{{ balade.getDatetimePost()|date('H:i') }}
\t\t\t\t\t</i>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
{% endblock %}
", "balades/view.html.twig", "C:\\xampp\\htdocs\\moto_club\\templates\\balades\\view.html.twig");
    }
}
