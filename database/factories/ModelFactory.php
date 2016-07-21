<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(\App\Product::class, function (Faker\Generator $faker) {

    $faker->realText(new Faker\Provider\ar_SA\Person);
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Product::class, function (Faker\Generator $faker) {
    return [
        'p_name' => $faker->unique()->sentence(2,false),
        'p_category' => $faker->text(),
        'p_buying_price' => $faker->randomNumber(2),
        'p_selling_price' => $faker->randomNumber(3),
        'p_qty' => $faker->randomNumber(2),
        'stock' => $faker->randomNumber(2),
        'image' => $faker->text(),
        'active' => $faker->randomElement([0,1]),
        'featured' => $faker->randomElement([0,1]),

    ];
});
