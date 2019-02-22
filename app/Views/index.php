<?php

echo PHPTheme::widget('page', [
    'text' => $page->page_text,
    'title' => $page->page_name
]);
?>

<?php
/*
echo view_cell('BasicApp\Blog\Widgets\LastPosts::widget', ['limit' => 5]);

echo PHPTheme::widget('button', [
    'url' => site_url('blog'),
    'title' => 'Read more'
]);
*/