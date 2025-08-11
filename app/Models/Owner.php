<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'tel_01',
        'tel_02',
        'mail',
        'address_id',
        'notes',
    ];

    // Relaciones Uno a Muchos
    public function specimens(){
        return $this->hasMany(Specimen::class);
    }

    // Relaciones Uno a Muchos Inversa
    public function address(){
        return $this->belongsTo(Address::class);
    }
       

}
