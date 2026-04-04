<?php 

use App\Models\AppConfig;

$demosite = config('demosite');

$appConfig = config(AppConfig::class);

?>
<?= view_cell('SiteCell::layout', [
	'scripts' => $this->renderSection('scripts'),
	'styles' => $this->renderSection('styles'),
	'title' => $title ?? null,
	'locale' => service('request')->getLocale(),
	'content' => $this->renderSection('content'),
	'header' => view_cell('SiteCell::header', [
		'title' => $demosite->headerTitle,
		'description' => $demosite->headerDescription,
		'backgroundImage' => $appConfig->getBackgroundImageUrl()
	]),
	'footer' => view_cell('SiteCell::footer', [
		'copyright' => str_replace(':YEAR', date('Y'), $demosite->copyright)
	]),
	'nav' => view_cell('SiteCell::nav', [
		'siteName' => $demosite->siteName,
		'baseUrl' => base_url(),
		'items' => [
			$demosite->indexPage->page_url => [
                'label' => $demosite->indexPage->page_name, 
                'url' => '#' . $demosite->indexPage->page_url
            ],
            $demosite->servicesPage->page_url => [
                'label' => $demosite->servicesPage->page_name, 
                'url' => '#' . $demosite->servicesPage->page_url
            ],
            $demosite->contactsPage->page_url => [
                'label' => $demosite->contactsPage->page_name, 
                'url' => '#' . $demosite->contactsPage->page_url
            ]
		]
	])
]);?>