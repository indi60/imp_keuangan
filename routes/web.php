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

// Route::resource('kategori','Kategori');


// Route::get('/halaman-kedua', function () {
//     return view('halamandua');
// });

Route::resource('/transaksi', 'transaksi');
// 	Route::get('/create', 'transaksi@create');


Route::resource('/kategori', 'kategori');
// 	Route::get('/create', 'transaksi@create');


Route::resource('/sub', 'sub');
// 	Route::get('/create', 'transaksi@create');

Route::resource('/login', 'login');
// 	Route::get('/create', 'transaksi@create');



Route::get('/', function () {
  	   return view('dashboard');
});


Auth::routes();

Route::group(['middleware' => 'auth'],function(){
	Route::get('/transaksi/create','Transaksi@create');
	Route::get('/transaksi/{id}/update','Transaksi@update');
	Route::get('/transaksi/{id}/transaksi','Transaksi@edit');
	Route::get('/transaksi/{id}/delete','Transaksi@delete');

	Route::get('/sub','Sub@index');
	Route::get('/sub/{id}/delete','Sub@delete');
	Route::get('/sub/{id}/update','Sub@update');
	Route::get('/sub/create','Sub@create');
	Route::get('/sub/{id}/sub','Sub@edit');

	Route::get('/kategori','Kategori@index');
	Route::get('/kategori/create','Kategori@create');
	Route::get('/kategori/{id}/update','Kategori@update');
	Route::get('/kategori/{id}/kategori','Kategori@edit');
	Route::get('/kategori/{id}/delete','Kategori@delete');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'Admin'], function () {

 	 Route::get('/', function () {
     return redirect()->to('admin/sub');

     		Route::resource('/kategori', 'kategori');
		// 	Route::get('/create', 'kategori@create');

		Route::resource('/sub', 'sub');
		// 	Route::get('/create', 'kategori@create');
});
 	 });
	
Route::group(['prefix' => 'user', 'middleware' => 'User'], function () {
		Route::get('/', function () {
  	   return redirect()->to('user/kategori');
});

		Route::resource('/kategori', 'kategori');
		// 	Route::get('/create', 'kategori@create');

		Route::resource('/sub', 'sub');
		// 	Route::get('/create', 'kategori@create');
	});

Route::get('/logout', 'HomeController@logout')->name('logout');
