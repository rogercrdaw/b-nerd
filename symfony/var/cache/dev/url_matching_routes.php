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
        '/editor' => [[['_route' => 'inline_editor_article', '_controller' => 'App\\Controller\\AppController::inlineEditorArticle'], null, ['GET' => 0], null, false, false, null]],
        '/api/getCategories' => [[['_route' => 'apiGetCategories', '_controller' => 'App\\Controller\\APIController::getCategories'], null, ['GET' => 0], null, false, false, null]],
        '/api/getArticles' => [[['_route' => 'apiGetArticles', '_controller' => 'App\\Controller\\APIController::getArticles'], null, ['GET' => 0], null, false, false, null]],
        '/api/postComentari' => [[['_route' => 'apiPostComentari', '_controller' => 'App\\Controller\\APIController::postComentari'], null, ['POST' => 0], null, false, false, null]],
        '/api/putComentari' => [[['_route' => 'apiPutComentari', '_controller' => 'App\\Controller\\APIController::putComentari'], null, ['PUT' => 0], null, false, false, null]],
        '/api/deleteComentari' => [[['_route' => 'apiDeleteComentari', '_controller' => 'App\\Controller\\APIController::deleteComentari'], null, ['DELETE' => 0], null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\HomepageController::getAll'], null, null, null, false, false, null]],
        '/doc' => [[['_route' => 'doc', '_controller' => 'App\\Controller\\HomepageController::documentacio'], null, null, null, false, false, null]],
        '/user/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\UserController::register'], null, null, null, false, false, null]],
        '/user/tokenRecover' => [[['_route' => 'app_token_recover', '_controller' => 'App\\Controller\\UserController::tokenRecover'], null, null, null, false, false, null]],
        '/user/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\UserController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\UserController::logout'], null, null, null, false, false, null]],
        '/user/profile/edit/password' => [[['_route' => 'userChangePassword', '_controller' => 'App\\Controller\\UserController::canviaContrasenya'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/articles' => [[['_route' => 'adminArticles', '_controller' => 'App\\Controller\\AdminController::llistarArticles'], null, null, null, false, false, null]],
        '/admin/categories' => [[['_route' => 'adminCategories', '_controller' => 'App\\Controller\\AdminController::llistarCategories'], null, null, null, false, false, null]],
        '/admin/comentaris' => [[['_route' => 'adminComentaris', '_controller' => 'App\\Controller\\AdminController::llistarComentaris'], null, null, null, false, false, null]],
        '/admin/usuaris' => [[['_route' => 'adminUsuaris', '_controller' => 'App\\Controller\\AdminController::llistarUsuaris'], null, null, null, false, false, null]],
        '/admin/categoria/nova' => [[['_route' => 'adminAfegirCategoria', '_controller' => 'App\\Controller\\AdminController::afegirCategoria'], null, null, null, false, false, null]],
        '/new' => [[['_route' => 'article_new', '_controller' => 'App\\Controller\\ArticlesController::nouarticle'], null, null, null, false, false, null]],
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
                .'|/editor/([^/]++)(*:185)'
                .'|/a(?'
                    .'|pi/get(?'
                        .'|Article(?'
                            .'|/([^/]++)(*:226)'
                            .'|s/([^/]++)(*:244)'
                        .')'
                        .'|Comentaris/([^/]++)(*:272)'
                    .')'
                    .'|dmin/(?'
                        .'|article(?'
                            .'|s/categoria/([^/]++)(*:319)'
                            .'|/([^/]++)(*:336)'
                        .')'
                        .'|c(?'
                            .'|omentari(?'
                                .'|s/([^/]++)(*:370)'
                                .'|/(?'
                                    .'|publicar/([^/]++)(*:399)'
                                    .'|e(?'
                                        .'|ditar/([^/]++)(*:425)'
                                        .'|liminar/([^/]++)/([^/]++)(*:458)'
                                    .')'
                                .')'
                            .')'
                            .'|ategoria/([^/]++)(*:486)'
                        .')'
                        .'|usuari/([^/]++)(*:510)'
                        .'|delete/(?'
                            .'|article/([^/]++)/([^/]++)/([^/]++)(*:562)'
                            .'|categoria/([^/]++)(*:588)'
                            .'|user/([^/]++)(*:609)'
                        .')'
                    .')'
                    .'|rticle/editar/([^/]++)(*:641)'
                .')'
                .'|/user/(?'
                    .'|verificacio/([^/]++)(*:679)'
                    .'|([^/]++)(?'
                        .'|(*:698)'
                        .'|/edit(*:711)'
                    .')'
                    .'|validateUsername/([^/]++)(*:745)'
                    .'|profile/([^/]++)(*:769)'
                .')'
                .'|/post(?'
                    .'|/([^/]++)(*:795)'
                    .'|s/([^/]++)(*:813)'
                .')'
                .'|/([^/]++)(*:831)'
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
        185 => [[['_route' => 'inline_editor', '_controller' => 'App\\Controller\\AppController::inlineEditor'], ['slugArticle'], ['GET' => 0], null, false, true, null]],
        226 => [[['_route' => 'apiGetArticle', '_controller' => 'App\\Controller\\APIController::getArticle'], ['article_id'], ['GET' => 0], null, false, true, null]],
        244 => [[['_route' => 'apiGetArticlesCategoria', '_controller' => 'App\\Controller\\APIController::getArticlesCategoria'], ['categoria_id'], ['GET' => 0], null, false, true, null]],
        272 => [[['_route' => 'apiGetComentarisArticle', '_controller' => 'App\\Controller\\APIController::getComentarisArticle'], ['article_id'], ['GET' => 0], null, false, true, null]],
        319 => [[['_route' => 'adminArticlesCategoria', '_controller' => 'App\\Controller\\AdminController::llistarArticlesCategoria'], ['id'], null, null, false, true, null]],
        336 => [[['_route' => 'adminEditarArticle', '_controller' => 'App\\Controller\\AdminController::editarArticle'], ['id'], null, null, false, true, null]],
        370 => [[['_route' => 'adminComentarisUsuari', '_controller' => 'App\\Controller\\AdminController::llistarComentarisUsuari'], ['username'], null, null, false, true, null]],
        399 => [[['_route' => 'adminPublicarComentari', '_controller' => 'App\\Controller\\AdminController::publicarComentari'], ['id'], null, null, false, true, null]],
        425 => [[['_route' => 'adminEditarComentari', '_controller' => 'App\\Controller\\AdminController::editarComentari'], ['id'], null, null, false, true, null]],
        458 => [[['_route' => 'adminEliminarComentari', '_controller' => 'App\\Controller\\AdminController::eliminarComentari'], ['id', 'autor'], null, null, false, true, null]],
        486 => [[['_route' => 'adminEditarCategoria', '_controller' => 'App\\Controller\\AdminController::editarCategoria'], ['id'], null, null, false, true, null]],
        510 => [[['_route' => 'adminEditarUsuari', '_controller' => 'App\\Controller\\AdminController::editarUsuari'], ['id'], null, null, false, true, null]],
        562 => [[['_route' => 'adminEliminarArticle', '_controller' => 'App\\Controller\\AdminController::eliminarArticle'], ['id', 'slug', 'autor'], null, null, false, true, null]],
        588 => [[['_route' => 'adminEliminarCategoria', '_controller' => 'App\\Controller\\AdminController::eliminarCategoria'], ['id'], null, null, false, true, null]],
        609 => [[['_route' => 'eliminarUsuari', '_controller' => 'App\\Controller\\AdminController::eliminarUsuari'], ['username'], null, null, false, true, null]],
        641 => [[['_route' => 'article_update', '_controller' => 'App\\Controller\\ArticlesController::editarArticle'], ['slug'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        679 => [[['_route' => 'verificar_compte', '_controller' => 'App\\Controller\\UserController::verificar'], ['token'], null, null, false, true, null]],
        698 => [[['_route' => 'userProfile', '_controller' => 'App\\Controller\\UserController::userProfile'], ['username'], null, null, false, true, null]],
        711 => [[['_route' => 'userProfileEdit', '_controller' => 'App\\Controller\\UserController::userProfileEdit'], ['username'], null, null, false, false, null]],
        745 => [[['_route' => 'usernameExists', '_controller' => 'App\\Controller\\UserController::checkUniqueUsername'], ['userName'], null, null, false, true, null]],
        769 => [[['_route' => 'otherUserProfile', '_controller' => 'App\\Controller\\UserController::otherUserProfile'], ['userName'], null, null, false, true, null]],
        795 => [[['_route' => 'article_detall', '_controller' => 'App\\Controller\\ArticlesController::slug'], ['slug'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        813 => [[['_route' => 'articlesAutor', '_controller' => 'App\\Controller\\ArticlesController::articlesPerAutor'], ['username'], ['GET' => 0], null, false, true, null]],
        831 => [
            [['_route' => 'articles_categoria', '_controller' => 'App\\Controller\\ArticlesController::getArticles'], ['cat_name'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
