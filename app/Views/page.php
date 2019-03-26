<?php

$this->data['title'] = $page->page_name;

echo theme_widget('page', ['text' => $page->page_text, 'title' => $page->page_name]);