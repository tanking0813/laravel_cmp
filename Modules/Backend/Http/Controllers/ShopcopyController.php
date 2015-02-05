<?php namespace Modules\Backend\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Response;
use Cartalyst\Sentry\Facades\Laravel\Sentry;
use Illuminate\Support\Facades\Input;
use Shop;
use Shop_copy;
use Shop_category;

class ShopcopyController extends Controller {

    protected $shop;
    protected $category;
    public function __construct(Shop_copy $shop, Shop_category $category)
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
        $shops = $this->shop->where('status','=',$status)->paginate(1);
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
        return Response::json($data);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function postStore()
    {
        $data = Input::all();
        $shop = $this->shop->create($data);
        return Response::json(['status'=>$shop?1:0]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function putUpdate($id)
    {
        $shop = $this->shop->find($id);
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
        return Response::json($this->shop->getAttr('版权'));
    }

   

    /**
    * 栏目管理
    *===================================================================
    */
    public function getAllCate()
    {
        $pid = $this->getCategoryPid(); 
        $categories = $this->category->where('pid','=',$pid)->get();
        return Response::json(['data'=>$categories]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getEditCate($id)
    {
        $data = ['data' =>$this->category->find($id)];
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
        return Response::json(['data'=>$this->category->getAttr($pid)]);
    }

    protected function getCategoryPid(){
        return 1;
    }
    
}