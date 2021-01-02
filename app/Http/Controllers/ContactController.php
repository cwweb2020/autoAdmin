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
            'mensaje' => 'required|min:10',
            'tel' => 'nullable'
        ]);
  
      Mail::to($request->email)->queue(new MensajeRecibido($mensaje));

      return redirect()->route('contacto.contact')->with('status','Mensaje Enviado, gracias por contactarse con nosotros.');

  
       
     }
}
