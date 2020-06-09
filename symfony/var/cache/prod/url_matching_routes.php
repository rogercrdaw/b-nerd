<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/editor' => [[['_route' => 'inline_editor_article', '_controller' => 'App\\Controller\\AppController::inlineEditorArticle'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/editor/([^/]++)(*:23)'
                .'|/user/(?'
                    .'|verificacio/([^/]++)(*:59)'
                    .'|([^/]++)(?'
                        .'|(*:77)'
                        .'|/edit(*:89)'
                    .')'
                    .'|validateUsername/([^/]++)(*:122)'
                    .'|profile/([^/]++)(*:146)'
                .')'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|article(?'
                            .'|s/categoria/([^/]++)(*:198)'
                            .'|/([^/]++)(*:215)'
                        .')'
                        .'|c(?'
                            .'|omentari(?'
                                .'|s/([^/]++)(*:249)'
                                .'|/(?'
                                    .'|publicar/([^/]++)(*:278)'
                                    .'|e(?'
                                        .'|ditar/([^/]++)(*:304)'
                                        .'|liminar/([^/]++)/([^/]++)(*:337)'
                                    .')'
                                .')'
                            .')'
                            .'|ategoria/([^/]++)(*:365)'
                        .')'
                        .'|usuari/([^/]++)(*:389)'
                        .'|delete/(?'
                            .'|article/([^/]++)/([^/]++)/([^/]++)(*:441)'
                            .'|categoria/([^/]++)(*:467)'
                            .'|user/([^/]++)(*:488)'
                        .')'
                    .')'
                    .'|rticle/editar/([^/]++)(*:520)'
                .')'
                .'|/post(?'
                    .'|/([^/]++)(*:546)'
                    .'|s/([^/]++)(*:564)'
                .')'
                .'|/([^/]++)(*:582)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        23 => [[['_route' => 'inline_editor', '_controller' => 'App\\Controller\\AppController::inlineEditor'], ['slugArticle'], ['GET' => 0], null, false, true, null]],
        59 => [[['_route' => 'verificar_compte', '_controller' => 'App\\Controller\\UserController::verificar'], ['token'], null, null, false, true, null]],
        77 => [[['_route' => 'userProfile', '_controller' => 'App\\Controller\\UserController::userProfile'], ['username'], null, null, false, true, null]],
        89 => [[['_route' => 'userProfileEdit', '_controller' => 'App\\Controller\\UserController::userProfileEdit'], ['username'], null, null, false, false, null]],
        122 => [[['_route' => 'usernameExists', '_controller' => 'App\\Controller\\UserController::checkUniqueUsername'], ['userName'], null, null, false, true, null]],
        146 => [[['_route' => 'otherUserProfile', '_controller' => 'App\\Controller\\UserController::otherUserProfile'], ['userName'], null, null, false, true, null]],
        198 => [[['_route' => 'adminArticlesCategoria', '_controller' => 'App\\Controller\\AdminController::llistarArticlesCategoria'], ['id'], null, null, false, true, null]],
        215 => [[['_route' => 'adminEditarArticle', '_controller' => 'App\\Controller\\AdminController::editarArticle'], ['id'], null, null, false, true, null]],
        249 => [[['_route' => 'adminComentarisUsuari', '_controller' => 'App\\Controller\\AdminController::llistarComentarisUsuari'], ['username'], null, null, false, true, null]],
        278 => [[['_route' => 'adminPublicarComentari', '_controller' => 'App\\Controller\\AdminController::publicarComentari'], ['id'], null, null, false, true, null]],
        304 => [[['_route' => 'adminEditarComentari', '_controller' => 'App\\Controller\\AdminController::editarComentari'], ['id'], null, null, false, true, null]],
        337 => [[['_route' => 'adminEliminarComentari', '_controller' => 'App\\Controller\\AdminController::eliminarComentari'], ['id', 'autor'], null, null, false, true, null]],
        365 => [[['_route' => 'adminEditarCategoria', '_controller' => 'App\\Controller\\AdminController::editarCategoria'], ['id'], null, null, false, true, null]],
        389 => [[['_route' => 'adminEditarUsuari', '_controller' => 'App\\Controller\\AdminController::editarUsuari'], ['id'], null, null, false, true, null]],
        441 => [[['_route' => 'adminEliminarArticle', '_controller' => 'App\\Controller\\AdminController::eliminarArticle'], ['id', 'slug', 'autor'], null, null, false, true, null]],
        467 => [[['_route' => 'adminEliminarCategoria', '_controller' => 'App\\Controller\\AdminController::eliminarCategoria'], ['id'], null, null, false, true, null]],
        488 => [[['_route' => 'eliminarUsuari', '_controller' => 'App\\Controller\\AdminController::eliminarUsuari'], ['username'], null, null, false, true, null]],
        520 => [[['_route' => 'article_update', '_controller' => 'App\\Controller\\ArticlesController::editarArticle'], ['slug'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        546 => [[['_route' => 'article_detall', '_controller' => 'App\\Controller\\ArticlesController::slug'], ['slug'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        564 => [[['_route' => 'articlesAutor', '_controller' => 'App\\Controller\\ArticlesController::articlesPerAutor'], ['username'], ['GET' => 0], null, false, true, null]],
        582 => [
            [['_route' => 'articles_categoria', '_controller' => 'App\\Controller\\ArticlesController::getArticles'], ['cat_name'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
