<?php namespace Modules\Search\Http\Controllers;

use Illuminate\Support\Facades\View;

class SearchController extends BaseController {


	public function index()
	{
		return View::make('search::index');

	}


}