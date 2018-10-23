<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $table = "solicitudes";

    protected $fillable = ['id', 'estado_solicitud', 'valor_gestion', 'valor_interes', 'valor_total_pagar', 'valor_seguro', 'valor_solicitado', 'dias_limite', 'user_id'];

    /**
     * obtener el usuario de la solicitud.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
