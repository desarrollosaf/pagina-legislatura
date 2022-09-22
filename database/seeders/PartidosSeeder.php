<?php

namespace Database\Seeders;

use App\Models\Partido;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $partidos = DB::connection("legislatura")->table("cdd_partidos_lxi")->get();
        $partidos->each(function ($item) {
            Partido::create([
               "siglas" => $item->siglas,
               "nombre" => $item->nombre,
               "emblema" => "storage/public/img/partidos/" .$item->emblema,
               "rgb" => $item->rgb,
               "rgb2" => $item->rgb2,
            ]);
        });
    }
}
