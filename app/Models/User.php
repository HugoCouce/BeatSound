<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
/* Necesitamos implementar la clase Autenticatable para que nuestro modelo tenga los métodos necesarios para el login */

class User extends Model implements AuthenticatableContract
{
    use Authenticatable;
    /* Especificamos el nombre de la tabla */
    protected $table = 'users';
    /* Especificamos el nombre de la PK */
    protected $primaryKey = 'user_dni';
    /* Especificamos que la PK no tiene un valor auto incremental*/
    public $incrementing = false;
    /* Especificamos que la PK es del tipo string*/
    protected $keyType = 'string';
    /* Especificamos que no hay campos timestamp para registrar las entradas*/
    public $timestamps = false;
}
