		<?php

		/*
		|--------------------------------------------------------------------------
		| Web Routes
		|--------------------------------------------------------------------------
		|
		| Here is where you can register web routes for your application. These
		| routes are loaded by the RouteServiceProvider within a group which
		| contains the "web" middleware group. Now create something great!
		|
		*/

		Route::get('/', function () {
		    return view('welcome');
		});

		Route::get('phap', 'MyController@URL');

		Route::get('getForm',function(){
			return view('postForm');
		});
		Route::post('postForm',['as'=>'postForm','uses'=>'MyController@postForm']);
		Route::post('postFile',[
		 'as'=>'postFile',
		 'uses'=>'MyController@postFile'
		]);
		//goi den view

		Route::get('myview',function(){
			return view('myView');
		});

		//blade
		Route::get('blade',function(){
			return view('pages.Laravel');
		});

		Route::get('Blade',function(){
			return view('layouts.Master');
		});

		Route::get('BladeTemplate/{bt}','MyController@Blade');

		//database

		Route::get('database',function(){
			Schema::create('loaisanpham',function($table){
				$table->increments('id');//tên cột là id và tự tăng;
				$table->string('ten',200);
			});
			echo "đã thực hiện lệnh tạo bảng";
		});

		
		Route::get('Trangchu','SanphamController@spmoi');

		Route::get('admin',function(){
			return view('admin.layout.index');
		});
		Route::group(['prefix'=>'admin'],function(){
			Route::group(['prefix'=>'slide'],function(){
				Route::get('danhsach','SpController@getDanhsach');

				Route::get('sua/{id}','SpController@getSua');
				Route::post('sua/{id}','SpController@postSua');

				Route::get('them','SpController@getThem');
				Route::post('them','SpController@postThem');

				Route::get('xoa/{id}','SpController@getXoa');
			});
		});