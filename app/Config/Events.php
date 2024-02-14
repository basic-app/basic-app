<?php

namespace Config;

use CodeIgniter\Events\Events;
use CodeIgniter\Exceptions\FrameworkException;
use CodeIgniter\HotReloader\HotReloader;
use BasicApp\System\SystemEvents;
use BasicApp\Site\SiteEvents;
use BasicApp\Admin\AdminEvents;
use BasicApp\Helpers\Url;
use BasicApp\System\Events\SystemResetEvent;
use BasicApp\System\Events\SystemSeedEvent;
use App\Models\AppConfigModel;
use BasicApp\AdminMenu\AdminMenuEvents;

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

Events::on('pre_system', static function () {
    if (ENVIRONMENT !== 'testing') {
        if (ini_get('zlib.output_compression')) {
            throw FrameworkException::forEnabledZlibOutputCompression();
        }

        while (ob_get_level() > 0) {
            ob_end_flush();
        }

        ob_start(static fn ($buffer) => $buffer);
    }

    /*
     * --------------------------------------------------------------------
     * Debug Toolbar Listeners.
     * --------------------------------------------------------------------
     * If you delete, they will no longer be collected.
     */
    if (CI_DEBUG && ! is_cli()) {
        Events::on('DBQuery', 'CodeIgniter\Debug\Toolbar\Collectors\Database::collect');
        Services::toolbar()->respond();
        // Hot Reload route - for framework use on the hot reloader.
        if (ENVIRONMENT === 'development') {
            Services::routes()->get('__hot-reload', static function () {
                (new HotReloader())->run();
            });
        }
    }
});

Events::on('pre_system', function()
{
    require APPPATH . 'ThirdParty/bootstrap.php';
});


if (class_exists(AdminEvents::class))
{
    AdminEvents::onRegisterAssets(function(\BasicApp\Admin\Events\AdminRegisterAssetsEvent $event)
    {
        \BasicApp\Js\TinyMce\TinyMceAsset::register($event->head, $event->beginBody, $event->endBody);
        \BasicApp\Js\CodeMirror\CodeMirrorAsset::register($event->head, $event->beginBody, $event->endBody);
    });
}

SystemEvents::onSeed(function(SystemSeedEvent $event)
{
    $seeder = Database::seeder();

    $seeder->call(\App\Database\Seeds\AppSeeder::class);
});

SystemEvents::onReset(function(SystemResetEvent $event) {

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
});

if (class_exists(AdminMenuEvents::class))
{
    AdminMenuEvents::onOptionsMenu(function($event)
    {
        $modelClass = \App\Models\AppConfigModel::class;

        $event->items[$modelClass] = [
            'label' => t('admin.menu', 'Application'),
            'icon' => 'fa fa-fw fa-desktop',
            'url' => Url::createUrl('admin/config', ['class' => $modelClass])
        ];
    });
}

if (class_exists(SiteEvents::class))
{
    SiteEvents::onMainLayout(function($event) {

        $config = config('\App\Models\AppConfig');

        if ($config->getBackgroundImageUrl())
        {
            $event->params['backgroundImage'] = $config->getBackgroundImageUrl();
        }
    });
}
