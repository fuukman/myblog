<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Kategori;
use Auth;
use App\Tags;
class PanelController extends Controller
{
    public function dashboard(){

    		return view('panel.dashboard');
    }

    public function create(){
    	$kategori = Kategori::orderBy('nama','asc')->get();
    	return view('panel.create')->with('kategori',$kategori);
    }

    public function created(){
    	$artikel = Artikel::orderBy('artikel.id','desc')->get();
    	return view('panel.posted')->with('artikel',$artikel);
    }

    public function savePost(Request $request){

     
    	$artikel = new Artikel();
    	$artikel->id_user = Auth::user()->id;
    	$artikel->judul = $request->judul;
    	$artikel->konten = $request->editor;
    	$artikel->id_kategori = $request->kategori;
    	

    	//simpan gambar
        $image = $request->file('file');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
        $artikel->gambar = $name;
     	$artikel->save();
        
        //simpan tags
        $arrayTag = explode(",",$request->tags);
        foreach ($arrayTag as $key => $value) {
            //cek tag sudah ada apa blm
        $cekTags = Tags::where('tags',$value)->first(); 

            if ($cekTags == null) {
            $tags = new Tags;
            $tags->post_id = $artikel->id;
            $tags->tags = $value;
            $tags->save();

            }
            
        }
        
        return back();
    }

    public function getEdit($id){

        $artikel = Artikel::find($id);
        $tags = Tags::where('post_id',$artikel->id)->get();
        $kategori = Kategori::orderBy('nama','asc')->get();
        return view('panel.edit')
            ->with('artikel',$artikel)
            ->with('tags',$tags)
            ->with('kategori',$kategori);
    }

    public function postEdit(Request $request, $id){
        return $request->all();
    }

}
