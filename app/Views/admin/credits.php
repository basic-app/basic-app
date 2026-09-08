<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
$this->setVar('title', lang('Admin.Credits'));

helper(['form']);

?>
<?php $this->extend('BasicApp\Admin\layout');?>
<?php $this->section('content');?>

<ul>
    <li><a target="_blank" href="https://www.php.net/">PHP 8.2+</a></li>
    <li><a target="_blank" href="https://codeigniter.com/">CodeIgniter 4 Framework</a></li>
    <li><a target="_blank" href="https://adminlte.io/">AdminLTE 4 Theme</a></li>
    <li><a target="_blank" href="https://www.tiny.cloud/">TinyMCE 7 Editor</a></li>
    <li><a target="_blank" href="https://getbootstrap.com/">Bootstrap 5</a></li>
    <li><a target="_blank" href="https://jquery.com/">jQuery 3</a></li>
    <li><a target="_blank" href="https://lokeshdhakar.com/projects/lightbox2/">Lightbox 2</a></li>
    <li><a target="_blank" href="https://fontawesome.com/">Fontawesome 7</a></li>
</ul>

<?php $this->endSection();?>