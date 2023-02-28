<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function index()
    {
     $proyectos = proyectos::all();
     return view('proyectos.index');

    }
    public function nuevop()
    {
 return view(view: 'proyectos.nuevop');
 
    }
    public function store(Request $request)
   {
   User::create($request->all());

   }
}
