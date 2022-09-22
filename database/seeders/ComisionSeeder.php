<?php

namespace Database\Seeders;

use App\Models\Comision;
use App\Models\TipoComision;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comisiones = DB::connection("legislatura")->table("cdd_comisiones")->get();
        $tipos = TipoComision::all();
        $comisiones->each(function ($item) use ($tipos) {
            if ($item->tipo == "ordinaria") {
                $tipo = $tipos[0]->id;
            } elseif ($item->tipo == "comite") {
                $tipo = $tipos[1]->id;
            } else {
                $tipo = $tipos[2]->id;
            }
            $comision = Comision::create([
                "nombre" => $item->nombre,
                "tipo_comision_id" => $tipo,
                "alias" => $item->alias,
            ]);

            $comision->foto()->create(["path" => $item->icon]);
        });
    }
}
