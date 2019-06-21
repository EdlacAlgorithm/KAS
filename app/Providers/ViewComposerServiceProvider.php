<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Model\Shiha;
use App\Model\Category;
use App\Model\Slider;
use App\Model\Testimonial;
use View;

class ViewComposerServiceProvider extends ServiceProvider
{   
    private $category = [
        'frontend._pertial.category',
        'frontend._pertial.header',
        'frontend._pertial.slidersearch',
        'frontend.listing',
        'backend.category.list',
        'backend.product.create',
        'backend.product.edit',
    ];

    private $testimonial = [
        'frontend._pertial.testimonials'
        //'backend.testimonial.list'
    ];
    
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {   
        View::composer('frontend._pertial.categorise_products',function ($view){
            $view->with('categoriseProducts',Category::with(
                ['shishas'=>function($query){ $query->oldest();}]
            )->take(5)->get());
        });

        View::composer($this->category,function ($view){
            $view->with('categories',Category::withCount('shishas')->get());
        });

        View::composer('frontend._pertial.slider',function ($view){
           $view->with('sliders',Slider::whereStatus(1)->get());
        });

        /*View::composer('backend.slider_list',function ($view){
           $view->with('sliders',Slider::paginate(50));
        });*/

        View::composer($this->testimonial,function($view){
           $view->with('testimonials',Testimonial::all());
        });

        View::composer(
            ['backend.index','backend.dashboard'], 
            'App\Http\Composers\SideNavComposer'
        );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
