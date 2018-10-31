<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use App\Notifications\ResetPasswordNotification;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombres', 'apellidos', 'password', 'lugar_expedicion', 'fecha_expedicion', 'n_documento', 'n_celular', 'email', 'email_verified_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }


    /**
     * obtener las solicitudes de un usuario.
     */
    public function solicitudes()
    {
        return $this->hasMany('App\Solicitud');
    }

    /**
     * obtener las ubicaciones de un usuario.
     */
    public function ubicaciones()
    {
        return $this->hasMany('App\Ubicacion');
    }

    /**
     * obtener las actividades de un usuario.
     */
    public function actividades()
    {
        return $this->hasMany('App\Actividad');
    }

    /**
     * obtener las referencias de un usuario.
     */
    public function referencias()
    {
        return $this->hasMany('App\Referencia');
    }

    /**
     * obtener los bancos de un usuario.
     */
    public function bancos()
    {
        return $this->hasMany('App\Banco');
    }

    /**
     * obtener las conyugues de un usuario.
     */
    public function conyuges()
    {
        return $this->hasMany('App\Conyuge');
    }

    // Relacion de muchos a muchos, tabla roles

    public function roles()
    {
        return $this->belongsToMany('App\Role')
        ->withTimestamps();
    }

    public function authorizeRoles($roles)
    {
        if ($this->hasAnyRole($roles)) {
            return true;
        }
        abort(401, 'Esta acción no está autorizada.');
    }

    public function hasAnyRole($roles)
    {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                    return true;
                }
            }
        } else {
            if ($this->hasRole($roles)) {
                return true;
            }
        }
        return false;
    }
    
    public function hasRole($role)
    {
        if ($this->roles()->where('name', $role)->first()) {
            return true;
        }
        return false;
    }

}
