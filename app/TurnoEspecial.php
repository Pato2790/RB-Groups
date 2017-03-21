<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TurnoEspecial extends Model
{
    protected $table = 'turnoespecial';
    public $timestamps = false;

    protected $fillable = ['id_cancha','id_dia', 'horaInicio', 'horaFin', 'id_usuario', 'precio_cancha', 'adic_luz', 'precio_adicional', 'habilitado', 'reservado', 'fecha'];

    public function cancha()
    {
        return $this->belongsTo('App\Cancha','id_cancha');
    }
    
    public function usuario()
    {
        return $this->belongsTo('App\User','id_usuario');
    }

     public function dia()
    {
        return $this->belongsTo('App\Dia','id_dia');
    }
}
