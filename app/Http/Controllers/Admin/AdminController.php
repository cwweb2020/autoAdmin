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
         $car->marca=$request->marca;
         $car->comentario=$request->comentario;

         $car->save();
         
        
        
         return redirect('admin');


       
    }

    public function edit(Car $id){

       return view('Admin.edit',compact('id'));
    }

    public function update(Request $request, Car $id){

       $id->foto=$request->foto;
       $id->marca=$request->marca;
       $id->comentario=$request->comentario;

       $id->save();

       return redirect('admin');
    }










    
}
