<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Post::class, function (Faker $faker) {

    return [
        'title' => $faker->sentence,
        'slug' => $faker->slug,
        'body' => $faker->realText(400),
        'category_id' => factory(\App\Models\Category::class)->create(),
        'visible' => true,
        'thumbnail' => $faker->imageUrl(500, 500),
        'published_at' => $faker->dateTime(),
    ];
});