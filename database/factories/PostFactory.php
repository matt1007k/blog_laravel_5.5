<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
     //oracion de 4 palabras 
    $title = $faker->sentence(4);
    return [
        'user_id' => rand(1,30), //random de 1 a 30
        'category_id' => rand(1,20),
        'name' => $title,
        'slug' => str_slug($title), //comvierte a slug el $title
        'excerpt' => $faker->text(200), //Texto de 200 letras
        'body' => $faker->text(500),
        'file' => $faker->imageUrl($width = 1200, $height = 400), //url imagen de 1200px x 400px
        'status' => $faker->randomElement(['DRAFT','PUBLISHED']), //random de los dos elementos ['DRAFT','PUBLISHED']
    ];
});
