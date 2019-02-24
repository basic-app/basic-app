<?php

use BasicApp\Site\Models\Block;
use Config\Settings;

$buttons = [];

/*
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
        'title' => 'Basic App e-mail'
    ]
];
*/

/*
foreach (Block::findAllByPrefix('layout.social') as $row)
{
	$buttons[] = [
		'url' => $row->block_content,
		'icon' => str_replace('layout.social.', '', $block->block_uid)
	];
}
*/

/*
$settings = config(App\Models\Settings::class);

$background = $settings->background_image;

if ($background)
{
	$background = base_url('uploaded/files/' . $background);
}
*/

$background = null;

echo PHPTheme::widget('layout', [
	'title' => isset($this->data['title']) ? $this->data['title'] : null,
	'header' => [
		'title' => block('layout_title', 'My App'),
		'description' => block('layout_description', 'My First CodeIgniter 4 Application')
	],
	'navigation' => [
		'title' => block('layout_title', 'My App'),
		'items' => menu_items('main', true, ['menu_name' => 'Main Menu'])
	],
	'background' => $background,
	'content' => $content,
	'footer' => [
		'copyright' => block('layout_copyright', 'Copyright &copy; <a href="http://example.com">My App</a> 2018 - {year}'),
		'buttons' => $buttons
	]
]);