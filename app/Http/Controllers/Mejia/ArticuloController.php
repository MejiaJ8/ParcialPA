<?php

namespace App\Http\Controllers\Mejia;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    public function mostrarArticulos()
    {
        return view('mejia.articulos.listado');
    }
}
