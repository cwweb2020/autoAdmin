<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){

      $autos = Car::where('categoria', 'notebook')->get();

  // $autos=Car::all();

    return view('welcome',compact('autos'));
   }

   public function show($marcaAuto){

     // $autos = Car::table('users')->where('votes', 100)->get();

      $autos = Car::where('categoria', $marcaAuto)->get();

      return $autos;


   }

   public function contact(){
     
      return view('contacto');


   }

  










}
