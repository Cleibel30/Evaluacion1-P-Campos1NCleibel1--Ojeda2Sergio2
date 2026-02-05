<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pedido;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Pedido::create([
            'codigo_rastreo' => 'LAP-10293',
            'total' => 1250.00,
            'cantidad_items' => 1,
            'pagado' => true
        ]);

        Pedido::create([
            'codigo_rastreo' => 'ACC-88271',
            'total' => 85.50,
            'cantidad_items' => 2,
            'pagado' => false
        ]);

        Pedido::create([
            'codigo_rastreo' => 'MON-44102',
            'total' => 320.99,
            'cantidad_items' => 1,
            'pagado' => true
        ]);
    }
}