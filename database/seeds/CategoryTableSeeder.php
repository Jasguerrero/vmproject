<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([ //1
            'user_id' => 51,
            'description_es' => 'Desayunos completos',
            'description_en' => 'Full breakfast'
        ]);

        Category::create([ //2
            'user_id' => 51,
            'description_es' => 'Ligero',
            'description_en' => 'Light'
        ]);

        Category::create([ //3
            'user_id' => 51,
            'description_es' => 'Huevos y especialidades mexicanas',
            'description_en' => 'Eggs and Mexican cuisine specialties'
        ]);

        Category::create([ //4
            'user_id' => 51,
            'description_es' => 'Entradas',
            'description_en' => 'Apetizers'
        ]);

        Category::create([ //5
            'user_id' => 51,
            'description_es' => 'Ensaladas',
            'description_en' => 'Salads',
        ]);

        Category::create([ //6
            'user_id' => 51,
            'description_es' => 'Bebidas',
            'description_en' => 'Beverages'
        ]);

        Category::create([ //7
            'user_id' => 51,
            'description_es' => 'Postres',
            'description_en' => 'Deserts'
        ]);

        Category::create([ //8
            'user_id' => 51,
            'description_es' => 'Sopas y cremas',
            'description_en' => 'Soups and creams'
        ]);

        Category::create([ //9
            'user_id' => 51,
            'description_es' => 'Pastas',
            'description_en' => 'Pastas'
        ]);

        Category::create([ //10
            'user_id' => 51,
            'description_es' => 'Pescados y mariscos',
            'description_en' => 'Seafood'
        ]);

        Category::create([ //11
            'user_id' => 51,
            'description_es' => 'Carnes y aves',
            'description_en' => 'Steaks & poultry'
        ]);

        Category::create([ //12
            'user_id' => 51,
            'description_es' => 'Sándwiches y emparedados',
            'description_en' => 'Sandwiches'
        ]);

        Category::create([ //13
            'user_id' => 51,
            'description_es' => 'Antojitos mexicanos',
            'description_en' => 'Mexican antojitos'
        ]);
    }
}
