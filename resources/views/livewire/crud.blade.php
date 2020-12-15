<div> 
    <form action="" class="w-50 mx-auto mb-4">
        <div class="mb-3">
          <label class="form-label">Foto</label>
          <input name="foto" type="text" class="form-control">
        </div>

          <div class="mb-3">
            <label class="form-label">Marca</label>
            <input name="marca" type="text" class="form-control">
          </div>
        

        <div class="mb-3">
          <label class="form-label">Descripcion</label>
        <!--  <input wire:model="comentario" type="text" class="form-control" style="height: 100px">-->
          <textarea name="comentario" class="p-2" cols="85" rows="5"></textarea>
        </div>
        
        <button type="submit" class="btn btn-dark">Crear Nuevo</button>
      </form>
      
    <!--fin del formulario -->
    <div class="card">
        <div class="card-body">
 
     <table class="table table-striped table-bordered" id="example">
         <thead>
             <tr>
                <th class="h4">Id</th>
                <th class="h4">Foto</th>
                <th class="h4">Marca</th>
                <th class="h4">Descripcion</th>
                <th class="h4">Editar</th>
              
             </tr>
         </thead>
         <tbody>
             @foreach ($autos as $auto)
             <tr>
                <td>{{$auto->id}}</td>
                 <td><img src="img/{{$auto->foto}}"> </td>
                 <td>{{$auto->marca}}</td>
                 <td>{{$auto->comentario}}</td>
                 <td class="d-flex flex-column">
                     <button wire:click="edit({{$auto}})" class=" btn btn-primary my-3">EDITAR</button>
                     <button class=" btn btn-danger">BORRAR</button>
                 </td>
                
                 
             </tr>
             @endforeach
            
         </tbody>
     </table>
         
 </div>
 </div>
 
 
</div>