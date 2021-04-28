<?php

namespace App\Http\Controllers;

use App\Models\Residente;
use Illuminate\Http\Request;
use App\Http\Requests\ResidenteRequest;
use Carbon\Carbon;

class ResidenteController extends Controller
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
        return view('sistema/entrada/residente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ResidenteRequest $request)
    {   
        $resident = $request->validated();
        $coleccion = collect($resident);

        $placa = $coleccion->first();

        $residente = Residente::create([
            'preciominuto' => 0.5,
            'placa' => strtoupper($placa),
            'tiempoestacionado' => rand(1, 100),
       ]);
        /**
         *        $residente = Residente::create([
            'preciominuto' => 0.5,
            'placa' => $placa,
            'tiempoestacionado' => rand(1, 100),
       ]);
         */

        return redirect()->route('systems.index')->with('success', 'Vehículo residente añadido correctamente');
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Residente  $residente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Residente $residente)
    {
        //
    }


}
