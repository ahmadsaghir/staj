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
/*
Route::get('/', function () {
    $data=[];
    $data['id']=5;
    $data['name']='AHMAD';
    return view('welcome',$data);
});

Route::get('/show-number/{id}', function ($id) {
    return $id;
}) ->name('a');

Route::group(['prefix' => 'users','middleware' => 'auth'],function (){

    Route::get('/',function (){
        return 'work';
    });
    Route::get('show','UserController@showUserName');
    Route::delete('delete','UserController@showUserName');
    Route::get('edit','UserController@showUserName');
    Route::put('update', 'UserController@showUserName');
});
Route::get('check',function(){
    return 'middleware';
})->middleware('auth');

Route::group(['namespace' => 'Admin'],function (){

    Route::get('second','SecondController@showString');

});

Route::get('index','Front\UserController@getIndex');

Route::get('/landing',function (){

    return view('landing');
});
*/
Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/', function () {
    return 'hello';
});
Route::get('/redirect/{service}','SocialController@redirect');
Route::get('/callback/{service}','SocialController@callback');
