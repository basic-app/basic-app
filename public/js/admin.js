$(document).on('submit', 'form.pjax-updated', function(event) {

	var id = $(this).attr('id');
	
	if (id == undefined)
	{
		alert('The "id" attribute is required for ".pjax-updated" form.');
	}
	else
	{
		$.pjax.submit(event, '#' + id, {
			'push': false,
			'replace': false,
			'timeout': 0
		});
	}
	
	return false;
});

function init_editor()
{
	tinymce.init({
		selector: '.editor',
		language: get_editor_language(),
		toolbar: 'undo redo styleselect bold italic alignleft aligncenter alignright bullist numlist outdent indent code',
		plugins: 'code',
		br_in_pre: false
	});
}

function init_code()
{
	$('.code').each(function(){

		var editor = CodeMirror.fromTextArea(this, {
	    	lineNumbers: false,
			matchBrackets: true,
	  		indentUnit: 4,
	  		theme: 'default'            
	 	});
	});
}