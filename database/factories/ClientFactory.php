<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;

use Faker\Generator as Faker;

function unique_code($limit)
{
    return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
}


$factory->define(App\Client::class, function (Faker $faker) {
    return [
        'full_name' =>  $faker->name ,
        'phone' =>  $faker->PhoneNumber(),
        'address' =>  $faker->address(),
        'sex' =>  $faker->randomElement(['муж.','жен.']),
    ];
});

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'client_id' =>  function () {
            return factory(App\Client::class)->create()->id;
        } ,
        'registration_number' =>  unique_code(9),
        'brand' =>  $faker->word,
        'model' =>  $faker->word,
        'color' =>  $faker->colorName ,
        'status_flag' =>  '0',
    ];
});

