<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->add('/', '\BasicApp\Site\Controllers\Home::index');
$routes->add('admin', '\BasicApp\Page\Controllers\Admin\Page::index');
