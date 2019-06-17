<?php

namespace App\Http\Controllers\Backend;

use App\Model\Shisha;
use App\Model\Slider;
use App\Model\Category;
use App\Model\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DashboardController extends Controller
{	
	public function index()
	{	
        $productCount = Shisha::count();
        
        $categoryCount = Category::count();

        $testimonialCount = Testimonial::count();
        
        $sliderCount = Slider::count();

		return view(
            'backend.dashboard',
            compact(
                'productCount',
                'categoryCount',
                'testimonialCount',
                'sliderCount'
            )
        );
    }
    
}