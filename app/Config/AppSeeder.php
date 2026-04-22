<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class AppSeeder extends BaseConfig
{
    public $blocks = [
        [
            'block_id' => 1,
            'block_uid' => 'layout.headerTitle',
            'block_content' => 'Basic App'
        ],
        [
            'block_id' => 2,
            'block_uid' => 'layout.headerDescription',
            'block_content' => 'Demo Application'
        ],
        [
            'block_id' => 3,
            'block_uid' => 'layout.footerCopyright',
            'block_content' => '&copy; My Company {year}'
        ],
        [
            'block_id' => 4,
            'block_uid' => 'layout.navTitle',
            'block_content' => 'My Site'
        ]
    ];

    public $pages = [
        [
            'page_id' => 1,
            'page_uid' => 'index',
            'page_name' => 'Home',
            'page_text' => '<p>Index page text.</p>',
            'page_published' => 1
        ],
        [
            'page_id' => 2,
            'page_uid' => 'blog',
            'page_name' => 'Blog',
            'page_text' => '<p>Blog page text.</p>',
            'page_published' => 1
        ],
        [
            'page_id' => 3,
            'page_uid' => 'about',
            'page_name' => 'About',
            'page_text' => '<p>About page text.</p>',
            'page_published' => 1
        ]
    ];

    public $posts = [
        [
            'post_id' => 1,
            'post_slug' => 'post-1',
            'post_title' => 'Post #1',
            'post_description' => 'Post 1 description.',
            'post_text' => '<p>Post 1 text.</p>',
            'post_active' => 1
        ],
        [
            'post_id' => 2,
            'post_slug' => 'post-2',
            'post_title' => 'Post #2',
            'post_description' => 'Post 2 description.',
            'post_text' => '<p>Post 2 text.</p>',
            'post_active' => 1
        ],
        [
            'post_id' => 3,
            'post_slug' => 'post-3',
            'post_title' => 'Post #3',
            'post_description' => 'Post 3 description.',
            'post_text' => '<p>Post 3 text.</p>',
            'post_active' => 1
        ]
    ];

    public $menu = [
        [
            'menu_id' => 1,
            'menu_uid' => 'nav',
            'menu_name' => 'Main'
        ],
        [
            'menu_id' => 2,
            'menu_uid' => 'footer',
            'menu_name' => 'Footer'
        ]
    ];

    public $menu_item = [
        [
            'item_id' => 1,
            'item_menu_id' => 1,
            'item_url' => '/',
            'item_name' => 'Home',
            'item_sort' => 1,
            'item_enabled' => 1,
            'item_uid' => 'index'
        ],
        [
            'item_id' => 2,
            'item_menu_id' => 1,
            'item_url' => '/blog',
            'item_name' => 'Blog',
            'item_sort' => 2,
            'item_enabled' => 1,
            'item_uid' => 'blog'
        ],
        [
            'item_id' => 3,
            'item_menu_id' => 1,
            'item_url' => '/page/about',
            'item_name' => 'About',
            'item_sort' => 3,
            'item_enabled' => 1,
            'item_uid' => 'about'
        ],
        [
            'item_id' => 4,
            'item_menu_id' => 2,
            'item_url' => 'https://github.com/basic-app/appstarter',
            'item_name' => 'GitHub',
            'item_sort' => 1,
            'item_enabled' => 1,
            'item_html_class' => 'fa-github'
        ]
    ];
}