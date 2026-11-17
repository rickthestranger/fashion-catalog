<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
Category::upsert(
    [
        [
            'name' => 'Camisetas',
            'description' => 'Camisetas, regatas e peças superiores.',
        ],
        [
            'name' => 'Calças',
            'description' => 'Calças jeans, cargo e outros modelos.',
        ],
        [
            'name' => 'Jaquetas',
            'description' => 'Jaquetas, casacos e peças externas.',
        ],
        [
            'name' => 'Tênis',
            'description' => 'Tênis e calçados urbanos.',
        ],
        [
            'name' => 'Bonés',
            'description' => 'Bonés e acessórios para a cabeça.',
        ],
        [
            'name' => 'Acessórios',
            'description' => 'Bolsas, cintos e outros acessórios.',
        ],
    ],
    ['name'],
    ['description', 'updated_at']
);

    }
}
