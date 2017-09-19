<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\User;
use App\Kategori;

class ArtikelController extends Controller
{
    public function timeline(){
         
      
           $artikel = User::join('artikel','users.id','id_user')->join('kategori','kategori.id','id_kategori')
    	  ->orderBy('artikel.id','desc')
    	->paginate(7);
    	return view('blog.timeline')->with('artikel',$artikel);
    }

    public function detailTimeline($title){
    	 $artikel = User::join('artikel','users.id','id_user')->join('kategori','kategori.id','id_kategori')
    	  ->where('judul',$title)
    	->first();
       
        // nambah view
        $getArtikel = Artikel::where('judul',$title)->first();
        $plusview = Artikel::find($getArtikel->id);
        $plusview->viewer = $plusview->viewer+1;
        $plusview->save();

    	return view('blog.detail')->with('artikel',$artikel);
    }
}
