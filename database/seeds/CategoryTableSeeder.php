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
            'created_by' => 1,
            'description_es' => 'Desayunos completos',
            'description_en' => 'Full breakfast'
        ]);

        Category::create([ //2
            'created_by' => 1,
            'description_es' => 'Ligero',
            'description_en' => 'Light'
        ]);

        Category::create([ //3
            'created_by' => 1,
            'description_es' => 'Huevos y especialidades mexicanas',
            'description_en' => 'Eggs and Mexican cuisine specialties'
        ]);

        Category::create([ //4
            'created_by' => 1,
            'description_es' => 'Entradas',
            'description_en' => 'Apetizers'
        ]);

        Category::create([ //5
            'created_by' => 1,
            'description_es' => 'Ensaladas',
            'description_en' => 'Salads',
        ]);

        Category::create([ //6
            'created_by' => 1,
            'description_es' => 'Bebidas',
            'description_en' => 'Beverages'
        ]);

        Category::create([ //7
            'created_by' => 1,
            'description_es' => 'Postres',
            'description_en' => 'Deserts'
        ]);

        Category::create([ //8
            'created_by' => 1,
            'description_es' => 'Sopas y cremas',
            'description_en' => 'Soups and creams'
        ]);

        Category::create([ //9
            'created_by' => 1,
            'description_es' => 'Pastas',
            'description_en' => 'Pastas'
        ]);

        Category::create([ //10
            'created_by' => 1,
            'description_es' => 'Pescados y mariscos',
            'description_en' => 'Seafood'
        ]);

        Category::create([ //11
            'created_by' => 1,
            'description_es' => 'Carnes y aves',
            'description_en' => 'Steaks & poultry'
        ]);

        Category::create([ //12
            'created_by' => 1,
            'description_es' => 'Sándwiches y emparedados',
            'description_en' => 'Sandwiches'
        ]);

        Category::create([ //13
            'created_by' => 1,
            'description_es' => 'Antojitos mexicanos',
            'description_en' => 'Mexican antojitos'
        ]);
    }
}
