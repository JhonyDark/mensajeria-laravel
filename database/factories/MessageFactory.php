<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Message;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {
    $sender= \App\Models\User::inRandomOrder()->first();
    return [
        'message'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
        'sender_id'=> $sender->id,
        'recipient_id'=> \App\Models\User::inRandomOrder()->where('id', '!=', $sender->id)->first(),
    ];
});
