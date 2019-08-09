<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Lead::class, function (Faker $faker) {
    return [
		'title' => $faker->title,
		'name' => $faker->firstname,
		'surname' => $faker->lastname,
		'email' => $faker->email,
		'phone_number' => '+27671112588',
		'age' => $faker->numberBetween(15, 50),
		'gender' => ( $faker->numberBetween(0, 1) ) ? 'Male' : 'Female',
		'city' => $faker->city, 
		'country' => $faker->country,
		'account' => $faker->name,
		'rating' => $faker->numberBetween(1, 100),
		'status' => $faker->numberBetween(0, 2),
		'user_assigned' => $faker->numberBetween(0, 20),
		'user_created_id' => 1,
		'source' => ( $faker->numberBetween(1, 2) ),
		'product_id' => $faker->numberBetween(1, 2),
		'is_client' => $faker->numberBetween(0, 1)
    ];
});
