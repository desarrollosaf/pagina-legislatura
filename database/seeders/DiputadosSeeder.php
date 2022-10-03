<?php

namespace Database\Seeders;

use App\Models\Diputado;
use App\Models\Gender;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiputadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $diputados = DB::connection("legislatura")->table("cdd_diputados_lxi")->get();
        $diputados->each(function ($item) {
            $genders = Gender::all();
            $item->gender == "M" ? $gender = $genders[0]->id : $gender = $genders[1]->id;
            $diputado = Diputado::create([
                "apaterno" => $item->apaterno,
                "amaterno" => $item->amaterno,
                "nombres" => $item->nombres,
                "shortname" => $item->shortname,
                "fancyurl" => $item->fancyurl,
                "gender_id" => $gender,
                "email" => $item->email,
                "ext" => $item->ext,
                "facebook" => $item->facebook,
                "twitter" => $item->twitter,
                "instagram" => $item->instagram,
            ]);
            $diputado->foto()->create(["path" => "storage/img/fotos/dip/lxi/" . $item->foto]);
        });


        $path = base_path("database/catalogos/diputados.json");
        $json = json_decode(file_get_contents($path));
        $json = (object) $json;
//        dd($json);

        foreach ($json as $item) {

            $diputado = Diputado::where('nombres', 'like', $item->Nombre)
               ->orWhere('apaterno', 'like', $item->apellidopaterno)->first();
//            dd($diputado);
//            if(!isset($item->facebo)){
//                dd($item);
//            }

            $diputado->update([
                "descripcion" => $item->descripcion,
                "facebook" => $item->facebo,
                "twitter" => $item->Twitter,
                "instagram" => $item->insta,
            ]);

//            dd($diputado);
        }
    }
}
