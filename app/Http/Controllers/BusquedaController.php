<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transport;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BusquedaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(){

 $search = \Request::get('search'); 
 
    $busquedas = Transport::where('nombre','like','%'.$search.'%')
        ->orderBy('nombre')
        ->paginate(20);
 
    return view('admin.transporte.busqueda',compact('busquedas'));


     	      
  
   }

     


}
