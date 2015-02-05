<?php
/**
 *	Trademark Search Route and Patent Route 
 *	@email 		eiengwch@gmail.com
 *	@date 		2015/1/21
 *  @package	Search
 *	@author  	Eiengwch
 *  @version    1.0.0
  * @link       http://ipr.cc
 */	

//防止所有post来的scrf攻击
Route::when( 'search/*', 'csrf', array( 'post' ));

Route::group(['prefix' => 'search', 'namespace' => 'Modules\Search\Http\Controllers'], function()
{

    Route::get('/', ['as'=>'search', 'uses'=>'SearchController@index']);
    /**
     *============================================================================
     *	商标路由组
     *============================================================================
     **/
    Route::group(['prefix' => 'logo', 'namespace' => '\logo'], function(){

        //商标首页
        Route::get('/', ['as'=>'search.logo', 'uses'=>'LogoController@index']);
        Route::get('/classify', ['as'=>'search.logo.classify', 'uses'=>'LogoController@classify']);
        //基本查询类型
        Route::get('/simple', ['as'=>'search.logo.simple', 'uses'=>'LogoController@simple']);
        //高级查询类型
        Route::get('/profession/{channel?}', ['as'=>'search.logo.profession', 'uses'=>'LogoController@profession']);
        //商标详细
        Route::get('/logoDetail', ['as'=>'search.logo.logoDetail', 'uses'=>'LogoController@logoDetail']);
        //商标状态查询类型
        Route::group(['prefix'=>'status'], function(){

            //商标状态查询列表
            Route::get('logoState', ['as'=>'search.logo.logoState', 'uses'=>'StatusController@logoState']);
            //注册号查询
            Route::get('zhucehao', ['as'=>'search.logo.status.zhucehao', 'uses'=>'StatusController@zhucehao']);
            //商标名称查询
            Route::get('shangbiaoming', ['as'=>'search.logo.status.shangbiaoming', 'uses'=>'StatusController@shangbiaoming']);
            //申请人查询
            Route::get('shenqingren', ['as'=>'search.logo.status.shenqingren', 'uses'=>'StatusController@shenqingren']);
            //商标状态查询
            Route::get('zhuangtai', ['as'=>'search.logo.status.zhuangtai', 'uses'=>'StatusController@zhuangtai']);
              
        });

        //商标专项
        Route::group(['prefix'=>'special'], function(){  
            //图形匹配查询
            Route::get('tuxingpipei', ['as'=>'search.logo.special.tuxingpipei', 'uses'=>'SpecialController@tuxingpipei']);
            //代理机构
            Route::get('dailijigou', ['as'=>'search.logo.special.dailijigou', 'uses'=>'SpecialController@dailijigou']);
            //非规范商品
            Route::get('feiguifan', ['as'=>'search.logo.special.feiguifan', 'uses'=>'SpecialController@feiguifan']);
        });

        //商标监测
        Route::group(['prefix'=>'monitor'], function(){
            //商标监测默认首页
            Route::get('/', ['as'=>'search.logo.monitor', 'uses'=>'MonitorController@index']);
            //状态检测
            Route::get('/state', ['as'=>'search.logo.monitor.state', 'uses'=>'MonitorController@state']);
            Route::get('/state-show/{id}', ['as'=>'search.logo.monitor.state.show', 'uses'=>'MonitorController@showState']);
            Route::get('/people-count', ['as'=>'search.logo.monitor.count.people', 'uses'=>'MonitorController@peopleCount']);
            Route::get('/people-count-show/{id}', ['as'=>'search.logo.monitor.count.people.show', 'uses'=>'MonitorController@peopleShowCount']);
            
            //创建近视 状态 监测
            Route::get('/state-add', ['as'=>'search.logo.monitor.state.add', 'uses'=>'MonitorController@addState']);
            Route::get('/approx-add', ['as'=>'search.logo.monitor.approx.add', 'uses'=>'MonitorController@addApprox']);

            //近似监测
            Route::get('/approx', ['as'=>'search.logo.monitor.approx', 'uses'=>'MonitorController@approx']);
            Route::get('/approx-show/{id}', ['as'=>'search.logo.monitor.approx.show', 'uses'=>'MonitorController@showApprox']);
            Route::get('/approx-detail/{id}', ['as'=>'search.logo.monitor.approx.detail', 'uses'=>'MonitorController@detailApprox']);
            Route::get('/approx-img', ['as'=>'search.logo.monitor.approx.img', 'uses'=>'MonitorController@imgApprox']);
            Route::get('/approx-hand', ['as'=>'search.logo.monitor.approx.hand', 'uses'=>'MonitorController@handApprox']);
            Route::get('/approx-hand-order', ['as'=>'search.logo.monitor.approx.hand.order', 'uses'=>'MonitorController@handOrderApprox']);
            Route::get('/approx-look', ['as'=>'search.logo.monitor.approx.look', 'uses'=>'MonitorController@lookApprox']);

            //状态提醒
            Route::get('/remind', ['as'=>'search.logo.monitor.remind', 'uses'=>'MonitorController@remind']);
            Route::get('/remind-update', ['as'=>'search.logo.monitor.remind.update', 'uses'=>'MonitorController@updateRemind']);
            Route::get('/remind-notice', ['as'=>'search.logo.monitor.remind.notice', 'uses'=>'MonitorController@noticeRemind']);

            //账号订单
            Route::get('/order', ['as'=>'search.logo.monitor.order', 'uses'=>'MonitorController@order']);
            Route::get('/order-log', ['as'=>'search.logo.monitor.order.log', 'uses'=>'MonitorController@logOrder']);
            Route::get('/order-combo', ['as'=>'search.logo.monitor.order.combo', 'uses'=>'MonitorController@comboOrder']);
            Route::get('/order-price', ['as'=>'search.logo.monitor.order.price', 'uses'=>'MonitorController@priceOrder']);
            Route::get('/order-pay', ['as'=>'search.logo.monitor.order.pay', 'uses'=>'MonitorController@payOrder']);

            //商标知识
            Route::get('/library', ['as'=>'Search.logo.monitor.library', 'uses'=>"MonitorController@library"]);
            Route::get('/library-show/{id}', ['as'=>'Search.logo.monitor.library.show', 'uses'=>"MonitorController@showLibrary"]);

        });

        Route::get('/export', ['as'=>'search.logo.export', 'uses'=>'LogoController@export']);

        //商标知识
        Route::group(['prefix'=>'lore'], function(){
            //商标知识列表
            Route::get('loreList', ['as'=>'search.logo.loreList', 'uses'=>'LoreController@loreList']);
            //商标知识详情
            Route::get('loreInfo', ['as'=>'search.logo.loreInfo', 'uses'=>'LoreController@loreInfo']);
        });

        //历史查询记录
        Route::group(['prefix'=>'historical'], function(){
            //历史查询列表
            Route::get('history', ['as'=>'search.logo.history', 'uses'=>'HistoricalController@history']);
            //历史查询列表2
            Route::get('historys', ['as'=>'search.logo.historys', 'uses'=>'HistoricalController@historys']);  
        });
    });

    /**
     *============================================================================
     *	专利路由组
     *============================================================================
    **/
	Route::group(['prefix'=>'patent', 'namespace' => '\patent'], function(){
		//专利默认首页
        Route::get('/', ['as'=>'search.patent.index', 'uses'=>'PatentController@index']);
        //专利检索
        Route::get('/retrieval', ['as'=>'search.patent.retrieval', 'uses'=>'PatentController@retrieval']);
        //专利申请
        Route::get('/apply', ['as'=>'search.patent.apply', 'uses'=>'PatentController@apply']);
        //专利指南
        Route::get('/guide', ['as'=>'search.patent.guide', 'uses'=>'PatentController@guide']);
        //数据说明
        Route::get('/declares', ['as'=>'search.patent.declares', 'uses'=>'PatentController@declares']);
        //专利检索
        Route::get('/ipc', ['as'=>'search.patent.ipc', 'uses'=>'PatentController@ipc']);
        //专利检索
        Route::get('/locarno', ['as'=>'search.patent.locarno', 'uses'=>'PatentController@locarno']);
        //国内外检索

        Route::group(['prefix'=>'retrieval'], function(){
            //国内
            Route::get('/cnPatent', ['as'=>'search.patent.retrieval.cnPatent', 'uses'=>'RetrievalController@cnPatent']);
            Route::get('/cnDetail/{id}', ['as'=>'search.patent.retrieval.cnDetail', 'uses'=>'RetrievalController@cnDetail']);
            //统计分析
            Route::get('/statistics', ['as'=>'search.patent.retrieval.statistics', 'uses'=>'RetrievalController@statistics']);
            //对比
            Route::get('/contrast', ['as'=>'search.patent.retrieval.contrast', 'uses'=>'RetrievalController@contrast']);
            //国外
            Route::get('/fnPatent', ['as'=>'search.patent.retrieval.fnPatent', 'uses'=>'RetrievalController@fnPatent']);
            Route::get('/fnDetail/{id}', ['as'=>'search.patent.retrieval.fnDetail', 'uses'=>'RetrievalController@fnDetail']);
        
        });

    });

    /**
     *============================================================================
     *  域名查询路由组
     *============================================================================
    **/
    //域名查询
     Route::group(['prefix'=>'domain' , 'namespace' => '\domain'], function(){
        //查询首页
        Route::get('/', ['as'=>'search.domain.index', 'uses'=>'DomainController@index']);
        //查询列表
        Route::get('/domainlist', ['as'=>'search.domain.domainlist', 'uses'=>'DomainController@domainlist']);
        //查询详细
        Route::get('domaininfo', ['as'=>'search.domain.domaininfo', 'uses'=>'DomainController@domaininfo']);
        //查询帮助
        Route::get('domainhelp', ['as'=>'search.domain.domainhelp', 'uses'=>'DomainController@domainhelp']);
    
    });

    /**
     *============================================================================
     *  在线注册路由组
     *============================================================================
    **/
     Route::group(['prefix'=>'online' , 'namespace' => '\online'], function(){

        //查询首页
        Route::get('/', ['as'=>'search.online.index', 'uses'=>'OnLineController@index']);

        //商标业务
        Route::group(['prefix'=>'logo'], function(){

            Route::get('/index', ['as'=>'search.online.logo.index', 'uses'=>'LogoController@index']);
            Route::get('/logoDetail', ['as'=>'search.online.logo.logoDetail', 'uses'=>'LogoController@logoDetail']);
        
        }); 
        
        //专利申请
        Route::group(['prefix'=>'patent'], function(){
        
            Route::get('/index', ['as'=>'search.online.patent.index', 'uses'=>'PatentController@index']);
            Route::get('/patentDetail', ['as'=>'search.online.patent.patentDetail', 'uses'=>'PatentController@patentDetail']);

        });

        //著作权登记
        Route::group(['prefix'=>'copyright'], function(){

            Route::get('/index', ['as'=>'search.online.copyright.index', 'uses'=>'CopyrightController@index']);
            Route::get('/CopyrightDetail', ['as'=>'search.online.copyright.copyrightDetail', 'uses'=>'CopyrightController@copyrightDetail']);

        });

        //互联网业务
        Route::group(['prefix'=>'internet'], function(){

            //首页
            Route::get('/index', ['as'=>'search.online.internet.index', 'uses'=>'InternetController@index']);
            //通用网址注册
            Route::get('/reg-tywz', ['as'=>'search.online.internet.reg_tywz', 'uses'=>'InternetController@reg_tywz']);
            //无线网址注册
            Route::get('/reg-wxwz', ['as'=>'search.online.internet.reg_wxwz', 'uses'=>'InternetController@reg_wxwz']);
            //可信认证
            Route::get('/attestation', ['as'=>'search.online.internet.attestation', 'uses'=>'InternetController@attestation']);
            //可信认证注册
            Route::get('/reg_kxrz', ['as'=>'search.online.internet.reg_kxrz', 'uses'=>'InternetController@reg_kxrz']);
            //查询域名列表
            Route::get('/inter_result', ['as'=>'search.online.internet.inter_result', 'uses'=>'InternetController@inter_result']);
            //订单信息
            Route::get('/orders', ['as'=>'search.online.internet.orders', 'uses'=>'InternetController@orders']);
            //已有域名列表
            Route::get('/exist_list', ['as'=>'search.online.internet.exist_list', 'uses'=>'InternetController@exist_list']);
            //查看域名信息
            Route::get('/org_detail', ['as'=>'search.online.internet.org_detail', 'uses'=>'InternetController@org_detail']);
        });
    
    });


});



