<?php

namespace App\Http\Controllers;
use App\Models\Oficial;
use App\Models\Residente;

use Illuminate\Http\Request;

class ComienzaMesController extends Controller
{
    protected $residente;

    public function __construct(Residente $residente)
    {   
        $this->middleware('auth');
        $this->residente = $residente;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $oficial = Oficial::truncate();
    
    return redirect()->back()->with('success', 'Registros de vehículos eliminados.');
    }
}
