<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    /* Especificamos el nombre de la tabla */
    protected $table = 'orders_details';
    /* Especificamos el nombre de la PK */

    /* Especificamos que no hay campos timestamp para registrar las entradas*/
    public $timestamps = false;
}
