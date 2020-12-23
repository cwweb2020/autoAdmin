<?php

namespace App\Http\Controllers;

use App\Mail\MensajeRecibido;
use Illuminate\Support\Facades\Mail;



use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function store(Request $request){
     
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'mensaje' => 'required|min:10'
        ]);
  
      Mail::to('email@email.com')->send(new MensajeRecibido);

       return 'Mensaje Enviado';
      
     }
}
