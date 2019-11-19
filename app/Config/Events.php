<?php

namespace Config;

use CodeIgniter\Events\Events;
use BasicApp\System\SystemEvents;
use BasicApp\Site\SiteEvents;
use BasicApp\Admin\AdminEvents;
use BasicApp\Helpers\Url;

/*
 * --------------------------------------------------------------------
 * Application Events
 * --------------------------------------------------------------------
 * Events allow you to tap into the execution of the program without
 * modifying or extending core files. This file provides a central
 * location to define your events, though they can always be added
 * at run-time, also, if needed.
 *
 * You create code that can execute by subscribing to events with
 * the 'on()' method. This accepts any form of callable, including
 * Closures, that will be executed when the event is triggered.
 *
 * Example:
 *      Events::on('create', [$myInstance, 'myMethod']);
 */
if (!is_cli())
{
    Events::on('pre_system', function() {

    	while (ob_get_level() > 0)
    	{
    		ob_end_flush();
    	}

    	ob_start(function ($buffer) {
    		return $buffer;
    	});

    	/*
    	 * --------------------------------------------------------------------
    	 * Debug Toolbar Listeners.
    	 * --------------------------------------------------------------------
    	 * If you delete, they will no longer be collected.
    	 */
    	if (ENVIRONMENT !== 'production')
    	{
            Events::on('DBQuery', 'CodeIgniter\Debug\Toolbar\Collectors\Database::collect');
    		
            Services::toolbar()->respond();
    	}

    });
}

SystemEvents::onPreSystem(function() {

    require APPPATH . 'ThirdParty/bootstrap.php';

});

if (class_exists(SiteEvents::class))
{
    SiteEvents::onSeed(function($created) {

        if ($created)
        {
            \BasicApp\Site\Models\PageModel::getPage('about', true, [
                'page_name' => 'About',
                'page_text' => '<p>About page text.</p>',
                'page_published' => 1
            ]);

            $mainMenu = \BasicApp\Site\Models\MenuModel::getMenu('main', false);

            if ($mainMenu)
            {
                \BasicApp\Site\Models\MenuItemModel::getEntity(
                    ['item_menu_id' => $mainMenu->menu_id, 'item_url' => '/page/about'], 
                    true, 
                    [
                        'item_name' => 'About',
                        'item_enabled' => 1,
                        'item_sort' => 10
                    ]
                );
            }
        }

    });
}

if (class_exists(AdminEvents::class))
{
    AdminEvents::onRegisterAssets(function($event) {

        \BasicApp\TinyMceJs\Assets::register($event->head, $event->beginBody, $event->endBody);
        \BasicApp\CodeMirrorJs\Assets::register($event->head, $event->beginBody, $event->endBody);

    });
}

SystemEvents::onSeed(function($event) {

    if ($event->reset)
    {
        $files = \BasicApp\Helpers\FileHelper::readDirectory(FCPATH . 'uploaded/app');

        foreach($files as $file)
        {
            if ($file == '.gitignore')
            {
                continue;
            }

            \BasicApp\Helpers\FileHelper::delete(FCPATH . 'uploaded/app/' . $file);

            \BasicApp\Helpers\CliHelper::message('Deleted: ' . $file);
        }
    }

    $seeder = Database::seeder();

    $seeder->call(\App\Database\Seeds\AppSeeder::class);
});

if (class_exists(AdminEvents::class))
{
    AdminEvents::onOptionsMenu(function($event)
    {
        $modelClass = \App\Models\AppConfigModel::class;

        $event->items[$modelClass] = [
            'label' => t('admin.menu', 'Application'),
            'icon' => 'fa fa-desktop',
            'url' => Url::createUrl('admin/config', ['class' => $modelClass])
        ];
    });
}