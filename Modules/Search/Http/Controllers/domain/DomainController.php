<?php namespace Modules\Search\Http\Controllers\domain;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class DomainController extends \BaseController {

	//默认首页
	public function index()
	{    
		return View::make('search::domain.index');	
	} 


	//查询列表
	public function domainlist()
	{   
		$test  = Input::get('test');
		$url='http://panda.www.net.cn/cgi-bin/check.cgi?area_domain='.$test.'.com'; 
        $str=file_get_contents($url); 
        $xml = simplexml_load_string($str);
        return View::make('search::domain.domainlist',  compact('xml'));

	} 

	//查询详细
	public function domaininfo()
	{       
        return View::make('search::domain.domaininfo');
	} 

	//查询帮助
	public function domainhelp()
	{       
        return View::make('search::domain.domainhelp');
	} 
    

}