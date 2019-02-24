<?php

use BasicApp\Site\Models\MenuModel;
use BasicApp\Site\Models\MenuItemModel;

if (!function_exists('menu_items'))
{
    function menu_items(string $menu, bool $create = false, array $params = [])
    {
        $menu = MenuModel::getEntity(['menu_uid' => $menu], $create, $params);

        $return = [];

        if (!$menu)
        {
            return $return;
        }

        $query = new MenuItemModel;

        $items = $query->builder()
            ->where('item_menu_id', $menu->menu_id)
            ->orderBy('item_sort ASC')
            ->findAll();

        foreach($items as $item)
        {
            $return[] = [
                'label' => $item->item_name,
                'url' => $item->item_url,
                'options' => [
                    'class' => $item->item_html_class
                ]
            ];
        }

        return $return;
    }
}