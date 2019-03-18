<?php

use BasicApp\Site\Models\Block;
use Config\Settings;

$buttons = [];

$buttons[] = [
	'icon' => 'fab fa-github', 
	'url' => 'https://github.com/basic-app',
	'options' => [
		'title' => 'Basic App account on GitHub',
        'target' => '_blank'
	]
];

$buttons[] = [
    'icon' => 'fas fa-at', 
    'url' => 'mailto:support@basic-app.com',
    'options' => [
        'title' => 'Basic App E-mail'
    ]
];

$applicationConfig = config(App\Models\ApplicationConfig::class);

$background = $applicationConfig->getBackgroundImageUrl();

echo PHPTheme::widget('layout', [
	'title' => isset($this->data['title']) ? $this->data['title'] : null,
	'header' => [
		'title' => block('layout_title', 'Basic App'),
		'description' => block('layout_description', 'Based on CodeIgniter 4'),
        'image' => $background
	],
	'navigation' => [
		'title' => block('layout_title', 'Demo App'),
		'items' => menu_items('main', true, ['menu_name' => 'Main Menu'])
	],
	'content' => $content,
	'footer' => [
		'copyright' => block('layout_copyright', 'Copyright &copy; <a href="{url}">{name}</a> {fromYear} - {year}', [
            '{url}' => base_url(),
            '{name}' => 'My Company',
            '{year}' => date('Y'),
            '{fromYear}' => '2018'
        ]),
		'buttons' => $buttons
	]
]);