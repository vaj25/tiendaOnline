<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{

  public $table = "to_producto";

  protected $fillable = [
    'nombre_producto', 'precio_producto', 'descripcion_producto'
  ];

  public function carritoProductos()
  {
    return $this->hasMany(CarritoProducto::class);
  }
}
