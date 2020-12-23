<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){

   $autos=Car::all();

    return view('welcome',compact('autos'));
   }

   public function show($marcaAuto){

      $autos = Car::where('marca', $marcaAuto)->get();

      return $autos;


   }

   public function contact(){
     
      return view('contacto');


   }

  










}
