
$("#contact-form").on('submit',function(e) {
  var name = $("#name").val();
  var email = $("#email").val();
  var subject = $("#subject").val();
  var message = $("#message").val();
  var validRegExp = /^[^@]+@[^@]+.[a-z]{2,}$/i;

  if (name == '') {
    $('#output-contact').html('<div class="output2">Por favor escribe tu nombre</div>');
    return false;
  }else if (email == '') {
    $('#output-contact').html('<div class="output2">Por favor escribe tu email</div>');
    return false;
  }else if (email.search(validRegExp) == -1) {
    $('#output-contact').html('<div class="output2">Por favor escribe un email válido</div>');
    return false;
  }else if (subject == '') {
    $('#output-contact').html('<div class="output2">Por favor escribe el asunto del mensaje</div>');
    return false;
  }else if (message == '') {
    $('#output-contact').html('<div class="output2">Por favor escríbe tu mensaje</div>');
		return false;
  }else {
    $.ajax({
      url:'./contact',
      data:$(this).serialize(),
      type:'POST',
      success:function(data){
        $('#output-contact').html('<div class="output1">Mensaje enviado correctamente</div>').show().fadeIn(1000); //=== Show Success Message==
        $('#contact-form').each(function(){
          this.reset();
        });
      },
      error:function(data){
        $('#output-contact').html('<div class="output2">Algo salió mal, por favor intenta nuevamente</div>').show().fadeIn(1000); //===Show Error Message====
      }
    });
  }
  e.preventDefault(); //=== To Avoid Page Refresh and Fire the Event "Click"===
});
