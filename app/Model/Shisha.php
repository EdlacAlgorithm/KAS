<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Shisha extends Model
{	
	use SubAttributeTrait;

    protected $guarded = [];

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function  getSubDescriptionAttribute()
    {   
        return $this->subAttribute('description',25);
    }

    public function  getSimilarAttribute()
    {
        return $this->similar()->inRandomOrder()->take(9)->get();
    }

    public function scopeFilter($query,$filter)
    {
        return $filter->apply($query);
    }

    public function getRouteKeyName()
    {
        return 'unique_id';
    }
    
    public function similar()
    {
    	return static::where('id','!=',$this->id);
    }

    public function addViewCount()
    {   
        if(\Auth::guest())
        {   
            $this->view_count +=1;

            $this->save();
        }    
    }
}