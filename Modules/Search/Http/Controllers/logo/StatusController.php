<?php namespace Modules\Search\Http\Controllers\logo;

use Illuminate\Support\Facades\View;

class StatusController extends \BaseController {


	public function index()
	{
		return View::make('search::trademark.status.index');
	}
 
	//注册号查询
	public function zhucehao()
	{
		//Your code
	}
	
	//商标名称查询
	public function shangbiaoming()
	{
		//Your code
	}

	//申请人查询
	public function shenqingren()
	{
		//Your code
	}

	//商标状态查询
	public function zhuangtai()
	{
		//Your code
	}

	//商标状态查询列表
	public function logoState()
	{
		 return View::make('search::logo.logoState');
	}


	//扩展方法写在下面	
	

}