<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crear 50 usuarios.
        factory(App\User::class, 'guest', 50)->create();

        //Crear administrador (admin, admin).
        factory(App\User::class, 'admin')->create();

        //Crear test user. (test, test).
        factory(App\User::class, 'test')->create();
    }
}
