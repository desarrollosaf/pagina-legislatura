<?php

namespace Database\Seeders;

use App\Models\Legislatura;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LegislaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Legislatura::create([
            "numero" => "LXI",
            "fecha_inicio" => "2021-09-04",
            "fecha_fin" => "2024-09-04"
        ]);
    }
}
