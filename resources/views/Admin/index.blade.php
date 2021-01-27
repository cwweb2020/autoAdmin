
        @extends('adminlte::page')
    
        @section('plugins.Sweetalert2',true)
        
        @section('css')
             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
             <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
             <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">

            <link rel="stylesheet" href="{{asset('adminStyle.css')}}">
        @stop
        
        @section('title', 'Administrador')
        
        
        @section('content_header')
           <h1>Lista de Productos</h1>
       @stop
        
        @section('content')

        

          
      <a href="{{route('admin.crear')}}" class="btn btn-success mb-4">CREAR PRODUCTO</a>
     
      <div class="card">
          <div class="card-body">
   
       <table class="table table-striped table-bordered" id="example">
           <thead>
               <tr>
                  <th class="h4">Id</th>
                  <th class="h4">Foto</th>
                  <th class="h4">Marca</th>
                  <th class="h4">Categoria</th>
                  <th class="h4">Descripcion</th>
                  <th class="h4">Editar</th>
                
               </tr>
           </thead>
           <tbody>
               @foreach ($autos as $auto)
               <tr>
                  <td>{{$auto->id}}</td>
                   <td><img src="{{$auto->foto}}"> </td>
                   <td>{{$auto->titulo}}</td>
                   <td>{{$auto->categoria}}</td>
                   <td>{{$auto->comentario}}</td>
                   <td class="d-flex flex-column">
                      
                       <a href="{{route('admin.edit',$auto)}}" class="btn btn-primary my-3">EDITAR</a>
                       <form class="formDelete" action="{{route('admin.destroy',$auto)}}" method="POST">
                        @csrf
                        @method('delete')
                           <button class="btn btn-danger botonForm" type="submit">ELIMINAR</button>

                       </form>
                       
                   </td>
                  
                   
               </tr>
               @endforeach
              
           </tbody>
       </table>
           
   </div>
   </div>

    
        @stop
        
        
       
        @section('js')
           <script>
           
         

           $(document).ready(function() {
               $('#example').DataTable({
                   responsive:true
               });
           } );
            
           </script>

           <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
           <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
           <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
           <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>
        @stop

