<?php

use Illuminate\Database\Seeder;
use App\Payment;

class PaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Payment::create([
            'user_id' => 51,
            'description_es' => 'Efectivo',
            'description_en' => 'Cash'
        ]);

        Payment::create([
            'user_id' => 51,
            'description_es' => 'Cargado a la habitación',
            'description_en' => 'Charged to room'
        ]);

        Payment::create([
            'user_id' => 51,
            'description_es' => 'Tarjeta',
            'description_en' => 'Credit Card'
        ]);

        Payment::create([
            'user_id' => 51,
            'description_es' => 'Convenio con Empresa',
            'description_en' => 'Company Agreement'
        ]);
    }
}
