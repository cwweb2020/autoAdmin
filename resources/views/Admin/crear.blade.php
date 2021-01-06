
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
                 <h3 class="text-primary">CREAR PRODUCTO</h3>
             @stop
        
        @section('content')

            <!--formulario -->
         <div class="card">
             <div class="card-body">

          
        <form action="{{route('admin.store')}}" class="w-50 mx-auto mb-4" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label class="form-label">Foto</label><br>
            <span id="boton-foto" class="btn btn-dark">Elegir imagen</span>
            <input name="foto" type="file" class="" required accept="image/*" hidden id="dialogo-foto">
            @error('foto')
               <p class="text-danger">La extension del archivo es incorrecta</p> 
            @enderror
          </div>

            <div class="mb-3">
              <label class="form-label">Marca</label> <br>
              <input type="text" name="titulo" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Categoria</label><br>
              <select name="categoria" id="marca" required class="form-control">
                <option selected="true" disabled="disabled">--Seleccione la categoria--</option>
                <option value="Notebook">Notebook</option>
                <option value="Pc_Escritorio">Pc Escritorio</option>
                <option value="Partes">Hard/Partes</option>
                <option value="Perifericos">Perifericos</option>
                <option value="Mother">xxxxx</option>
              </select>
            </div>
          
  
          <div class="mb-3">
            <label class="form-label">Descripcion</label>
          <!--  <input wire:model="comentario" type="text" class="form-control" style="height: 100px">-->
            <textarea name="comentario" maxlength="125" cols="85" rows="5" required class="form-control" id="txtarea"></textarea>
          </div>
          
          <button type="submit" class="btn btn-dark">Crear Nuevo</button>
          <a href="{{route('index')}}" class="btn btn-danger">Cancelar</a>
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
          let botonFoto = document.getElementById('boton-foto');
          let dialogoFoto = document.getElementById('dialogo-foto');
          botonFoto.addEventListener('click', () =>{
             dialogoFoto.click();
          });
            
           </script>

             

           <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
           <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
           <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
           <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>
        @stop

