<?php

$page->setMetaTags($this);

$theme = service('theme');

echo $theme->page([
    'text' => $page->page_text,
    'title' => $page->page_name
]);

echo view_cell('BasicApp\Blog\Widgets\LastPosts::widget', ['limit' => 5]);

?>

<p>Page rendered in {elapsed_time} seconds. Environment: <?= ENVIRONMENT;?></p>