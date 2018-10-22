<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banco extends Model
{
    protected $table = "bancos";

    protected $fillable = ['id', 'nombre_banco', 'n_cuenta', 't_cuenta', 'user_id'];

    /**
     * obtener el usuario del banco.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
