<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Post;

use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [

      'title' => $faker -> word(),
      'description' => $faker -> sentence(),
      'like' => $faker -> randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 10000),
      'dislike' => $faker -> randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 10000)
    ];
});
