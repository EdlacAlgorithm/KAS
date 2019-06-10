<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{   
    use SubAttributeTrait;

    public function shishas()
    {
    	return $this->hasMany(Shisha::class);
    }

    public function  getSubNameAttribute()
    {   
        return $this->subAttribute('name',17);
    }

    public function getCatId($category)
    {	
    	$now = \Carbon\Carbon::now();
    	
    	return is_numeric($category)?$category:$this->insertGetId(
    			['name'=>$category,'created_at'=>$now,'updated_at'=>$now]
    		);
    }
}
