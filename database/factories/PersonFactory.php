<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Person;
use Faker\Generator as Faker;

$factory->define(Person::class, function (Faker $faker) {
    return [
        //
        'first_name'=>$faker->firstname,
        'last_name'=>$faker->lastname,
        'phone'=>$faker->PhoneNumber,
        'email'=>$faker->safeEmail,
        'city'=>$faker->city,
    ];
});
