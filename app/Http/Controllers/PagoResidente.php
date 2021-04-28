<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Residente;

class PagoResidente extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $residentes = Residente::all();

       return view('sistema/pagoresidentes/index')->with([
           'residentes' => $residentes,
       ]);
    }
}
