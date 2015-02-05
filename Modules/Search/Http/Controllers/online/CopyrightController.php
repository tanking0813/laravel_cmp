<?php namespace Modules\Search\Http\Controllers\online;

use Illuminate\Support\Facades\View;

class CopyrightController extends \BaseController {


	public function index()
	{		
		return View::make('search::online.copyright');
	}

	public function copyrightDetail()
	{		
		return View::make('search::online.copyrightDetail');
	}
	 
	 

}