<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function xinchao($id){
    	echo "xin chào bạn".$id;
    }
    public function URL(Request $request){
    	if($request->is('phap'))
    		echo "Chứa";
    	else
    		echo "không chứa";
    }
    public function postForm(Request $request){
    	if($request->name=='')
    		echo "Nhập vào nha";
    	else 	
    		echo $request->name;
    	if($request->only('age'))
    		echo "Tuổi của bạn là: ".$request->age;
    	else
    		echo "phải ở dạng tuổi";
    }
    public function postFile(Request $request)
	 {
	 //kiểm tra có tồn tại myFikle ?
	 if($request->hasFile('myFile'))
	 {
	 //lưu file
	 $request->file('myFile')->move(
	 'images', //nơi cần lưu
	 'Saved.png' //tên file
	 );
	 }
	 else
	 {
	 echo "Chưa có file";
	 }
	 }
	 public function Blade($bt){
	 	if($bt=="Laravel")
	 		return view('pages.Laravel');
	 	elseif ($bt == "Php")
	 		return view('pages.Php');
	 }
}

