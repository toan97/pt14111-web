<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
	$categories = App\Models\Category::pluck('id')->toArray();
	$users = App\Models\User::pluck('id')->toArray();
    return [
        'title' => $faker->name,
        'content' =>$faker->text(500),
        'category_id' =>$faker->randomElement($categories),
        'user_id' =>$faker->randomElement($users)
    ];
});
