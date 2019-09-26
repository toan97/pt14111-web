<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Item;
use App\Models\Wasehouse;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
	$wasehouse_id = Wasehouse::pluck('id')->toArray();
    return [
        'name' => $faker->name,
        'description' => $faker->text(100),
        'price' => $faker->numberBetween(1000,10000),
        'quantity' => $faker->numberBetween(1000,10000),
        'wasehouse_id' => $faker->randomElement($wasehouse_id)
    ];
});
