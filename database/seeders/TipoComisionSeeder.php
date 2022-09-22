<?php

namespace Database\Seeders;

use App\Models\TipoComision;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoComisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = json_decode(file_get_contents(base_path("database/catalogos/tipo_comisiones.json")));
        foreach ($file as $item) {
            $arr = (array)$item;
            TipoComision::create($arr);
        }
    }
}
