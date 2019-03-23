<?php

namespace App\Hooks;

use BasicApp\Site\Models\MenuModel;
use BasicApp\Site\Models\MenuItemModel;

class Install
{

    public static function createSocialMenu()
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

    public static function run()
    {
        static::createSocialMenu();
    }

}