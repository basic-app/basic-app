<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
helper(['render_view']);

include(VENDORPATH . 'basic-app/sb-scrolling-nav/src/Views/home.php');

?>
<?= view_cell('SitePage', [
    'attributes' => [
        'id' => 'credits',
        'class' => $pageClass == 'bg-light' ? '' : 'bg-light'
    ],
    'content_html' => render_view('credits', ['renderer' => $this]),
    'title' => $this->getData()['title'] // defined in credits view
]);?>