<?php namespace Modules\Shop\Http\Controllers;

use Cartalyst\Sentry\Facades\Laravel\Sentry;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Request;
use Shop_copy;
use Shop_category;
use Shop_config;

class DomainController extends ShopController {

	protected $shop;
    protected $category;
    protected $categories;
    protected $reco_categories;
    protected $shop_config;
    public function __construct(Shop_copy $shop, Shop_category $category)
    {
        $this->shop = $shop;
        $this->category = $category;
        //获取45分类
        $shop_category = Cache::get('shop_category');
        if(!$shop_category){
            $this->categories = $category->where('pid','=',3)->get()->toArray();
        }else{
            $this->categories = $shop_category[3];
        }

        //dd(Sentry::getUser()->id);
        //获取热门分类
        $filter = [
			['level','>=',1],
			['pid','=',1],
			['status','=',1]
		];
        $this->reco_categories = $this->shop->getList($this->category,$filter,['id','name','slug','level','thumb'],['sorts','asc']);
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('shop::domain.index');
	}

    public function findouts()
    {
        return View::make('shop::domain.findouts');
    }

    public function auction()
    {
        return View::make('shop::domain.auction');
    }

    public function treasure()
    {
        return View::make('shop::domain.treasure');
    }

    public function show()
    {
        return View::make('shop::domain.show');
    }

}
