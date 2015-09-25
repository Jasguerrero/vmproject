<?php

use Illuminate\Database\Seeder;
use App\Status;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            'user_id' => 51,
            'description_es' => 'Ordenado',
            'description_en' => 'Ordered'
        ]);

        Status::create([
            'user_id' => 51,
            'description_es' => 'Cocinando',
            'description_en' => 'Cooking'
        ]);

        Status::create([
            'user_id' => 51,
            'description_es' => 'Cancelado',
            'description_en' => 'Cancelled'
        ]);

        Status::create([
            'user_id' => 51,
            'description_es' => 'Entregado',
            'description_en' => 'Delivered'
        ]);
    }
}
