<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Participante;

class Fiesta extends Model
{
    protected $fillable = [
        'nombre_fiesta',
        'fecha',
        'lugar',
        'cupo_maximo'
    ];


    //fiesta tiene muchos participantes
    public function participantes() {
        return $this->hasMany(Participante::class);
    }


    //calcular cupos disponibles
    //cojemos el cupo maximo de la fiesta 
    //luego contamos cuantos participantes tiene esa fiesta con metodo count
    public function cuposDisponibles() {
        return $this->cupo_maximo - $this->participantes()->count();
        //cupo maximo - contar cuantos participantes tiene esa fiesta
    }


    //calcular si esta lleno
    //vemos cuantos participantes tiene y vemos cual es el cupo maximo
    //si es true , esta llena , si  es false puede ingresar mas gente
    public function estaLlena() {
        
        return $this->participantes()->count() >= $this->cupo_maximo;
        //fiesta esta llena si los participantes son mayor o iguales al cupo maximo de la fiesta
    }

}


