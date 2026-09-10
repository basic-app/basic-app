<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
helper(['render_view']);
?>
<?= view_cell('SiteHero');?>
<?= view_cell('SiteAbout');?>
<?= view_cell('SiteServices');?>
<?= view_cell('SiteContactUs');?>
<?= view_cell('SitePage', [
    'attributes' => [
        'id' => 'credits',
        'class' => 'bg-light'
    ],
    'content_html' => render_view('credits', ['renderer' => $this]),
    'title' => $this->getData()['title'] // defined in credits view
]);?>