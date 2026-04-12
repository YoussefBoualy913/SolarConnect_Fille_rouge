<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Category::insert([
            [
                'name' => 'Installation solaire',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Maintenance & réparation',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Audit énergétique',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Équipement solaire',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
