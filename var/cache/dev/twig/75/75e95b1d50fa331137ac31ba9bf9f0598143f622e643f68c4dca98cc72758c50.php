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

/* reunions/editReu.html.twig */
class __TwigTemplate_5454c54d6ebfbde93bdb00ed4d109007ce7aca7edacb07ad369ace2464f09e0c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reunions/editReu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reunions/editReu.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "reunions/editReu.html.twig", 1);
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

        echo "Réunions - modification";
        
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
        echo "  <section class=\"py-2 mb-1 bg-light bg-section-back\">
    
    <div class=\"card-header\">Modifier une réunion</div>

      ";
        // line 10
        if ( !twig_test_empty((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 10, $this->source); })()))) {
            // line 11
            echo "        <div class=\"alert alert-danger\">";
            echo (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 11, $this->source); })());
            echo "</div>
      ";
        } elseif ((        // line 12
(isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 12, $this->source); })()) == true)) {
            // line 13
            echo "        <div class=\"alert alert-success\">La réunion a bien été modifiée</div>
      ";
        }
        // line 15
        echo "
    <div class=\"card-body\">
      <form method=\"post\">
        <div class=\"form-group\">
          <div class=\"form-row\">
            <div class=\"col-md-6\">
                <label for=\"titre\">Intitulé de la réunion</label>
                <input type=\"text\" id=\"titre\" name=\"titre\" class=\"form-control\" required=\"required\" autofocus=\"autofocus\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 22, $this->source); })()), "getTitre", [], "method", false, false, false, 22), "html", null, true);
        echo "\">
            </div>
            <div class=\"col-md-6\">
              <label for=\"type\">Type de réunion</label>
              <select name=\"type\" id=\"type\" class=\"form-control\">
                <option value=\"0\">-- ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 27, $this->source); })()), "getTypeReu", [], "method", false, false, false, 27), "html", null, true);
        echo " --</option> 

                  ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["typesReu"]) || array_key_exists("typesReu", $context) ? $context["typesReu"] : (function () { throw new RuntimeError('Variable "typesReu" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["typeReu"]) {
            // line 30
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
        // line 32
        echo "
              </select>
            </div>
          </div>
        </div>
        <div class=\"form-group\">
            <label for=\"contenu\">Ordre du jour</label>
            <textarea id=\"contenu\" name=\"contenu\" class=\"form-control\" required=\"required\">";
        // line 39
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 39, $this->source); })()), "getContenu", [], "method", false, false, false, 39), "html", null, true));
        echo "</textarea>
        </div>
        <div class=\"form-group\">
          <div class=\"form-row\">
            <div class=\"col-md-6\">
              <label for=\"date_reu\">Date de la réunion</label>
              <input type=\"date\" id=\"date_reu\" name=\"date_reu\" class=\"form-control\" required=\"required\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 45, $this->source); })()), "getDatetimeReu", [], "method", false, false, false, 45), "Y-m-d"), "html", null, true);
        echo "\">
            </div>
            <div class=\"col-md-6\">
              <label for=\"time_reu\">Heure de la réunion</label>
              <input type=\"time\" id=\"time_reu\" name=\"time_reu\" class=\"form-control\" required=\"required\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 49, $this->source); })()), "getDatetimeReu", [], "method", false, false, false, 49), "H:i"), "html", null, true);
        echo "\">
            </div>
            <div class=\"col-md-6\">
              <label for=\"user\">Réunion proposée par : </label>
              <input type=\"text\" id=\"user\" name=\"user\" class=\"form-control\" value=\"";
        // line 53
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reunionTrouvee"] ?? null), "getUser", [], "method", false, true, false, 53), "getPrenom", [], "method", true, true, false, 53) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reunionTrouvee"] ?? null), "getUser", [], "method", false, true, false, 53), "getPrenom", [], "method", false, false, false, 53)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reunionTrouvee"] ?? null), "getUser", [], "method", false, true, false, 53), "getPrenom", [], "method", false, false, false, 53), "html", null, true))) : (print ("")));
        echo "\" disabled=\"disabled\">
            </div>
            <div class=\"col-md-6\">
              <label for=\"lieu\">Lieu de la réunion</label>
              <input type=\"text\" id=\"lieu\" name=\"lieu\" class=\"form-control\" required=\"required\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 57, $this->source); })()), "getLieuReu", [], "method", false, false, false, 57), "html", null, true);
        echo "\">
            </div>
          </div>
          <div class=\"form-row my-2\">
            <div class=\"col-md-6\">
              <input type=\"submit\" value=\"Modifier\" class=\"btn btn-primary btn-block\">
            </div>
            <div class=\"col-md-6\">
              <a class=\"btn btn-secondary btn-block\" href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_back_reunions");
        echo "\" role=\"button\">Retour à la liste des réunions</a>
            </div>
          </div>
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
        return "reunions/editReu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 65,  183 => 57,  176 => 53,  169 => 49,  162 => 45,  153 => 39,  144 => 32,  133 => 30,  129 => 29,  124 => 27,  116 => 22,  107 => 15,  103 => 13,  101 => 12,  96 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block title %}Réunions - modification{% endblock %}

{% block content %}
  <section class=\"py-2 mb-1 bg-light bg-section-back\">
    
    <div class=\"card-header\">Modifier une réunion</div>

      {% if errors is not empty %}
        <div class=\"alert alert-danger\">{{errors|raw}}</div>
      {% elseif success == true %}
        <div class=\"alert alert-success\">La réunion a bien été modifiée</div>
      {% endif %}

    <div class=\"card-body\">
      <form method=\"post\">
        <div class=\"form-group\">
          <div class=\"form-row\">
            <div class=\"col-md-6\">
                <label for=\"titre\">Intitulé de la réunion</label>
                <input type=\"text\" id=\"titre\" name=\"titre\" class=\"form-control\" required=\"required\" autofocus=\"autofocus\" value=\"{{ reunionTrouvee.getTitre() }}\">
            </div>
            <div class=\"col-md-6\">
              <label for=\"type\">Type de réunion</label>
              <select name=\"type\" id=\"type\" class=\"form-control\">
                <option value=\"0\">-- {{ reunionTrouvee.getTypeReu() }} --</option> 

                  {% for key, typeReu in typesReu %}
                    <option value=\"{{key}}\">{{typeReu}}</option>
                  {% endfor %}

              </select>
            </div>
          </div>
        </div>
        <div class=\"form-group\">
            <label for=\"contenu\">Ordre du jour</label>
            <textarea id=\"contenu\" name=\"contenu\" class=\"form-control\" required=\"required\">{{ reunionTrouvee.getContenu()|nl2br }}</textarea>
        </div>
        <div class=\"form-group\">
          <div class=\"form-row\">
            <div class=\"col-md-6\">
              <label for=\"date_reu\">Date de la réunion</label>
              <input type=\"date\" id=\"date_reu\" name=\"date_reu\" class=\"form-control\" required=\"required\" value=\"{{ reunionTrouvee.getDatetimeReu()|date('Y-m-d') }}\">
            </div>
            <div class=\"col-md-6\">
              <label for=\"time_reu\">Heure de la réunion</label>
              <input type=\"time\" id=\"time_reu\" name=\"time_reu\" class=\"form-control\" required=\"required\" value=\"{{ reunionTrouvee.getDatetimeReu()|date('H:i') }}\">
            </div>
            <div class=\"col-md-6\">
              <label for=\"user\">Réunion proposée par : </label>
              <input type=\"text\" id=\"user\" name=\"user\" class=\"form-control\" value=\"{{ reunionTrouvee.getUser().getPrenom() ?? '' }}\" disabled=\"disabled\">
            </div>
            <div class=\"col-md-6\">
              <label for=\"lieu\">Lieu de la réunion</label>
              <input type=\"text\" id=\"lieu\" name=\"lieu\" class=\"form-control\" required=\"required\" value=\"{{ reunionTrouvee.getLieuReu() }}\">
            </div>
          </div>
          <div class=\"form-row my-2\">
            <div class=\"col-md-6\">
              <input type=\"submit\" value=\"Modifier\" class=\"btn btn-primary btn-block\">
            </div>
            <div class=\"col-md-6\">
              <a class=\"btn btn-secondary btn-block\" href=\"{{ path('index_back_reunions') }}\" role=\"button\">Retour à la liste des réunions</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>
{% endblock %}
", "reunions/editReu.html.twig", "C:\\xampp\\htdocs\\moto_club_v2\\moto_club_v2\\templates\\reunions\\editReu.html.twig");
    }
}
