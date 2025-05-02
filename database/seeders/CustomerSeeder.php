<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
        ]);

        Customer::create([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
        ]);

        Customer::create([
            'name' => 'Bob Johnson',
            'email' => 'bob@example.com',
        ]);
    }
}
