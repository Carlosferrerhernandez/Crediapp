<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $table = "actividades";

    protected $fillable = ['id', 'empresa', 'cargo', 'telefono_empresa', 'direcccion_trabajo', 'ciudad_empresa', 'actividad_independiente', 'direccion_independiente', 'ciudad_independiente', 'otra_ocupacion', 'user_id'];

    /**
     * obtener el usuario de la actividad.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
