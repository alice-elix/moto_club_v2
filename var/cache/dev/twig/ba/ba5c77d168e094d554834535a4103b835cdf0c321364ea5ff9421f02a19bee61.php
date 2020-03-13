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

/* back_office/charts.html.twig */
class __TwigTemplate_27f56404060e917b5cce8f3bbb231e35ddf0298c5ada70ea20f78743aac01144 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_office/charts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_office/charts.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "back_office/charts.html.twig", 1);
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

        echo "SB Admin - Charts";
        
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
        echo "<!-- Area Chart Example-->
<div class=\"card mb-3\">
  <div class=\"card-header\">
    <i class=\"fas fa-chart-area\"></i>
    Area Chart Example</div>
  <div class=\"card-body\">
    <canvas id=\"myAreaChart\" width=\"100%\" height=\"30\"></canvas>
  </div>
  <div class=\"card-footer small text-muted\">Updated yesterday at 11:59 PM</div>
</div>

<div class=\"row\">
  <div class=\"col-lg-8\">
    <div class=\"card mb-3\">
      <div class=\"card-header\">
        <i class=\"fas fa-chart-bar\"></i>
        Bar Chart Example</div>
      <div class=\"card-body\">
        <canvas id=\"myBarChart\" width=\"100%\" height=\"50\"></canvas>
      </div>
      <div class=\"card-footer small text-muted\">Updated yesterday at 11:59 PM</div>
    </div>
  </div>
  <div class=\"col-lg-4\">
    <div class=\"card mb-3\">
      <div class=\"card-header\">
        <i class=\"fas fa-chart-pie\"></i>
        Pie Chart Example</div>
      <div class=\"card-body\">
        <canvas id=\"myPieChart\" width=\"100%\" height=\"100\"></canvas>
      </div>
      <div class=\"card-footer small text-muted\">Updated yesterday at 11:59 PM</div>
    </div>
  </div>
</div>

<p class=\"small text-center text-muted my-5\">
  <em>More chart examples coming soon...</em>
</p>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back_office/charts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %} 

{% block title %}SB Admin - Charts{% endblock %}

{% block content %}
<!-- Area Chart Example-->
<div class=\"card mb-3\">
  <div class=\"card-header\">
    <i class=\"fas fa-chart-area\"></i>
    Area Chart Example</div>
  <div class=\"card-body\">
    <canvas id=\"myAreaChart\" width=\"100%\" height=\"30\"></canvas>
  </div>
  <div class=\"card-footer small text-muted\">Updated yesterday at 11:59 PM</div>
</div>

<div class=\"row\">
  <div class=\"col-lg-8\">
    <div class=\"card mb-3\">
      <div class=\"card-header\">
        <i class=\"fas fa-chart-bar\"></i>
        Bar Chart Example</div>
      <div class=\"card-body\">
        <canvas id=\"myBarChart\" width=\"100%\" height=\"50\"></canvas>
      </div>
      <div class=\"card-footer small text-muted\">Updated yesterday at 11:59 PM</div>
    </div>
  </div>
  <div class=\"col-lg-4\">
    <div class=\"card mb-3\">
      <div class=\"card-header\">
        <i class=\"fas fa-chart-pie\"></i>
        Pie Chart Example</div>
      <div class=\"card-body\">
        <canvas id=\"myPieChart\" width=\"100%\" height=\"100\"></canvas>
      </div>
      <div class=\"card-footer small text-muted\">Updated yesterday at 11:59 PM</div>
    </div>
  </div>
</div>

<p class=\"small text-center text-muted my-5\">
  <em>More chart examples coming soon...</em>
</p>
    
{% endblock %}", "back_office/charts.html.twig", "C:\\xampp\\htdocs\\moto_club_v2\\moto_club_v2\\templates\\back_office\\charts.html.twig");
    }
}
