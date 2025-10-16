<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Fiesta;

class Participante extends Model
{
    protected $fillable = [
        'fiesta_id',
        'nombre',
        'email',
        'telefono'
    ];

    
    //un participante pertenece a una fiesta
    public function fiesta() {
        return $this->belongsTo(Fiesta::class);
    }
        
}


