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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@laptop')->name('about');
Route::get('/laptops', 'LaptopController@all')->name('laptops');
Route::get('/laptop', 'LaptopController@index')->name('laptop');

Route::group(['prefix'=>'admin','namespace'=>'Admin', /*'middleware'	=>	'admin'*/], function(){
    Route::get('/', 'DashboardController@index');
    Route::resource('/brand', 'BrandController');
    Route::resource('/laptopadd', 'laptopaddController');
    /*  Route::resource('/tags', 'TagsController');
      Route::resource('/users', 'UsersController');
      Route::resource('/posts', 'PostsController');
      Route::get('/comments', 'CommentsController@index');
      Route::get('/comments/toggle/{id}', 'CommentsController@toggle');
      Route::delete('/comments/{id}/destroy', 'CommentsController@destroy')->name('comments.destroy');
      Route::resource('/subscribers', 'SubscribersController');*/
});