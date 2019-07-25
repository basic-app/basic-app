<?php

$this->data['title'] = $page->page_name;

$theme = service('theme');

$page->setMetaTags($this);

echo $theme->page([
    'text' => $page->page_text, 
    'title' => $page->page_name
]);