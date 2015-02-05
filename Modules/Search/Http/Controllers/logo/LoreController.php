<?php namespace Modules\Search\Http\Controllers\logo;

use Illuminate\Support\Facades\View;

class LoreController extends \BaseController {


    public function loreList()
    {
        return View::make('search::logo.loreList');
    }

    public function loreInfo()
    {
        return View::make('search::logo.loreInfo');
    }

    

}