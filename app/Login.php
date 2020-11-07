<?php

namespace App;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class Login extends Authenticatable
{
    use Notifiable;

    protected $table = 'usuario';
    protected $primaryKey = 'Id_usu';

    protected $fillable =[
    'Id_rol','Nombre_usu','Apellido_usu','Identificacion_usu','Telefono_usu','Correo_usu','Contrasena'
    ];
}
