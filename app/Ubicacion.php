<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    protected $table = "ubicaciones";

    protected $fillable = ['id', 'direccion', 'barrio', 'ciudad', 'departamento', 'vivienda'];

    /**
     * obtener el usuario de la solicitud.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
