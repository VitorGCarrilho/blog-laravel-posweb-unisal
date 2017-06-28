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


Route::get('user/{id}/class/{class}/{teste}', function ($id, $class, $teste) {
	if ($teste==null) {
		return 'OK';

		# code...
	} else {


    return 'User id: '.$id. ' class: '.$class. ' teste: x'.$teste;
      }
});
*/
Route::get('helloworld', function (){

	return view('helloworld');
});


//Route::get('user/{id}', 'UserController@show');
Route::resource('user', 'UserController');

//Route::get('entry/popular' , 'EntryController@');
Route::resource('entry', 'EntryController');



