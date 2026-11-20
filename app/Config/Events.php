<?php

namespace Config;

use CodeIgniter\Events\Events;
use CodeIgniter\Exceptions\FrameworkException;
use CodeIgniter\HotReloader\HotReloader;
use BasicApp\Site\Events\SiteMenu;
use BasicApp\Site\Events\SiteScripts;
use BasicApp\Site\Events\SiteStyles;
use BasicApp\Admin\Events\AdminFooterMenu;
use BasicApp\Admin\Events\AdminStyles;
use BasicApp\Admin\Events\AdminScripts;

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

Events::on('pre_system', static function (): void {
    if (ENVIRONMENT !== 'testing') {
        $value = ini_get('zlib.output_compression');

        if (filter_var($value, FILTER_VALIDATE_BOOLEAN) || (int) $value > 0) {
            throw FrameworkException::forEnabledZlibOutputCompression();
        }

        while (ob_get_level() > 0) {
            ob_end_flush();
        }

        ob_start(static fn($buffer) => $buffer);
    }

    /*
     * --------------------------------------------------------------------
     * Debug Toolbar Listeners.
     * --------------------------------------------------------------------
     * If you delete, they will no longer be collected.
     */
    if (CI_DEBUG && ! is_cli()) {
        Events::on('DBQuery', 'CodeIgniter\Debug\Toolbar\Collectors\Database::collect');
        service('toolbar')->respond();
        // Hot Reload route - for framework use on the hot reloader.
        if (ENVIRONMENT === 'development') {
            service('routes')->get('__hot-reload', static function (): void {
                (new HotReloader())->run();
            });
        }
    }
});

// Register custom scripts
SiteScripts::on(static function (SiteScripts $event): void {
    $event->addItems([
        view('scripts')
    ]);
});

// Register custom styles
SiteStyles::on(static function (SiteStyles $event): void {
    $event->addItems([
        view('styles')
    ]);
});

// Custom events
SiteMenu::on(static function (SiteMenu $event): void {
    $event->addItems([
        'credits' => [
            'url' => '#credits',
            'label' => lang('Site.Credits'),
            'sort' => 999999
        ]
    ]);
});

AdminFooterMenu::on(static function (AdminFooterMenu $event): void {
    $event->addItems([
        'support' => [
            'url' => site_url('admin/support'),
            'label' => lang('Admin.Support'),
            'sort' => 999998
        ],
        'credits' => [
            'url' => site_url('admin/credits'),
            'label' => lang('Admin.Credits'),
            'sort' => 999999
        ]
    ]);
});

// Register custom admin scripts
AdminScripts::on(static function (AdminScripts $event): void {
    $event->addItems([
        view('admin/scripts')
    ]);
});

// Register custom admin styles
AdminStyles::on(static function (AdminStyles $event): void {
    $event->addItems([
        view('admin/styles')
    ]);
});
