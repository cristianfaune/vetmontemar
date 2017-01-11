(function($) {
    "use strict";

	var options2 = { success: showResponseContact, beforeSubmit: showRequestContact};
    $('#contact-form').submit(function() {
        $(this).ajaxSubmit(options2);
        return false;
    });

	})(jQuery);

function showResponseContact(responseText, statusText)  {
	if (statusText == 'success') {
		$('#contact-form-holder').html('<h4>Mensaje enviado con éxito</h4>');
		$('#output-contact').html('<p>' + $('someText', responseText).html()  + '</p>');
	} else {
		alert('status: ' + statusText + '\n\nSomething is wrong here');
	}
}

function showRequestContact(formData, jqForm, options2) {
	var form = jqForm[0];
	var validRegExp = /^[^@]+@[^@]+.[a-z]{2,}$/i;

	if (!form.name.value) {
		$('#output-contact').html('<div class="output2">Por favor escribe tu nombre</div>');
		return false;
	} else if (!form.email.value) {
		$('#output-contact').html('<div class="output2">Por favor escribe tu email</div>');
		return false;
	} else if (form.email.value.search(validRegExp) == -1) {
		$('#output-contact').html('<div class="output2">Por favor escribe un email válido</div>');
		return false;
	}
	else if (!form.subject.value) {
		$('#output-contact').html('<div class="output2">Por favor escribe el asunto del mensaje</div>');
		return false;
	}
	else if (!form.message.value) {
		$('#output-contact').html('<div class="output2">Por favor escríbe tu mensaje</div>');
		return false;
	}
	 else {
	 $('#output-contact').html('Enviando mensaje...!');
		return true;
	}
}
