<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // Relacion de muchos a muchos, tabla usuarios

    public function users()
	{
    	return $this->belongsToMany('App\User')
        ->withTimestamps();
	}
}
