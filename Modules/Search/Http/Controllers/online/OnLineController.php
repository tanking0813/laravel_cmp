<?php namespace Modules\Search\Http\Controllers\online;

use Illuminate\Support\Facades\View;

class OnLineController extends \BaseController {


	public function index()
	{		
		return View::make('search::online.index');
	}
	 
	 

}