<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specimen extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'registry',
        'name',
        'chip',
        'birthdate',
        'sex_id',
        'color_id',
        'category_id',
        'breeder_id',
        'father_code',
        'mother_code',
        'notes',
    ];

    // Relaciones Uno a Muchos
    public function specimenImgs(){
        return $this->hasMany(SpecimenImgs::class);
    }
    
    // Relaciones Uno a Muchos Inversa
    public function sex(){
        return $this->belongsTo(Sex::class);
    }
    public function color(){
        return $this->belongsTo(Color::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function breeder(){
        return $this->belongsTo(Breeder::class);
    }

}
