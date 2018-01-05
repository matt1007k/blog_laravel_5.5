<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //que se crean 20 Etiquetas
        factory(App\Tag::class, 20)->create();
    }
}
