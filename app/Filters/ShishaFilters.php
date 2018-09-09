<?php

namespace App\Filters;

class ShishaFilters extends Filters
{
	/**
	 * Registered filters to operate upon.
	 *
	 * @var array
	 */
	protected $filters = ['search','price','category'];

	protected function search($searchtext)
	{	
	    return $this->builder->where('name','like','%'.$searchtext.'%')->orWhere(
	    	'description','like','%'.$searchtext.'%'
	    );
	}

	protected function price($price)
	{
	    return $this->builder->whereBetween('price',explode(',',$price));
	}

	protected function category($category)
	{
	    return $this->builder->where('category_id', $category);
	}
}