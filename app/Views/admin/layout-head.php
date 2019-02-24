<link rel="stylesheet" href="<?= base_url('components/codemirror/lib/codemirror.css');?>">
<link rel="stylesheet" href="<?= base_url('components/codemirror/theme/zenburn.css');?>">
<link rel="stylesheet" href="<?= base_url('css/admin.css');?>">
<script src="<?= base_url('components/codemirror/lib/codemirror.js');?>"></script>
<script src="<?= base_url('components/codemirror/mode/xml/xml.js');?>"></script>
<script src="<?= base_url('components/codemirror/mode/htmlmixed/htmlmixed.js');?>"></script>
<script type="text/javascript" src="<?= base_url('components/jquery-pjax/jquery.pjax.js');?>"></script>
<script type="text/javascript" src="<?= base_url('components/tinymce/tinymce.min.js');?>"></script>
<script type="text/javascript" src="<?= base_url('js/admin.js');?>"></script>
<script type="text/javascript">
function get_editor_language()
{
	return '<?= current_lang();?>';
}
</script>