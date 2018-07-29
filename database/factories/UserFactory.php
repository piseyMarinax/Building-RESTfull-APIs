<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Poll::class, function (Faker $faker) {
    return [
        'user_id' => function(){
            return factory('App\User')->create()->id;
        },
        'title' => $faker->realText(50),
    ];
});

$factory->define(App\Question::class, function (Faker $faker) {
//    $poll_ids = DB::table('polls')->pluck('id')->all();
    $user_ids = DB::table('users')->pluck('id')->all();
    return [
//        'user_id' => function(){
//            return factory('App\User')->create()->id;
//        },
        'poll_id' => function(){
            return factory('App\Poll')->create()->id;
        },
        'user_id' => $faker->randomElement($user_ids),
//        'poll_id' => $faker->randomElement($poll_ids),

        'title' => $faker->realText(50),
        'question' => $faker->realText(500),

    ];
});