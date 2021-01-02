<?php

namespace App\Http\Controllers\Admin;
use App\Models\Car;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexAdmin(){


        $autos=Car::all();

         return view('Admin.index',compact('autos'));
       
    }

    public function crear(){


       
         return view('admin.crear');
       
    }


    public function store(Request $request){

        $request->validate([
            'foto'=>'image|max:2048'
        ]);


        $imagenes=$request->file('foto')->store('public/img');
        $url=Storage::url($imagenes);

         $car=new Car();

         $car->foto=$url;
         $car->titulo=$request->titulo;
         $car->categoria=$request->categoria;
         $car->comentario=$request->comentario;

         $car->save();
         
        
        
         return redirect('admin');


       
    }

    public function edit(Car $id){

       return view('Admin.edit',compact('id'));
    }

   /* public function update(Request $request, Car $id){

       $id->foto=$request->foto;
       $id->marca=$request->marca;
       $id->comentario=$request->comentario;

       $id->save();

       return redirect('admin');
    }  */

    public function update(Request $request, Car $id){
        //sie l cliente cambia la foto
        if($_FILES['foto']['name'] != ""){
      
            //dovidoel nombre de la foto en un array
            $idFotoVieja = explode('/',$id->foto);
            //selecciono el nombre del archivo
            $idFoto = $idFotoVieja[3];
            //eliminio agregando /public/img al path
            Storage::delete('/public/img/'.$idFoto);
            //tomo el archivo nuevo del cliente
            $imagenes=$request->file('foto')->store('public/img');
            //guardo el file en storage
            $url=Storage::url($imagenes);
            //asigno el nuevo nombre a la foto para el registro
            $id->foto=$url;
        }        
      
       $id->categoria=$request->categoria;
       $id->titulo=$request->titulo;
       $id->comentario=$request->comentario;
     
       $id->save();

       return redirect('admin');
    }

    public function destroy(Car $id){
       
        $id->delete();

        $idFotoVieja = explode('/',$id->foto);
        //selecciono el nombre del archivo
        $idFoto = $idFotoVieja[3];
        //eliminio agregando /public/img al path
        Storage::delete('/public/img/'.$idFoto);

        return redirect('admin');
    }










    
}
