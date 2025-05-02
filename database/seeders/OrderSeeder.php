<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Orders for customer 1
        Order::create([
            'customer_id' => 1,
            'product_name' => 'Laptop',
            'quantity' => 1,
            'price' => 1200.00,
            'status' => 'pending',
        ]);

        Order::create([
            'customer_id' => 1,
            'product_name' => 'Mouse',
            'quantity' => 2,
            'price' => 25.50,
            'status' => 'shipped',
        ]);

        // Orders for customer 2
        Order::create([
            'customer_id' => 2,
            'product_name' => 'Keyboard',
            'quantity' => 1,
            'price' => 85.99,
            'status' => 'pending',
        ]);

        // Orders for customer 3
        Order::create([
            'customer_id' => 3,
            'product_name' => 'Monitor',
            'quantity' => 2,
            'price' => 350.00,
            'status' => 'shipped',
        ]);

        Order::create([
            'customer_id' => 3,
            'product_name' => 'Headphones',
            'quantity' => 1,
            'price' => 120.75,
            'status' => 'pending',
        ]);
    }
}
