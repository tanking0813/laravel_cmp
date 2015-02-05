<?php namespace Modules\Search\Http\Controllers\online;

use Illuminate\Support\Facades\View;

class InternetController extends \BaseController {


	public function index()
	{		
		return View::make('search::online.internet');
	}

	public function reg_tywz()
	{		
		return View::make('search::online.reg_tywz');
	}
	 
	public function reg_wxwz()
	{		
		return View::make('search::online.reg_wxwz');
	}

	public function attestation()
	{
		return View::make('search::online.attestation');
	}

	public function reg_kxrz()
	{
		return View::make('search::online.reg_kxrz');
	}
	 
	public function inter_result()
	{
		return View::make('search::online.inter_result');		
	}

	public function orders()
	{
		return View::make('search::online.orders');
	}

	public function exist_list()
	{
		return View::make('search::online.exist_list');
	}

	public function org_detail()
	{
		return View::make('search::online.org_detail');
	}


}