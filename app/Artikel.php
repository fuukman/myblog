<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikel';

     public function kategori()
    {
        return $this->belongsTo('App\Kategori','id_kategori','id');
    }

    public function getTimeAgoAttribute()
	{
    	return $this->created_at->diffForHumans();
	
	}

	public function tags(){
		return $this->hasMany('App\Tags');
	}

    public function user(){
        return $this->belongsTo('App\User');
    }
}
