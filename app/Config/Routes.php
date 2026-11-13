<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', '\BasicApp\Site\Controllers\SiteController::index');
$routes->get('admin', '\BasicApp\Site\Controllers\Admin\SiteSettingsController::index');

$routes->get('admin/credits', static function () {
    return view('admin/credits');
});

$routes->get('admin/support', static function () {
    return view('admin/support');
});

//helper(['admin_auth_config']);
//admin_auth_config_routes($routes);

//helper(['admin_auth_settings']);
//admin_auth_settings_routes($routes);

helper(['admin_auth_shield']);
if (!admin_auth_shield_routes($routes))
{
    // default auth routes
    service('auth')->routes($routes);
}
