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

  function generarCodigo($longitud) {
    $key = '';
    $pattern = '1234567890';
    $max = strlen($pattern)-1;
    for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
    return $key;
  }

}
