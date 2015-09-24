<?php

use Illuminate\Database\Seeder;
use App\Dish;

class DishTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dish::create([
            'name' => 'Desayuno Continental / Continental Breakfast',
            'description_en' => 'Café, té o leche; jugo o fruta; pan de dulce o tostado con mantequilla.',
            'description_es' => 'Coffee, tea or milk; juice or fruit; sweet bread or toast with butter.',
            'price' => '79.00',
            'prep_time' => '20 mins',
            'category_id' => 1
        ]);

        Dish::create([
            'name' => 'Plato de fruta de la estación / Fruit in season',
            'description_en' => 'Sandía, melón, papaya y piña.',
            'description_es' => 'Watermelon, melon, papaya and pineapple.',
            'price' => '49.00',
            'prep_time' => '10 mins',
            'category_id' => 2
        ]);

        Dish::create([
            'name' => 'Huevos al gusto / Eggs any style',
            'description_en' => 'Dos huevos al gusto con jamón, tocino o salchicha, acompañados de frijoles tortillas.',
            'description_es' => 'Two eggs any style with ham, bacon or sausage, served with beans and corn tortillas.',
            'price' => '69.00',
            'prep_time' => '20 mins.',
            'category_id' => 3
        ]);

        Dish::create([
            'name' => 'Champiñones al ajillo / Garlic mushrooms',
            'description_en' => 'Combinación de champiñón natural y chile guajillo, con un toque de vino blanco.',
            'description_es' => 'A mix of fresh mushrooms, garlic and guajillo peppers with a touch of white wine.',
            'price' => '79.00',
            'measure' => '(120 gr.)',
            'prep_time' => '35 mins.',
            'category_id' => 4
        ]);

        Dish::create([
            'name' => 'Ensalada de aguacate y queso panela / Avocado and panela cheese salad',
            'description_en' => 'Tradicional mezcla de lechugas.',
            'description_es' => 'Traditional mixed greens topped with avocado and fresh cheese.',
            'price' => '79.00',
            'prep_time' => '30 mins.',
            'category_id' => 5
        ]);

        Dish::create([
            'name' => 'Refrescos / Soft drinks',
            'price' => '29.00',
            'measure' => '(250 ml.)',
            'category_id' => 6
        ]);

        Dish::create([
            'name' => 'Pastelería surtida / Assorted cakes',
            'price' => '49.00',
            'prep_time' => '10 mins.',
            'category_id' => 7
        ]);

        Dish::create([
            'name' => 'Ensalada tailandesa / Thai salad',
            'description_en' => 'Delicious mixed vegetables salad and sesame flavored beef filet.',
            'description_es' => 'Deliciosa ensalada con vegetales mixtos y filete de res aromatizada con ajonjolí.',
            'price' => '125.00',
            'prep_time' => '20 mins.',
            'category_id' => 5
        ]);

        Dish::create([
            'name' => 'Sopa azteca / Azteca soup',
            'description_en' => 'Traditional tortilla soup made with guajillo peppers, with a side of avocado, cheese and bacon.',
            'description_es' => 'Tradicional caldo hecho de tortilla combinado con chile guajillo, con una guarnición de aguacate, queso y tocino.',
            'price' => '62.00',
            'prep_time' => '20 mins.',
            'category_id' => 8
        ]);

        Dish::create([
            'name' => 'Fettuccini con jamón serrano y espárragos / Fettuccini with Serrano ham and asparagus',
            'description_en' => 'Delicious pasta in Alfredo sauce combined with Serrano ham, asparagus and Parmesan cheese.',
            'description_es' => 'Deliciosa pasta en salsa Alfredo combinada con jamón serrano, espárragos y queso parmesano.',
            'price' => '129.00',
            'prep_time' => '20 mins.',
            'category_id' => 9
        ]);

        Dish::create([
            'name' => 'Camarones termidor / Termidor shrimp',
            'description_en' => 'Shrimp bathed in a delicious au gratin sauce.',
            'description_es' => 'Camarones de línea U-12 bañados y gratinados en una exquisita salsa.',
            'price' => '279.00',
            'measure' => '(200 gr.)',
            'prep_time' => '40 mins.',
            'category_id' => 10
        ]);

        Dish::create([
            'name' => 'Milanesa de pollo / Crispy chicken',
            'description_en' => 'Breaded chicken breast garnished with mixed salad and French fries.',
            'description_es' => 'Con una guarnición de ensalada mixta y papas a la francesa.',
            'price' => '112.00',
            'measure' => '(120 gr.)',
            'prep_time' => '30 mins.',
            'category_id' => 11
        ]);

        Dish::create([
            'name' => 'Club sándwich',
            'description_en' => 'Traditional club sandwich stuffed with grilled chicken breast, bacon, ham and cheese, served with French fries and salad.',
            'description_es' => 'Tradicional club sándwich relleno de pechuga de pollo asada, tocino, jamón y queso, acompañado de papas a la francesa y ensalada.',
            'price' => '95.00',
            'prep_time' => '25 mins.',
            'category_id' => 12
        ]);

        Dish::create([
            'name' => 'Tacos Miguelito / Miguelito’s tacos',
            'description_en' => 'Delicious steak tacos in a corn tortilla. Served with refried beans and guacamole.',
            'description_es' => 'Ricos tacos de filete de res en tortilla de maíz acompañados de frijoles refritos y guacamole.',
            'price' => '99.00',
            'prep_time' => '20 mins.',
            'category_id' => 13
        ]);

    }
}
