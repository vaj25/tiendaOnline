<?php

use Illuminate\Database\Seeder;

use App\Models\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Cliente::create([
        'nombre_cliente' => 'Alberto',
        'apellido_cliente' => 'Castaneda'
      ]);
    }
}
