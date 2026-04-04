<?php 

$demo = config('demosite');

?>
<?= $this->extend('BasicApp\Site\layouts/app');?>
<?= $this->section('content');?>
    <?= view_cell('SiteCell::page', [
        'id' => $demo->indexPage->page_url,
        'title' => $demo->indexPage->page_name,
        'content' => $demo->indexPage->page_text,
        'even' => false
    ]);?>
    <?= view_cell('SiteCell::page', [
        'id' => $demo->servicesPage->page_url,
        'title' => $demo->servicesPage->page_name,
        'content' => $demo->servicesPage->page_text,
        'even' => true
    ]);?>
    <?= view_cell('SiteCell::page', [
        'id' => $demo->contactsPage->page_url,
        'title' => $demo->contactsPage->page_name,
        'content' => $demo->contactsPage->page_text,
        'even' => true
    ]);?>
<?= $this->endSection();?>
<?php
$this->setVar('title', $demo->indexPage->page_title);