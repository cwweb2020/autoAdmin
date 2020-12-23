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
            
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere, quas provident. Deserunt voluptatum rem illum. Similique ad quasi, dolore debitis, aliquid blanditiis sit, magnam iure placeat quaerat dolorum esse optio?
            Ab, porro! Nemo beatae iusto rerum in dolorum, cumque placeat, officia esse molestias aliquam voluptatem incidunt suscipit. Illo, dolore amet at libero, magnam in natus, corporis mollitia qui aspernatur quam.
            Commodi repellat corporis porro labore quibusdam facilis esse, numquam ea architecto adipisci qui tempore hic illum, voluptatem dolores deserunt, quae nesciunt reiciendis illo suscipit! Qui quo neque tempora hic consectetur.
            Quos explicabo quam maxime consectetur ex, alias quidem quod ut quasi obcaecati, saepe dolor laborum laudantium. Distinctio inventore possimus consequuntur. Dolorem velit necessitatibus eos hic delectus facere officiis, quas cupiditate?
            Mollitia sit fugiat nobis et, dicta hic iure consequuntur exercitationem reiciendis quam nostrum? Magnam, cupiditate eum ratione mollitia quia possimus, quidem impedit aut vel dolores nihil vero eaque explicabo odit!
            Architecto neque quos, expedita sapiente obcaecati nobis deserunt officia et consectetur aspernatur numquam nam, repudiandae quibusdam blanditiis dolor corporis recusandae, mollitia consequatur! Exercitationem excepturi itaque voluptas, tenetur ipsa saepe molestiae?
            Quo distinctio aperiam dolor, illum doloremque, fuga aspernatur vel eligendi amet velit et! Illo, eius rem quae velit exercitationem reiciendis numquam sed ullam, necessitatibus, a cumque asperiores quod voluptate error?
            Odit hic quisquam dolorum optio assumenda ipsam doloremque repellat temporibus at! Nihil consequuntur veritatis, perspiciatis saepe quidem atque sapiente quos nesciunt corrupti rerum qui consequatur velit quae? Aspernatur, reprehenderit in.
            Maxime dolor, amet voluptatum quas doloribus a vero est porro, ab eaque delectus, aperiam dolorum ea! A quos, quas, tempora ipsam blanditiis perspiciatis, totam excepturi minus ratione numquam modi! Repellat.
            Dolores ex, veritatis harum beatae obcaecati consequuntur pariatur eveniet in laboriosam ullam quaerat adipisci delectus sed quo provident architecto, repudiandae ducimus voluptatum suscipit labore exercitationem. Illum libero mollitia ad rerum!
            Ullam, molestiae nisi. Natus nobis accusamus praesentium corrupti sed aut minima iusto culpa eum, voluptate autem! Minima iste ducimus, laboriosam eius porro ipsa nulla ratione voluptatem, laborum et accusantium esse?
            Consequuntur fugit recusandae corrupti laudantium. Facilis voluptatum esse est minima velit ut vero quidem. Deleniti tempora porro molestias dolorem iure perspiciatis id nam ut eligendi doloribus, delectus dicta facere eveniet.
            Dolorum, repellendus perferendis. Laborum, animi eveniet! Impedit, deserunt! Nisi illum ducimus magnam laborum eum! Deserunt nulla illo vitae totam officiis maiores dolorum. Ducimus vero fugit assumenda earum adipisci ipsam aut.
            Neque nam magnam, ea libero pariatur laborum nobis quas culpa velit officia eum voluptate, dolorem porro quos. Quae molestias ut ea ullam, ipsa at corrupti illo animi neque. Odio, illo.
            Nulla officia ipsam architecto ipsum quam, expedita maxime consectetur cumque ratione magnam, facere incidunt aliquid voluptas atque itaque blanditiis hic nemo harum voluptatem enim unde id saepe obcaecati. Fugit, officia.
            Quod deserunt quam officia eligendi vitae suscipit optio voluptates quis sed modi non, iure delectus accusantium sunt similique praesentium inventore, eos deleniti dolor explicabo harum maiores rem iusto ullam? Distinctio.
            Exercitationem commodi nulla ipsa corporis quaerat, enim provident alias illum natus quia delectus fugiat voluptates fugit, accusantium asperiores quasi vero magni illo. Mollitia fugiat sapiente impedit ipsam reiciendis dolore at!
            Veritatis, eum quaerat impedit natus recusandae ea temporibus fugiat fuga, vitae exercitationem cum. Aspernatur voluptatum modi molestias repudiandae reiciendis, veritaabo dolores enim dolorem sunt at iusto. Animi architecto maiores assumenda tempora cum soluta sapiente? Perferendis ut consectetur maiores optio asperiores excepturi corporis, iste voluptatibus. Magni, veritatis nobis!
            Animi qui nisi odio aliquid eaque est eum, error, nemo natus debitis deserunt nobis ullam beatae! Earum consequuntur veritatis corrupti, illo commodi incidunt est saepe provident maxime a voluptate culpa.</p>

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