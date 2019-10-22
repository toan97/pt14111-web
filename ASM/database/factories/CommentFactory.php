<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
	$posts = App\Models\Post::pluck('id')->toArray();
	$users = App\Models\User::pluck('id')->toArray();
    return [
        'content' => $faker->text(500),
        'post_id' => $faker->randomElement($posts),
        'user_id' => $faker->randomElement($users),
        'is_active' => $faker->boolean(0,1)
    ];
});
