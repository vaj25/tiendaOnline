<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
  public $table = "to_carrito";

  protected $fillable = [
    'estado_carrito'
  ];

  public function cliente()
  {
    return $this->belongsTo(Cliente::class, 'id_cliente', 'id_cliente');
  }

  public function carritoPruductos()
  {
    return $this->hasMany(CarritoProducto::class);
  }
}
