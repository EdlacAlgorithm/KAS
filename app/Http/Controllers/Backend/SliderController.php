<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Slider;
use App\Helpers\ImageHelper;

class SliderController extends Controller
{	
	public function index(Slider $slider)
	{	
		$sliders = $slider->paginate(50);

		return view('backend.slider.list',compact('sliders'));
	}

	public function store(Request $request,ImageHelper $imageHelper)
	{	
		$this->validate($request,[
			'title'=>'required|string',
			'image'=>'required|mimes:jpg,jpeg,gif,png'
		]);

		$toSave = $request->except(['previousImage','image']);

		$toSave['image'] = $imageHelper->uploadImageWith(
			$request->file('image'),$request->title,
			'sliders',[[484,441,'slide_']]
		); 

		$toSave['status'] = 1;

		Slider::create($toSave);

		return redirect('/slider')->with([
			'flash'=>'Slider is successfully created'
		]);
	}

	public function update(Slider $slider,Request $request,ImageHelper $imageHelper)
	{	
		$this->validate($request,[
			'title'=>'required|string',
			'image'=>'required_without:previousImage',
            'image'=>'sometimes|mimes:jpg,jpeg,gif,png'
		]);

		$toUpdate = $request->except(['previousImage','image']);

		if(!$request->has('previousImage'))
		{	
			$imageHelper->removeImageWith($slider->image,'sliders');

			$toUpdate['image'] = $imageHelper->uploadImageWith(
				$request->file('image'),$request->title,
				'sliders',[[484,441,'slide_']]
			);
		}

		$slider->fill($toUpdate)->save();

		return redirect('/slider')->with([
			'flash'=>'Slider successfully updated'
		]);
	}

	public function destroy(Slider $slider,ImageHelper $imageHelper)
	{	
		$imageHelper->removeImageWith($slider->image,'sliders');

		if($slider->delete())
		{	
			return response(['successfully deleted'],200);
		}

		return response(['internal server error'],500);
	}

	public function onOff(Slider $slider)
	{
		$slider->status = $slider->status == 1?0:1;

		$slider->save();

		return response(['successfully change'],200);
	}
}