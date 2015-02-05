<?php

Route::when( 'member/*', 'csrf', array( 'post' ) );

Route::group(['prefix' => 'member', 'namespace' => 'Modules\Member\Http\Controllers', 'before'=>'auth'], function()
{
	Route::get('/', ['as'=>'member', 'uses'=>'MemberController@index']);
    Route::get('account', ['as'=>'member.account', 'uses'=>'AccountController@index']);
    Route::post('account/update', ['as'=>'member.account.update', 'uses'=>'AccountController@update']);

	Route::group(['prefix'=>'publish'], function(){
	 	
	 	/*用户发布*/
		Route::get('/',['as'=>'member.publish','uses'=>'PublishController@index']);
		
	/*我是卖家*/
		Route::group(['prefix'=>'saler'], function(){
			Route::get('/add/{goodscate}' , ['as'=>'member.publish.saler.add' , 'uses'=>'SalerController@add']);
			Route::post('/store/{goodscate}' , ['as'=>'member.publish.saler.store' , 'uses'=>'SalerController@store']);
			Route::get('/list/{status}/{goodcate}/' , ['as'=>'member.publish.saler.list' , 'uses'=>'SalerController@listsale']);
			Route::get('/edit/{id}/{goods}' , ['as'=>'member.publish.saler.edit' , 'uses'=>"SalerController@edit"]);
			Route::get('/delete' , ['as'=>'member.publish.saler.deletegoods' , 'uses'=>'SalerController@deleteGoods']);
			Route::get('/upanddown' , ['as'=>'member.publish.saler.upanddown' , 'uses'=>'SalerController@upAndDown']);
			Route::get('/ajaxpagelist' , ['as'=>'member.publish.saler.ajaxpagelist' , 'uses'=>'SalerController@ajaxPageList']);
			Route::get('/bargain' , ['as'=>'member.publish.saler.bargain' , 'uses'=>'SalerController@bargain']);
			Route::get('/order' , ['as'=>'member.publish.saler.order' , 'uses'=>'SalerController@order']);
		});

		//买家Buyer
        Route::group(['prefix'=>'buyer'], function(){

            Route::get('/{type?}/add', ['as'=>'member.publish.buyer.add', 'uses'=>'BuyerController@add']);
            Route::get('/{type?}/list', ['as'=>'member.publish.buyer.list', 'uses'=>'BuyerController@glist']);
            Route::post('{type}/store', ['as'=>'member.publish.buyer.store', 'uses'=>'BuyerController@store']);
            Route::get('/{type?}/entrust', ['as'=>'member.publish.buyer.entrust', 'uses'=>'BuyerController@entrust']);
            Route::get('/{type?}/bargain', ['as'=>'member.publish.buyer.bargain', 'uses'=>'BuyerController@bargain']);
            Route::get('/{type?}/order', ['as'=>'member.publish.buyer.order', 'uses'=>'BuyerController@order']);

            Route::get('/{type}/delete',['as'=>'member.publish.buyer.delete', 'uses'=>'BuyerController@delete']);
            Route::get('/{type?}/edit/{id}',['as'=>'member.publish.buyer.edit', 'uses'=>'BuyerController@edit']);
            Route::get('/{type?}/close/{id}',['as'=>'member.publish.buyer.close', 'uses'=>'BuyerController@close']);
            Route::get('/{type?}/see/{id}',['as'=>'member.publish.buyer.see', 'uses'=>'BuyerController@see']);
        });
    });

});

