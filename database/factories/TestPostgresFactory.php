<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\TestPostgres::class, function (Faker $faker) {
    return [
        'city' => $faker->city,
        'company' => $faker->company,
        'country' => $faker->country,
        'description' => $faker->text,
        'email' => $faker->safeEmail,
        'first_name' => $faker->firstName,
        'firstname' => $faker->firstName,
        'guid' => $faker->uuid,
        'last_name' => $faker->lastName,
        'lastname' => $faker->lastName,
        'lat' => $faker->latitude,
        'latitude' => $faker->latitude,
        'lng' => $faker->longitude,
        'longitude' => $faker->longitude,
        'name' => $faker->name,
        'password' => bcrypt($faker->password),
        'phone' => $faker->phoneNumber,
        'phone_number' => $faker->phoneNumber,
        'postcode' => $faker->postcode,
        'postal_code' => $faker->postcode,
        'remember_token' => Str::random(10),
        'slug' => $faker->slug,
        'street' => $faker->streetName,
        'address1' => $faker->streetAddress,
        'address2' => $faker->secondaryAddress,
        'summary' => $faker->text,
        'url' => $faker->url,
        'user_name' => $faker->userName,
        'username' => $faker->userName,
        'uuid' => $faker->uuid,
        'zip' => $faker->postcode,
        'string' => $faker->word,
        'text' => $faker->text,
        'date' => $faker->date(),
        'time' => $faker->time(),
        'datetimetz' => $faker->dateTime(),
        'datetime' => $faker->dateTime(),
        'integer' => $faker->randomNumber(),
        'bigint' => $faker->randomNumber(),
        'smallint' => $faker->randomNumber(),
        'decimal' => $faker->randomFloat(),
        'float' => $faker->randomFloat(),
        'boolean' => $faker->boolean,
        'enum' => $faker->randomElement(['one', 'two', 'three']),
    ];
});
