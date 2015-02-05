<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{
	//
});


App::after(function($request, $response)
{
	//
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/

Route::filter('auth', function()
{
    if(!Sentry::check()){
        return Redirect::route('auth.login');
    }
});

Route::filter('auth.logined', function(){
    if(Sentry::check()){
        return Redirect::route('member');
    }
});


Route::filter('auth.basic', function()
{
	return Auth::basic();
});

Route::filter('auth.admin', function () {
    // 拦截非管理员用户，跳转回上一页面
    if(!Sentry::check()){
        if (Request::ajax())
        {
            return Response::make('未授权', 401);
        }
        return Redirect::guest('backend');
    }
});


/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

Route::filter('guest', function()
{
	if (Auth::check()) return Redirect::to('/');
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function()
{
	if (Session::token() !== Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});

/*
|--------------------------------------------------------------------------
| 全页缓存
|--------------------------------------------------------------------------
|
*/
Route::filter('cache.fetch', 'CacheFilter@fetch');
Route::filter('cache.put', 'CacheFilter@put');

/*
|--------------------------------------------------------------------------
| 禁止缓存
|--------------------------------------------------------------------------
|
*/
Route::filter('nocache', function($response)
{
// No caching for pages
$response->header("Pragma", "no-cache");
$response->header("Cache-Control", "no-store, no-cache, must-revalidate, max-age=0");
});

