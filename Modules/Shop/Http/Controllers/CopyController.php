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

class CopyController extends ShopController {

	protected $shop;
    protected $category;
    protected $categories;
    protected $shop_config;
    public function __construct(Shop_copy $shop, Shop_category $category)
    {
        $this->shop = $shop;
        $this->category = $category;

        //获取分类
        $shop_category = Cache::get('shop_category');
        if(!$shop_category){
            $this->categories = $category->where('pid','=',3)->get()->toArray();
        }else{
            $this->categories = $shop_category[3];
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

		$fields = ['id','title','category_id','price','thumb'];
		$order = [['sorts','asc'],['updated_at','desc']];

		//分类抢购列表
		foreach ($this->categories as $krl => $vrl) {
			$filter1 = [
				['category_id','=',$vrl['id']],
				['flash_sale','=',1],
				['num','=',1],
				['status','=',1]
			];
			if($krl <= 4){
				$shops['flash_sale_up'][$krl]['id'] = $vrl['id'];
				$shops['flash_sale_up'][$krl]['cate_name'] = $vrl['name'];
				$shops['flash_sale_up'][$krl]['data'] = $this->shop->getShopList($this->shop, $filter1,$fields, $order, 0, 8, 0);
			}else{
				$shops['flash_sale_down'][$krl]['id'] = $vrl['id'];
				$shops['flash_sale_down'][$krl]['cate_name'] = $vrl['name'];
				$shops['flash_sale_down'][$krl]['data'] = $this->shop->getShopList($this->shop, $filter1,$fields, $order, 0, 4, 0);
			}
		}

		//人气8个
		$filter2 = [
			['recomment', '=', 1],
			['popularity','=',1],
			['num','=',1],
			['status','=',1]
		];
		$shops['popularity_list'] = $this->shop->getShopList($this->shop, $filter2,$fields, $order, 0, 8, 0);

		//一口价4个
		$filter3 = [
			['recomment', '=', 1],
			['fixedprice','=',1],
			['num','=',1],
			['status','=',1]
		];
		$shops['fixedprice_list'] = $this->shop->getShopList($this->shop, $filter3,$fields, $order, 0, 4, 0);

		$fields1 = ['id','title','category_id','price','thumb','content','updated_at'];
		//最新上线5个
		$filter4 = [
			['recomment', '=', 1],
			['num','=',1],
			['status','=',1]
		];
		$shops['new_list'] = $this->shop->getShopList($this->shop, $filter4,$fields1, ['sorts','asc'], 0, 5, 0);

		//商品推荐9个
		$filter5 = [
			['recomment', '=', 1],
			['num','=',1],
			['status','=',1]
		];
		$shops['recomment_list'] = $this->shop->getShopList($this->shop, $filter5,$fields1, $order, 0, 9, 0);

		//dd($shops['flash_sale_up'][0]['data']);
		return View::make('shop::copy.index',compact('shops'));
	}

	/*
		一口价版权
	*/
	public function fixedprice()
	{
		//列表数据
		/*$para = Request::getQueryString();
		$shops = $this->shop->getGoods($this->shop,$para,'fixedprice','logo');*/
		//分类
		$shops['categories'] = $this->categories;
		//热门分类
		/*$shops['recomment_category'] = $this->getRecoCategory();
		//热销产品
		$filter = [
			['fixedprice','=',1],
			['recomment','=',1],
			['status','=',1],
		];
		$fields = ['id','title','category_id','server_list','price','num','thumb'];
		$order = [['sorts','asc'],['orders_num','desc'],['hits','desc'],['updated_at','desc']];
		$shops['hot_lists'] = $this->shop->getShopList($this->shop, $filter,$fields, $order, 0, 3, 0);
		
		$shops['url'] = 'shop.logo.fixedprice';*/
		//dd($shops);
		return View::make('shop::copy.fixedprice',compact('shops'));
	}
	
	/*
		人气版权
	*/
	public function popularity()
	{
		//列表数据
		/*$para = Request::getQueryString();
		$shops = $this->shop->getGoods($this->shop,$para,'hot','logo');*/
		
		//分类
		$shops['categories'] = $this->categories;
		//热门分类(取前3个)（此处左边分类稍后根据标签的点击率显示前多少个）
		/*$shops['recomment_category'] = array_slice($this->getRecoCategory(), 0, 3);		

		//人气版权推荐
		$filter = [
			['hot','=',1],
			['recomment','=',1],
			['status','=',1],
		];
		$fields = ['id','title','category_id','server_list','price','num','thumb'];
		$order = [['sorts','asc'],['hits','desc'],['updated_at','desc']];
		$shops['hot_lists'] = $this->shop->getShopList($this->shop, $filter,$fields, $order, 0, 4, 0);
		
		//成功案例
		$filter1 = [
			['num','=',0],
			['status','=',1],
		];
		$fields1 = ['id','title','category_id','server_list','price','num','thumb'];
		$order1 = [['sorts','asc'],['updated_at','desc']];
		$shops['trade_lists'] = $this->shop->getShopList($this->shop, $filter1,$fields1, $order1, 0, 4, 0);
		

		$shops['url'] = 'shop.logo.hot';*/
		return View::make('shop::copy.popularity',compact('shops'));
	}

	public function category()
	{
		//列表
		$para = Request::getQueryString();
		$shops = $this->shop->getGoods($this->shop,$para,'','copy');

		//推荐的前三个
		$filter = [
			['recomment', '=', 1],
			['num','=',1],
			['status','=',1]
		];
		$fields = ['id','title','category_id','price','thumb'];
		$order = [['sorts','asc'],['updated_at','desc']];
		$shops['recomment_lists'] = $this->shop->getShopList($this->shop, $filter,$fields, $order, 0, 3, 0);
		//分类
		$shops['categories'] = $this->categories;
		//当前分类
		$shops['category'] = $this->category->find(Request::get('b'))->name;
		//价格区间 
		$shops['price'] = Config::get("shop::copy.price");
		//交易方式
		$shops['trade'] = Config::get("shop::copy.trade");

		$shops['url'] = 'shop.copy.category';
		return View::make('shop::copy.category',compact('shops'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$data = $this->shop->find($id);
		$iamges = $data->images;
		$category = $data->category;
		$shops['data'] = $data->toArray();

		//大类
		$shops['categories'] = $this->categories;
		//热门推荐
		$filter = [
			['recomment','=',1],
			['status','=',1],
		];
		$fields = ['id','title','category_id','price','num','thumb'];
		$order = [['sorts','asc'],['updated_at','desc']];
		$shops['lists'] = $this->shop->getShopList($this->shop, $filter,$fields, $order, 0, 5, 0);
		
		$shops['url'] = 'shop.copy.show';
		return View::make('shop::copy.show',compact('shops'));
	}

	protected function getRecoCategory(){
		//查找推荐分类
		$shops['recomment_category'] = $this->reco_categories;
		foreach ($shops['recomment_category'] as $key => $value) {
			//二级分类
			$filter1 = [
				['pid','=',$value['id']],
				['status','=',1]
			];

			$shops['recomment_category'][$key]['child'] = $this->shop->getList($this->category,$filter1,['id','name','level','thumb'],['sorts','asc']);
			//三级分类
			foreach($shops['recomment_category'][$key]['child'] as $k=>$v){
				$filter2 = [
					['pid','=',$v['id']],
					['status','=',1]
				];
				//获取分类
				$shops['recomment_category'][$key]['child'][$k]['child'] = $this->shop->getList($this->category,$filter2,['id','name','level','thumb'],['sorts','asc']);
			}
		}
		return $shops['recomment_category'];
	}

}
