<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalifCancha extends Model
{
    protected $table = 'turnousuario';
    public $timestamps = false;

    protected $fillable = ['id_cancha', 'id_usuario', 'puntaje'];

    public function cancha()
    {
        return $this->belongsTo('App\Cancha','id_cancha');
    }
    
    public function usuario()
    {
        return $this->belongsTo('App\User','id_usuario_admin');
    }
}
