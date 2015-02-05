<?php namespace Modules\Search\Http\Controllers\patent;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class PatentController  extends \BaseController {

	//首页
	public function index()
	{
		return View::make('search::patent.index');
	}

	//专利检索
	public function retrieval()
	{

		return View::make('search::patent.retrieval');
	}

	//专利申请
	public function apply()
	{
		return View::make('search::patent.apply');
	}
    //专利指南
	public function guide()
	{ 
		$json = DB::table('cateclass')->where('pid',0)->get();
		return View::make('search::patent.guide' , compact('json'));
	}

	//数据说明
	public function declares()
	{
		return View::make('search::patent.declare');
	}

	//ipc检索
	public function ipc()
	{
		return View::make('search::patent.ipc');
	}

	//locarno检索
	public function locarno()
	{
		//$data = DB::table('cateclass')->where('pid'=>'id')->lists('name');
		//$data =[ [ "id"=>"1", "name"=>"食品"], [ "id"=>"2", "name"=>"服装和服饰用品"], [ "id"=>"3", "name"=>"其他类未列入的旅行用品、箱子、阳伞和个人用品"]];
		//dd($data);
		/*foreach ( $pClass as $k => $v ) {
			$pClass [$k] ['ctype'] = $this->prodClass ( $v ['id'] );			
		}*/

		$data = DB::table('cateclass')->where('pid',0)->orderBy('id')->get();

		/*foreach ( $data as $k => $v ) {
			$data[$k]['cdata'] = DB::table('cateclass')->where('pid','=',$v->id)->get();	
		}		*/
		//dd($data);
		return View::make('search::patent.locarno' , compact('data'));
		
	}

	 

	 

}