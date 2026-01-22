<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Libro;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // dos libros 
        Libro::create([
            'titulo' => 'El principito',
            'autor' => 'Antoine de Saint-Exupéry',
            'paginas' => 247,
            'precio' => 15.99
        ]);

        Libro::create([
            'titulo' => 'Don Quijote de la Mancha',
            'autor' => 'Miguel de Cervantes',
            'paginas' => 843,
            'precio' => 22.99
        ]);
    }
}
