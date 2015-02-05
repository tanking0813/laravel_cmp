<?php

Route::group(['prefix' => 'cms', 'namespace' => 'Modules\Cms\Http\Controllers'], function()
{
	Route::get('/', 'CmsController@index');
});