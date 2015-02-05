<?php namespace Modules\Member\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Shop_category;

/*
| author ： 田鑫
| builderdate ： 2015-01-21
| instruction ： 该类是用户中心的“我要发布的父类”
*/

class PublishController extends Controller {
	
	public function index()
	{
		return View::make('member::publish.publish');
	}
	public function sendBuyMessage(){}
	public function sendSaleMessage(){}
	public function salerAlready(){}
	public function saleUnpublish(){}
	public function bargain(){}
	public function order(){}
	public function toAjaxTpl($templateFile='',$data='') {
        // 模板文件不存在直接返回
        //if(!is_file($templateFile)) return NULL;
       // dd(View::make($templateFile,$data));
        $viewobj = View::make($templateFile,array('data'=>$data));
        $path= $viewobj->getPath();
        // 页面缓存
        ob_start();
        ob_implicit_flush(0);
        // 模板阵列变量分解成为独立变量
        // extract($data, EXTR_OVERWRITE);
        // 直接载入PHP模板
        // dd(View::make($templateFile,$data));
        include($path);
        //include('member::publish.partials.publish_sale_left');
        //include $templateFile;
        //获取并清空缓存
        $content = ob_get_clean();
        // 输出模板文件
        return $content;
    }
}