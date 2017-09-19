<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    
     public function artikel()
    {
        return $this->hasMany('App\Artikel','id_kategori');
    }
}
