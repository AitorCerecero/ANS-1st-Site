<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductTrain extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            "name"=>"PreWorkout Venom Inferno",
            "base_cost"=>599,
            "description"=>"Pre entreno de alto rendimiento",
            "department"=>"suplementos alimenticios"
        ]);

        Product::create([
            "name"=>"Sales de Amoniaco Wake The Dead Insane Labz",
            "base_cost"=>299,
            "description"=>"Pre entreno de alto rendimiento",
            "department"=>"sales"
        ]);
    }
}
