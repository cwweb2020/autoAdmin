<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje Recibido</title>
</head>
<body>
     
    <h4>Recibiste un mensaje de: {{$mensaje['nombre']}}</h4>
    <p>Email :{{$mensaje['email']}} </p>
     <p>Telefono: {{$mensaje['tel']}}</p>
    <p>Asunto: {{$mensaje['mensaje']}}</p>
   
</body>
</html>