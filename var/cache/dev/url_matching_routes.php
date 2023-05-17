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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/make/comment' => [[['_route' => 'app_make_comment_index', '_controller' => 'App\\Controller\\MakeCommentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/make/comment/new' => [[['_route' => 'app_make_comment_new', '_controller' => 'App\\Controller\\MakeCommentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/product' => [[['_route' => 'app_product_index', '_controller' => 'App\\Controller\\ProductController::index'], null, ['GET' => 0], null, true, false, null]],
        '/product/new' => [[['_route' => 'app_product_new', '_controller' => 'App\\Controller\\ProductController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/shipping/details' => [[['_route' => 'app_shipping_details_index', '_controller' => 'App\\Controller\\ShippingDetailsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/shipping/details/new' => [[['_route' => 'app_shipping_details_new', '_controller' => 'App\\Controller\\ShippingDetailsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/make/comment/([^/]++)(?'
                    .'|(*:194)'
                    .'|/edit(*:207)'
                    .'|(*:215)'
                .')'
                .'|/product/([^/]++)(?'
                    .'|(*:244)'
                    .'|/edit(*:257)'
                    .'|(*:265)'
                .')'
                .'|/shipping/details/([^/]++)(?'
                    .'|(*:303)'
                    .'|/edit(*:316)'
                    .'|(*:324)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:350)'
                    .'|/edit(*:363)'
                    .'|(*:371)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        194 => [[['_route' => 'app_make_comment_show', '_controller' => 'App\\Controller\\MakeCommentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        207 => [[['_route' => 'app_make_comment_edit', '_controller' => 'App\\Controller\\MakeCommentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        215 => [[['_route' => 'app_make_comment_delete', '_controller' => 'App\\Controller\\MakeCommentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        244 => [[['_route' => 'app_product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        257 => [[['_route' => 'app_product_edit', '_controller' => 'App\\Controller\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        265 => [[['_route' => 'app_product_delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        303 => [[['_route' => 'app_shipping_details_show', '_controller' => 'App\\Controller\\ShippingDetailsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        316 => [[['_route' => 'app_shipping_details_edit', '_controller' => 'App\\Controller\\ShippingDetailsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        324 => [[['_route' => 'app_shipping_details_delete', '_controller' => 'App\\Controller\\ShippingDetailsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        350 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        363 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        371 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
