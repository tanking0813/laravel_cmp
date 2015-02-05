<?php namespace Modules\Member\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Request;
use Cartalyst\Sentry\Facades\Laravel\Sentry;
use Redirect;
use Shop_category;
use User_sale_brand;
use User_sale_patent;
use User_sale_copyright;
use User_sale_domain;
/*
| author ： 田鑫
| builderdate ： 2015-01-21
| instruction ： 该类是用户模块下“我要发布”的子类 它继承父类 PublishContronller ，
|                此类主要是对用户的发布买品的功能的实现
*/
Class SalerController extends PublishController{

	public $logo;
	public $copy;
	public $patent;
	public $domain;
	public $shop_category;
	public $catearr = array();
	public function __construct(){
		$this->logo = new User_sale_brand;
		$this->patent = new User_sale_patent;
		$this->domain = new User_sale_domain;
		$this->copy = new User_sale_copyright;
		$this->shop_category = new Shop_category;
		$this->catearr['logo'] =$this->getCategories(1);
		$this->catearr['patent'] = $this->getCategories(2);
		$this->catearr['copy'] =$this->getCategories(3);
	}
	private function aboutGoods($downgoods){
		$modelobj = '';
		switch ($downgoods) {
			case 'logo':
				$modelobj = $this->logo;
				break;
			case 'patent':
				$modelobj = $this->patent;
				break;
			case 'copy':
				$modelobj = $this->copy;
				break;
			case 'domain':
				$modelobj = $this->domain;
				break;
		}	
		return $modelobj;
	}
	public function getCategories($pid){
        $categories = $this->shop_category->where('pid','=',$pid)->get()->toArray();
        $data = [$pid=>['label'=>"根分类"]];
        foreach ($categories as $v) {
            $data[$v['id']] = ['label'=>$v['name']];
        }
        return $data;
    }
    private function addsale($data,$obj){
    	$data = Input::all();
		$data['user_id'] = Sentry::getUser()->id;
		//dd($obj);
		$data = $obj->adddata($data);
		//dd($data);
		return $data;
    }
	public function add($goodscate){
		switch ($goodscate) {
			case 'logo':
				# code...
					return View::make('member::publish.salerbrand', array("logocate"=>$this->catearr['logo']));
				break;
			case 'patent':
				# code...
					return View::make('member::publish.salerpatent',array("patentcate"=>$this->catearr['patent']));
				break;
			case 'copy':
				# code...
					return View::make('member::publish.salercopyright',array("copycate"=>$this->catearr['copy']));			
				break;
			case 'domain':
				# code...
					return View::make('member::publish.salerdomain');	
				break;
		}
	}
	public function store($goodscate){
		$modobj = $this->aboutGoods($goodscate);
		$data = $this->addsale(Input::all(),$modobj);
		//dd($modobj);
		if(empty($data['id'])){
			if($modobj->create($data)){
				//return Redirect::back()->withErrors('验证数据错误,请重新验证!');	
	           return Redirect::route('member.publish.saler.list',[1,$goodscate]);
	        }/*else{
	        	return Redirect::route('auth.forgetpass')->withErrors('验证数据错误,请重新验证!');
	        	return Redirect::back()->withErrors('验证数据错误,请重新验证!');
	        }*/
		}else{
			$obj = $modobj->find(Input::get('id'));
	        $obj->fill($data);
	        if($obj->save()){
	          	return Redirect::route('member.publish.saler.list',[1,$goodscate]);
	        }
		}   
	}
	public function listsale($status,$goodcate){
		$where['status'] = $status;
		$where['user_id'] = Sentry::getUser()->id;
		$modobj = $this->aboutGoods($goodcate);

		//dd($goodcate);
		if($where['status']==1){
			$datas = $modobj->getData($where);
			$datas->goodscate = $goodcate;
			return View::make('member::publish.listsale',compact('datas'));
		}else{
			$datas = $modobj->where(function($query)use($where){
				//dd($where);
				$query->where('status','=',$where['status'])
					  ->where('user_id','=',$where['user_id']);
			})->get();
			
			$datas->goodscate = $goodcate;
			
			return View::make('member::publish.listunsale',compact('datas'));
		}
	}
	public function edit($id,$goods){
		switch ($goods) {
			case 'logo':
				# code...
					$data = $this->logo->getOne($id);	
					return view::make('member::publish.salerbrand',array('data'=>$data,'logocate'=>$this->catearr['logo']));
				break;
			case 'patent':
				# code...
					$data = $this->patent->getOne($id);
					//dd($data);
					return view::make('member::publish.salerpatent',array('data'=>$data,'patentcate'=>$this->catearr['patent']));
				break;
			case 'copy':
				# code...
					$data = $this->copy->getOne($id);
					return view::make('member::publish.salercopyright',array('data'=>$data,'copycate'=>$this->catearr['copy']));
				break;
			case 'domain':
				# code...
					$data = $this->domain->getOne($id);
					return view::make('member::publish.salerdomain',array('data'=>$data));
				break;
		}
	}
	public function upAndDown(){
		$upgoods = Request::get('goods');
		$id = Request::get('id');
		$upanddown = Request::get('upanddown');
		$modelobj = $this->aboutGoods($upgoods);
		$obj = $modelobj->find($id);
        $obj->status =$upanddown;
       if($obj->save()){
        	$data = ['id'=>$id,'goods'=>$upgoods];
			return Response::json($data);
       }else{
          return false;
       }
	}
	public function deleteGoods(){
		$downgoods = Request::get('downgoods');
		$id = Request::get('id');
		$modelobj = $this->aboutGoods($downgoods);
		$obj = $modelobj->find($id);
         if($obj->delete()){
           $data = ['status'=>$status,'id'=>$id,'goods'=>$downgoods];
		   return Response::json($data);
         }
	}
	public function ajaxPageList(){
		$type = Request::get('type');
		$goodscate = Request::get('goodscate');
		$modobj = $this->aboutGoods($goodscate);
		if($type=='expire'){
			$reult = $modobj->where('status',0)->paginate(2);
		}else if($type=='unpublish'){
			$reult = $modobj->where('status',0)->paginate(2);
		}
		$reult->goodscate = $goodscate;
		$content = $this->toAjaxTpl('member::publish.ajaxtpl.ajaxsold',$reult);
		$data = ['status'=>true,'data'=>$content,'type'=>$type];
		return Response::json($data);
	}

	public function bargain(){
		return View::make('member::publish.my_bargaining');
	}
	public function order(){
		return View::make('member::publish.my_order');
	}
}
