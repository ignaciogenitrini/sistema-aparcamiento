<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\SalidaService;
use App\Models\NoResidente;
use App\Models\Residente;
use App\Models\Oficial;

class SalidaController extends Controller
{   
    protected $salidaService;

    public function __construct(SalidaService $salidaService)
    {   
        $this->middleware('auth');
        $this->salidaService = $salidaService;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sistema/salida/index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $matricula = $request->input('matricula');

        $placaoficial = Oficial::where('matricula', $matricula)->first();
        if ($placaoficial != null) {
           return $this->salidaService->voficial($placaoficial);
        } 

        $placaresidente = Residente::where('placa', $matricula)->first();
        if ($placaresidente != null) {
            return $this->salidaService->vresidente($placaresidente);
        } 

        $placanoresidente = NoResidente::where('placa', $matricula)->first();
        if ($placanoresidente != null) {
            return $this->salidaService->vnoresidente($placanoresidente);
        } 

        if (($matricula != $placaoficial) && ($matricula != $placaresidente) && ($matricula != $placanoresidente)) {
                return redirect()->route('systems.index')->with('error', 'Esta matricula no esta cargada en el sistema');
        }
    }

    public function show($request) {
        $vnoresidente = NoResidente::where('placa', $request)->first();
        $vehiculo = collect($vnoresidente);

        return view('sistema/salida/importe')->with([
            'noresidente' => $vehiculo,
        ]);
    }
}
