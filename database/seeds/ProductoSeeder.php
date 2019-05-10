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

      Producto::create([
        'nombre_producto' => 'LAPTOP HP X360 ENVY',
        'precio_producto' => 725.00,
        'descripcion_producto' => 'Laptop HP X360 ENVY Ryzen 3 Procesador AMD Ryzen™ 3 Memoria de 4 GB; Almacenamiento SSD de 128GB Windows 10 Home 64'
      ]);

      Producto::create([
        'nombre_producto' => 'LAPTOP LENOVO IDEAPAD 330S',
        'precio_producto' => 800.00,
        'descripcion_producto' => 'LAPTOP LENOVO IDEAPAD 330S Procesador Intel® Quad Core i7-8550U, Memoria Ram 4GB DDR4, Unidad Intel Optane 16GB, Pantalla 14", Windows 10 Home'
      ]);

      Producto::create([
        'nombre_producto' => 'LAPTOP ASUS X540MA',
        'precio_producto' => 325.00,
        'descripcion_producto' => 'LAPTOP ASUS X540MA 15.6" Intel Celeron N4000 Dual Core 1.1 GHz, Memoria Ram 4GB DDR4,  Almacenamiento HDD de 500GB, Windows 10'
      ]);

      Producto::create([
        'nombre_producto' => 'LAPTOP ACER SP315-51-598W',
        'precio_producto' => 700.00,
        'descripcion_producto' => 'LAPTOP ACER SP315-51-598W 15.6" Procesador Intel Core i5 7200U 2.5 GHz, Memoria Ram 8GB DDR4, Almacenamiento HDD 1TB, Windows 10 Home'
      ]);
    }
}
