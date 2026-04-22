<?php

use CodeIgniter\Exceptions\PageNotFoundException;

$page = page('index');

if (!$page)
{
    throw PageNotFoundException::forPageNotFound();
}

$this->setVar('title', $page->page_title);
$this->setVar('keywords', $page->page_keywords);
$this->setVar('description', $page->page_description);
$this->setVar('navMenuActiveItem', $page->page_uid);

$this->extend('BasicApp\Site\layouts/app');

$this->section('content');

echo view_cell('Site::card', [
    'title' => $page->page_name,
    'body' => $page->page_text
]);

echo view_cell('BasicApp\Blog\Cells\LastPosts', ['limit' => 5]);

$this->endSection();