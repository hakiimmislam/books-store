<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
	/**
	 * Relationships
	 */
	public function user()
	{
		return $this->belongsTo('App\User');
	}
	public function images()
	{
		return $this->hasMany('App\BookImage');
	}
}
