<?php 

namespace Config;

use BasicApp\Helpers\Url;
use CodeIgniter\Events\Events;

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

/*
 * --------------------------------------------------------------------
 * Debug Toolbar Listeners.
 * --------------------------------------------------------------------
 * If you delete, they will no longer be collected.
 */
if (ENVIRONMENT !== 'production' && !is_cli())
{
	Events::on('DBQuery', 'CodeIgniter\Debug\Toolbar\Collectors\Database::collect');

	Events::on('pre_system', function()
    {
		if (ENVIRONMENT !== 'testing')
		{
			ob_start(function ($buffer) {
				return $buffer;
			});
		}

		Services::toolbar()->respond();
	});
}

\BasicApp\Admin\AdminEvents::onAdminOptionsMenu(function($menu) {

    if (\BasicApp\Configs\Controllers\Admin\Config::checkAccess())
    {
        $modelClass = \App\Models\ApplicationConfigModel::class;

        $menu->items[$modelClass] = [
            'label' => $modelClass::getFormName(),
            'icon' => 'fa fa-desktop',
            'url' => Url::createUrl('admin/config', ['class' => $modelClass])
        ];
    }
});

\BasicApp\Blog\BlogEvents::onBlogPostText(function($event) {

    $parser = new \Michelf\MarkdownExtra;

    $event->result = $parser->transform($event->result);
});

\BasicApp\System\SystemEvents::onSeeder(function() {

    $seeder = Database::seeder();

    $seeder->call('AppSeeder');
});