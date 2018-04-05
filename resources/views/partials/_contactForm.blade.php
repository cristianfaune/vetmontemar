{!! Form::open(['url' => 'contact', 'id'=> 'contact-form']) !!}
  <p>
    {{Form::text('name',null, array('id'=>'name',
      'name'=>'name', 'class'=>'comm-field', 'placeholder'=>'¿Cuál es tu nombre?'))}}
  </p>
  <p>
    {{Form::text('email',null, array('id'=>'email',
       'name'=>'email', 'class'=>'comm-field', 'placeholder'=>'Escribe tu email'))}}
  </p>
  <p>
    {{Form::text('subject',null, array(
    'name'=>'subject', 'class'=>'comm-field', 'id'=>'subject', 'placeholder'=>'Sobre qué quieres comentarnos'))}}
  </p>
  <p>
    {{Form::textarea('message',null, array(
    'name'=>'message', 'class'=>'comm-field', 'id'=>'message', 'placeholder'=>'Escribe tu mensaje'))}}
  </p>
  <p class="contact-btn">
  {{Form::submit('Enviar', array('class'=>'btn-round','id'=>'submit-contact',
  'name'=>'submit-contact'))}}
  </p>
{!! Form::close() !!}
