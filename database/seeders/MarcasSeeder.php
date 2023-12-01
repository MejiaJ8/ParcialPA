<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarcasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function up()
{
    {
        $marca = ['Reebok', 'Adidas', 'Nike', 'Puma', 'Bossi'];

        foreach ($marcas as $marca) {
            Marca::create(['nombre' => $marca]);
        }
    }
}
}
