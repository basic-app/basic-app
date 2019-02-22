<link rel="stylesheet" href="<?= base_url('js/codemirror/lib/codemirror.css');?>">
<script src="<?= base_url('js/codemirror/lib/codemirror.js');?>"></script>
<link rel="stylesheet" href="<?= base_url('js/codemirror/theme/zenburn.css');?>">
<script src="<?= base_url('js/codemirror/mode/xml/xml.js');?>"></script>
<script src="<?= base_url('js/codemirror/mode/htmlmixed/htmlmixed.js');?>"></script>
<script type="text/javascript" src="<?= base_url('js/pjax2/jquery.pjax.js');?>"></script>
<script type="text/javascript" src="<?= base_url('js/tinymce/tinymce.min.js');?>"></script>
<script type="text/javascript" src="<?= base_url('js/pjax2/jquery.pjax.js');?>"></script>
<script type="text/javascript" src="<?= base_url('js/custom.js');?>"></script>
<script type="text/javascript">
function get_editor_language()
{
	return '<?= current_lang();?>';
}
</script>