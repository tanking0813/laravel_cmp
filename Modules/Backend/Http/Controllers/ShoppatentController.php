<?php namespace Modules\Backend\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Response;
use Cartalyst\Sentry\Facades\Laravel\Sentry;
use Illuminate\Support\Facades\Input;
use Shop_patent;
use Shop_category;
use Shop_config;
use Uploader;

class ShopPatentController extends Controller {

    protected $shop;
    protected $category;
    public function __construct(Shop_patent $shop, Shop_category $category)
    {
        $this->shop = $shop;
        $this->category = $category;
    }
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getIndex()
    {
        $status = Input::get('type');
        $shops = $this->shop->select('id', 'title','category_id','thumb','user_id','price','comments','hits','created_at','updated_at')->where('status','=',$status)->with(array('images' => function($query)
        {
            $query->select('id', 'path');
        }))->paginate(15);
        foreach ($shops as $k=>$v) {
            $shops[$k]['category'] = $this->category->find($v->category_id)->name;
            $shops[$k]['user'] = Sentry::findUserById($v->user_id)->username;
        }
        return Response::json($shops);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getEdit($id)
    {
        $data = $this->shop->find($id);
        $data->tags = $data->tagNames();
        //trading 
        $trade_options = explode(',',$data['trading']);
        foreach($trade_options as $ks=>$vs){
            $trades = explode(':',$vs);
            $trade[$trades[0]] = $trades[1];
        }
        $data['trading'] = $trade;
        return Response::json($data);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function postStore()
    {
        $data = Input::all();
        $tags = Input::get('tags');
        
        $str = '';
        foreach ($data['trading'] as $key => $value) {
            $str .= empty($str) ? $key.':'.$value : ','.$key.':'.$value;
        }
        $data['trading'] = $str;
        $data['user_id'] = Sentry::getUser()->id;
        $data['tags'] = implode(',', $tags);
        $data['num'] = 1;
        $data['status'] = 1;
        $shop = $this->shop->create($data);

        //tag处理
        if(count($tags) > 0){
            $shop->tag($tags);
        }
        return Response::json(['status'=>$shop?1:0]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function putUpdate($id)
    {
        $shop = $this->shop->find($id);

        $data = Input::all();
        $tags = Input::get('tags');
        $str = '';
        foreach ($data['trading'] as $key => $value) {
            $str .= empty($str) ? $key.':'.$value : ','.$key.':'.$value;
        }
        $data['trading'] = $str;
        $data['user_id'] = Sentry::getUser()->id;
        $data['tags'] = implode(',', $tags);
        $data['num'] = 1;
        $data['status'] = 1;

        $shop->fill($data);

        return Response::json(['status'=>$shop->save()?1:0]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteDestroy($id)
    {
        $shop = $this->shop->find($id);
        return Response::json(['status'=>$shop->delete()?1:0]);
    }

    public function getAttr()
    {
        return Response::json($this->shop->getAttr('专利'));
    }


    /**
     * 审核
     *===========================================================================================
     */

    /**
     * @param $id
     * @param $type   val of status
     * @return \Illuminate\Http\JsonResponse
     */
    public function getChangeStatus($id)
    {
        $status = Input::get('type');
        $shop = $this->shop->find($id);
        $shop->status = $status;

        return Response::json(['status'=>$shop->save()?1:0]);
    }

    /**
     * 设置
     *===========================================================================================
     */
    
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getSetAttr()
    {
        $config = new Shop_config;
        return Response::json($config->getAttr(1));
    }

    public function getSetValue()
    {
        $config = new Shop_config;
        $data = $config->where('model','=','patent')->get();
        foreach ($data as $key => $value) {     
            $arr[$value['name']] = $value['value'];
        }     
        return Response::json($arr);
    }

    public function postSet()
    {
        
        $config = new Shop_config;
        $data = Input::all();
        //删除之前的设置，然后新增
        $config->where('model', '=', 'patent')->delete();
        foreach ($data as $k => $v) {
            $val['model'] = 'patent';
            $val['name'] = $k;
            $val['value'] = $v;
            $set = $config->create($val);
        }
        return Response::json(['status'=>$set?1:0]);
    }

    /**
     * 栏目管理
     *===========================================================================================
     */
    public function getAllCate()
    {
        $pid = $this->getCategoryPid();
        $categories = $this->category->where('pid','=',$pid)->get();
        return Response::json($categories);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getChildCate($id)
    {
        $categories = $this->category->where('pid','=',$id)->get();
        return Response::json($categories);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getEditCate($id)
    {
        $data = $this->category->find($id);
        return Response::json($data);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function postStoreCate()
    {
        $category = $this->category->create(Input::all());
        return Response::json(['status'=>$category?1:0]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function putUpdateCate($id)
    {
        $category = $this->category->find($id);
        $category->fill(Input::all());
        return Response::json(['status'=>$category->save()?1:0]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteDestroyCate($id)
    {
        $category = $this->category->find($id);
        return Response::json(['status'=>$category->delete()?1:0]);
    }

    public function getAttrCate()
    {
        $pid = $this->getCategoryPid();
        return Response::json($this->category->getAttr($pid));
    }

    protected function getCategoryPid(){
        return 2;
    }

}