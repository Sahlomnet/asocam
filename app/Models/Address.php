<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'street',
        'ext_number',
        'int_number',
        'col',
        'city',
        'mun',
        'state',
        'country',
        'zip_code',
        'notes',
    ];

    // Relaciones Uno a Muchos
    public function breeder(){
        return $this->hasMany(Breeder::class);
    }

    // Relaciones Uno a Muchos Inversa
    // public function owners(){
    //     return $this->belongsTo(Status::class);
    // }

}
