@extends('template.plantilla')

@section('content') 

          <!--COMPONENTE HEADER -->
             <x-header/>
          <!--COMPONENTE HEADER -->

           <!--HERO -->
             <section class="hero">
                 <img src="{{asset('img/pc.jpg')}}" alt="" class="responsive-img">
             </section>
            <!--HERO -->
            
   
    <div class="contenedor">
        <div class="fila">
            <h4>Clásicos: </h4>
            <div class="botones">
               <a href="{{ route('home.index') }}"> <button class="green">Todos</button></a>
                <button class="rojo" onclick="Mercedes('mercedes')">Mercedes</button>
                <button class="negro" onclick="Mercedes('audi')">Audi</button>
             </div>
            <ul id="contenedor">

                @foreach ($autos as $auto)
          
                 <li><img src="..{{$auto->foto}}" alt="" class="materialboxed">  <b><p style="text-transform: uppercase">Marca: {{$auto->marca}}</p></b><p>{{$auto->comentario}}</p> </li>
           
                @endforeach

            </ul>
            
        </div>
    </div>
   
  
    
     <script>  
     // seccion 

     let seccion = document.getElementById('contenedor')
   
     
      function Mercedes (marcaAuto) {
        fetch('http://127.0.0.1:8000/mostrar'+marcaAuto)
        .then(res => res.json() )
        .then(res => {
            seccion.innerHTML=''
           for (let index = 0; index < res.length; index++) {
               const i = res[index];
               console.log(i);
            seccion.innerHTML+=`
            <li><img src="${i.foto}" class="materialboxed"> <b><p style="text-transform: uppercase">Marca: ${i.marca}</p></b><p>${i.comentario}</p> </li>
            
            `
               
           }
            
          
              })
       
      } 
      AOS.init();
    </script>
    
@endsection