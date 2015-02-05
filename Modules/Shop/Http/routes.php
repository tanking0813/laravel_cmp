<?php

Route::group(['prefix' => 'shop', 'namespace' => 'Modules\Shop\Http\Controllers'], function()
{

	/*防止所有post来的scrf攻击*/
	//Route::when( 'shop/*', 'csrf', array( 'post' ) );

	Route::get('/',  ['as'=>'shop', 'uses'=>'ShopController@index']);

	/*商标市场*/
	Route::group(['prefix' => 'logo'], function()
	{
		Route::get('/', ['as'=>'shop.logo.index', 'uses'=>'LogoController@index']);
		Route::get('fixedprice', ['as'=>'shop.logo.fixedprice', 'uses'=>'LogoController@fixedprice']);
		Route::get('foreigns', ['as'=>'shop.logo.foreigns', 'uses'=>'LogoController@foreigns']);
		Route::get('boutique', ['as'=>'shop.logo.boutique', 'uses'=>'LogoController@boutique']);
		Route::get('popularity', ['as'=>'shop.logo.popularity', 'uses'=>'LogoController@popularity']);
		Route::get('antique', ['as'=>'shop.logo.antique', 'uses'=>'LogoController@antique']);
		Route::get('category', ['as'=>'shop.logo.category', 'uses'=>'LogoController@category']);
		Route::get('headhunt', ['as'=>'shop.logo.headhunt', 'uses'=>'LogoController@headhunt']);
		Route::get('/{id}', ['as'=>'shop.logo.show', 'uses'=>'LogoController@show']);

    });

	/*专利分组*/
	Route::group(['prefix' => 'patent'],function(){
		//专利首页
		Route::get('/', ['as'=>'shop.patent.index', 'uses'=>'PatentController@index']);
		//热门专利
		Route::get('hot', ['as'=>'shop.patent.hot', 'uses'=>'PatentController@hot']);
		//一口价专利
		Route::get('fixedprice', ['as'=>'shop.patent.fixedprice', 'uses'=>'PatentController@fixedprice']);
		//涉外专利
		Route::get('foreigns', ['as'=>'shop.patent.foreigns', 'uses'=>'PatentController@foreigns']);
		//人气专利
		Route::get('popularity', ['as'=>'shop.patent.popularity', 'uses'=>'PatentController@popularity']);
	});

	/*版权市场*/
	Route::group(['prefix' => 'copy'], function()
	{
		Route::get('/', ['as'=>'shop.copy.index', 'uses'=>'CopyController@index']);
		Route::get('fixedprice', ['as'=>'shop.copy.fixedprice', 'uses'=>'CopyController@fixedprice']);
		Route::get('popularity', ['as'=>'shop.copy.popularity', 'uses'=>'CopyController@popularity']);
		Route::get('category', ['as'=>'shop.copy.category', 'uses'=>'CopyController@category']);
		Route::get('/{id}', ['as'=>'shop.copy.show', 'uses'=>'CopyController@show']);
    });

    /*域名市场*/
	Route::group(['prefix' => 'domain'], function()
	{
		Route::get('/', ['as'=>'shop.domain.index', 'uses'=>'DomainController@index']);
		Route::get('findouts', ['as'=>'shop.domain.findouts', 'uses'=>'DomainController@findouts']);
		Route::get('auction', ['as'=>'shop.domain.auction', 'uses'=>'DomainController@auction']);
		Route::get('treasure', ['as'=>'shop.domain.treasure', 'uses'=>'DomainController@treasure']);
		Route::get('/{id}', ['as'=>'shop.domain.show', 'uses'=>'DomainController@show']);
    });
});