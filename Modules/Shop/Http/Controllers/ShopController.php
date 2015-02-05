<?php namespace Modules\Shop\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;

class ShopController extends  \BaseController {

	public function index()
	{
		return View::make('shop::index');
	}

	
}