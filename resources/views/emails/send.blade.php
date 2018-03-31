<head>

<link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet" type="text/css">

<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

</head>

<body>

<style>
  p {
      font-weight: 300;
      font-family: 'Lato';
    }

  h3 {
      font-family: 'Lato', sans-serif;
     }

  .footer{
    font-weight: 300;
    font-family: 'Lato';
    font-size: 10px;
  }

  .info{
    font-weight: 300;
    font-family: 'Lato';
    font-size: 12px;
  }
</style>

<h3 class="">{{$name}}, te acaba de enviar el siguiente mensaje:</h3>

<div class="">
  <p>{{$bodyMessage}}</p>
</div>
<br>
<div class="info">
  <p>Puedes escribirle a {{$name}} directamente a su correo: <strong>{{$email}}</strong>
  simplemente seleccionando la opción <i>responder</i> o <i>replay</i></p>
</div>
<br>
<hr>
<p class="footer">
  Enviado desde: Formulario web
</p>

</body>
