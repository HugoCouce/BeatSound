<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    /* Especificamos el nombre de la tabla */
    protected $table = 'usuario';
    /* Especificamos el nombre de la PK */
    protected $primaryKey = 'usuario_dni';
    /* Especificamos que la PK no tiene un valor auto incremental*/
    public $incrementing = false;
    /* Especificamos que la PK es del tipo string*/
    protected $keyType = 'string';
    /* Especificamos que no hay campos timestamp para registrar las entradas*/
    public $timestamps = false;
}
