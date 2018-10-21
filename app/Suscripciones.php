<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suscripciones extends Model
{
    
    protected $table = "subscriptions";

    protected $fillable = ['id', 'suscMail'];

}
