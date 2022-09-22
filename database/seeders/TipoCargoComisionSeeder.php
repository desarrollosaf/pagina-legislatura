<?php

namespace Database\Seeders;

use App\Models\TipoCargoComision;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoCargoComisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = json_decode(file_get_contents(base_path("database/catalogos/tipo_cargo_comision.json")));
        foreach ($file as $item) {
            $arr = (array)$item;
            TipoCargoComision::create($arr);
        }
    }
}
