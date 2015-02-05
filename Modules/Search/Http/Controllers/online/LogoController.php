<?php namespace Modules\Search\Http\Controllers\online;

use Illuminate\Support\Facades\View;

class LogoController extends \BaseController {


	public function index()
	{		
		return View::make('search::online.logo');
	}

	public function logoDetail()
	{		
		return View::make('search::online.logoDetail');
	}
	 
	 

}