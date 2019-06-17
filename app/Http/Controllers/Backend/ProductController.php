<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ShishaRequest;
use App\Model\Shisha;
use App\Model\Category;
use App\Helpers\ImageHelper;


class ProductController extends Controller
{	
	public function index(Shisha $shisha)
	{	
		$products = $shisha->latest()->paginate(50);

		return view('backend.product.list',compact('products'));
	}

	public function create()
	{
		return view('backend.product.create');
	}

	public function store(ShishaRequest $request,ImageHelper $imageHelper,Category $category)
	{	
		$toSave = $request->except(['previousImages','image','category_id']);

		$toSave['unique_id'] = uniqid();

		$toSave['category_id'] = $category->getCatId($request->category_id);

		$toSave['image'] = $imageHelper->uploadImageWith(
			$request->file('image'),$request->name,'products'
        );

		Shisha::create($toSave);

		return redirect('/product')->with(
			['flash'=>'Product is successfully created']
		);
	}

	public function edit(Shisha $shisha)
	{
		return view('backend.product.edit',['product'=>$shisha]);
	}

	public function update(Shisha $shisha,ShishaRequest $request,ImageHelper $imageHelper)
	{
		$toUpdate = $request->except(['previousImage','image','category_id']);

		$toUpdate['category_id'] = app(Category::class)->getCatId($request->category_id);

		if(!$request->has('previousImage'))
		{	
			$imageHelper->removeImageWith($shisha->image,'products');

			$toUpdate['image'] = $imageHelper->uploadImageWith(
				$request->file('image'),$request->name,'products'
			);
		}

		$shisha->fill($toUpdate)->save();

		return redirect('/product')->with(['flash'=>'Product successfully updated']);
	}

	public function destroy(Shisha $shisha,ImageHelper $imageHelper)
	{	
		$imageHelper->removeImageWith($shisha->image,'products');

		if($shisha->delete())
		{
			return response(['successfully deleted'],200);
		}

		return response(['internal server error'],500);
	}
}