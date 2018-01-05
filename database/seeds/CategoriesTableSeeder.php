<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //que se crean 20 Categorias
        factory(App\Category::class, 20)->create();
    }
}
