<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'description',
        'notes',
    ];

    // Relaciones Uno a Muchos
    public function specimens(){
        return $this->hasMany(Specimen::class);
    }    

}
