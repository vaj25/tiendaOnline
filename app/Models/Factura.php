<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
  public $table = 'to_factura';

  protected $fillable = [
    'codigo_factura', 'total_factura', 'subtotal_factura'
  ];

  public function carrito()
  {
    return $this->hasOne(Carrito::class, 'id_carrito', 'id_carrito');
  }

}
