<?php

use BasicApp\Admin\Models\AdminModel;

$admin = AdminModel::getCurrentUser();

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
		'url'       => site_url($returnUrl),
		'label'     => t('admin.menu', 'Back'),
		'icon'      => 'fa fa-arrow-left',
		'linkClass' => 'btn btn-secondary',
	];
}

echo admin_theme_widget('layout', [
    'optionsMenu' => array_key_exists('optionsMenu', $this->data) ? $this->data['optionsMenu'] : [],
    'title' => array_key_exists('title', $this->data) ? $this->data['title'] : '',
    'mainMenu' => array_key_exists('mainMenu', $this->data) ? $this->data['mainMenu'] : [],
    'actionMenu' => $actionMenu,
    'breadcrumbs' => array_key_exists('breadcrumbs', $this->data) ? $this->data['breadcrumbs'] : [],
    'content' => $content,
    'copyright' => 'Copyright © 2018 - {year} <a href="http://basic-app.com" target="_blank">Basic App</a>. All rights reserved.',
    'logoutUrl' => site_url('admin/logout'),
    'userName' => $admin->admin_name,
    'userEmail' => $admin->admin_email ? $admin->admin_email : '&nbsp;',
    'userAvatar' => $admin->avatarUrl()
]);
