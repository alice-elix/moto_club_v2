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

/* admin.html.twig */
class __TwigTemplate_114fd1a49612460f9f01b417a8768306a299a6b92e40859de201f871b978f1aa extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"Site pour l'association de motoclubBMW38 - partie administrative\">
        <meta name=\"author\" content=\"MG GD\">

        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
        
        <link rel=\"stylesheet\" href=\"/css/sb-admin.css\">
        <link rel=\"stylesheet\" href=\"/css/avatars.css\">
        <link rel=\"stylesheet\" href=\"/css/stylesback.css\">
        <link rel=\"icon\" href=\"/images/logo.jpg\" />

        ";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "
    </head>

    <body class=\"bg-dark\">
        <nav class=\"navbar navbar-expand navbar-dark bg-dark static-top\">
            <button class=\"btn btn-link btn-sm text-white order-1 order-sm-0\" id=\"sidebarToggle\" href=\"#\">
                <i class=\"fas fa-bars medium-title\"></i>
            </button>
            <a class=\"navbar-brand mr-1\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_accueil");
        echo "\"><h1 class=\"medium-title\">Espace Perso</h1></a>
            
            <!-- Navbar Search -->
            <form class=\"d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0\"></form>
            
            <!-- Navbar -->
            <ul id=\"admin-head-session\" class=\"navbar-nav ml-auto ml-md-0\">

                ";
        // line 37
        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "session", [], "any", false, false, false, 37), "get", [0 => "ranks"], "method", false, false, false, 37))) {
            // line 38
            echo "                    <li class=\"nav-item dropdown\">
                        <a id=\"head-profile-link\" class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <figure class=\"session-avatar admin-avatar\">

                                ";
            // line 42
            if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "session", [], "any", false, false, false, 42), "get", [0 => "avatar"], "method", false, false, false, 42))) {
                // line 43
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, ("/uploads/avatars/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "session", [], "any", false, false, false, 43), "get", [0 => "avatar"], "method", false, false, false, 43)), "html", null, true);
                echo "\">
                                ";
            } else {
                // line 45
                echo "                                    <img src=\"";
                echo "/images/default-user.png";
                echo "\">
                                ";
            }
            // line 47
            echo "
                            </figure>
                            <div class=\"mx-3\">";
            // line 49
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "session", [], "any", false, false, false, 49), "get", [0 => "prenom"], "method", false, false, false, 49) . " ") . twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "session", [], "any", false, false, false, 49), "get", [0 => "nom"], "method", false, false, false, 49))), "html", null, true);
            echo "</div>
                        </a>
                        <div class=\"dropdown-menu  pr-0\" aria-labelledby=\"head-profile-link\">
                            <a class=\"dropdown-item \" href=\"";
            // line 52
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_profile");
            echo "\"  aria-disabled=\"true\">Mon profil</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deconnexion_user");
            echo "\" aria-disabled=\"true\">Déconnexion</a>
                        </div>
                    </li>
                ";
        }
        // line 57
        echo "
            </ul>
        </nav>

        <div id=\"wrapper\" class=\"pt-0\">
            
            <!-- SIDE BAR -->
            <ul class=\"sidebar navbar-nav\">
                
                ";
        // line 66
        if (twig_in_filter("membre", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "session", [], "any", false, false, false, 66), "get", [0 => "ranks"], "method", false, false, false, 66))) {
            // line 67
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 68
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
            echo "\">
                            <i class=\"fas fa-angle-left\"></i>
                            <span>Retour au site</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 74
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_profile");
            echo "\">
                            <i class=\"fas fa-user-edit\"></i>
                            <span>Mon profil</span>
                        </a>
                    </li>
                ";
        }
        // line 80
        echo "                
                ";
        // line 81
        if (twig_in_filter("bureau", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "session", [], "any", false, false, false, 81), "get", [0 => "ranks"], "method", false, false, false, 81))) {
            // line 82
            echo "                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"pagesDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-road\"></i>
                            <span>Balades</span>
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"pagesDropdown\">
                            <a class=\"dropdown-item\" href=\"";
            // line 88
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_balade");
            echo "\">Ajouter</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 89
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion_balades");
            echo "\">Gérer</a>
                        </div>
                    </li>
                ";
        } elseif (twig_in_filter("adherent", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 92
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "session", [], "any", false, false, false, 92), "get", [0 => "ranks"], "method", false, false, false, 92))) {
            // line 93
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 94
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_balade");
            echo "\">
                            <i class=\"fas fa-road\"></i>
                            <span>Proposer</span>
                        </a>
                    </li>
                ";
        }
        // line 100
        echo "
                ";
        // line 101
        if (twig_in_filter("bureau", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "session", [], "any", false, false, false, 101), "get", [0 => "ranks"], "method", false, false, false, 101))) {
            // line 102
            echo "                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"pagesDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-copy\"></i>
                            <span>Réunions</span>
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"pagesDropdown\">
                            <a class=\"dropdown-item\" href=\"";
            // line 108
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_reunion");
            echo "\">Ajouter</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 109
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_back_reunions");
            echo "\">Gérer</a>
                        </div>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 113
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_users");
            echo "\">
                            <i class=\"fas fa-users-cog\"></i>
                            <span>Utilisateurs</span>
                        </a>
                    </li>
                ";
        }
        // line 119
        echo "
            </ul>

            <div id=\"content-wrapper\" class=\"py-0 \">
                <div class=\"container-fluid \">

                    <!-- Breadcrumbs-->
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <ol class=\"breadcrumb d-flex justify-content-center\">
                                <li class=\"breadcrumb-item \">
                                    <h2 class=\"medium-title text-center\">Ceci est votre bureau virtuel</h2>
                                    <p>Il permet de gérer votre profil ainsi que l'administration de l'association</p>
                                </li>
                            </ol>
                        </div>
                    </div>

                    <!-- CONTENT -->
                    ";
        // line 138
        $this->displayBlock('content', $context, $blocks);
        // line 139
        echo "                    <!--  -->

                </div><!-- /.container-fluid -->
            </div><!-- /.content-wrapper -->
        </div><!-- /#wrapper -->

        <!-- Sticky Footer -->
        <footer class=\" admin-footer-perso footer px-5 h-auto\">
            <div class=\"container my-auto\">
                <div class=\"copyright text-center my-auto\">
                    <span>MG GD Copyright &copy; - ";
        // line 149
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</div></span>
                </div>
            </div>
        </footer>

        <!-- Scroll to Top Button-->
        <a class=\"scroll-to-top rounded\" href=\"#\">
            <i class=\"fas fa-angle-up\"></i>
        </a>

        <!-- Logout Modal-->
        <!-- <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
                        <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">×</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        Select \"Logout\" below if you are ready to end your current session.
                    </div>
                    <div class=\"modal-footer\">
                        <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
                        <a class=\"btn btn-primary\" href=\"";
        // line 174
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_accueil");
        echo "\">Logout</a>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Modal Delete -->
        <div class=\"modal fade\" id=\"modalDelete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
          <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Confirmation de suppression</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                  <span aria-hidden=\"true\">&times;</span>
                </button>
              </div>
              <div id=\"modalContent\" class=\"modal-body\">
              </div>
              <div class=\"modal-footer\">
                <a id=\"modalConfirm\" role=\"button\" class=\"btn btn-danger text-white\" href=\"\">Supprimer</a>
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
              </div>
            </div>
          </div>
        </div>



        <!-- Bootstrap core JavaScript-->
        <script src=\"/vendor/jquery/jquery.min.js\"></script>
        <script src=\"/js/jquery.cookie.js\"></script>    
        <script src=\"/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
        <!-- Core plugin JavaScript-->
        <script src=\"/vendor/jquery-easing/jquery.easing.min.js\"></script>
        <!-- Page level plugin JavaScript-->
        <script src=\"/vendor/chart.js/Chart.min.js\"></script>
        <script src=\"/vendor/datatables/jquery.dataTables.js\"></script>
        <script src=\"/vendor/datatables/dataTables.bootstrap4.js\"></script>
        <!-- Custom scripts for all pages-->
        <script src=\"/js/sb-admin.min.js\"></script>
        <!-- Demo scripts for this page-->
        <!-- // <script src=\"/js/demo/datatables-demo.js\"></script> -->
        <!-- // <script src=\"/js/demo/chart-area-demo.js\"></script> -->
        
        ";
        // line 218
        $this->displayBlock('javascripts', $context, $blocks);
        // line 219
        echo "
        <script>
            \$(document).ready(function() {

                \$('a[data-target=\"#modalDelete\"]').click(function() {
                    var href = \$(this).attr('href');
                    \$('#modalConfirm').attr('href', href);
                    var content = \$(this).attr('data-content');
                    \$('#modalContent').html(content);
                });
            });
        </script>

        ";
        // line 232
        $context["currentPath"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 232, $this->source); })()), "request", [], "any", false, false, false, 232), "attributes", [], "any", false, false, false, 232), "get", [0 => "_route"], "method", false, false, false, 232), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 232, $this->source); })()), "request", [], "any", false, false, false, 232), "attributes", [], "any", false, false, false, 232), "get", [0 => "_route_params"], "method", false, false, false, 232));
        // line 233
        echo "        <script>

            \$(document).ready(function() {

                var prevPath = \$.cookie('currPath');
                \$.removeCookie('prevPath');
                \$.cookie('prevPath', prevPath);

                \$.removeCookie('currPath');
                \$.removeCookie('currPath');
                \$.removeCookie('currPath');
                \$.removeCookie('currPath');
                \$.removeCookie('currPath');
                \$.removeCookie('currPath');
                \$.cookie('currPath', '";
        // line 247
        echo twig_escape_filter($this->env, (isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 247, $this->source); })()), "html", null, true);
        echo "');
                var currPath = \$.cookie('currPath');

                var prevScroll = \$.cookie('scroll');

                if(currPath == prevPath && prevScroll != 0) {
                    \$('html, body').animate({
                        'scrollTop': prevScroll
                    },300);
                }

                var currScroll;

                console.log('current_path = '+ currPath + ' / prev_path = ' + prevPath);
                console.log('prevScroll = ' + prevScroll);
                console.log('-----');

                


                \$(document).scroll(function() {

                    // alert('scroll');

                    currScroll = \$(this).scrollTop();

                    // console.log(currScroll + ' / ' + prevScroll);

                    \$.removeCookie('scroll');
                    \$.cookie('scroll', currScroll);
                


                });
            });
        </script>


    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Administration";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 138
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 218
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  491 => 218,  473 => 138,  455 => 20,  436 => 10,  386 => 247,  370 => 233,  368 => 232,  353 => 219,  351 => 218,  304 => 174,  276 => 149,  264 => 139,  262 => 138,  241 => 119,  232 => 113,  225 => 109,  221 => 108,  213 => 102,  211 => 101,  208 => 100,  199 => 94,  196 => 93,  194 => 92,  188 => 89,  184 => 88,  176 => 82,  174 => 81,  171 => 80,  162 => 74,  153 => 68,  150 => 67,  148 => 66,  137 => 57,  130 => 53,  126 => 52,  120 => 49,  116 => 47,  110 => 45,  104 => 43,  102 => 42,  96 => 38,  94 => 37,  83 => 29,  73 => 21,  71 => 20,  58 => 10,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"Site pour l'association de motoclubBMW38 - partie administrative\">
        <meta name=\"author\" content=\"MG GD\">

        <title>{% block title %}Administration{% endblock %}</title>

        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
        
        <link rel=\"stylesheet\" href=\"/css/sb-admin.css\">
        <link rel=\"stylesheet\" href=\"/css/avatars.css\">
        <link rel=\"stylesheet\" href=\"/css/stylesback.css\">
        <link rel=\"icon\" href=\"/images/logo.jpg\" />

        {% block stylesheets %}{% endblock %}

    </head>

    <body class=\"bg-dark\">
        <nav class=\"navbar navbar-expand navbar-dark bg-dark static-top\">
            <button class=\"btn btn-link btn-sm text-white order-1 order-sm-0\" id=\"sidebarToggle\" href=\"#\">
                <i class=\"fas fa-bars medium-title\"></i>
            </button>
            <a class=\"navbar-brand mr-1\" href=\"{{path('admin_accueil')}}\"><h1 class=\"medium-title\">Espace Perso</h1></a>
            
            <!-- Navbar Search -->
            <form class=\"d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0\"></form>
            
            <!-- Navbar -->
            <ul id=\"admin-head-session\" class=\"navbar-nav ml-auto ml-md-0\">

                {% if app.session.get('ranks') is not null %}
                    <li class=\"nav-item dropdown\">
                        <a id=\"head-profile-link\" class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <figure class=\"session-avatar admin-avatar\">

                                {% if app.session.get('avatar') is not null %}
                                    <img src=\"{{ '/uploads/avatars/' ~ app.session.get('avatar') }}\">
                                {% else %}
                                    <img src=\"{{ '/images/default-user.png' }}\">
                                {% endif %}

                            </figure>
                            <div class=\"mx-3\">{{ app.session.get('prenom') ~ ' ' ~ app.session.get('nom')|upper }}</div>
                        </a>
                        <div class=\"dropdown-menu  pr-0\" aria-labelledby=\"head-profile-link\">
                            <a class=\"dropdown-item \" href=\"{{ path('view_profile') }}\"  aria-disabled=\"true\">Mon profil</a>
                            <a class=\"dropdown-item\" href=\"{{ path('deconnexion_user') }}\" aria-disabled=\"true\">Déconnexion</a>
                        </div>
                    </li>
                {% endif %}

            </ul>
        </nav>

        <div id=\"wrapper\" class=\"pt-0\">
            
            <!-- SIDE BAR -->
            <ul class=\"sidebar navbar-nav\">
                
                {% if 'membre' in app.session.get('ranks') %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{path('accueil')}}\">
                            <i class=\"fas fa-angle-left\"></i>
                            <span>Retour au site</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{path('view_profile')}}\">
                            <i class=\"fas fa-user-edit\"></i>
                            <span>Mon profil</span>
                        </a>
                    </li>
                {% endif %}
                
                {% if 'bureau' in app.session.get('ranks') %}
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"pagesDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-road\"></i>
                            <span>Balades</span>
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"pagesDropdown\">
                            <a class=\"dropdown-item\" href=\"{{path('add_balade')}}\">Ajouter</a>
                            <a class=\"dropdown-item\" href=\"{{path('gestion_balades')}}\">Gérer</a>
                        </div>
                    </li>
                {% elseif 'adherent' in app.session.get('ranks')%}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{path('add_balade')}}\">
                            <i class=\"fas fa-road\"></i>
                            <span>Proposer</span>
                        </a>
                    </li>
                {% endif %}

                {% if 'bureau' in app.session.get('ranks') %}
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"pagesDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-copy\"></i>
                            <span>Réunions</span>
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"pagesDropdown\">
                            <a class=\"dropdown-item\" href=\"{{path('add_reunion')}}\">Ajouter</a>
                            <a class=\"dropdown-item\" href=\"{{path('index_back_reunions')}}\">Gérer</a>
                        </div>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{path('liste_users')}}\">
                            <i class=\"fas fa-users-cog\"></i>
                            <span>Utilisateurs</span>
                        </a>
                    </li>
                {% endif %}

            </ul>

            <div id=\"content-wrapper\" class=\"py-0 \">
                <div class=\"container-fluid \">

                    <!-- Breadcrumbs-->
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <ol class=\"breadcrumb d-flex justify-content-center\">
                                <li class=\"breadcrumb-item \">
                                    <h2 class=\"medium-title text-center\">Ceci est votre bureau virtuel</h2>
                                    <p>Il permet de gérer votre profil ainsi que l'administration de l'association</p>
                                </li>
                            </ol>
                        </div>
                    </div>

                    <!-- CONTENT -->
                    {% block content %}{% endblock %}
                    <!--  -->

                </div><!-- /.container-fluid -->
            </div><!-- /.content-wrapper -->
        </div><!-- /#wrapper -->

        <!-- Sticky Footer -->
        <footer class=\" admin-footer-perso footer px-5 h-auto\">
            <div class=\"container my-auto\">
                <div class=\"copyright text-center my-auto\">
                    <span>MG GD Copyright &copy; - {{\"now\"|date(\"Y\")}}</div></span>
                </div>
            </div>
        </footer>

        <!-- Scroll to Top Button-->
        <a class=\"scroll-to-top rounded\" href=\"#\">
            <i class=\"fas fa-angle-up\"></i>
        </a>

        <!-- Logout Modal-->
        <!-- <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
                        <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">×</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        Select \"Logout\" below if you are ready to end your current session.
                    </div>
                    <div class=\"modal-footer\">
                        <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
                        <a class=\"btn btn-primary\" href=\"{{path('admin_accueil')}}\">Logout</a>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Modal Delete -->
        <div class=\"modal fade\" id=\"modalDelete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
          <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Confirmation de suppression</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                  <span aria-hidden=\"true\">&times;</span>
                </button>
              </div>
              <div id=\"modalContent\" class=\"modal-body\">
              </div>
              <div class=\"modal-footer\">
                <a id=\"modalConfirm\" role=\"button\" class=\"btn btn-danger text-white\" href=\"\">Supprimer</a>
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
              </div>
            </div>
          </div>
        </div>



        <!-- Bootstrap core JavaScript-->
        <script src=\"/vendor/jquery/jquery.min.js\"></script>
        <script src=\"/js/jquery.cookie.js\"></script>    
        <script src=\"/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
        <!-- Core plugin JavaScript-->
        <script src=\"/vendor/jquery-easing/jquery.easing.min.js\"></script>
        <!-- Page level plugin JavaScript-->
        <script src=\"/vendor/chart.js/Chart.min.js\"></script>
        <script src=\"/vendor/datatables/jquery.dataTables.js\"></script>
        <script src=\"/vendor/datatables/dataTables.bootstrap4.js\"></script>
        <!-- Custom scripts for all pages-->
        <script src=\"/js/sb-admin.min.js\"></script>
        <!-- Demo scripts for this page-->
        <!-- // <script src=\"/js/demo/datatables-demo.js\"></script> -->
        <!-- // <script src=\"/js/demo/chart-area-demo.js\"></script> -->
        
        {% block javascripts %}{% endblock %}

        <script>
            \$(document).ready(function() {

                \$('a[data-target=\"#modalDelete\"]').click(function() {
                    var href = \$(this).attr('href');
                    \$('#modalConfirm').attr('href', href);
                    var content = \$(this).attr('data-content');
                    \$('#modalContent').html(content);
                });
            });
        </script>

        {% set currentPath = path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')) %}
        <script>

            \$(document).ready(function() {

                var prevPath = \$.cookie('currPath');
                \$.removeCookie('prevPath');
                \$.cookie('prevPath', prevPath);

                \$.removeCookie('currPath');
                \$.removeCookie('currPath');
                \$.removeCookie('currPath');
                \$.removeCookie('currPath');
                \$.removeCookie('currPath');
                \$.removeCookie('currPath');
                \$.cookie('currPath', '{{ currentPath }}');
                var currPath = \$.cookie('currPath');

                var prevScroll = \$.cookie('scroll');

                if(currPath == prevPath && prevScroll != 0) {
                    \$('html, body').animate({
                        'scrollTop': prevScroll
                    },300);
                }

                var currScroll;

                console.log('current_path = '+ currPath + ' / prev_path = ' + prevPath);
                console.log('prevScroll = ' + prevScroll);
                console.log('-----');

                


                \$(document).scroll(function() {

                    // alert('scroll');

                    currScroll = \$(this).scrollTop();

                    // console.log(currScroll + ' / ' + prevScroll);

                    \$.removeCookie('scroll');
                    \$.cookie('scroll', currScroll);
                


                });
            });
        </script>


    </body>
</html>", "admin.html.twig", "C:\\xampp\\htdocs\\moto_club_v2\\moto_club_v2\\templates\\admin.html.twig");
    }
}
