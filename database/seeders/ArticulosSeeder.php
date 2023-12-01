<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\Marcas;

class ArticulosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $marcas = Marcas::all();
        
        $articulos = [
            ['nombre' => 'Chaquetas', 'tipo' => 'Ropa', 'marca_id' => 1],
            ['nombre' => 'Zapatos', 'tipo' => 'Calzado', 'marca_id' => 2],
            ['nombre' => 'Camisetas', 'tipo' => 'Ropa', 'marca_id' => 3],
            ['nombre' => 'Gorras', 'tipo' => 'Accesorios', 'marca_id' => 4],
            ['nombre' => 'Pantalones', 'tipo' => 'Ropa', 'marca_id' => 5],
        ];
    
        foreach ($articulos as $articulo) {
            Articulo::create($articulo);
        }
    }
}
