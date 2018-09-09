<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Category;


class CategoryController extends Controller
{
    public function index()
    {
    	return view('backend.category.list');
    }

    public function store(Category $category,Request $request)
    {	
        $this->persistCategory($category,$request);

        return redirect('/category')->with(['flash'=>'Category is successfully created']);
    }

    public function update(Category $category,Request $request)
    {	
        $this->persistCategory($category,$request);
        
        return redirect('/category')->with(['flash'=>'Category is successfully updated']);
    }

    public function destroy(Category $category)
    {   
        if($category->delete())
        {
            return response('1',200);
        }
    }

    private function persistCategory($category,$request)
    {
        $this->validate($request, ['name'=>'required|string|min:3']);

    	$category->name = $request->name;

    	$category->save();
    }
}