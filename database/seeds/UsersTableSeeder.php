<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //que se crean 29 usuarios
        factory(App\User::class, 29)->create();

        App\User::create([
            'name' => 'Matt',
            'email' => 'matt@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
