<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referencia extends Model
{
    protected $table = "referencias";

    protected $fillable = ['id', 'nombre_referencia', 'direccion_referencia', 'telefono_referencia', 'user_id'];


    /**
     * obtener el usuario del conyuge.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
