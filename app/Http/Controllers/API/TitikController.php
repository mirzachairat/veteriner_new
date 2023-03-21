<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Permohonan;

class TitikController extends Controller
{
    public function titikmap(Request $request){

        $coordinats = Permohonan::all();
        
            $geoJSONdata = $coordinats->map(function ($koordinat) {
                return [
                    'type'       => 'Feature',
                    'properties' => $coordinats,
                    'geometry'   => [
                        'type'        => 'Point',
                        'coordinates' => [
                            $outlet->longitude,
                            $outlet->latitude,
                        ],
                    ],
                ];
            });
        
            return response()->json([
                'type'     => 'FeatureCollection',
                'features' => $geoJSONdata,
            ]);
    }
}

