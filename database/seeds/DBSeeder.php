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
        Storage::disk('assets')->delete(Storage::disk('assets')->files('images/products'));
        Storage::disk('assets')->delete(Storage::disk('assets')->files('images/sliders'));
        Storage::disk('assets')->delete(Storage::disk('assets')->files('images/testimonials'));
        
        factory('App\Model\User')->create([
            'email'=>'admin@mail.com'
        ]);
        factory('App\Model\Slider',5)->create();
        factory('App\Model\Testimonial',12)->create();
        $categories = factory('App\Model\Category',5)->create();
        $categories->each(function($category){
            factory('App\Model\Shisha',10)->create(['category_id'=>$category->id]);
        });
    }
}
