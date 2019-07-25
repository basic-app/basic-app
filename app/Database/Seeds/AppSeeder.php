<?php

namespace App\Database\Seeds;

use BasicApp\Site\Models\MenuModel;
use BasicApp\Site\Models\MenuItemModel;
use BasicApp\Site\Models\PageModel;
use BasicApp\Blog\Models\BlogPostModel;

class AppSeeder extends \BasicApp\Core\Seeder
{

    public function createBlogPost()
    {
        BlogPostModel::factory()->protect(false)->insert([
            'post_slug' => 'first-post',
            'post_title' => 'First Post Title',
            'post_description' => 'First post description.',
            'post_text' => 'First post text.',
            'post_active' => 1
        ]);        
    }

    public function createMainMenu()
    {
        $mainMenu = MenuModel::getMenu('main', true, ['menu_name' => 'Main Menu']);

        MenuItemModel::getEntity(
            ['item_menu_id' => $mainMenu->menu_id, 'item_url' => '/'], 
            true, 
            [
                'item_name' => 'Index',
                'item_enabled' => 1
            ]
        );

        MenuItemModel::getEntity(
            ['item_menu_id' => $mainMenu->menu_id, 'item_url' => '/blog'], 
            true, 
            [
                'item_name' => 'Blog',
                'item_enabled' => 1
            ]
        );

        MenuItemModel::getEntity(
            ['item_menu_id' => $mainMenu->menu_id, 'item_url' => '/page/about'], 
            true, 
            [
                'item_name' => 'About',
                'item_enabled' => 1
            ]
        );   
    }

    public function createSocialMenu()
    {   
        $menu = MenuModel::getMenu('social', true, ['menu_name' => 'Social Buttons']);

        MenuItemModel::getEntity(['item_menu_id' => $menu->menu_id, 'item_uid' => 'email'], true, [
            'item_enabled' => 1,
            'item_name' => 'E-mail',
            'item_url' => 'mailto:no-reply@example.com',
            'item_icon' => 'fas fa-at fa-stack-1x fa-inverse'
        ]);

        MenuItemModel::getEntity(['item_menu_id' => $menu->menu_id, 'item_uid' => 'github'], true, [
            'item_enabled' => 1,
            'item_name' => 'GitHub Account',
            'item_url' => 'https://github.com/your_account',
            'item_icon' => 'fab fa-github fa-stack-1x fa-inverse'
        ]);
    }

    public function createIndexPage()
    {
        PageModel::getPage('index', true, [
            'page_name' => 'Index',
            'page_text' => '<p>Index page text.</p>',
            'page_published' => 1
        ]);
    }

    public function createAboutPage()
    {
        PageModel::getPage('about', true, [
            'page_name' => 'About',
            'page_text' => '<p>About page text.</p>',
            'page_published' => 1
        ]);
    }

    public function createBlogPage()
    {
        PageModel::getPage('blog', true, [
            'page_name' => 'Blog',
            'page_text' => '<p>Blog page text.</p>',
            'page_published' => 1
        ]);
    }

    public function run()
    {
        if ($this->db->table('menu')->countAllResults() == 0)
        {
            $this->createMainMenu();

            $this->createSocialMenu();
        }

        if ($this->db->table('pages')->countAllResults() == 0)
        {
            $this->createIndexPage();
            
            $this->createAboutPage();
        }

        if ($this->db->table('blog_posts')->countAllResults() == 0)
        {
            $this->createBlogPost();
        }        
    }

}