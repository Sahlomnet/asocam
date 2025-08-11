<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecimenImgs extends Model
{
    use HasFactory;

    // Relaciones Uno a Muchos Inversa
    public function specimen(){
        return $this->belongsTo(Specimen::class);
    }
}
