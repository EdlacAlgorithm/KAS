<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Model\Shisha;
use App\Model\Category;

class HomeController extends Controller
{   
    public function index(Shisha $shisha,Category $category)
    {   
        $latestProducts = $shisha->latest()->take(9)->get();

    	return view('frontend.index',compact('latestProducts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Shisha $shisha)
    {  
        $shisha->addViewCount();

        $product = $shisha;

        return view('frontend.product_detail',compact('product'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Contact  $contact
     * @param  \App\Model\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Contact $contact,User $user)
    {   
       
    }

}
