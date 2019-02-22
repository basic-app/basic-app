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
        'title' => 'Basic App e-mail'
    ]
];

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
		'title' => 'Basic App',
		'description' => 'An open source simple CMS based on CodeIgniter 4'
	],
	'navigation' => [
		'title' => 'Basic App',
		'items' => [
			['url' => base_url(), 'label' => 'Home'],
            ['url' => site_url('page/about'), 'label' => 'About'],
			['url' => site_url('page/modules'), 'label' => 'Modules'],
            //['url' => site_url('services'), 'label' => 'About Me'],
			['url' => site_url('blog'), 'label' => 'Blog'],

			//['url' => site_url('services'), 'label' => 'My Services'],
			//['url' => site_url('download'), 'label' => 'Downloads'],
			['url' => site_url('page/contact'), 'label' => 'Contact'],
            ['url' => '/forum', 'label' => 'Forum']
		]
	],
	'background' => $background,
	'content' => $content,
	'footer' => [
		'copyright' => 'Copyright &copy; <a href="http://basic-app.com">Basic App</a> 2018 - {year}',
		'buttons' => $buttons
	]
]);