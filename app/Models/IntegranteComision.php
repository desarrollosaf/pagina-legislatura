<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntegranteComision extends Model
{
    use HasFactory, Uuids;

    public function comision()
    {
        return $this->belongsTo(Comision::class);
    }

    public function cargo()
    {
        return $this->belongsTo(TipoCargoComision::class, "tipo_cargo_comision_id");
    }
}
