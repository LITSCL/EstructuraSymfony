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
        '/' => [[['_route' => 'default', '_controller' => 'App\\Controller\\DefaultController::default'], null, null, null, false, false, null]],
        '/usuario/crear-usuario' => [[['_route' => 'usuario_vista_crearUsuario', '_controller' => 'App\\Controller\\UsuarioController::crearUsuario'], null, null, null, false, false, null]],
        '/usuario/mostrar-usuarios' => [[['_route' => 'usuario_vista_mostrarUsuarios', '_controller' => 'App\\Controller\\UsuarioController::mostrarUsuarios'], null, null, null, false, false, null]],
        '/usuario/crear' => [[['_route' => 'usuario_accion_save', '_controller' => 'App\\Controller\\UsuarioController::save'], null, null, null, false, false, null]],
        '/usuario/panel-administrador' => [[['_route' => 'usuario_vista_panelAdministrador', '_controller' => 'App\\Controller\\UsuarioController::panelAdministrador'], null, null, null, false, false, null]],
        '/usuario/panel-cliente' => [[['_route' => 'usuario_vista_panelCliente', '_controller' => 'App\\Controller\\UsuarioController::panelCliente'], null, null, null, false, false, null]],
        '/iniciar-sesion' => [[['_route' => 'usuario_vista_iniciarSesion', '_controller' => 'App\\Controller\\UsuarioController::iniciarSesion'], null, null, null, false, false, null]],
        '/autenticar-sesion' => [[['_route' => 'usuario_accion_autenticarSesion', '_controller' => 'App\\Controller\\UsuarioController::autenticarSesion'], null, null, null, false, false, null]],
        '/error-sesion' => [[['_route' => 'usuario_accion_errorSesion', '_controller' => 'App\\Controller\\UsuarioController::errorSesion'], null, null, null, false, false, null]],
        '/cerrar-sesion' => [[['_route' => 'usuario_accion_cerrarSesion', '_controller' => 'App\\Controller\\UsuarioController::cerrarSesion'], null, null, null, false, false, null]],
        '/categoria/crear-categoria' => [[['_route' => 'categoria_vista_crearCategoria', '_controller' => 'App\\Controller\\CategoriaController::crearCategoria'], null, null, null, false, false, null]],
        '/categoria/mostrar-categorias' => [[['_route' => 'categoria_vista_mostrarCategorias', '_controller' => 'App\\Controller\\CategoriaController::mostrarCategorias'], null, null, null, false, false, null]],
        '/categoria/crear' => [[['_route' => 'categoria_accion_save', '_controller' => 'App\\Controller\\CategoriaController::save'], null, null, null, false, false, null]],
        '/producto/crear-producto' => [[['_route' => 'producto_vista_crearProducto', '_controller' => 'App\\Controller\\ProductoController::crearProducto'], null, null, null, false, false, null]],
        '/producto/mostrar-productos' => [[['_route' => 'producto_vista_mostrarProductos', '_controller' => 'App\\Controller\\ProductoController::mostrarProductos'], null, null, null, false, false, null]],
        '/producto/crear' => [[['_route' => 'producto_accion_save', '_controller' => 'App\\Controller\\ProductoController::save'], null, null, null, false, false, null]],
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
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
