<?php namespace Config;

use CodeIgniter\Events\Events;
use PHPTheme;

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
if (ENVIRONMENT !== 'production')
{
	Events::on('DBQuery', 'CodeIgniter\Debug\Toolbar\Collectors\Database::collect');

	Events::on('pre_system', function () {
		if (ENVIRONMENT !== 'testing')
		{
			ob_start(function ($buffer) {
				return $buffer;
			});
		}
		Services::toolbar()->respond();
	});
}

Events::on('pre_system', function() {

    helper('menu');

    require_once APPPATH . 'ThirdParty/BasicApp/Core/AdminController.php';

    PHPTheme::$namespace = 'Theme\CleanBlog';

    PHPTheme::$path = 'components/startbootstrap-clean-blog';
});

Events::on('admin_controller_constructor', function()
{
    PHPTheme::$namespace = 'Theme\CoolAdmin';

    PHPTheme::$path = 'components/CoolAdmin';
});

Events::on('page_head', function()
{
    if (PHPTheme::$path == 'components/CoolAdmin')
    {
        echo view('admin/layout-head');
    }
    else
    {
        echo view('layout-head');
    }
});

Events::on('page_body_begin', function()
{
    if (PHPTheme::$path == 'components/CoolAdmin')
    {
        echo view('admin/layout-body-begin');
    }
    else
    {
        echo view('layout-body-begin');
    }
});

Events::on('page_body_end', function()
{
    if (PHPTheme::$path == 'components/CoolAdmin')
    {
        echo view('admin/layout-body-end');
    }
    else
    {
        echo view('layout-body-end');
    }
});

Events::on('admin_options_menu', function($event)
{
    $modelClass = 'App\Models\ApplicationConfigModel';

    $event->items[$modelClass] = [
        'label' => $modelClass::getFormName(),
        'icon' => 'fa fa-desktop',
        'url' => classic_url('admin/config', ['class' => $modelClass])
    ];
});