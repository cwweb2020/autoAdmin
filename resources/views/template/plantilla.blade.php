<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
    content="Pagina sobre armado y venta de pc y reparacion de pc,venta de insumos"/>
     <!-- iconos de materialize -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- favicon -->
      <link rel="shortcut icon" type="image/png" href="{{asset('img/favicon.png')}}">
     <!-- Compiled and minified materialize CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <!-- AOS SCROLL EFFECT -->
     <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
     <link rel="stylesheet" href="{{asset('style.css')}}">
    <title>Pagina dedicada al armado y venta de computadoras</title>
</head>
<body>
     



    @yield('content')

  



 
   

      <!--BOTON DE WAPP-->
          <a href="https://wa.link/q98u14" target="_blank">
           <button class="flotante2"><i class="fab fa-whatsapp" style="font-size: 4rem;"></i></button>
         </a>
     <!--BOTON DE WAPP-->

    @livewireScripts
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="{{asset('all.min.js')}}"></script>
  <script src="{{asset('application.js')}}"></script>
  <script src="{{asset('paralax.js')}}"></script>
  
  
  
 
  
</body>
</html>