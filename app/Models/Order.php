<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /* Especificamos el nombre de la tabla */
    protected $table = 'orders';
    /* Especificamos el nombre de la PK */
    protected $primaryKey = 'pedido_id';
    /* Especificamos que no hay campos timestamp para registrar las entradas*/
    public $timestamps = false;
}
