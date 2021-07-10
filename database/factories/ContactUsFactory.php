<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ContactUs;
use Faker\Generator as Faker;

$factory->define(ContactUs::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'phone' => $faker->phoneNumber,
        'email' => $faker->email,
        'subject' => $faker->realText(10),
        'message' => $faker->realText(30),
    ];
});
