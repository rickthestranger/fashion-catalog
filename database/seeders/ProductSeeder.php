<?php

namespace Database\Seeders;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
    [
        'category' => 'Camisetas',
        'name' => 'Camiseta Oversized Preta',
        'description' => 'Camiseta oversized preta, com visual minimalista e urbano.',
        'price' => 54.99,
        'size' => 'G',
        'image_path' => '/images/camiseta-preta-o.jpg',
        'is_featured' => false,
    ],
    [
        'category' => 'Camisetas',
        'name' => 'Camiseta Oversized Branca',
        'description' => 'Camiseta branca de modelagem ampla e estilo casual.',
        'price' => 59.90,
        'size' => 'M',
        'image_path' => '/images/camiseta-branca-o.jpg',
        'is_featured' => true,
    ],
    [
        'category' => 'Camisetas',
        'name' => 'Camiseta Graphic Preta',
        'description' => 'Camiseta preta com estampa gráfica e identidade urbana.',
        'price' => 69.90,
        'size' => 'G',
        'image_path' => '/images/camiseta-graphic.jpg',
        'is_featured' => false,
    ],
    [
        'category' => 'Camisetas',
        'name' => 'Camiseta Básica Cinza',
        'description' => 'Camiseta cinza versátil para combinações do dia a dia.',
        'price' => 49.90,
        'size' => 'P',
        'image_path' => '/images/camiseta-cinza.jpg',
        'is_featured' => false,
    ],
    [
        'category' => 'Calças',
        'name' => 'Calça Jeans Reta',
        'description' => 'Calça jeans de corte reto e lavagem azul tradicional.',
        'price' => 129.90,
        'size' => '40',
        'image_path' => '/images/calca-jeans.jpg',
        'is_featured' => true,
    ],
    [
        'category' => 'Calças',
        'name' => 'Calça Cargo Preta',
        'description' => 'Calça cargo preta com bolsos laterais e modelagem relaxed.',
        'price' => 159.90,
        'size' => '42',
        'image_path' => '/images/calca-cargo.jpg',
        'is_featured' => false,
    ],
    [
        'category' => 'Calças',
        'name' => 'Calça Wide Leg',
        'description' => 'Calça de modelagem ampla com visual contemporâneo.',
        'price' => 149.90,
        'size' => '40',
        'image_path' => '/images/calca-wide-leg.jpg',
        'is_featured' => false,
    ],
    [
        'category' => 'Jaquetas',
        'name' => 'Jaqueta de Couro',
        'description' => 'Jaqueta preta com acabamento clássico e inspiração biker.',
        'price' => 244.90,
        'size' => 'M',
        'image_path' => '/images/jaqueta-couro.jpg',
        'is_featured' => true,
    ],
    [
        'category' => 'Jaquetas',
        'name' => 'Jaqueta Bomber',
        'description' => 'Jaqueta bomber de visual urbano e acabamento discreto.',
        'price' => 189.90,
        'size' => 'G',
        'image_path' => '/images/jaqueta-bomber.jpg',
        'is_featured' => false,
    ],
    [
        'category' => 'Jaquetas',
        'name' => 'Jaqueta Jeans',
        'description' => 'Jaqueta jeans azul com modelagem tradicional.',
        'price' => 179.90,
        'size' => 'M',
        'image_path' => '/images/jaqueta-jeans.jpg',
        'is_featured' => false,
    ],
    [
        'category' => 'Tênis',
        'name' => 'Tênis Branco',
        'description' => 'Tênis branco de visual urbano e design simples.',
        'price' => 249.90,
        'size' => '41',
        'image_path' => '/images/tenis-branco.jpg',
        'is_featured' => false,
    ],
    [
        'category' => 'Tênis',
        'name' => 'Tênis Preto',
        'description' => 'Tênis preto, misturando o melhor do estilo e conforto.',
        'price' => 319.90,
        'size' => '40',
        'image_path' => '/images/tenis-preto.jpg',
        'is_featured' => true,
    ],
    [
        'category' => 'Bonés',
        'name' => 'Boné Preto Five Panel',
        'description' => 'Boné com estilo moderno e urbano, acabamento premium.',
        'price' => 119.90,
        'size' => 'Único',
        'image_path' => '/images/bone-preto-five.jpg',
        'is_featured' => true,
    ],
    [
        'category' => 'Acessórios',
        'name' => 'Cinto Básico Couro',
        'description' => 'Cinto básico, feito em couro sintético.',
        'price' => 64.90,
        'size' => 'Único',
        'image_path' => '/images/cinto-couro.jpg',
        'is_featured' => false,
    ],
    [
        'category' => 'Bonés',
        'name' => 'Boné Preto Básico',
        'description' => 'Boné preto básico com modelagem tradicional.',
        'price' => 49.90,
        'size' => 'Único',
        'image_path' => '/images/bone-preto.jpg',
        'is_featured' => false,
    ],
    [
        'category' => 'Acessórios',
        'name' => 'Corrente Prata',
        'description' => 'Corrente de prata 925, com elos grumet.',
        'price' => 229.90,
        'size' => 'Único',
        'image_path' => '/images/corrente-prata.jpg',
        'is_featured' => true,
    ],
    [
        'category' => 'Acessórios',
        'name' => 'Shoulder Bag Preta',
        'description' => 'Shoulder Bag preta com acabamento premium.',
        'price' => 164.90,
        'size' => 'Único',
        'image_path' => '/images/shoulder-bag.jpg',
        'is_featured' => false,
    ],
    [
        'category' => 'Bonés',
        'name' => 'Boné Preto Jeans',
        'description' => 'Boné preto jeans, com estilo urbano e sofisticado.',
        'price' => 64.90,
        'size' => 'Único',
        'image_path' => '/images/bone-preto-j.jpg',
        'is_featured' => false,
    ],

];
foreach ($products as $productData) {
    $category = Category::where('name', $productData['category'])->firstOrFail();

    Product::updateOrCreate(
        ['name' => $productData['name']],
        [
            'category_id' => $category->id,
            'description' => $productData['description'],
            'price' => $productData['price'],
            'size' => $productData['size'],
            'image_path' => $productData['image_path'],
            'is_featured' => $productData['is_featured'],
        ]
    );
}
    }
}
