<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	
	function getFullNameAttribute()
	
	{
		return $this->attributes['first_name'] . ' ' . $this->attributes['last_name'];
	}
	public function setFirstNameAttribute($value)
	{
		$this->attributes['first_name'] = ucfirst($value);
	}

}
