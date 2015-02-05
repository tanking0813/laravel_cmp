<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::when( 'auth/*', 'csrf', array( 'post' ) );

Route::get('/' ,['as'=>'index' ,'uses'=>'HomeController@index']);


Route::get('auth/logout', ['as'=>'auth.logout', 'uses'=>'AuthController@logout']);
Route::group(['before'=>'auth.logined'], function(){

    Route::get('auth/login', ['as'=>'auth.login', 'uses'=>'AuthController@login']);
    Route::get('auth/register', ['as'=>'auth.register', 'uses'=>'AuthController@register']);

    Route::post('auth/login', ['as'=>'auth.dologin', 'uses'=>'AuthController@dologin']);
    Route::post('auth/store', ['as'=>'auth.store', 'uses'=>'AuthController@store']);

    Route::get('auth/active/{uid}/{code}', ['as'=>'auth.active', 'uses'=>'AuthController@active']);
    Route::get('auth/forgetpass', ['as'=>'auth.forgetpass', 'uses'=>'AuthController@forgetpass']);

    Route::post('auth/reminder', ['as'=>'auth.reminder', 'uses'=>'AuthController@reminder']);
    Route::any('auth/resetpass/{uid}/{code}', ['as'=>'auth.resetpass', 'uses'=>'AuthController@resetpass']);

});

/*
 * 全局控制器
*/

//验证码
Route::get('code/{rdm?}', ['as'=>'code', 'uses'=>'BaseController@code']);
//文件上传
Route::controller('file', 'FileController');


// error
/*App::error(function (Exception $exception) {
    Log::error($exception);
    $error = $exception->getMessage();
    return Response::view('errors.error', compact('error'));
});*/

// 404 page not found

App::missing(function () {
    return Response::view('errors.404', array(), 404);
});
