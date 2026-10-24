<?php
namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
class UserSeeder extends Seeder
{
    public function run(): void
    {
        $records = [
            ['username' => 'john', 'full_name' => 'John Santos'],
            ['username' => 'mia', 'full_name' => 'Mia Ramos'],
            ['username' => 'paolo', 'full_name' => 'Paolo Cruz'],
            ['username' => 'sofia', 'full_name' => 'Sofia Reyes'],
            ['username' => 'nico', 'full_name' => 'Nico Garcia'],
        ];
        foreach ($records as $record) {
            User::updateOrCreate(['username' => $record['username']], $record);
        }
    }
}
