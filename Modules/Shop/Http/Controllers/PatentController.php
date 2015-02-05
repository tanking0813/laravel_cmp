<?php namespace Modules\Shop\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;

use Shop_patent;
use Shop_category;
use Shop_config;

class PatentController extends \BaseController {

	protected $shop;
    protected $category;
    protected $categories;
    public function __construct(Shop_patent $shop, Shop_category $category)
    {
        $this->shop = $shop;
        $this->category = $category;
        //获取分类
        $shop_category = Cache::get('shop_category');
        //dd(1);
        if(!$shop_category){
            $this->categories = $category->where('pid','=',2)->get()->toArray();
        }else{
            $this->categories = $shop_category[2];
        }
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$shops['categories'] = $this->categories;
		/*$filter = [
			['pid','=',2],
			['status','=',1]
		];
		//左边分类数据
		$shops['recommend_category'] = $this->shop->getList($this->category,$filter,['id','name','slug','level','thumb'],['sorts','asc']);

		//热门专利
		$filter_hot = [
			['hot','=',1],
			['status','=',1]
		];
		$shops['hot_list'] = $this->shop->getList($this->shop,$filter_hot,['id','title','price','thumb'],['sorts','asc'],0,3,'images',['select'=>['id','path']]);

        //一口价专利
		$filter_fixedprice = [
			['fixedprice','=',1],
			['status','=',1]
		];

		$shops['fixedprice_list'] = $this->shop->getList($this->shop,$filter_fixedprice,['id','title','price','thumb'],['sorts','asc'],0,3,'images',['select'=>['id','path']]);

		//人气专利 popularity
		$filter_popularity = [
			['popularity','=',1],
			['status','=',1]
		];

		$shops['popularity_list'] = $this->shop->getList($this->shop,$filter_popularity,['id','title','price','thumb'],['sorts','asc'],0,3,'images',['select'=>['id','path']]);


		//热门技术推荐
		$hot_skill =[
			['status','=',1],
			['hot','=',1],
			['recomment','=',1]
		];
		$shops['recomment_list'] = $this->shop->getList($this->shop,$hot_skill,['id','title','price','thumb'],['sorts','asc'],1,10,'images',['select'=>['id','path']]);

		//技术采购purchase
		$filter_purchase =[
			['purchase','=',1],
		];
		$shops['recomment_list'] = $this->shop->getList($this->shop,$filter_purchase,['id','title','price','thumb'],['sorts','asc'],1,10,'images',['select'=>['id','path']]);

		//特价专利  sale 
		$filter_sale =[
			['sale','=',1],
		];
		$shops['recomment_list'] = $this->shop->getList($this->shop,$filter_sale,['id','title','price','thumb'],['sorts','asc'],1,10,'images',['select'=>['id','path']]);

*/
		//热门技术下面的分类
		
		
		return View::make('shop::patent.index',compact('shops'));
	}

	public function fixedprice()
	{
		return View::make('shop::patent.fixedprice');
	}

	public function foreigns()
	{
		return View::make('shop::patent.foreigns');
	}
	/*
		热门技术列表
	*/
	public function hot()
	{
		$shops['categories'] = $this->categories;
		$filter = [
			['pid','=',2],
			['status','=',1]
		];
		//左边分类数据
		$shops['recommend_category'] = $this->shop->getList($this->category,$filter,['id','name','slug','level','thumb'],['sorts','asc']);
		

		//热门技术分类


		//热门技术推荐


		//热门技术
		return View::make('shop::patent.hot',compact('shops'));
	}

	public function popularity()
	{
		$shops['categories'] = $this->categories;
		/*$filter = [
			['pid','=',2],
			['status','=',1]
		];
		//左边分类数据
		$shops['recommend_category'] = $this->shop->getList($this->category,$filter,['id','name','slug','level','thumb'],['sorts','asc']);
		
		//项目推荐
		$filter_rec = [
			['popularity','=',1],
			['recomment','=',1]
		];
		$shops['rec_list'] = $this->shop->getList($this->shop,$filter_rec,['id','thumb'],['sorts','asc'],0,3,'images',['select'=>['id','path']]);

		//特价
		$filter_purchase = [
			['purchase','=',1],
			['recomment','=',1]
		];
		$shops['filter_purchase'] = $this->shop->getList($this->shop,$filter_purchase,['id','thumb'],['sorts','asc'],0,3,'images',['select'=>['id','path']]);

		//精选
		$filter_purchase = [
			['selected','=',1],
			['recomment','=',1]
		];
		$shops['filter_selected'] = $this->shop->getList($this->shop,$filter_purchase,['id','thumb'],['sorts','asc'],0,3,'images',['select'=>['id','path']]);

		//人气专利商品列表
		$pre_page = 2;//每页显示页数  
		$PantentAll = ['recomment'=>1];
		$shop['getPantentList'] = $this->shop->where($PantentAll)->paginate($pre_page)->toArray();*/
		
		
			 
		
		return View::make('shop::patent.popularity',compact('shops'));
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
