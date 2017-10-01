<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\TagScope;

class Tag extends Model
{
    protected $table = 'tags';

    protected $fillable = ['tag'];

    public function articles(){
    	return $this->belongsToMany('App\Article')->withTimestamps();
    }

    // For search tags in tags.index
   	public function scopeSearch($query, $name)
	{
	    return $query->where('tag', 'LIKE', '%$name%');
	}
}
