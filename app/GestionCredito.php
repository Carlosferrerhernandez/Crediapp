<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GestionCredito extends Model
{
    protected $table = "panel_porcentajes";

    protected $fillable = ['id', 'interes', 'gestion_credito', 'seguro_bancario'];
}
