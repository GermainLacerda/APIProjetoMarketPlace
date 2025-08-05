<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['categoria' => 'Eletrônicos'],
            ['categoria' => 'Informática'],
            ['categoria' => 'Casa e Cozinha'],
            ['categoria' => 'Moda'],
            ['categoria' => 'Esporte e Lazer'],
            ['categoria' => 'Beleza e Saúde'],
            ['categoria' => 'Brinquedos e Jogos'],
            ['categoria' => 'Automotivo'],
            ['categoria' => 'Ferramentas e Construção'],
            ['categoria' => 'Livros'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
