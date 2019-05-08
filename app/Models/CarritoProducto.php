<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarritoProducto extends Model
{
  public $table = "to_carrito_producto";

  protected $fillable = [
    'cantidad_carrito_producto'
  ];

  public function carrito()
  {
    return $this->belongsTo(Carrito::class, 'id_carrito');
  }

  public function producto()
  {
    return $this->belongsTo(Producto::class, 'id_producto');
  }
}
