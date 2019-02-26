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

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'Admin'], function () {

 Route::get('/', function () {
     return redirect()->to('admin/sub');
});

		Route::resource('/sub', 'sub');
		// 	Route::get('/create', 'sub@create');
	});
	
Route::group(['prefix' => 'user', 'middleware' => 'User'], function () {
		Route::get('/', function () {
  	   return redirect()->to('user/kategori');
});

		Route::resource('/kategori', 'kategori');
		// 	Route::get('/create', 'kategori@create');
	});

Route::get('/logout', 'HomeController@logout')->name('logout');
