<?php

namespace App\Http\Controllers\Mejia;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function mostrarMarcas()
    {
        return view('Mejia.marcas.listado');
    }
}
