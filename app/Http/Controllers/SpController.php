<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;

class SpController extends Controller
{

    public function getDanhsach(){
    	$slide=Slide::all();
    	return view('admin.slide.danhsach',['slide'=>$slide]);
    }
    public function getThem(){
    	return view('admin.slide.them');
    }
    public function postThem(Request $request){
    	$this->validate($request,
    		[
    			'Ten'=>'required|min:3|max:100',
    			'Gia'=>'required|integer',
    		],
    		[
    			'Ten.required'=>'Bạn chưa nhập tên sản phẩm',
    			'Ten.min'=>'Tên có độ dài 3 đến 100 ký tự',
    			'Ten.max'=>'Tên có độ dài 3 đến 100 ký tự',
    			'Gia.integer'=>'Giá phải là số',
    		]);
    	$slide=new Slide;
    	$slide->Ten=$request->Ten;
    	if($request->hasFile('Hinh'))
    	{
    		$file = $request->file('Hinh');
    		$duoi = $file->getClientOriginalExtension();
    		if($duoi!='jpg' && $duoi!='png'&& $duoi!='jpeg')
    		{
    			return redirect('admin/slide/them')->with('loi','Bạn chỉ được chọn file có đuôi jpg, png, jpeg');
    		}
    		$name = $file->getClientOriginalName();
    		$Hinh =str_random(4)."_".$name;
    		while (file_exists("upload/sanpham/".$Hinh)) {
    			$Hinh = str_random(4)."_".$name;
    		}
    		$file->move("upload/sanpham",$Hinh);
    		$slide->Hinh=$Hinh;
    	}
    	else
    	{
    		$slide->Hinh="";
    	}
    	$slide->Giá=$request->Gia;
    	$slide->Link=$request->Link;
    	$slide->save();
    	return redirect('admin/slide/them')->with('thongbao','Thêm Thành Công');
    }
}
