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
class __TwigTemplate_46c8bb7391bf8993952c404eec2fa1e7569fd766ff32daa607b65888bcc71866 extends \Twig\Template
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
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
        
        <link rel=\"stylesheet\" href=\"/css/sb-admin.css\">
        <link rel=\"stylesheet\" href=\"/css/avatars.css\">
        <link rel=\"stylesheet\" href=\"/css/stylesback.css\">
        <link rel=\"icon\" href=\"/images/logo.jpg\" />

        ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "    </head>

    <body class=\"bg-dark\">
        <nav class=\"navbar navbar-expand navbar-dark bg-dark static-top\">

            <a class=\"navbar-brand mr-1\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_accueil");
        echo "\">Espace Perso</a>

            <button class=\"btn btn-link btn-sm text-white order-1 order-sm-0\" id=\"sidebarToggle\" href=\"#\">
                <i class=\"fas fa-bars\"></i>
            </button>

            <!-- Navbar Search -->
            <form class=\"d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0\"></form>

            <!-- Navbar -->
            <ul id=\"admin-head-session\" class=\"navbar-nav ml-auto ml-md-0\">

                ";
        // line 37
        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "session", [], "any", false, false, false, 37), "get", [0 => "ranks"], "method", false, false, false, 37))) {
            // line 38
            echo "                <li class=\"nav-item\">
                    <a id=\"head-profile-link\" class=\"nav-link\" href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_profile");
            echo "\">
                        <figure class=\"session-avatar admin-avatar\">
                            ";
            // line 41
            if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "session", [], "any", false, false, false, 41), "get", [0 => "avatar"], "method", false, false, false, 41))) {
                // line 42
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, ("/uploads/avatars/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "session", [], "any", false, false, false, 42), "get", [0 => "avatar"], "method", false, false, false, 42)), "html", null, true);
                echo "\">
                            ";
            } else {
                // line 44
                echo "                                <img src=\"";
                echo "/images/default-user.png";
                echo "\">
                            ";
            }
            // line 46
            echo "                        </figure>
                        <div class=\"mx-3\">";
            // line 47
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "session", [], "any", false, false, false, 47), "get", [0 => "prenom"], "method", false, false, false, 47) . " ") . twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "session", [], "any", false, false, false, 47), "get", [0 => "nom"], "method", false, false, false, 47))), "html", null, true);
            echo "</div>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a title=\"Déconnexion\" class=\"nav-link btn-link-red btn btn-outline-danger\" href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deconnexion_user");
            echo "\"><i class=\"fas fa-power-off\"></i></a>
                </li>
                ";
        }
        // line 54
        echo "
            </ul>
        </nav>

        <div id=\"wrapper\">

            <!-- SIDE BAR -->
            <ul class=\"sidebar navbar-nav\">
                
                ";
        // line 63
        if (twig_in_filter("membre", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "session", [], "any", false, false, false, 63), "get", [0 => "ranks"], "method", false, false, false, 63))) {
            // line 64
            echo "                
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 66
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
            echo "\">
                            <i class=\"fas fa-angle-left\"></i>
                            <span>Retour au site</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 72
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_profile");
            echo "\">
                            <i class=\"fas fa-user-edit\"></i>
                            <span>Mon profil</span>
                        </a>
                    </li>

                ";
        }
        // line 79
        echo "

                ";
        // line 81
        if (twig_in_filter("adherent", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "session", [], "any", false, false, false, 81), "get", [0 => "ranks"], "method", false, false, false, 81))) {
            // line 82
            echo "
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"pagesDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-road\"></i>
                            <span>Balades</span>
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"pagesDropdown\">
                            <a class=\"dropdown-item\" href=\"";
            // line 89
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_balade");
            echo "\">Proposer une balade</a>
                            ";
            // line 90
            if (twig_in_filter("bureau", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "session", [], "any", false, false, false, 90), "get", [0 => "ranks"], "method", false, false, false, 90))) {
                // line 91
                echo "                                <a class=\"dropdown-item\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion_balades");
                echo "\">Gérer les balades</a>
                            ";
            }
            // line 93
            echo "                        </div>
                    </li>
                ";
        }
        // line 96
        echo "

                ";
        // line 98
        if (twig_in_filter("bureau", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "session", [], "any", false, false, false, 98), "get", [0 => "ranks"], "method", false, false, false, 98))) {
            // line 99
            echo "                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"pagesDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-copy\"></i>
                            <span>Réunions</span>
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"pagesDropdown\">
                            ";
            // line 105
            if (twig_in_filter("bureau", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "session", [], "any", false, false, false, 105), "get", [0 => "ranks"], "method", false, false, false, 105))) {
                // line 106
                echo "                            <a class=\"dropdown-item\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_reunion");
                echo "\">Ajouter une réunion</a>
                            ";
            }
            // line 108
            echo "                            <a class=\"dropdown-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_back_reunions");
            echo "\">Liste des réunions</a>
                        </div>
                    </li>


                    <!-- <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"fas fa-chart-area\"></i>
                            <span>Statistiques</span>
                        </a>
                    </li> -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 121
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_users");
            echo "\">
                            <i class=\"fas fa-users-cog\"></i>
                            <span>Utilisateurs</span>
                        </a>
                    </li>

                ";
        }
        // line 128
        echo "

                


                
                <!-- <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">
                        <i class=\"fas fa-fw fa-tachometer-alt\"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"pagesDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"fas fa-fw fa-folder\"></i>
                        <span>Pages</span>
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"pagesDropdown\">
                        <h6 class=\"dropdown-header\">Login Screens:</h6>
                        <a class=\"dropdown-item\" href=\"#\">Login</a>
                        <a class=\"dropdown-item\" href=\"#\">Register</a>
                        <a class=\"dropdown-item\" href=\"#\">Forgot Password</a>
                        <div class=\"dropdown-divider\"></div>
                        <h6 class=\"dropdown-header\">Other Pages:</h6>
                        <a class=\"dropdown-item\" href=\"#\">404 Page</a>
                        <a class=\"dropdown-item active\" href=\"#\">Blank Page</a>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">
                        <i class=\"fas fa-fw fa-chart-area\"></i>
                        <span>Charts</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">
                        <i class=\"fas fa-fw fa-table\"></i>
                        <span>Tables</span>
                    </a>
                </li> -->


            </ul>

            <div id=\"content-wrapper\">
                <div class=\"container-fluid\">

                    <!-- Breadcrumbs-->
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\">
                            Ceci est votre espace personnel
                        </li>
                    </ol>

                    <!-- CONTENT -->
                    ";
        // line 183
        $this->displayBlock('content', $context, $blocks);
        // line 184
        echo "                    <!--  -->

                </div><!-- /.container-fluid -->
            </div><!-- /.content-wrapper -->
        </div><!-- /#wrapper -->

        <!-- Sticky Footer -->
        <footer class=\" sticky-footer fixed footer-admin\">
            <div class=\"container my-auto\">
                <div class=\"copyright text-center my-auto\">
                    <span>GSM3 Copyright &copy; - ";
        // line 194
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
        // line 219
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
        // line 263
        $this->displayBlock('javascripts', $context, $blocks);
        // line 264
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
        // line 277
        $context["currentPath"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 277, $this->source); })()), "request", [], "any", false, false, false, 277), "attributes", [], "any", false, false, false, 277), "get", [0 => "_route"], "method", false, false, false, 277), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 277, $this->source); })()), "request", [], "any", false, false, false, 277), "attributes", [], "any", false, false, false, 277), "get", [0 => "_route_params"], "method", false, false, false, 277));
        // line 278
        echo "        <script>

            \$(document).ready(function() {

                var prevPath = \$.cookie('currPath');
                \$.removeCookie('prevPath');
                \$.cookie('prevPath', prevPath);

                \$.removeCookie('currPath');
                \$.cookie('currPath', '";
        // line 287
        echo twig_escape_filter($this->env, (isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 287, $this->source); })()), "html", null, true);
        echo "');
                var currPath = \$.cookie('currPath');

                var prevScroll = \$.cookie('scroll');
                
                if(currPath == prevPath) {
                    \$('html, body, #wrapper').animate({
                        'scrollTop': prevScroll
                    });
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

    // line 9
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

    // line 19
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

    // line 183
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

    // line 263
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
        return array (  532 => 263,  514 => 183,  496 => 19,  477 => 9,  427 => 287,  416 => 278,  414 => 277,  399 => 264,  397 => 263,  350 => 219,  322 => 194,  310 => 184,  308 => 183,  251 => 128,  241 => 121,  224 => 108,  218 => 106,  216 => 105,  208 => 99,  206 => 98,  202 => 96,  197 => 93,  191 => 91,  189 => 90,  185 => 89,  176 => 82,  174 => 81,  170 => 79,  160 => 72,  151 => 66,  147 => 64,  145 => 63,  134 => 54,  128 => 51,  121 => 47,  118 => 46,  112 => 44,  106 => 42,  104 => 41,  99 => 39,  96 => 38,  94 => 37,  79 => 25,  72 => 20,  70 => 19,  57 => 9,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
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

            <a class=\"navbar-brand mr-1\" href=\"{{path('admin_accueil')}}\">Espace Perso</a>

            <button class=\"btn btn-link btn-sm text-white order-1 order-sm-0\" id=\"sidebarToggle\" href=\"#\">
                <i class=\"fas fa-bars\"></i>
            </button>

            <!-- Navbar Search -->
            <form class=\"d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0\"></form>

            <!-- Navbar -->
            <ul id=\"admin-head-session\" class=\"navbar-nav ml-auto ml-md-0\">

                {% if app.session.get('ranks') is not null %}
                <li class=\"nav-item\">
                    <a id=\"head-profile-link\" class=\"nav-link\" href=\"{{ path('view_profile') }}\">
                        <figure class=\"session-avatar admin-avatar\">
                            {% if app.session.get('avatar') is not null %}
                                <img src=\"{{ '/uploads/avatars/' ~ app.session.get('avatar') }}\">
                            {% else %}
                                <img src=\"{{ '/images/default-user.png' }}\">
                            {% endif %}
                        </figure>
                        <div class=\"mx-3\">{{ app.session.get('prenom') ~ ' ' ~ app.session.get('nom')|upper }}</div>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a title=\"Déconnexion\" class=\"nav-link btn-link-red btn btn-outline-danger\" href=\"{{ path('deconnexion_user') }}\"><i class=\"fas fa-power-off\"></i></a>
                </li>
                {% endif %}

            </ul>
        </nav>

        <div id=\"wrapper\">

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


                {% if 'adherent' in app.session.get('ranks') %}

                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"pagesDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-road\"></i>
                            <span>Balades</span>
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"pagesDropdown\">
                            <a class=\"dropdown-item\" href=\"{{path('add_balade')}}\">Proposer une balade</a>
                            {% if 'bureau' in app.session.get('ranks') %}
                                <a class=\"dropdown-item\" href=\"{{path('gestion_balades')}}\">Gérer les balades</a>
                            {% endif %}
                        </div>
                    </li>
                {% endif %}


                {% if 'bureau' in app.session.get('ranks') %}
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"pagesDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-copy\"></i>
                            <span>Réunions</span>
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"pagesDropdown\">
                            {% if 'bureau' in app.session.get('ranks') %}
                            <a class=\"dropdown-item\" href=\"{{path('add_reunion')}}\">Ajouter une réunion</a>
                            {% endif %}
                            <a class=\"dropdown-item\" href=\"{{path('index_back_reunions')}}\">Liste des réunions</a>
                        </div>
                    </li>


                    <!-- <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"fas fa-chart-area\"></i>
                            <span>Statistiques</span>
                        </a>
                    </li> -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{path('liste_users')}}\">
                            <i class=\"fas fa-users-cog\"></i>
                            <span>Utilisateurs</span>
                        </a>
                    </li>

                {% endif %}


                


                
                <!-- <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">
                        <i class=\"fas fa-fw fa-tachometer-alt\"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"pagesDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"fas fa-fw fa-folder\"></i>
                        <span>Pages</span>
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"pagesDropdown\">
                        <h6 class=\"dropdown-header\">Login Screens:</h6>
                        <a class=\"dropdown-item\" href=\"#\">Login</a>
                        <a class=\"dropdown-item\" href=\"#\">Register</a>
                        <a class=\"dropdown-item\" href=\"#\">Forgot Password</a>
                        <div class=\"dropdown-divider\"></div>
                        <h6 class=\"dropdown-header\">Other Pages:</h6>
                        <a class=\"dropdown-item\" href=\"#\">404 Page</a>
                        <a class=\"dropdown-item active\" href=\"#\">Blank Page</a>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">
                        <i class=\"fas fa-fw fa-chart-area\"></i>
                        <span>Charts</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">
                        <i class=\"fas fa-fw fa-table\"></i>
                        <span>Tables</span>
                    </a>
                </li> -->


            </ul>

            <div id=\"content-wrapper\">
                <div class=\"container-fluid\">

                    <!-- Breadcrumbs-->
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\">
                            Ceci est votre espace personnel
                        </li>
                    </ol>

                    <!-- CONTENT -->
                    {% block content %}{% endblock %}
                    <!--  -->

                </div><!-- /.container-fluid -->
            </div><!-- /.content-wrapper -->
        </div><!-- /#wrapper -->

        <!-- Sticky Footer -->
        <footer class=\" sticky-footer fixed footer-admin\">
            <div class=\"container my-auto\">
                <div class=\"copyright text-center my-auto\">
                    <span>GSM3 Copyright &copy; - {{\"now\"|date(\"Y\")}}</div></span>
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
                \$.cookie('currPath', '{{ currentPath }}');
                var currPath = \$.cookie('currPath');

                var prevScroll = \$.cookie('scroll');
                
                if(currPath == prevPath) {
                    \$('html, body, #wrapper').animate({
                        'scrollTop': prevScroll
                    });
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
</html>", "admin.html.twig", "C:\\xampp\\htdocs\\moto_club\\templates\\admin.html.twig");
    }
}
