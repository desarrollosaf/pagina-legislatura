<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diputado extends Model
{
    use HasFactory, Uuids;

    public function foto()
    {
        return $this->morphOne(Foto::class, 'fotoable');
    }

    public function integranteLegislatura()
    {
        return $this->hasOne(IntegranteLegislatura::class);
    }
}
