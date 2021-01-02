
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
                 <h3 class="text-primary">EDITAR</h3>
             @stop
        
        @section('content')

            <!--formulario -->
         <div class="card">
             <div class="card-body">

          
        <form action="{{route('admin.update',$id)}}" class="w-50 mx-auto mb-4" method="POST" enctype="multipart/form-data">
          @csrf
          @method('put')

          <div class="mb-3">
            <label class="form-label">Foto</label> <br>
           <input name="foto" type="file" class="" accept="image/*"> 
            <img src="{{$id->foto}}" class="mt-2">
            @error('foto')
               <p class="text-danger">La extension del archivo es incorrecta</p> 
            @enderror
          </div>
   
            <div class="mb-3">
              <label class="form-label">Marca</label>
              <input name="titulo" type="text" class="form-control" required value="{{$id->titulo}}">
            </div>
          
  
          <div class="mb-3">
            <label class="form-label">Descripcion</label>
            <textarea name="comentario" class="p-2" cols="85" rows="5" required>{{$id->comentario}}</textarea>
          </div>
          
          <button type="submit" class="btn btn-dark">Editar</button>
          <a href="{{route('index')}}" class="btn btn-danger">CANCELAR</a>
        </form>
        
      <!--fin del formulario -->

    </div>
</div>
    
        @stop
        
        
       
        @section('js')
           <script>
          /*     
        Swal.fire(
          'Agregado',
          'Transaccion realizada con exito',
          'success'
        );  */
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

