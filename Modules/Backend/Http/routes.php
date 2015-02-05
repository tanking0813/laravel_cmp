<?php
Route::group(['prefix' => 'backend', 'namespace' => 'Modules\Backend\Http\Controllers'], function()
{
        //后台根目录
        Route::get('/',['as'=>'backend', function(){
            return View::make('backend::index');
        }]);

        //管理员授权
        Route::post('auth/login', 'AuthController@login');
        Route::get('auth/logout', 'AuthController@logout');

        Route::group(['before'=>'auth.admin'], function(){

            Route::get('setting/init', ['as'=>'backend.setting.init', 'uses'=>'SettingController@init']);
            Route::post('setting/store', ['as'=>'backend.setting.store', 'uses'=>'SettingController@store']);

            Route::controller('slide', 'SlideController');
            Route::controller('banner', 'BannerController');
            //会员管理
            Route::controller('user', 'UserController', [
                'getIndex'      => 'backend.user.index',
                'getEdit'       => 'backend.user.edit',
                'postStore'     => 'backend.user.create',
                'putUpdate'     => 'backend.user.update',
                'deleteDestroy' => 'backend.user.delete'
            ]);
            //用户组管理
            Route::controller('usergroup', 'UsergroupController', [
                'getIndex'      => 'backend.usergroup.index',
                'getEdit'       => 'backend.usergroup.edit',
                'postStore'     => 'backend.usergroup.create',
                'putUpdate'     => 'backend.usergroup.update',
                'deleteDestroy' => 'backend.usergroup.delete',
                'getAccess'     => 'backend.usergroup.access'
            ]);
            //cms内管理
            Route::controller('cms', 'CmsController', [
                'getIndex'       => 'backend.cms.post.index',
                'getEdit'        => 'backend.cms.post.edit',
                'postStore'      => 'backend.cms.post.create',
                'putUpdate'      => 'backend.cms.post.update',
                'deleteDestroy'  => 'backend.cms.post.delete',
                //栏目
                'getAllCate'        =>'backend.cms.allcate',
                'getListCate'        =>'backend.cms.listcate',
                'getEditCate'       => 'backend.cms.category.edit',
                'postStoreCate'     => 'backend.cms.category.create',
                'putUpdateCate'     => 'backend.cms.category.update',
                'deleteDestroyCate' => 'backend.cms.category.delete',
            ]);
            //Shop
            Route::controller('shoplogo', 'ShopLogoController', [
                'getIndex'       => 'backend.shop.logo.index',
                'getEdit'        => 'backend.shop.logo.edit',
                'postStore'      => 'backend.shop.logo.create',
                'putUpdate'      => 'backend.shop.logo.update',
                'deleteDestroy'  => 'backend.shop.logo.delete',
                'getChangeStatus' => 'backend.shop.logo.check',
                'getSetValue'     => 'backend.shop.logo.set',
                //栏目
                'getAllCate'        =>'backend.shop.logo.category.allcate',
                'getEditCate'       => 'backend.shop.logo.category.edit',
                'postStoreCate'     => 'backend.shop.logo.category.create',
                'putUpdateCate'     => 'backend.shop.logo.category.update',
                'deleteDestroyCate' => 'backend.shop.logo.category.delete',
            ]);
            Route::controller('shoppatent', 'ShopPatentController', [
                'getIndex'       => 'backend.shop.patent.index',
                'getEdit'        => 'backend.shop.patent.edit',
                'postStore'      => 'backend.shop.patent.create',
                'putUpdate'      => 'backend.shop.patent.update',
                'deleteDestroy'  => 'backend.shop.patent.delete',
                'getChangeStatus' => 'backend.shop.patent.check',
                'getSetValue'     => 'backend.shop.patent.set',
                //栏目
                'getAllCate'        =>'backend.shop.patent.category.allcate',
                'getEditCate'       => 'backend.shop.patent.category.edit',
                'postStoreCate'     => 'backend.shop.patent.category.create',
                'putUpdateCate'     => 'backend.shop.patent.category.update',
                'deleteDestroyCate' => 'backend.shop.patent.category.delete',
            ]);
            Route::controller('shopcopy', 'ShopCopyController', [
                'getIndex'       => 'backend.shop.copy.index',
                'getEdit'        => 'backend.shop.copy.edit',
                'postStore'      => 'backend.shop.copy.create',
                'putUpdate'      => 'backend.shop.copy.update',
                'deleteDestroy'  => 'backend.shop.copy.delete',
                'getChangeStatus' => 'backend.shop.copy.check',
                'getSetValue'     => 'backend.shop.copy.set',
                //栏目
                'getAllCate'        =>'backend.shop.copy.category.allcate',
                'getEditCate'       => 'backend.shop.copy.category.edit',
                'postStoreCate'     => 'backend.shop.copy.category.create',
                'putUpdateCate'     => 'backend.shop.copy.category.update',
                'deleteDestroyCate' => 'backend.shop.copy.category.delete',
            ]);
        });


});

