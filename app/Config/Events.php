<?php 

namespace Config;

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

Events::on('pre_system', ['App\Hooks\Layout', 'preSystem']);
Events::on('admin_controller_constructor', ['App\Hooks\Layout', 'adminControllerConstructor']);
Events::on('page_head', ['App\Hooks\Layout', 'head']);
Events::on('page_body_begin', ['App\Hooks\Layout', 'bodyBegin']);
Events::on('page_body_end', ['App\Hooks\Layout', 'bodyEnd']);
Events::on('admin_options_menu', ['App\Hooks\Admin', 'optionsMenu']);
Events::on('blog_post_text', ['App\Hooks\BlogPostText', 'run']);
Events::on('install', ['App\Hooks\Install', 'run']);