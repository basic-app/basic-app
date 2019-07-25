<?php

use BasicApp\Helpers\Url;
use BasicApp\Admin\AdminEvents;

$admin = service('currentAdmin');

if (!$admin)
{
	throw new Exception('Security check error.');
}

$actionMenu = array_key_exists('actionMenu', $this->data) ? $this->data['actionMenu'] : [];

$request = service('request');

$returnUrl = $request->getGet('returnUrl');

if ($returnUrl)
{
	$actionMenu[] = [
		'url'       => Url::createUrl($returnUrl),
		'label'     => t('admin.menu', 'Back'),
		'icon'      => 'fa fa-arrow-left',
		'linkClass' => 'btn btn-secondary',
	];
}

$adminTheme = service('adminTheme');

$adminTheme->head .= view('admin/layout-head');

$adminTheme->beginBody .= view('admin/layout-body-begin');

$adminTheme->endBody .= view('admin/layout-body-end');

echo $adminTheme->mainLayout([
    'optionsMenu' => [
        'items' => AdminEvents::optionsMenu()
    ],
    'mainMenu' => [
        'items' => AdminEvents::mainMenu()
    ],
    'title' => array_key_exists('title', $this->data) ? $this->data['title'] : '',
    'actionsMenu' => [
        'items' => $actionMenu
    ],
    'breadcrumbs' => [
        'items' => array_key_exists('breadcrumbs', $this->data) ? $this->data['breadcrumbs'] : []
    ],
    'content' => $content,
    'copyright' => 'Copyright © 2018 - {year} <a href="http://basic-app.com" target="_blank">Basic App</a>.' 
        . ' All rights reserved.',
    'account' => [
        'name' => $admin->admin_name,
        'description' => $admin->admin_email ? $admin->admin_email : '&nbsp;',
        'avatarUrl' => $admin->avatarUrl(),
        'profileUrl' => '#profile',
        'logoutUrl' => Url::createUrl('admin/logout'),
        'logoutLabel' => t('admin', 'Logout')
    ],

]);
