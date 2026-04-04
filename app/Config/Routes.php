<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', '\BasicApp\Site\Controllers\Home::index');

$routes->add('/', '\BasicApp\Page\Controllers\Page::view');

$routes->add('admin', '\BasicApp\Page\Controllers\Admin\Page::index');
