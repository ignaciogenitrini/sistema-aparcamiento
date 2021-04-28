<?php

namespace App\Http\Controllers;

use App\Models\NoResidente;
use Illuminate\Http\Request;
use App\Http\Requests\NoResidenteRequest;

class NoResidenteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('sistema/entrada/noresidente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NoResidenteRequest $request)
    {
        $noresidente = $request->validated();
        $coleccion = collect($noresidente);
        
        $placa = $coleccion->first();

        $noresidente = NoResidente::create([
            'preciominuto' => 0.5,
            'placa' => $placa,
            'tiempoestacionado' => rand(1, 100),
        ]);

        return redirect()->route('systems.index')->with('success', 'Vehículo no residente registrado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NoResidente  $noResidente
     * @return \Illuminate\Http\Response
     */

}

