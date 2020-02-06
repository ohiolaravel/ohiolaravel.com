<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Meeting;
use App\Location;
use Faker\Generator as Faker;
use Illuminate\Support\Carbon;

$factory->define(Meeting::class, function (Faker $faker) {
    $start = $faker->dateTimeBetween(now(), now()->addYear());
    return [
        'slug' => (Carbon::parse($start))->toDateString(),
        'title' => $faker->word . ' Presentation',
        'description' => $faker->paragraph(),
        'image_path' => $faker->imageUrl(),
        'start_at' => $start,
        'end_at' => $faker->dateTimeBetween($start, Carbon::parse($start)->addHours(2)),
        'location_id' => factory(Location::class),
        'note' => $faker->word . ' ' . $faker->word,
    ];
});
