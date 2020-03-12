<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/back/office' => [[['_route' => 'back_office', '_controller' => 'App\\Controller\\BackOfficeController::index'], null, null, null, false, false, null]],
        '/balades' => [
            [['_route' => 'balades', '_controller' => 'App\\Controller\\BaladesController::indexBalades'], null, null, null, false, false, null],
            [['_route' => 'index_balades', '_controller' => 'App\\Controller\\BaladesController::indexBalades'], null, null, null, false, false, null],
        ],
        '/default' => [[['_route' => 'default', '_controller' => 'App\\Controller\\DefaultController::confidentialite'], null, null, null, false, false, null]],
        '/reunions' => [
            [['_route' => 'reunions', '_controller' => 'App\\Controller\\ReunionsController::indexReunion'], null, null, null, false, false, null],
            [['_route' => 'index_reunions', '_controller' => 'App\\Controller\\ReunionsController::indexReunion'], null, null, null, false, false, null],
        ],
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/politique-de-confidentialite' => [[['_route' => 'confidentialite', '_controller' => 'App\\Controller\\DefaultController::confidentialite'], null, null, null, false, false, null]],
        '/backoffice/accueil' => [[['_route' => 'admin_accueil', '_controller' => 'App\\Controller\\BackOfficeController::index'], null, null, null, false, false, null]],
        '/backoffice/utilisateurs' => [[['_route' => 'liste_users', '_controller' => 'App\\Controller\\BackOfficeController::viewUsers'], null, null, null, false, false, null]],
        '/users/inscription' => [[['_route' => 'inscription_user', '_controller' => 'App\\Controller\\UsersController::inscriptionUser'], null, null, null, false, false, null]],
        '/users/login' => [[['_route' => 'connexion_user', '_controller' => 'App\\Controller\\UsersController::loginUser'], null, null, null, false, false, null]],
        '/users/logout' => [[['_route' => 'deconnexion_user', '_controller' => 'App\\Controller\\UsersController::logoutUser'], null, null, null, false, false, null]],
        '/users/forgot-password' => [[['_route' => 'forgot_password', '_controller' => 'App\\Controller\\UsersController::forgotPasswordUser'], null, null, null, false, false, null]],
        '/users/reinit-password' => [[['_route' => 'reinit_password', '_controller' => 'App\\Controller\\UsersController::reinitPasswordUser'], null, null, null, false, false, null]],
        '/users/profil' => [[['_route' => 'view_profile', '_controller' => 'App\\Controller\\UsersController::viewProfile'], null, null, null, false, false, null]],
        '/balades/ajouter' => [[['_route' => 'add_balade', '_controller' => 'App\\Controller\\BaladesController::addBalade'], null, null, null, false, false, null]],
        '/balades/gestion' => [[['_route' => 'gestion_balades', '_controller' => 'App\\Controller\\BaladesController::gestionBalades'], null, null, null, false, false, null]],
        '/photos/albums' => [[['_route' => 'index_albums', '_controller' => 'App\\Controller\\PhotosController::indexAlbums'], null, null, null, false, false, null]],
        '/reunions/ajouter-une-reunion' => [[['_route' => 'add_reunion', '_controller' => 'App\\Controller\\ReunionsController::addReunion'], null, null, null, false, false, null]],
        '/backoffice/reunions' => [[['_route' => 'index_back_reunions', '_controller' => 'App\\Controller\\ReunionsController::indexBackReunion'], null, null, null, false, false, null]],
        '/reunions/liste-cr' => [[['_route' => 'index_cr', '_controller' => 'App\\Controller\\ReunionsController::indexCr'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/ba(?'
                    .'|lades/(?'
                        .'|modifier/(\\d+)(*:198)'
                        .'|supprimer/(\\d+)(*:221)'
                        .'|(\\d+)(*:234)'
                        .'|inscription/(\\d+)(*:259)'
                        .'|desinscription/(\\d+)(*:287)'
                        .'|valider/(\\d+)(*:308)'
                        .'|refuser/(\\d+)(*:329)'
                        .'|cloturer\\-inscriptions/(\\d+)(*:365)'
                        .'|ouvrir\\-inscriptions/(\\d+)(*:399)'
                        .'|gestion/(\\d+)(*:420)'
                        .'|exclure/(\\d+)(*:441)'
                    .')'
                    .'|ckoffice/reunions/details/(\\d+)(*:481)'
                .')'
                .'|/photos/(?'
                    .'|albums/(\\d+)(*:513)'
                    .'|supprimer/(\\d+)(*:536)'
                    .'|gestion/(\\d+)(*:557)'
                .')'
                .'|/reunions/(?'
                    .'|details/(\\d+)(*:592)'
                    .'|modifier\\-un(?'
                        .'|e\\-reunion/(\\d+)(*:631)'
                        .'|\\-cr/(\\d+)(*:649)'
                    .')'
                    .'|supprimer\\-un(?'
                        .'|e\\-reunion/(\\d+)(*:690)'
                        .'|\\-cr/(\\d+)(*:708)'
                    .')'
                    .'|c(?'
                        .'|onfirmation\\-suppression/(\\d+)(*:751)'
                        .'|r\\-details/(\\d+)(*:775)'
                    .')'
                    .'|ajouter\\-un\\-cr/(\\d+)(*:805)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        198 => [[['_route' => 'edit_balade', '_controller' => 'App\\Controller\\BaladesController::editBalade'], ['id'], null, null, false, true, null]],
        221 => [[['_route' => 'del_balade', '_controller' => 'App\\Controller\\BaladesController::delBalade'], ['id'], null, null, false, true, null]],
        234 => [[['_route' => 'view_balade', '_controller' => 'App\\Controller\\BaladesController::viewBalade'], ['id'], null, null, false, true, null]],
        259 => [[['_route' => 'inscription_balade', '_controller' => 'App\\Controller\\BaladesController::inscriptionBalade'], ['id'], null, null, false, true, null]],
        287 => [[['_route' => 'desinscription_balade', '_controller' => 'App\\Controller\\BaladesController::desinscriptionBalade'], ['id'], null, null, false, true, null]],
        308 => [[['_route' => 'valider_balade', '_controller' => 'App\\Controller\\BaladesController::validerBalade'], ['id'], null, null, false, true, null]],
        329 => [[['_route' => 'refuser_balade', '_controller' => 'App\\Controller\\BaladesController::refuserBalade'], ['id'], null, null, false, true, null]],
        365 => [[['_route' => 'cloturer_inscriptions', '_controller' => 'App\\Controller\\BaladesController::cloturerInscriptions'], ['id'], null, null, false, true, null]],
        399 => [[['_route' => 'ouvrir_inscriptions', '_controller' => 'App\\Controller\\BaladesController::ouvrirInscriptions'], ['id'], null, null, false, true, null]],
        420 => [[['_route' => 'gestion_inscrits', '_controller' => 'App\\Controller\\BaladesController::gestionInscrits'], ['id'], null, null, false, true, null]],
        441 => [[['_route' => 'exclure_inscrit', '_controller' => 'App\\Controller\\BaladesController::exclureInscrit'], ['id'], null, null, false, true, null]],
        481 => [[['_route' => 'view_back_reunion', '_controller' => 'App\\Controller\\ReunionsController::viewBackReunion'], ['id'], null, null, false, true, null]],
        513 => [[['_route' => 'view_album', '_controller' => 'App\\Controller\\PhotosController::viewAlbum'], ['id'], null, null, false, true, null]],
        536 => [[['_route' => 'del_photo', '_controller' => 'App\\Controller\\PhotosController::delPhoto'], ['id'], null, null, false, true, null]],
        557 => [[['_route' => 'gestion_photos', '_controller' => 'App\\Controller\\PhotosController::gestionPhotos'], ['id'], null, null, false, true, null]],
        592 => [[['_route' => 'view_reunion', '_controller' => 'App\\Controller\\ReunionsController::viewReunion'], ['id'], null, null, false, true, null]],
        631 => [[['_route' => 'edit_reunion', '_controller' => 'App\\Controller\\ReunionsController::editReunion'], ['id'], null, null, false, true, null]],
        649 => [[['_route' => 'edit_cr', '_controller' => 'App\\Controller\\ReunionsController::editCr'], ['id'], null, null, false, true, null]],
        690 => [[['_route' => 'del_reunion', '_controller' => 'App\\Controller\\ReunionsController::delReunion'], ['id'], null, null, false, true, null]],
        708 => [[['_route' => 'del_cr', '_controller' => 'App\\Controller\\ReunionsController::delCr'], ['id'], null, null, false, true, null]],
        751 => [[['_route' => 'del_conf', '_controller' => 'App\\Controller\\ReunionsController::delConf'], ['id'], null, null, false, true, null]],
        775 => [[['_route' => 'view_cr', '_controller' => 'App\\Controller\\ReunionsController::viewCr'], ['id'], null, null, false, true, null]],
        805 => [
            [['_route' => 'add_cr', '_controller' => 'App\\Controller\\ReunionsController::addCr'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
