@extends('template.plantilla')

@section('content') 

          <!--COMPONENTE HEADER -->
             <x-header/>
          <!--COMPONENTE HEADER -->

           <!--HERO -->
             <section class="hero">
              <img src="{{asset('img/pc.jpg')}}" alt="computadora" class="responsive-img">
           
             </section>
            <!--HERO -->

             <!--NOSOTROS -->
              <div class="titullodenosotros">
                  <h4>Nuestros Objetivos :</h4>
              </div>

                <x-whoweare/>
                
             <!--NOSOTROS -->


        <!--PRODUCTOS -->
        <section class="productWrapper">
            <h2 class="tituloProducto">
                Productos
            </h2>

            <div class="alert alertCurso" data-aos="fade-right">
                <span><i class="fas fa-exclamation-circle"></i></span>  <span class="span2">¿Tenes alguna duda sobre nuestros productos o servicios?<span class="barra">|</span>Contactate para un ASESORAMIENTO PERSONALIZADO.</span>  
               </div>
                    <h2 class="titulodelista" style="margin: 0;" id="tituloproducto">
                       Notebooks 
                     </h2> 

                    <div class="productoEnvoltura">
                        <!--MENU LATERAL-->
                           <div class="menuLista">
                               <ul id="listado">
                                <li class="primerhijo">CATEGORIAS <span style="width: 20px"><i class="fas fa-angle-double-down" style="font-size:22px"></i></span></li>
                                   <li class="cat cat1" onclick="Producto('notebook')">Notebooks<span><i class="fas fa-chevron-down"></i></span></li>
                                   <li class="cat" onclick="Producto('pc_escritorio')">Pc Esctritorio<span><i class="fas fa-chevron-down"></i></span></li>
                                   <li class="cat" onclick="Producto('partes')">Hardware/Partes<span><i class="fas fa-chevron-down"></i></span></li>
                                   <li class="cat" onclick="Producto('perifericos')">Periféricos <span><i class="fas fa-chevron-down"></i></span></li>
                                   <li class="cat" onclick="Producto('notebook')">xxxxx<span><i class="fas fa-chevron-down"></i></span></li>
                               </ul>
                           </div>
                           <!--MENU LATERAL-->
                          
                            <!--TARJETA TOTAL-->
                           <div class="tarjetasTotal" id="contenedor">

                     @foreach ($autos as $auto)
                            <!--TARJETA -->
                              <div class="tarjetasWrapper">
                                   <div class="contenedorImagen">
                                       <img src="..{{$auto->foto}}" alt="">
                                   </div>
                                  <div class="contenidoTarjeta">
                                      <h4>{{$auto->titulo}}</h4>  
                                      <p>
                                        {{$auto->comentario}}
                                       </p>
                                  </div>
                              </div>
                            <!--TARJETA -->
                     @endforeach
                          

                           </div>
                            <!--TARJETA TOTAL-->
                    </div>

        </section>
        <!--PRODUCTOS -->

         <!--PARALAX CON QUIENES SOMOS -->
               <x-paralax/>

          <!--PARALAX CON QUIENES SOMOS -->

           <!---------SERVICIOS------->
                     <x-Servicios/>
                   
            <!---------SERVICIOS------->


     <script>  
     // seccion 

     let seccion = document.getElementById('contenedor')
   
      function Producto (categoria) {
        fetch('http://127.0.0.1:8000/mostrar'+categoria)
        .then(res => res.json() )
        .then(res => {
            seccion.innerHTML=''
           for (let index = 0; index < res.length; index++) {
               const i = res[index];
               console.log(i);
            seccion.innerHTML+=`
            <!--TARJETA -->
                              <div class="tarjetasWrapper">
                                   <div class="contenedorImagen">
                                       <img src="${i.foto}" alt="">
                                   </div>
                                  <div class="contenidoTarjeta">
                                      <h4>${i.titulo}</h4>  
                                      <p>
                                        ${i.comentario}
                                       </p>
                                  </div>
                              </div>
             <!--TARJETA -->
                    
            `
               
           }
            
          
              })
       
      } 
    
    </script>

  


    <x-footer/>

    <p class="micw">
        CW.Web <a href="bmx347@gmail.com">&copy</a>; 2021, All Rights Reserved.
     </p>
@endsection