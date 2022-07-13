<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    public function index() {
        // $_token = $request->token;
        return Vehiculo::all();
    }

    public function show($id)
    {
        return Vehiculo::find($id);
    }
}
