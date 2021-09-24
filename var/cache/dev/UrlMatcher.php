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
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\AdminController::index'], null, null, null, false, false, null]],
        '/articles' => [[['_route' => 'articles', '_controller' => 'App\\Controller\\ArticlesController::index'], null, null, null, false, false, null]],
        '/article/new' => [[['_route' => 'ajout', '_controller' => 'App\\Controller\\ArticlesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/mesarticles' => [[['_route' => 'mesarticles', '_controller' => 'App\\Controller\\ArticlesController::mesarticles'], null, null, null, false, false, null]],
        '/messages' => [[['_route' => 'messages', '_controller' => 'App\\Controller\\MessagesController::index'], null, null, null, false, false, null]],
        '/send' => [[['_route' => 'send', '_controller' => 'App\\Controller\\MessagesController::send'], null, null, null, false, false, null]],
        '/received' => [[['_route' => 'received', '_controller' => 'App\\Controller\\MessagesController::received'], null, null, null, false, false, null]],
        '/sent' => [[['_route' => 'sent', '_controller' => 'App\\Controller\\MessagesController::sent'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
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
                .'|/article/(?'
                    .'|([^/]++)(*:189)'
                    .'|edit/([^/]++)(*:210)'
                .')'
                .'|/delete(?'
                    .'|article/([^/]++)(*:245)'
                    .'|/([^/]++)(*:262)'
                .')'
                .'|/read/([^/]++)(*:285)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        189 => [[['_route' => 'article', '_controller' => 'App\\Controller\\ArticlesController::article'], ['slug'], null, null, false, true, null]],
        210 => [[['_route' => 'edit_article', '_controller' => 'App\\Controller\\ArticlesController::edit'], ['id'], null, null, false, true, null]],
        245 => [[['_route' => 'delete_article', '_controller' => 'App\\Controller\\ArticlesController::deleteArticle'], ['id'], null, null, false, true, null]],
        262 => [[['_route' => 'delete', '_controller' => 'App\\Controller\\MessagesController::delete'], ['id'], null, null, false, true, null]],
        285 => [
            [['_route' => 'read', '_controller' => 'App\\Controller\\MessagesController::read'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
