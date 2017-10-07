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
Route::get('verifyemailfirst','Auth\RegisterController@verifyemailfirst')->name('verifyemailfirst');
Route::get('verify/{email}/{verifytoken}','Auth\RegisterController@sendemaildone')->name('sendemaildone');
Auth::routes();


Route::group(['middleware' => 'auth'], function()
{
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/profile/{slug}', 'ProfileController@index');

	Route::get('/changePhoto',function ()
	{



		return view('profile.pic');
	}



	);

	// Route::get('/add_post',function ()
	// {



	// 	return view('profile.pic');
	// }



	// );
	Route::post('/uploadPhoto', 'ProfileController@uploadPhoto');
	Route::get('editProfile', function()
	{



		return view('profile.editProfile')->with('data',Auth::user()->profile) ;


	}



	);
	Route::get('/add_post','PostController@post');
	Route::post('/addpost','PostController@addpost');
	Route::get('/post_catagories','CatagoryController@catagory');
	Route::post('/addcatagory','CatagoryController@addcatagory');

	Route::post('/insert','ProfileController@insert');
	Route::post('/projectinsert','ProfileController@projectinsert');
	Route::get('/task',function(){

		return view('profile.task');
	}


		);

		Route::get('/project',function(){

		return view('profile.project');
	});
		Route::get('back',function(){

		return view('welcome');
	});


		Route::get('/allemp',function(){

		return view('profile.emp');
	}


		);

});
Route::get('/logout','Auth\LoginController@logout');


