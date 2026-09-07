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
