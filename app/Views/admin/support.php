<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
$this->setVar('title', lang('Admin.Support'));

helper(['form']);

?>
<?php $this->extend('BasicApp\Admin\layout');?>
<?php $this->section('content');?>

<p>Support Forum: <a target="_blank" href="https://forum.codeigniter.com/thread-73103.html">https://forum.codeigniter.com/thread-73103.html</a></p>
<p>E-mail: <a target="_blank" href="mailto:dev@basic-app.com">dev@basic-app.com</a></p>
<p>We’re really happy if you liked our system and are using it in your projects. If you need help with programming your websites and CRM systems, just write to us! We’d be glad to offer you programming services either on an hourly basis or based on results. We can program modules for Basic App, write in pure CodeIgniter 3/4, are skilled with the Yii 1/2 framework, and know Laravel 10/11/12/13 really well.</p>
<p>Best regards,<br>
Basic App Dev Team</p>

<?php $this->endSection();?>