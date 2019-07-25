<?php

$this->data['title'] = $page->page_name;

$theme = service('theme');

echo $theme->page([
    'text' => $page->page_text,
    'title' => $page->page_name
]);

echo view_cell('BasicApp\Blog\Widgets\LastPosts::widget', ['limit' => 5]);