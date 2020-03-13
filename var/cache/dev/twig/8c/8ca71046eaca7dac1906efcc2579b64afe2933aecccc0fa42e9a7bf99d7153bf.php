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
class __TwigTemplate_60c2e011b35bac39313dd5269a10081404bca30373c97dd41835843c8bac6da9 extends \Twig\Template
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
    
  <section class=\"py-2 mb-1 bg-light bg-section-back\">
    <div class=\"card-header\"><h2>Ajouter une réunion</h2></div>

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
        echo "
    <div class=\"card-body\">
      <form method=\"post\">
        <div class=\"form-group\">
          <div class=\"form-row\">
            <div class=\"col-md-6\">
              <label for=\"titre\">Intitulé de la réunion</label>
              <input type=\"text\" id=\"titre\" name=\"titre\" class=\"form-control\" required=\"required\" autofocus=\"autofocus\" value=\"";
        // line 23
        (((twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "titre", [], "any", true, true, false, 23) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "titre", [], "any", false, false, false, 23)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "titre", [], "any", false, false, false, 23), "html", null, true))) : (print ("")));
        echo "\">
            </div>
            <div class=\"col-md-6\">
              <label for=\"type\">Type de réunion</label>
              <select name=\"type\" id=\"type\" class=\"form-control\">
                <option value=\"0\">-- Sélectionnez --</option>            
                  
                  ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["typesReu"]) || array_key_exists("typesReu", $context) ? $context["typesReu"] : (function () { throw new RuntimeError('Variable "typesReu" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["typeReu"]) {
            // line 31
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
        // line 33
        echo "
              </select>
            </div>
          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"contenu\">Ordre du jour</label>
          <textarea id=\"contenu\" name=\"contenu\" class=\"form-control\" required=\"required\">";
        // line 40
        (((twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "contenu", [], "any", true, true, false, 40) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "contenu", [], "any", false, false, false, 40)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "contenu", [], "any", false, false, false, 40), "html", null, true))) : (print ("")));
        echo "</textarea>
        </div>
        <div class=\"form-group\">
          <div class=\"form-row\">
            <div class=\"col-md-4\">
              <label for=\"date_reu\">Date de la réunion</label>
              <input type=\"date\" id=\"date_reu\" name=\"date_reu\" class=\"form-control\" required=\"required\" value=\"";
        // line 46
        (((twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "date_reu", [], "any", true, true, false, 46) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "date_reu", [], "any", false, false, false, 46)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "date_reu", [], "any", false, false, false, 46), "html", null, true))) : (print ("")));
        echo "\">
            </div>
            <div class=\"col-md-4\">
              <label for=\"time_reu\">Heure de la réunion</label>
              <input type=\"time\" id=\"time_reu\" name=\"time_reu\" class=\"form-control\" required=\"required\"value=\"";
        // line 50
        (((twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "time_reu", [], "any", true, true, false, 50) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "time_reu", [], "any", false, false, false, 50)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "time_reu", [], "any", false, false, false, 50), "html", null, true))) : (print ("")));
        echo "\">
            </div>
            <div class=\"col-md-4\">
                <label for=\"lieu\">Lieu de la réunion</label>
                <input type=\"text\" id=\"lieu\" name=\"lieu\" class=\"form-control\" required=\"required\" value=\"";
        // line 54
        (((twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "lieu", [], "any", true, true, false, 54) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "lieu", [], "any", false, false, false, 54)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "lieu", [], "any", false, false, false, 54), "html", null, true))) : (print ("")));
        echo "\">
            </div>
          </div>
        </div>
        <div class=\"card-body\">
          
          ";
        // line 60
        if (((isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 60, $this->source); })()) == true)) {
            // line 61
            echo "            <a class=\"btn btn-primary btn-block\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_reunion");
            echo "\" role=\"button\">Ajouter une autre réunion</a>
          ";
        } else {
            // line 63
            echo "            <input type=\"submit\" value=\"Ajouter\" class=\"btn btn-primary btn-block\">
          ";
        }
        // line 65
        echo "
        </div>
      </form>
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
        return array (  195 => 65,  191 => 63,  185 => 61,  183 => 60,  174 => 54,  167 => 50,  160 => 46,  151 => 40,  142 => 33,  131 => 31,  127 => 30,  117 => 23,  108 => 16,  104 => 14,  102 => 13,  97 => 12,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block title %}Réunions{% endblock %}

{% block content %}

    
  <section class=\"py-2 mb-1 bg-light bg-section-back\">
    <div class=\"card-header\"><h2>Ajouter une réunion</h2></div>

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
                  {% endfor %}

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

  </section>
{% endblock %}
", "reunions/addReu.html.twig", "C:\\xampp\\htdocs\\moto_club_v2\\moto_club_v2\\templates\\reunions\\addReu.html.twig");
    }
}
