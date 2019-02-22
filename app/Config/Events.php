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

    require_once APPPATH . 'ThirdParty/BasicApp/Core/AdminController.php';

    //helper(['classic_url', 'theme', 'icon', 'user']);

    PHPTheme::$namespace = 'Theme\CleanBlog';
});

Events::on('admin_controller_constructor', function()
{
    PHPTheme::$namespace = 'Theme\CoolAdmin';

    PHPTheme::$path = 'components/CoolAdmin';
});