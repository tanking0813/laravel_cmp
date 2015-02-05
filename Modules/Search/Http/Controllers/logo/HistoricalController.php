<?php namespace Modules\Search\Http\Controllers\logo;

use Illuminate\Support\Facades\View;

class HistoricalController extends \BaseController {

	
	public function index()
	{
		return View::make('search::index');
	}

    //历史查询列表
    public function history()
	{
		return View::make('search::logo.history');
	}
	
	//历史查询列表(表格)
	public function historys()
	{
		return View::make('search::logo.historys');
	}

	 
	
}