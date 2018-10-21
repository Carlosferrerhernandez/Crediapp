<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $table = "solicitudes";

    protected $fillable = ['id', 'estado_solicitud', 'user_id'];

    /**
     * obtener el usuario de la solicitud.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
