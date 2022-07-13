<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index() {
        return Vehiculo::all();
    }

    public function show($id)
    {
        return Vehiculo::find($id);
    }
}
