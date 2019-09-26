<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Wasehouse;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Wasehouse::class, function (Faker $faker) {
	$user_id = User::pluck('id')->toArray();
    return [
        'name' => $faker->name,
        'address' => $faker->address,
        'address' => $faker->address,
        'phone_number' => $faker->e164PhoneNumber,
        'user_id' => $faker->randomElement($user_id)
    ];
});
