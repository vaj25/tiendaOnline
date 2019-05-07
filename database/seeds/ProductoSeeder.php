<?php

use Illuminate\Database\Seeder;

use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Producto::create([
        'nombre_producto' => 'LAPTOP DELL INSPIRON',
        'precio_producto' => 700.00,
        'descripcion_producto' => 'LAPTOP DELL INSPIRON I5565_A1281TSW10S AMD A12-9700P / 8GB DDR4 / 1TB / W10 / 15" / INTEL HD / SILVER / BACKLIT / OPT. DRIVE 19M8N SEGMENTO: PROFESIONAL'
      ]);

      Producto::create([
        'nombre_producto' => 'LAPTOP TOSHIBA L55D',
        'precio_producto' => 650.00,
        'descripcion_producto' => 'LAPTOP TOSHIBA L55D-C5204R PANTALLA 15.6" HD PROCESADOR A8-6410 RAM 6 GB DISCO DURO 750 DVD-SM WIN8.1 SL COLOR ROJA'
      ]);
    }
}
