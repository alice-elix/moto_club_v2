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

/* reunions/addReu.html.twig */
class __TwigTemplate_45cd485f811a60042c6a4438aa587bf9712d504b4b62a359086ce1aa89299c6f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reunions/addReu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reunions/addReu.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "reunions/addReu.html.twig", 1);
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
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    
  <section class=\"py-2 mb-5\">
    <div class=\"card card-register mx-auto mt-5\">
      <div class=\"card-header\">Ajouter une réunion</div>
      ";
        // line 11
        if ( !twig_test_empty((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 11, $this->source); })()))) {
            // line 12
            echo "        <div class=\"alert alert-danger\">";
            echo (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 12, $this->source); })());
            echo "</div>
      ";
        } elseif ((        // line 13
(isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 13, $this->source); })()) == true)) {
            // line 14
            echo "        <div class=\"alert alert-success\">Votre réunion a bien été ajoutée</div>
      ";
        }
        // line 16
        echo "      <div class=\"card-body\">
        <form method=\"post\">
          <div class=\"form-group\">
            <div class=\"form-row\">
              <div class=\"col-md-6\">
                <label for=\"titre\">Intitulé de la réunion</label>
                <input type=\"text\" id=\"titre\" name=\"titre\" class=\"form-control\" required=\"required\" autofocus=\"autofocus\" value=\"";
        // line 22
        (((twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "titre", [], "any", true, true, false, 22) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "titre", [], "any", false, false, false, 22)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "titre", [], "any", false, false, false, 22), "html", null, true))) : (print ("")));
        echo "\">
              </div>
              <div class=\"col-md-6\">
                <label for=\"type\">Type de réunion</label>
                <select name=\"type\" id=\"type\" class=\"form-control\">
                  <option value=\"0\">-- Sélectionnez --</option>            
                  ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["typesReu"]) || array_key_exists("typesReu", $context) ? $context["typesReu"] : (function () { throw new RuntimeError('Variable "typesReu" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["typeReu"]) {
            // line 29
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["typeReu"], "html", null, true);
            echo "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['typeReu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo ";
                </select>
              </div>
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"contenu\">Ordre du jour</label>
            <textarea id=\"contenu\" name=\"contenu\" class=\"form-control\" required=\"required\">";
        // line 37
        (((twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "contenu", [], "any", true, true, false, 37) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "contenu", [], "any", false, false, false, 37)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "contenu", [], "any", false, false, false, 37), "html", null, true))) : (print ("")));
        echo "</textarea>
          </div>
          <div class=\"form-group\">
            <div class=\"form-row\">
              <div class=\"col-md-4\">
                <label for=\"date_reu\">Date de la réunion</label>
                <input type=\"date\" id=\"date_reu\" name=\"date_reu\" class=\"form-control\" required=\"required\" value=\"";
        // line 43
        (((twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "date_reu", [], "any", true, true, false, 43) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "date_reu", [], "any", false, false, false, 43)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "date_reu", [], "any", false, false, false, 43), "html", null, true))) : (print ("")));
        echo "\">
              </div>
              <div class=\"col-md-4\">
                <label for=\"time_reu\">Heure de la réunion</label>
                <input type=\"time\" id=\"time_reu\" name=\"time_reu\" class=\"form-control\" required=\"required\"value=\"";
        // line 47
        (((twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "time_reu", [], "any", true, true, false, 47) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "time_reu", [], "any", false, false, false, 47)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "time_reu", [], "any", false, false, false, 47), "html", null, true))) : (print ("")));
        echo "\">
              </div>
              <div class=\"col-md-4\">
                  <label for=\"lieu\">Lieu de la réunion</label>
                  <input type=\"text\" id=\"lieu\" name=\"lieu\" class=\"form-control\" required=\"required\" value=\"";
        // line 51
        (((twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "lieu", [], "any", true, true, false, 51) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "lieu", [], "any", false, false, false, 51)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "lieu", [], "any", false, false, false, 51), "html", null, true))) : (print ("")));
        echo "\">
              </div>
            </div>
          </div>
          <div class=\"card-body\">
          ";
        // line 56
        if (((isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 56, $this->source); })()) == true)) {
            // line 57
            echo "            <a class=\"btn btn-primary btn-block\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_reunion");
            echo "\" role=\"button\">Ajouter une autre réunion</a>
          ";
        } else {
            // line 59
            echo "            <input type=\"submit\" value=\"Ajouter\" class=\"btn btn-primary btn-block\">
          ";
        }
        // line 61
        echo "          </div>
        </form>
      </div>
    </div>
  </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reunions/addReu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 61,  188 => 59,  182 => 57,  180 => 56,  172 => 51,  165 => 47,  158 => 43,  149 => 37,  140 => 30,  129 => 29,  125 => 28,  116 => 22,  108 => 16,  104 => 14,  102 => 13,  97 => 12,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block title %}Réunions{% endblock %}

{% block content %}

    
  <section class=\"py-2 mb-5\">
    <div class=\"card card-register mx-auto mt-5\">
      <div class=\"card-header\">Ajouter une réunion</div>
      {% if errors is not empty %}
        <div class=\"alert alert-danger\">{{errors|raw}}</div>
      {% elseif success == true %}
        <div class=\"alert alert-success\">Votre réunion a bien été ajoutée</div>
      {% endif %}
      <div class=\"card-body\">
        <form method=\"post\">
          <div class=\"form-group\">
            <div class=\"form-row\">
              <div class=\"col-md-6\">
                <label for=\"titre\">Intitulé de la réunion</label>
                <input type=\"text\" id=\"titre\" name=\"titre\" class=\"form-control\" required=\"required\" autofocus=\"autofocus\" value=\"{{ donnees_saisies.titre ?? '' }}\">
              </div>
              <div class=\"col-md-6\">
                <label for=\"type\">Type de réunion</label>
                <select name=\"type\" id=\"type\" class=\"form-control\">
                  <option value=\"0\">-- Sélectionnez --</option>            
                  {% for key, typeReu in typesReu %}
                    <option value=\"{{key}}\">{{typeReu}}</option>
                  {% endfor %};
                </select>
              </div>
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"contenu\">Ordre du jour</label>
            <textarea id=\"contenu\" name=\"contenu\" class=\"form-control\" required=\"required\">{{ donnees_saisies.contenu ?? '' }}</textarea>
          </div>
          <div class=\"form-group\">
            <div class=\"form-row\">
              <div class=\"col-md-4\">
                <label for=\"date_reu\">Date de la réunion</label>
                <input type=\"date\" id=\"date_reu\" name=\"date_reu\" class=\"form-control\" required=\"required\" value=\"{{ donnees_saisies.date_reu ?? '' }}\">
              </div>
              <div class=\"col-md-4\">
                <label for=\"time_reu\">Heure de la réunion</label>
                <input type=\"time\" id=\"time_reu\" name=\"time_reu\" class=\"form-control\" required=\"required\"value=\"{{ donnees_saisies.time_reu ?? '' }}\">
              </div>
              <div class=\"col-md-4\">
                  <label for=\"lieu\">Lieu de la réunion</label>
                  <input type=\"text\" id=\"lieu\" name=\"lieu\" class=\"form-control\" required=\"required\" value=\"{{ donnees_saisies.lieu ?? '' }}\">
              </div>
            </div>
          </div>
          <div class=\"card-body\">
          {% if success == true %}
            <a class=\"btn btn-primary btn-block\" href=\"{{ path('add_reunion') }}\" role=\"button\">Ajouter une autre réunion</a>
          {% else %}
            <input type=\"submit\" value=\"Ajouter\" class=\"btn btn-primary btn-block\">
          {% endif %}
          </div>
        </form>
      </div>
    </div>
  </section>
{% endblock %}
", "reunions/addReu.html.twig", "C:\\xampp\\htdocs\\moto_club\\templates\\reunions\\addReu.html.twig");
    }
}
