<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'content' => $faker->text(500),
        'user_id' => $faker->randomElement(App\Models\User::pluck('id')->toArray())
    ];
});
