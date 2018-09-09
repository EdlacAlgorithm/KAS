<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Model\Shisha;
use App\Model\Category;
use App\Filters\ShishaFilters;

class ListingController extends Controller
{
	 public function index(Request $request,Shisha $shisha,ShishaFilters $filter)
	 {   
	    $listingProducts = $shisha->filter($filter);

	    $listingProducts = $listingProducts->paginate(12);

	 	return view('frontend.listing',compact('listingProducts'));
	 }
}