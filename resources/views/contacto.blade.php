@extends('template.plantilla')
    <link rel="stylesheet" href="{{asset('contactoestilo.css')}}">
@section('content')

<x-header/>

 <div class="margenContacto">
     <!--div de margen-->
 </div>
  
<!--contacto-->
<section class="contacto" id="contactoabajo">
    <div class="contacto1 isolate"> 
       <h4>Contacto / Mas Info</h4> 

      <div class="contactotelefono">
       <img src="img/telefonito.png" alt="teleffono">
        <p class="contactotelefonotelefono">Movil / whatsapp : <span class="contactoContenido"> 341 - 265 - 7879 </span></p>
      </div>

      <div class="contactotelefono contactotelefonob">
        <img src="img/gps.png" alt="teleffono">
         <p class="contactotelefonotelefono">Dirección : <span class="contactoContenido"> San Martín 1796, Rosario </span></p>
       </div>

       <div class="contactotelefono contactotelefonob">
        <img src="img/email.png" alt="teleffono">
         <p class="contactotelefonotelefono">e-mail : <span class="contactoContenido"> Morena3soledad
           @gmail.com</span></p>
       </div>

       <div class="contactotelefono contactotelefonob contactotelefonoultimo">
        <img src="img/clock.png" alt="teleffono">
         <p class="contactotelefonotelefono">Horarios de Atención : <span class="contactoContenido"> Lunes a sábados de 9 a  18hs</span></p>
       </div>
       <h4 class="seguinosredes">Seguinos en las redes</h4>
     
      <div class="contactoredes"> 
        <a href="https://wa.link/gz986h" target="_blank"><span><i class="fab fa-whatsapp wap"></i></span></a>
        <a href="https://www.facebook.com/ivana.salud" target="_blank"><span><i class="fab fa-facebook face"></i> </span></a>
        <a href="https://www.instagram.com/ivana.salud/" target="_blank"><span><i class="fab fa-instagram insta"></i></span></a>
        <a href="#"> <span><i class="fab fa-twitter twit"></i> </span></a>
        <a href="#"><span><i class="fab fa-pinterest pint"></i></span></a>
        
      </div>

     </div>

    <!--FORMULARIO-->
            <section class="formulariototal" id="contabajo">
              
                <form method="POST" action="{{route('contacto.store')}}" class="formulariohijo">
                    <h2>Contacto</h2>
                   @csrf
                    <input class="inPut" type="text" name="nombre" placeholder="Nombre*" value="{{old('nombre')}}">
                      {!! $errors->first('nombre','<b>:message</b>') !!}

                    <input class="inPut" type="text" name="email" placeholder="email*" value="{{old('email')}}">
                    {!! $errors->first('email','<b>:message</b>') !!}

                    <input class="inPut" type="text" name="tel" placeholder="Telefono" value="{{old('tel')}}">
                    <textarea name="mensaje" placeholder="Mensaje*" cols="30" rows="10" class="areaTexto">{{old('mensaje')}}</textarea>
                    {!! $errors->first('mensaje','<b>:message</b>') !!}

                     <input type="submit" value="Enviar" class="submit inPut">
                
                </form>
    
            </section>
     

    
</section>  <!--contacto-->
 
  


    
@endsection


