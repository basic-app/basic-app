<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->add('/', '\BasicApp\Page\Controllers\Page::view');
$routes->add('admin', '\BasicApp\Page\Controllers\Admin\Page::index');
