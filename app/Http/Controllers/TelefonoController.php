<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TelefonoController extends Controller
{
    public function index() {
        try {
            // $resp = Http::get('http://10.155.61.16:8000/api/telefonos');
            $resp = Http::get(ENV('API_TELEFONO').'/api/telefonos');
            return json_decode($resp);
        } catch (\Throwable $th) {
            return $th;
        }
    }

    public function indexWeb() {
        try {
            $telefonos = Http::get('http://10.155.61.16:8000/api/telefonos')->collect();


            return view('telefono.index', compact('telefonos'));
        } catch (\Throwable $th) {
            return $th;
        }
    }

    public function rick() {
        try {
            // $resp = Http::get('http://10.155.61.16:8000/api/telefonos');
            $personajes = Http::get('http://rickandmortyapi.com/api/character');
            // return json_decode($resp);

            return view('rick.index', compact('personajes'));
        } catch (\Throwable $th) {
            return $th;
        }
    }
}
