<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'n_afi',
        'address',
        'status',
    ];

    public function shifts(){
        
        //un paciente un doctor hasOne()
        //un paciente puede tener muchos turnos

        return $this->hasMany(shifts::class);
    }
}
