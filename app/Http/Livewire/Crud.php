<?php

namespace App\Http\Livewire;
use App\Models\Car;

use Livewire\Component;

class Crud extends Component{
    
     public $foto,$marca, $comentario;



    public function render(){

        $autos=Car::latest('id')->get();

        return view('livewire.crud',compact('autos'));
    }

    public function store()
    {
       Car::create([
           'foto'=>$this->foto,
           'marca'=>$this->marca,
           'comentario'=>$this->comentario
       ]);

       $this->reset([
           'foto',
           'marca',
           'comentario'
       ]);

    }

  




}
