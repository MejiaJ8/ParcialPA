<?php

namespace App\Http\Controllers\Mejia;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TiendaController extends Controller
{
    public function mostrarPresentacion()
    {
        return view('Mejia.tienda.presentacion');
    }
}
