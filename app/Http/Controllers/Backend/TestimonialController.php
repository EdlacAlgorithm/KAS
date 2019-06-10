<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Testimonial;
use App\Helpers\ImageHelper;

class TestimonialController extends Controller
{	
	public function index()
	{	
		return view('backend.testimonial.list');
	}

	public function store(Request $request,ImageHelper $imageHelper)
	{	
		$this->validate($request,[
			'name'=>'required|string',
			'image'=>'required|mimes:jpg,jpeg,gif,png'
		]);

		$toSave = $request->except(['previousImage','image']);

		$toSave['avater'] = $imageHelper->uploadImageWith(
			$request->file('image'),$request->name,'testimonial'
		);

		Testimonial::create($toSave);

		return redirect('/testimonial')->with(['flash'=>'Testimonial successfully created']);
	}

	public function update(Testimonial $testimonial,Request $request,ImageHelper $imageHelper)
	{	
		$this->validate($request,[
			'name'=>'required|string',
			'image'=>'required_without:previousImage',
            'image'=>'sometimes|mimes:jpg,jpeg,gif,png'
		]);

		$toUpdate = $request->except(['previousImage','image']);

		if(!$request->has('previousImage'))
		{	
			$imageHelper->removeImageWith($testimonial->avater,'testimonial');

			$toUpdate['avater'] = $imageHelper->uploadImageWith(
				$request->file('image'),$request->name,'testimonial'
			);
		}

		$testimonial->fill($toUpdate)->save();

		return redirect('/testimonial')->with(['flash'=>'Testimonial is successfully updated']);
	}

	public function destroy(Testimonial $testimonial,ImageHelper $imageHelper)
	{	
		$imageHelper->removeImageWith($testimonial->avater,'testimonial');

		if($testimonial->delete())
		{	
			return response(['successfully deleted'],200);
		}

		return response(['internal server error'],500);
	}

}