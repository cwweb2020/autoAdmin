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
            
        <!--PRODUCTOS -->
        <section class="productWrapper">
            <h2 class="tituloProducto">
                Productos
            </h2>

            <div class="alert alertCurso">
                <span><i class="fas fa-exclamation-circle"></i></span>  <span class="span2">¿Tenes alguna duda sobre nuestros productos o servicios?<span class="barra">|</span>Contactate para un ASESORAMIENTO PERSONALIZADO.</span>  
               </div>
                    <h2 class="titulodelista" style="margin: 0; font-size:3rem;" id="tituloproducto">
                       Notebooks
                     </h2>

                    <div class="productoEnvoltura">
                        <!--MENU LATERAL-->
                           <div class="menuLista">
                               <ul id="listado">
                                <li class="primerhijo">CATEGORIAS</li>
                                   <li class="cat cat1">Notebooks<span><i class="fas fa-chevron-down"></i></span></li>
                                   <li class="cat">Pc Esctritorio<span><i class="fas fa-chevron-down"></i></span></li>
                                   <li class="cat">Hardware<span><i class="fas fa-chevron-down"></i></span></li>
                                   <li class="cat">Idioma<span><i class="fas fa-chevron-down"></i></span></li>
                                   <li class="cat">Características<span><i class="fas fa-chevron-down"></i></span></li>
                               </ul>
                           </div>
                           <!--MENU LATERAL-->
                          
                            <!--TARJETAS-->
                           <div class="tarjetasTotal">
                        
                           </div>
                            <!--TARJETAS-->
                    </div>

        </section>
        




        <!--PRODUCTOS -->




    <div class="contenedor">
        <div class="fila">
           
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