<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;

class SanphamController extends Controller
{

    public function spmoi(){
    	$slide=Slide::all();
    	return view('trangchu',['slide'=>$slide]);
    }
}
