<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntegranteLegislatura extends Model
{
    use HasFactory, Uuids;

    public function partido()
    {
        return $this->belongsTo(Partido::class);
    }

    public function distrito()
    {
        return $this->belongsTo(Distrito::class);
    }

    public function comisiones()
    {
        return $this->hasMany(IntegranteComision::class);
    }
}
