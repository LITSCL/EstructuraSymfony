<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'default' => [[], ['_controller' => 'App\\Controller\\DefaultController::default'], [], [['text', '/']], [], [], []],
    'usuario_vista_crearUsuario' => [[], ['_controller' => 'App\\Controller\\UsuarioController::crearUsuario'], [], [['text', '/usuario/crear-usuario']], [], [], []],
    'usuario_vista_mostrarUsuarios' => [[], ['_controller' => 'App\\Controller\\UsuarioController::mostrarUsuarios'], [], [['text', '/usuario/mostrar-usuarios']], [], [], []],
    'usuario_accion_save' => [[], ['_controller' => 'App\\Controller\\UsuarioController::save'], [], [['text', '/usuario/crear']], [], [], []],
    'usuario_vista_panelAdministrador' => [[], ['_controller' => 'App\\Controller\\UsuarioController::panelAdministrador'], [], [['text', '/usuario/panel-administrador']], [], [], []],
    'usuario_vista_panelCliente' => [[], ['_controller' => 'App\\Controller\\UsuarioController::panelCliente'], [], [['text', '/usuario/panel-cliente']], [], [], []],
    'usuario_vista_iniciarSesion' => [[], ['_controller' => 'App\\Controller\\UsuarioController::iniciarSesion'], [], [['text', '/iniciar-sesion']], [], [], []],
    'usuario_accion_autenticarSesion' => [[], ['_controller' => 'App\\Controller\\UsuarioController::autenticarSesion'], [], [['text', '/autenticar-sesion']], [], [], []],
    'usuario_accion_errorSesion' => [[], ['_controller' => 'App\\Controller\\UsuarioController::errorSesion'], [], [['text', '/error-sesion']], [], [], []],
    'usuario_accion_cerrarSesion' => [[], ['_controller' => 'App\\Controller\\UsuarioController::cerrarSesion'], [], [['text', '/cerrar-sesion']], [], [], []],
    'categoria_vista_crearCategoria' => [[], ['_controller' => 'App\\Controller\\CategoriaController::crearCategoria'], [], [['text', '/categoria/crear-categoria']], [], [], []],
    'categoria_vista_mostrarCategorias' => [[], ['_controller' => 'App\\Controller\\CategoriaController::mostrarCategorias'], [], [['text', '/categoria/mostrar-categorias']], [], [], []],
    'categoria_accion_save' => [[], ['_controller' => 'App\\Controller\\CategoriaController::save'], [], [['text', '/categoria/crear']], [], [], []],
    'producto_vista_crearProducto' => [[], ['_controller' => 'App\\Controller\\ProductoController::crearProducto'], [], [['text', '/producto/crear-producto']], [], [], []],
    'producto_vista_mostrarProductos' => [[], ['_controller' => 'App\\Controller\\ProductoController::mostrarProductos'], [], [['text', '/producto/mostrar-productos']], [], [], []],
    'producto_accion_save' => [[], ['_controller' => 'App\\Controller\\ProductoController::save'], [], [['text', '/producto/crear']], [], [], []],
];