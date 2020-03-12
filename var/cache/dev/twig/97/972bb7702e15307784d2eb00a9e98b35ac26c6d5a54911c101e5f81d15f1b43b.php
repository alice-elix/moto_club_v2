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

/* back_office/liste-users.html.twig */
class __TwigTemplate_b982afe1e1c850a7d05e4686d7dd059313a5427dfb978a86c7eb9dcaad318079 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_office/liste-users.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_office/liste-users.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "back_office/liste-users.html.twig", 1);
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

        echo "Admin - Utilisateurs";
        
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
\t<section class=\"py-2 mb-5 container\">
\t\t<div class=\"card-deck my-4\">
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t<span>Liste des utilisateurs</span>
\t\t\t\t\t\t<span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
          ";
        // line 16
        if ( !twig_test_empty((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 16, $this->source); })()))) {
            // line 17
            echo "            <div class=\"alert alert-warning\">
              ";
            // line 18
            echo twig_join_filter((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 18, $this->source); })()), "<br>");
            echo " 
            </div>
          ";
        } elseif ((        // line 20
(isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 20, $this->source); })()) == true)) {
            // line 21
            echo "            <div class=\"alert alert-success\">
              Les droits de <strong>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "prenom", [], "any", false, false, false, 22), "html", null, true);
            echo "</strong> ont été modifiés avec succès.
            </div>
          ";
        }
        // line 25
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div class=\"scrolling-table\">
\t\t\t\t\t\t<table class=\"admin-table-mg\">
\t\t\t\t\t\t\t<thead>
              <th class=\"text-left\">Identité</th>
              <th class=\"text-left\">Date d'inscription</th>
              <th class=\"text-left\">Date d'adhésion</th>
              <th class=\"text-left\">Rang</th>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t      \t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 38
            echo "            <tr>
              <td class=\"text-left\"><div><strong>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getNom", [], "method", false, false, false, 39), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getPrenom", [], "method", false, false, false, 39), "html", null, true);
            echo "</strong></div>
                <div>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getEmail", [], "method", false, false, false, 40), "html", null, true);
            echo "</div></td>
              <td class=\"text-left\"></div>";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getDatetimeInscription", [], "any", false, false, false, 41), "d/m/Y"), "html", null, true);
            echo "</div></td>
              <td class=\"text-left\"><div>";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getDatetimeAdhesion", [], "any", false, false, false, 42), "d/m/Y"), "html", null, true);
            echo "</div></td>
              <td>
                    ";
            // line 44
            if (twig_in_filter("admin", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "session", [], "any", false, false, false, 44), "get", [0 => "ranks"], "method", false, false, false, 44))) {
                // line 45
                echo "                <form method=\"post\">
                  <select class=\"custom-select\" name=\"";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getId", [], "method", false, false, false, 46), "html", null, true);
                echo "\">
                    ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["nomsRanks"]) || array_key_exists("nomsRanks", $context) ? $context["nomsRanks"] : (function () { throw new RuntimeError('Variable "nomsRanks" does not exist.', 47, $this->source); })()));
                foreach ($context['_seq'] as $context["key"] => $context["rank"]) {
                    // line 48
                    echo "                      <option value=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\"";
                    if (($context["key"] == twig_get_attribute($this->env, $this->source, $context["user"], "getAcces", [], "any", false, false, false, 48))) {
                        echo " selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $context["rank"], "html", null, true);
                    echo "</option>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['rank'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "                </select>
                    ";
            } else {
                // line 52
                echo "                      ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["nomsRanks"]) || array_key_exists("nomsRanks", $context) ? $context["nomsRanks"] : (function () { throw new RuntimeError('Variable "nomsRanks" does not exist.', 52, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["user"], "getAcces", [], "method", false, false, false, 52), [], "array", false, false, false, 52), "html", null, true);
                echo "
                    ";
            }
            // line 54
            echo "              </form>
            </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        echo "
\t<script>
\t\t\$(document).ready(function() {
\t\t\t\$('select').change(function() {

\t\t\t\t\$(this).closest('form').trigger('submit');
\t\t\t});
\t\t});
\t</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back_office/liste-users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 68,  226 => 67,  209 => 58,  200 => 54,  194 => 52,  190 => 50,  175 => 48,  171 => 47,  167 => 46,  164 => 45,  162 => 44,  157 => 42,  153 => 41,  149 => 40,  143 => 39,  140 => 38,  136 => 37,  122 => 25,  116 => 22,  113 => 21,  111 => 20,  106 => 18,  103 => 17,  101 => 16,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %} 

{% block title %}Admin - Utilisateurs{% endblock %}

{% block content %}

\t<section class=\"py-2 mb-5 container\">
\t\t<div class=\"card-deck my-4\">
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t<span>Liste des utilisateurs</span>
\t\t\t\t\t\t<span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
          {% if errors is not empty %}
            <div class=\"alert alert-warning\">
              {{ errors|join('<br>')|raw }} 
            </div>
          {% elseif success == true %}
            <div class=\"alert alert-success\">
              Les droits de <strong>{{user.prenom}}</strong> ont été modifiés avec succès.
            </div>
          {% endif %}
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div class=\"scrolling-table\">
\t\t\t\t\t\t<table class=\"admin-table-mg\">
\t\t\t\t\t\t\t<thead>
              <th class=\"text-left\">Identité</th>
              <th class=\"text-left\">Date d'inscription</th>
              <th class=\"text-left\">Date d'adhésion</th>
              <th class=\"text-left\">Rang</th>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t      \t{% for user in users %}
            <tr>
              <td class=\"text-left\"><div><strong>{{ user.getNom() }} {{ user.getPrenom() }}</strong></div>
                <div>{{ user.getEmail() }}</div></td>
              <td class=\"text-left\"></div>{{ user.getDatetimeInscription|date('d/m/Y') }}</div></td>
              <td class=\"text-left\"><div>{{ user.getDatetimeAdhesion|date('d/m/Y') }}</div></td>
              <td>
                    {% if 'admin' in app.session.get('ranks') %}
                <form method=\"post\">
                  <select class=\"custom-select\" name=\"{{user.getId()}}\">
                    {% for key, rank in nomsRanks %}
                      <option value=\"{{key}}\"{% if key == user.getAcces %}{{' selected'}}{% endif %}>{{rank}}</option>
                  {% endfor %}
                </select>
                    {% else %}
                      {{nomsRanks[user.getAcces()]}}
                    {% endif %}
              </form>
            </td>
            </tr>
            {% endfor %}
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
{% endblock %}

{% block javascripts %}

\t<script>
\t\t\$(document).ready(function() {
\t\t\t\$('select').change(function() {

\t\t\t\t\$(this).closest('form').trigger('submit');
\t\t\t});
\t\t});
\t</script>

{% endblock %}

\t\t\t", "back_office/liste-users.html.twig", "C:\\xampp\\htdocs\\moto_club\\templates\\back_office\\liste-users.html.twig");
    }
}
