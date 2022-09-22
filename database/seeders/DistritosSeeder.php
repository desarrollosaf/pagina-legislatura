<?php

namespace Database\Seeders;

use App\Models\Distrito;
use App\Models\Municipio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistritosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $distritos = DB::connection("legislatura")->table("cdd_distritos")->get();
        $distritos->each(function ($item) {
            $municipio = Municipio::where("municipio", $item->municipio)->orWhere("cabecera", $item->municipio)->first();
            $params = [
                "distrito" => $item->distrito
            ];
            if ($municipio) {
                $params["municipio_id"] = $municipio->id;
            }
            Distrito::create($params);
        });
    }
}
