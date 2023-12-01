<?php

namespace App\Http\Controllers\Mejia;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    public function listarArticulos()
    {
        $articulos = Articulo::all();
        return view('articulos.lista', compact('articulos'));
    }
}