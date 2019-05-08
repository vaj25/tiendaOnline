<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
  public $table = "to_cliente";

  protected $fillable = [
    'nombre_cliente', 'apellido_cliente'
  ];

  public function carritos()
  {
    return $this->hasMany(Carrito::class);
  }
}
