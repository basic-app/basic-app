<?php

$this->data['title'] = $page->page_name;

echo PHPTheme::widget('page', ['text' => $page->page_text, 'title' => $page->page_name]);