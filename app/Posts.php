<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
	public function getBodyAttribute($value){

		return ucfirst($value);
	}
    protected $fillable = [
        'title',
        'content',
        'path'
    ];
}
