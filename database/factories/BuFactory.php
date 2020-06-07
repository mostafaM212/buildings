<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Bu ;
$factory->define(Bu::class, function (Faker $faker) {
    return [
        'bu_name'=>$faker->name,
        'bu_price'=>$faker->numberBetween(5,100),
        'bu_rent'=>$faker->numberBetween(0,2),
        'bu_square'=>$faker->randomNumber(),
        'bu_type'=>$faker->numberBetween(0,2),
        'bu_small_dis'=>$faker->text(100),
        'bu_meta'=>$faker->text,
        'bu_langtuide'=>$faker->randomNumber(),
        'bu_latitude'=>$faker->randomNumber(),
        'bu_status'=>$faker->numberBetween(0,1),
        'user_id'=>$faker->numberBetween(0,10),
        'bu_large_dis'=>$faker->text,
        'rooms'=>$faker->numberBetween(1,15) ,
        'image'=>'bu_image/1.jpg'
    ];
});
