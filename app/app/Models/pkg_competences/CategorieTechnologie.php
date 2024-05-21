<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieTechnologie extends Model
{
    use HasFactory;

    public function Technologie(){
        $this->belongsTo(Technologie::class);
    }
}
