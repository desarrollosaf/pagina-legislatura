<?php

namespace Database\Seeders;

use App\Models\Diputado;
use App\Models\Distrito;
use App\Models\IntegranteLegislatura;
use App\Models\Legislatura;
use App\Models\Partido;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IntegranteLegislaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $diputados = Diputado::all();
        $legislatura = Legislatura::all();
        $diputados->each(function ($item) use ($legislatura) {
            $diputado = DB::connection("legislatura")
                ->table("cdd_diputados_lxi")
                ->where("apaterno", $item->apaterno)
                ->where("amaterno", $item->amaterno)
                ->where("nombres", $item->nombres)->first();
            $partido = DB::connection("legislatura")
                ->table("cdd_partidos_lxi")
                ->where("id", $diputado->id_partido)->first();
            $partidoactual = Partido::where("siglas", $partido->siglas)->first();

            $distrito = DB::connection("legislatura")
                ->table("cdd_distritos")
                ->where("id", $diputado->id_distrito)->first();
            $distritoactual = Distrito::where("distrito", $distrito->distrito)->first();
            IntegranteLegislatura::create([
                "legislatura_id" => $legislatura[0]->id,
                "diputado_id" => $item->id,
                "partido_id" => $partidoactual->id,
                "distrito_id" => $distritoactual->id,
                "deleted_at" => $diputado->deleted_at,
            ]);
        });
    }
}
