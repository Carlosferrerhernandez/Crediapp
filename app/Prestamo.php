<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    protected $table = "prestamos";

    protected $fillable = ['id', 'valor_gestion', 'valor_interes', 'valor_total_pagar', 'valor_seguro', 'valor_solicitado', 'dias_limite', 'user_id'];

    /**
     * obtener el usuario del prestamo.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
