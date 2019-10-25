<?php

$page->setMetaTags($this);

$theme = service('theme');

echo $theme->page([
    'text' => $page->page_text,
    'title' => $page->page_name
]);
