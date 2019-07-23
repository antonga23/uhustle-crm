<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Lead::class, function (Faker $faker) {
    return [
		'title' => $faker->title,
		'name' => $faker->firstname,
		'surname' => $faker->lastname,
		'phone_number' => '+27671112588',
		'age' => $faker->numberBetween(15, 50),
		'gender' => ( $faker->numberBetween(0, 1) ) ? 'Male' : 'Female',
		'city' => $faker->city, 
		'country' => $faker->country,
		'description' => $faker->title,
		'status' => $faker->numberBetween(0, 1),
		'user_assigned_id' => $faker->numberBetween(2, 20),
		'user_created_id' => 1,
		'contact_date' => $faker->date,
		'source' => ( $faker->numberBetween(0, 1) ) ? 'Digital Payday' : 'Some Source Name',
		'product_id' => $faker->numberBetween(1, 2)
    ];
});
