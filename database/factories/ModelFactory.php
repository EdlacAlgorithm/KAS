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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Model\User::class, function (Faker\Generator $faker) {
    static $password;
    $name = $faker->name;
    return [
	    'name' => $name,
	    'slug' => str_slug($name),
	    'email' => $faker->unique()->safeEmail,
	    'password' => $password ?: $password = bcrypt('password'), 
	    'phone' =>$faker->phoneNumber,
	    'status' => 1,
	    'remember_token' => str_random(10),
	];
});

$factory->define(App\Model\Category::class, function (Faker\Generator $faker) {
	return [
		'name'=>rtrim($faker->sentence(1),'.'),
		'status'=>1
	];

});


$factory->define(App\Model\Shisha::class, function (Faker\Generator $faker){

	return [
		'unique_id' => $faker->uuid,
		'name'=>$faker->sentence(1),
		'status'=>1,
		'description'=>$faker->sentence,
		'category_id'=>function(){
			return factory(App\Model\Category::class)->create()->id; 
		},
		'price'=>$faker->randomFloat(2,1000,5000),
		'view_count'=>$faker->numberBetween(26,56),
		'created_at'=>$faker->dateTimeThisYear(),
	];
});

$factory->define(App\Model\Slider::class, function (Faker\Generator $faker){
	return [
		'title'=>$faker->sentence(2),
		'sub_title'=>$faker->bs,
		'status'=>1,
		'description'=>$faker->sentence,
	];
});

$factory->define(App\Model\Testimonial::class, function (Faker\Generator $faker){
	return [
		'name'=>$faker->name(2),
		'profile'=>$faker->bs,
	];
});
	