<?php

namespace Database\Seeders;

use App\Models\Comision;
use App\Models\Diputado;
use App\Models\IntegranteComision;
use App\Models\IntegranteLegislatura;
use App\Models\Legislatura;
use App\Models\TipoCargoComision;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IntegrantesComisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $integrantes = DB::connection("legislatura")->table("cdd_integrantes_lxi")->get();
        $integrantes->each(function ($item) {
            $diputado = DB::connection("legislatura")
                ->table("cdd_diputados_lxi")
                ->find($item->id_diputado);
            $diputado = Diputado::where("apaterno", $diputado->apaterno)
                ->where("amaterno", $diputado->amaterno)
                ->where("nombres", $diputado->nombres)->first()->integranteLegislatura;
            $cargos = TipoCargoComision::all();
            if ($item->cargo == "Miembro") {
                $cargo = $cargos[0]->id;
            } elseif ($item->cargo == "Presidente") {
                $cargo = $cargos[1]->id;
            } elseif ($item->cargo == "Prosecretario") {
                $cargo = $cargos[2]->id;
            } elseif ($item->cargo == "Secretario") {
                $cargo = $cargos[3]->id;
            } elseif ($item->cargo == "Vicepresidente") {
                $cargo = $cargos[4]->id;
            } else {
                $cargo = $cargos[5]->id;
            }
            $comision = DB::connection("legislatura")->table("cdd_comisiones")->where("id", $item->id_comision)->first();
            $comision = Comision::where("nombre", $comision->nombre)->first();
            $legislatura = Legislatura::all();
            IntegranteComision::create([
                "integrante_legislatura_id" => $diputado->id,
                "comision_id" => $comision->id,
                "tipo_cargo_comision_id" => $cargo,
            ]);
        });
    }
}
