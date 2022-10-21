<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('customer', 'CustomerController');
Route::resource('item', 'ItemController');

Route::get('/signup', [
        'uses' => 'userController@getSignup',
        'as' => 'user.signup']);

 Route::post('/signup', [
        'uses' => 'userController@postSignup',
        'as' => 'user.signup']);

Route::get('profile', [
        'uses' => 'userController@getProfile',
        'as' => 'user.profile']);

 Route::get('logout', [
        'uses' => 'userController@getLogout',
        'as' => 'user.logout']);

  Route::get('signin', [
                'uses' => 'userController@getSignin',
                'as' => 'user.signin']);

  Route::post('/signin', [
        'uses' => 'userController@postSignin',
        'as' => 'user.signin']);


// Route::get('/album','AlbumController@index');

Route::get('/album/create','AlbumController@create')->name('album.create'); // option1

// Route::post('/album/store',['uses' => 'AlbumController@store','as' => 'album.store']); //option2
Route::get('/album/edit/{id}','AlbumController@edit')->name('album.edit');

Route::post('/album/update{id}',['uses' => 'AlbumController@update','as' => 'album.update']); 

Route::get('/album/delete/{id}',['uses' => 'AlbumController@delete','as' => 'album.delete']);

Route::resource('customer', 'CustomerController');

Route::get('/customer/restore/{id}',['uses' => 'CustomerController@restore','as' => 'customer.restore']);

Route::resource('album', 'AlbumController');
Route::resource('artist', 'ArtistController');
Route::resource('listener', 'ListenerController');
// testing

// Route::group(['middleware' => ['auth']], function () { 
//     Route::get('/customer/restore/{id}','CustomerController@restore')->name('customer.restore');
// 	Route::resource('customer','CustomerController');
// 	Route::resource('album','AlbumController');
// 	Route::resource('artist','ArtistController');
// 	Route::resource('listener','ListenerController');

// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// 	Route::resource('customer','CustomerController')->middleware('auth');
// 	 Route::resource('album', 'AlbumController')->middleware('auth');
// 	 Route::resource('artist', 'ArtistController')->middleware('auth');
// 	 Route::resource('listener', 'ListenerController')->middleware('auth');
