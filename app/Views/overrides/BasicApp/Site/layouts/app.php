<?php 

use App\Models\AppConfig;

$demo = config('demosite');

$appConfig = config(AppConfig::class);

?>
<?= view_cell('SiteCell::layout', [
	'scripts' => $this->renderSection('scripts'),
	'styles' => $this->renderSection('styles'),
	'title' => $title ?? null,
	'locale' => service('request')->getLocale(),
	'content' => $this->renderSection('content'),
	'header' => view_cell('SiteCell::header', [
		'title' => $demo->headerTitle,
		'description' => $demo->headerDescription,
		'backgroundImage' => $appConfig->getBackgroundImageUrl()
	]),
	'footer' => view_cell('SiteCell::footer', [
		'copyright' => str_replace(':YEAR', date('Y'), $demo->copyright)
	]),
	'nav' => view_cell('SiteCell::nav', [
		'siteName' => $demo->siteName,
		'baseUrl' => base_url(),
		'items' => [
			$demo->indexPage->page_url => [
                'label' => $demo->indexPage->page_name, 
                'url' => '#' . $demo->indexPage->page_url
            ],
            $demo->servicesPage->page_url => [
                'label' => $demo->servicesPage->page_name, 
                'url' => '#' . $demo->servicesPage->page_url
            ],
            $demo->contactsPage->page_url => [
                'label' => $demo->contactsPage->page_name, 
                'url' => '#' . $demo->contactsPage->page_url
            ]
		]
	])
]);?>