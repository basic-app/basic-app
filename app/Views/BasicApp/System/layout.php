<?php

use BasicApp\Helpers\Url;
use BasicApp\System\SystemEvents;
use BasicApp\Site\SiteEvents;

$theme = service('theme');

SystemEvents::registerAssets($theme->head, $theme->beginBody, $theme->endBody);

if (class_exists(BasicApp\Site\SiteEvents::class))
{
    $mainMenu = menu_items('main', true, ['menu_name' => 'Main Menu']);
}
else
{
    $mainMenu = [];
}

if (array_key_exists('mainMenu', $this->data))
{
    $mainMenu = array_merge_recursive($mainMenu, $this->data['mainMenu']);
}

$defaultTitle = 'My Site';

$defaultDescription = 'Default page description';

$siteName = 'My Site';

$copyright = '&copy; My Company {year}'; 

if (class_exists(SiteEvents::class))
{
    $siteName = block('layout.siteName', $siteName);
    $copyright = block('layout.copyright', $copyright);
    $defaultTitle = block('layout.defaultTitle', $defaultTitle);
    $defaultDescription = block('layout.defaultDescription', $defaultDescription);
}

$contactsMenu = [];

foreach(menu_items('social', true, ['menu_name' => 'Social Buttons']) as $menuItem)
{
    $contactsMenu[] = [
        'icon' =>  ! empty($menuItem['icon']) ? ($menuItem['icon'] . ' fa-stack-1x fa-inverse') : null,
        'url' => $menuItem['url'],
        'options' => [
            'title' => $menuItem['label']
        ]
    ];
}

$appConfig = config(App\Models\AppConfig::class);

echo $theme->mainLayout([
    'backgroundImage' => $appConfig->getBackgroundImageUrl(),
    'title' => array_key_exists('title', $this->data) ? $this->data['title'] : $defaultTitle,
    'description' => array_key_exists('description', $this->data) ? $this->data['description'] : $defaultDescription,
    'siteName' => $siteName,
    'mainMenu' => $mainMenu,
    'actionMenu' => array_key_exists('actionMenu', $this->data) ? $this->data['actionMenu'] : [],
    'breadcrumbs' => array_key_exists('breadcrumbs', $this->data) ? $this->data['breadcrumbs'] : [],
    'content' => $content,
    'copyright' => $copyright,
    'socialMenu' => $contactsMenu
]);