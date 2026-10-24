<?php
namespace Database\Seeders;
use App\Models\Customer;
use Illuminate\Database\Seeder;
class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        $records = [
            ['full_name' => 'Ana Cruz', 'email' => 'ana@example.com', 'phone' => '09171234567'],
            ['full_name' => 'Mark Reyes', 'email' => 'mark@example.com', 'phone' => '09181234567'],
            ['full_name' => 'Carla Santos', 'email' => 'carla@example.com', 'phone' => '09191234567'],
            ['full_name' => 'Luis Mendoza', 'email' => 'luis@example.com', 'phone' => '09201234567'],
            ['full_name' => 'Bea Garcia', 'email' => 'bea@example.com', 'phone' => '09211234567'],
        ];
        foreach ($records as $record) {
            Customer::updateOrCreate(['email' => $record['email']], $record);
        }
    }
}
