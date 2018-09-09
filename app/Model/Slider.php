<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{	
	protected $fillable = ['title','sub_title','description','image'];
	//protected $casts = ['gallery'=>'array'];
}