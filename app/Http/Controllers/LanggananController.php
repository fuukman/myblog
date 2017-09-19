<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Langganan;
class LanggananController extends Controller
{
    public function simpan(Request $request){

    		$langganan = new Langganan;
    		$langganan->email = $request->email;
    		$langganan->save();

    	return back();
    }
}
