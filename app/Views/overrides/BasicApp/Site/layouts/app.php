<?php 

helper(['url', 'menu', 'block', 'auth']);

$navMenu = menu('nav');

if (user_id('user'))
{
    $navMenu['profile'] = [
        'item_name' => lang('Profile'),
        'item_url' => site_url('member/profile'),
    ];

    $navMenu['logout'] = [
        'item_name' => lang('Logout'),
        'item_url' => site_url('member/logout')
    ];
}
else
{
    $navMenu['login'] = [
        'item_name' => lang('Login'),
        'item_url' => site_url('login')
    ];

    $navMenu['signup'] = [
        'item_name' => lang('Signup'),
        'item_url' => site_url('signup')
    ];
}

echo view_cell('Site::layout', [
	'scripts' => $this->renderSection('scripts'),
	'styles' => $this->renderSection('styles'),
	'title' => $title ?? null,
	'keywords' => $keywords ?? null,
	'description' => $description ?? null,
	'locale' => service('request')->getLocale(),
	'content' => $this->renderSection('content'),
	'header' => [
		'title' => block('layout.headerTitle', 'My Site Default Title'),
		'description' => block('layout.headerDescription', 'My Site Default Title')
	],
	'nav' => [
		'title' => block('layout.navTitle', 'My Site'),
		'baseUrl' => base_url('/'),
		'menu' => [
            'activeItem' => $navMenuActiveItem ?? null,
            'items' => $navMenu
        ]
	],
    'footer' => [
        'copyright' => block('layout.footerCopyright', '&copy; My Company {year}'),
        'menu' => [
            'items' => menu('footer')
        ]
    ]
]);
