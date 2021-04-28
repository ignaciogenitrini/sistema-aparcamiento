<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oficial;
use App\Http\Requests\OficialRequest;

class OficialController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('sistema/entrada/oficial');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OficialRequest $request)
    {
        $voficial = Oficial::create($request->validated());

        return redirect()->route('systems.index')->with('success', 'Vehiculo oficial añadido correctamente.');
    }
}
