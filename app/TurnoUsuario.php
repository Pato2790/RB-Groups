<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TurnoUsuario extends Model
{
    protected $table = 'turnousuario';
    public $timestamps = false;
    protected $fillable = ['id_turnoAdmin','fecha', 'confirmado', 'pagado', 'id_usuario', 'estado'];

    public function usuario()
    {
        return $this->belongsTo('App\User','id_usuario');
    }

    public function turnoAdmin()
    {
        return $this->belongsTo('App\turnoAdmin','id_turnoAdmin');
    }

}
