<?php

namespace App\Http\Controllers;

use App\Mail\MensajeRecibido;
use Illuminate\Support\Facades\Mail;



use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function store(Request $request){
     
       $mensaje= $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'mensaje' => 'required|min:10'
        ]);
  
      Mail::to($request->email)->queue(new MensajeRecibido($mensaje));

       return 'Mensaje Enviado';
       
     }
}
