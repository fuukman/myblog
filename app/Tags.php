<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $table = 'tags';

    public function artikel(){
    	return $this->belongsTo('App\Artikel');
    }
}
