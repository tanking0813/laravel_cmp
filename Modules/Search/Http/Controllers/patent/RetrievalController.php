<?php namespace Modules\Search\Http\Controllers\patent;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;

class RetrievalController extends \BaseController {

	//默认首页
	public function index()
	{       

	} 

	//国内
	public function cnPatent()
	{      
        return View::make('search::patent.cnPatent');        
	} 

	//国内专利详细
	public function cnDetail($id)
	{       
        return View::make('search::patent.cnDetail');        
	} 

	//国外
	public function fnPatent()
	{       
        return View::make('search::patent.fnPatent');        
	} 

	//国外专利详细
	public function fnDetail($id)
	{       
        return View::make('search::patent.fnDetail');        
	} 
    
    //统计分析
	public function statistics()
	{       
        return View::make('search::patent.statistics');        
	} 

	 //对比
	public function contrast()
	{       
        return View::make('search::patent.contrast');        
	} 
    

}