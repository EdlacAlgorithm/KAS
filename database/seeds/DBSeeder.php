<?php

use Illuminate\Database\Seeder;

class DBSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Model\User',2)->create();
        factory('App\Model\Slider',5)->create();
        factory('App\Model\Testimonial',12)->create();
        $categories = factory('App\Model\Category',5)->create();
        $categories->each(function($category){
            factory('App\Model\Shisha',10)->create(['category_id'=>$category->id]);
        });
    }
}
