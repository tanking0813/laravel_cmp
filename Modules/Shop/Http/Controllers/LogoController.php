<?php namespace Modules\Shop\Http\Controllers;

use Cartalyst\Sentry\Facades\Laravel\Sentry;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Request;
use Shop_logo;
use Shop_category;
use Shop_config;

class LogoController extends ShopController {

	protected $shop;
    protected $category;
    protected $categories;
    protected $reco_categories;
    protected $shop_config;
    public function __construct(Shop_logo $shop, Shop_category $category)
    {
        $this->shop = $shop;
        $this->category = $category;
        //获取45分类
        $shop_category = Cache::get('shop_category');
        if(!$shop_category){
            $this->categories = $category->where('pid','=',1)->get()->toArray();
        }else{
            $this->categories = $shop_category[1];
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
		$shops['categories'] = $this->categories;
		//查找推荐分类
		$shops['recomment_category'] = $this->reco_categories;
		$recomment_list = [];

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
				//获取图片
				$shops['recomment_category'][$key]['child'][$k]['thumb'] = $this->shop->getFile($v['thumb'],1);
				//获取分类
				$shops['recomment_category'][$key]['child'][$k]['child'] = $this->shop->getList($this->category,$filter2,['id','name','level','thumb'],['sorts','asc']);
			}

			if($value['level'] == 2){
				$recomment_list[] = $shops['recomment_category'][$key];
			}
		}
		//热门推荐4个
		$filter3 = [
			['popularity','=',1],
			['recomment','=',1],
			['status','=',1]
		];
		$shops['hot_list'] = $this->shop->getList($this->shop,$filter3,['id','title','price','thumb'],['sorts','asc'],0,4,'images',['select'=>['id','path']]);
		
		//精品4个（促销）
		$filter4 = [
			['sale','=',1],
			['boutique','=',1],
			['status','=',1]
		];
		$shops['boutique_list'] = $this->shop->getList($this->shop,$filter4,['id','title','price','thumb'],['sorts','asc'],0,4,'images',['select'=>['id','path']]);
		
		//一口价3个（促销）
		$filter5 = [
			['sale','=',1],
			['fixedprice','=',1],
			['status','=',1]
		];
		$shops['fixedprice_list'] = $this->shop->getList($this->shop,$filter5,['id','title','price','thumb'],['sorts','asc'],0,3,'images',['select'=>['id','path']]);

		//分类列表
		if($recomment_list){
			foreach ($recomment_list as $krl => $vrl) {
				$server_list = '';
				foreach ($vrl['child'] as $krlc => $vrlc) {
					//推荐的and所有三级分类
					foreach ($vrlc['child'] as $krlcc => $vrlcc) {
						if($vrlc['level'] == 1){
							$recomment_list[$krl]['reco_third_cate'][] = $vrlc;
						}
						$recomment_list[$krl]['third_cate'][] = $vrlc;
						if($krlc <= 5){
							$server_list .= '|'.$vrlcc['name'];
						}
					}
					//二级排序前六个的商品（选4个）,先找到子类，然后查服务列表中包含此子类的商品
					if($krlc <= 5){
						//去掉第一个‘|’
						$server_list = substr($server_list,1);
						$filter6 = [
							['server_list','REGEXP',$server_list],
							['status','=',1]
						];
						$recomment_list[$krl]['reco_second_goods'][] = $this->shop->getList($this->shop,$filter6,['id','title','thumb'],['sorts','asc'],0,4,'images',['select'=>['id','path']]);
					}
					//dd($recomment_list);
				}
			}
		}

		$shops['recomment_list'] = $recomment_list;

		return View::make('shop::logo.index',compact('shops'));
	}

	/*
		精品商标
	*/
	public function boutique()
	{		
		//列表
		$para = Request::getQueryString();
		$shops = $this->shop->getGoods($this->shop,$para,'boutique','logo');

		//分类
		$shops['categories'] = $this->categories;
		$shops['recomment_category'] = $this->reco_categories;
		//组合类型
		$shops['combine'] = Config::get("shop::logo.combine");
		//价格区间 
		$shops['price'] = Config::get("shop::logo.price");
		//交易方式
		$shops['trade'] = Config::get("shop::logo.trade");

		$shops['url'] = 'shop.logo.boutique';
		return View::make('shop::logo.boutique',compact('shops'));
	}

	/*
		一口价商标
	*/
	public function fixedprice()
	{
		//列表数据
		$para = Request::getQueryString();
		$shops = $this->shop->getGoods($this->shop,$para,'fixedprice','logo');
		//分类
		$shops['categories'] = $this->categories;
		//热门分类
		$shops['recomment_category'] = $this->getRecoCategory();
		//热销产品
		$filter = [
			['fixedprice','=',1],
			['recomment','=',1],
			['status','=',1],
		];
		$fields = ['id','title','category_id','server_list','price','num','thumb'];
		$order = [['sorts','asc'],['orders_num','desc'],['hits','desc'],['updated_at','desc']];
		$shops['hot_lists'] = $this->shop->getShopList($this->shop, $filter,$fields, $order, 0, 3, 0);
		
		$shops['url'] = 'shop.logo.fixedprice';
		//dd($shops);
		return View::make('shop::logo.fixedprice',compact('shops'));
	}

	/*
		涉外商标
	*/
	public function foreigns()
	{
		//列表数据
		$para = Request::getQueryString();
		$shops = $this->shop->getGoods($this->shop,$para,'foreigns','logo');
		//分类
		$shops['categories'] = $this->categories;
		//热门分类(取前七个)（此处左边分类稍后根据标签的点击率显示前多少个）
		$shops['recomment_category'] = array_slice($this->getRecoCategory(), 0, 6);		
		//组合类型
		$shops['combine'] = Config::get("shop::logo.combine");
		//价格区间 
		$shops['price'] = Config::get("shop::logo.price");
		//交易方式
		$shops['trade'] = Config::get("shop::logo.trade");

		$shops['url'] = 'shop.logo.foreigns';
		return View::make('shop::logo.foreigns',compact('shops'));
	}

	
	/*
		人气商标
	*/
	public function popularity()
	{
		//列表数据
		$para = Request::getQueryString();
		$shops = $this->shop->getGoods($this->shop,$para,'popularity','logo');
		
		//分类
		$shops['categories'] = $this->categories;
		//热门分类(取前3个)（此处左边分类稍后根据标签的点击率显示前多少个）
		$shops['recomment_category'] = array_slice($this->getRecoCategory(), 0, 3);		

		//人气商标推荐
		$filter = [
			['popularity','=',1],
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
		

		$shops['url'] = 'shop.logo.popularity';
		return View::make('shop::logo.popularity',compact('shops'));
	}

	/*
		古董商标
	*/
	public function antique()
	{
		//列表数据
		$para = Request::getQueryString();
		$shops = $this->shop->getGoods($this->shop,$para,'antique','logo');
		
		//分类
		$shops['categories'] = $this->categories;
		//热门分类(取前3个)（此处左边分类稍后根据标签的点击率显示前多少个）
		$shops['recomment_category'] = array_slice($this->getRecoCategory(), 0, 3);		

		//古董商标推荐
		$filter = [
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
		

		$shops['url'] = 'shop.logo.antique';
		return View::make('shop::logo.antique',compact('shops'));
	}

	public function headhunt()
	{
		//分类
		$shops['categories'] = $this->categories;
		//$shops['url'] = 'shop.logo.headhunt';
		return View::make('shop::logo.headhunt',compact('shops'));
	}

	public function category()
	{
		//列表
		$para = Request::getQueryString();
		$shops = $this->shop->getGoods($this->shop,$para,'','logo');

		//分类
		$shops['categories'] = $this->categories;
		if(Request::get('b')){
			$b = Request::get('b');
			if(preg_match("/^[0-9]+$/",$b)){
                $shops['recomment_category'] = $this->category->find($b)->toArray();
            }else{
            	$c_arr = explode('c', $b);
            	$shops['recomment_category'] = $this->category->find($c_arr[0])->toArray();
            }
		}else{
			$shops['recomment_category'] = $this->reco_categories;
		}
		//dd($shops['recomment_category']);
		//组合类型
		$shops['combine'] = Config::get("shop::logo.combine");
		//价格区间 
		$shops['price'] = Config::get("shop::logo.price");
		//交易方式
		$shops['trade'] = Config::get("shop::logo.trade");

		$shops['url'] = 'shop.logo.category';
		return View::make('shop::logo.category',compact('shops'));
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

		//点击量加1
		$data->hits=$data['hits'] + 1;
		$data->save();
		$shops['data'] = $data->toArray();

		//组合类型
		$combine = Config::get('shop::logo.combine');
		$shops['data']['combine'] = $combine[$shops['data']['combine']];
		//45大类
		$shops['categories'] = $this->categories;
		//热门推荐
		$filter = [
			['recomment','=',1],
			['status','=',1],
		];
		$fields = ['id','title','category_id','server_list','price','num','thumb'];
		$order = [['sorts','asc'],['updated_at','desc']];
		$shops['lists'] = $this->shop->getShopList($this->shop, $filter,$fields, $order, 0, 5, 0);
		
		$shops['url'] = 'shop.logo.show';
		return View::make('shop::logo.show',compact('shops'));
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
