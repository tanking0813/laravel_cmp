<?php namespace Modules\Member\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Resource;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Cartalyst\Sentry\Facades\Laravel\Sentry;
use Illuminate\Support\Facades\Paginator;
use Illuminate\Support\Facades\Response;
use Shop_category;

/*
| author ： lujia
| builderdate ： 2015-01-21
| instruction ： 该类是用户模块下“我要发布”的子类 它继承父类 PublishContronller ，
|                此类主要是对用户的求购功能的实现
*/

Class BuyerController extends \BaseController{

    public $model;
    public function init($type)
    {
        switch($type){
            case 'logo':
                $this->model = new \User_buy_brand;
                break;
            case 'patent':
                $this->model = new \User_buy_patent;
                break;
            case 'copy':
                $this->model = new \User_buy_copyright;
                break;
            case 'domain':
                $this->model = new \User_buy_domain;
                break;
        }
    }
    public $cate = array();
    public $shop_category;
    public function __construct()
    {
        $this->shop_category = new Shop_category;
        $this->cate['logo'] = $this->getCategories(1);
        $this->cate['patent'] = $this->getCategories(2);
        $this->cate['copy'] = $this->getCategories(3);
    }

    public function getCategories($pid){
        $categories = $this->shop_category->where('pid','=',$pid)->get()->toArray();
        $data = [$pid=>['label'=>"根分类"]];
        foreach ($categories as $v) {
            $data[$v['id']] = ['label'=>$v['name']];
        }
        return $data;
    }

    /**
     * @param string $type
     * @return mixed
     */
    public function add($type = 'logo')
    {
        $this->init($type);
        if($type == 'domain'){
            return View::make('member::publish.buyer.add_'.$type, ['type'=>$type,"data"=>'']);
        }else{
            return View::make('member::publish.buyer.add_'.$type, ['type'=>$type,"cate"=>$this->cate[$type],"data"=>'']);  
        }       
    }

    public function store($type = 'logo')
    {
        $this->init($type);
        $data = Input::all();
        $status = 1;
        $data['user_id'] = Sentry::getUser()->id;
        $bool = $this->model->adddata($data);
        if($bool){
           return Redirect::route('member.publish.buyer.list', ['type'=>$type,'status'=>$status]);
        }
    }

    public function glist($type = 'logo')
    {
        $this->init($type);
        $status = Request::get('status');
        $expire = Request::get('expire')?Request::get('expire'):'';
       //dd($status);
        $data =$this->model->where(function($query) use($status,$expire){
            $query = $status?$query->where('status', $status):$query;
            $query = $expire?$query->where('effectivetime','<',date('Y-m-d')):$query;
            return $query;
        })->paginate(5);
        return View::make('member::publish.buyer.list_publish', compact('data'))
        ->with(['type'=>$type,'status'=>$status]);      
    }

    public function entrust($type = 'logo')
    {
        $this->init($type);
        return View::make('member::publish.buyer.list_entrust', ['type'=>$type]);
    }

    public function bargain($type = 'logo')
    {
        $this->init($type);
        return View::make('member::publish.buyer.list_bargain', ['type'=>$type]);
    }

    public function order($type = 'logo')
    {
        $this->init($type);
        $status = Request::get('status');
        return View::make('member::publish.buyer.list_order')->with(['type'=>$type,'status'=>$status]);
    }

    //删除操作
    public function delete($type)
    {
        $this->init($type);
        $id = Input::get('id');
        $response = $this->model->destroy($id);  
        return Response::json(['status'=>$response?1:0]);
    }
    //编辑操作
    public function edit($type) 
    {
        $this->init($type);
        $id = Input::get('id');
        $data = $this->model->find($id);
        return View::make('member::publish.buyer.add_'.$type, ['type'=>$type,"cate"=>$this->cate[$type], 'data'=>$data]);
    }

    //下架操作
    public function close($type)
    {
        $this->init($type);
        $id = Input::get('id');
        $data = $this->model->find($id)->toArray();
        $data['status'] = 3;
        $bool = $this->model->where('id',$id)->adddata($data);
        return Redirect::route('member.publish.buyer.list', ['type'=>$type]); 
    }

    //查看操作
    public function see($type)
    {
        echo "123";
    }

}

