<?php namespace Modules\Member\Http\Controllers;

use Illuminate\Support\Facades\View;

class MemberController extends \BaseController {

	public function index()
	{
		return View::make('member::index');
	}
	
}