<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    use HasFactory, Uuids;

    public function municipio()
    {
        return $this->belongsTo(Municipio::class);
    }
}
