<?php

use Faker\Generator as Faker;

use \App\Subject;

$factory->define(Model::class, function (Faker $faker) {
    return [


        'name' => $faker->name,


    ];
});
