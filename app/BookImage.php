<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookImage extends Model
{
	/**
	 * Relationships
	 */
	public function book()
	{
		return $this->belongsTo('App\Book');
	}
}
