<?php



$factory->define(App\Task::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->title,
    ];
});
