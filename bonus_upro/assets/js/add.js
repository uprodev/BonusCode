jQuery(document).ready(function($) { 
	$(document).on('click', '.submit_contact_form', function(){
		let checked = [];
		$("input[name='question_2']:checked").each(function() {
			checked.push($(this).val());
		});
		if (checked) $('#questions_2').val(checked.join(', '));
	});
});