<?php

namespace App\Http\Services;
use App\Models\NoResidente;
use App\Models\Oficial;
use App\Models\Residente;


class SalidaService {

    protected $residente;
    protected $noresidente;

    public function __construct(Residente $residente, NoResidente $noResidente)
    {   
        $this->residente = $residente;      
        $this->noresidente = $noResidente;
    }

    public function voficial($request) {
        $voficial = $request;

        if ($voficial != null) {
            $voficial->update([
                'timestamps' => now(),
            ]);
            
            return redirect()->route('systems.index')->with('message', 'Horario del vehículo oficial asociado');
        }
    }

    public function vresidente($request) {
        $vresidente = $request;
        $total = $vresidente->tiempoestacionado * $vresidente->preciominuto;

        if ($vresidente != null) {
            $vresidente->update([
                'total' => $total,
            ]);
        
            return redirect()->route('systems.index')->with('message', 'Salida de vehículo residente registrada');
        }
    }

    public function vnoresidente($request) {
        $vnoresidente = $request;
        $total = $vnoresidente->tiempoestacionado * $vnoresidente->preciominuto;

        if ($vnoresidente != null) {
                 $vnoresidente->update([
                    'total' => $total,
            ]);
        }
    
        return redirect()->route('salida.show', ['salida' => $vnoresidente]);
    }
}   