<?php namespace Modules\Search\Http\Controllers\online;

use Illuminate\Support\Facades\View;

class patentController extends \BaseController {


	public function index()
	{		
		return View::make('search::online.patent');
	}

	public function patentDetail()
	{		
		return View::make('search::online.patentDetail');
	}
	 
	 

}