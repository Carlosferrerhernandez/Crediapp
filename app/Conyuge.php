<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conyuge extends Model
{
    protected $table = "conyuges";

    protected $fillable = ['id', 'nombres_conyuge', 'apellido_conyuge', 'documento_conyuge', 'lugar_conyuge', 'nacimiento_conyuge', 'telefono_conyuge', 'user_id'];


    /**
     * obtener el usuario del conyuge.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}
