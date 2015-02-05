<?php namespace Modules\Backend\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Event;
use Cartalyst\Sentry\Facades\Laravel\Sentry;
use User;

class UsergroupController extends Controller {

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getIndex()
	{
        return Response::json(Sentry::findAllGroups());
	}

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getEdit($id)
    {
        $data = ['data' =>Sentry::findGroupById($id)];
        return Response::json($data);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function postStore()
    {
        $group = Sentry::createGroup(array(
            'name'        => Input::get('name'),
            'permissions' => ['member'=>1]
        ));

        if($group){
            return Response::json(['status'=>1]);
        }else{
            return Response::json(['status'=>0]);
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function putUpdate($id)
    {
        $group = Sentry::findGroupById($id);
        $group->name = Input::get('name');

        if($group->save()){
            return Response::json(['status'=>1]);
        }else{
            return Response::json(['status'=>0]);
        }

    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteDestroy($id)
    {
        $user = Sentry::findGroupById($id);
        $status = $user->delete()?1:0;
        return Response::json(['status'=>$status]);
    }

    public function getAttr()
    {
        return Response::json(['data'=>(new User)->getGroupAttr()]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAccessAttr()
    {
        $routes_format = Cache::get('routes_format');
        if(!$routes_format){
            Event::fire('cache.init');
        }

        return Response::json(['data'=>$routes_format]);
    }

    public function getAccess($id)
    {
        $permissions = Sentry::findGroupById($id)->permissions;
        $routes = Cache::get('routes_simple');
        foreach(array_flip($routes) as $k=>$v){
             $allaccess[$k] = isset($permissions[$k])?1:0;
        }

        foreach ($allaccess as $routename => $v) {
            $piece = explode('.', $routename);
            $bool = $v?true:false;
            if(count($piece) < 2){
                $access[$piece[0]][$piece[0]] = $bool;
            }else{
                $access[$piece[0]][$piece[1]][str_replace('.', '_', $routename)] = $bool;
            }
        }

        return Response::json(['data'=>$access]);
    }

    /**
     * 更新权限
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function putAccess($id)
    {
        foreach (Input::all() as $k=>$model) {
            if(!is_array($model)) {continue;}
            foreach ($model as $k2 => $group) {
                if(!is_array($group)) {
                    $acclist[$k] = $group;
                }else{
                    foreach ($group as $k3 => $option) {
                        $acclist[str_replace('_', '.', $k3)] = $option;
                    }
                }
            }
        }

        $group = Sentry::findGroupById($id);
        $group->permissions = $acclist;
        return Response::json(['status'=>$group->save()?1:0]);
    }


    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getMembers($id)
    {
        $group = Sentry::findGroupById($id);
        $merbers =Sentry::findAllUsersInGroup($group);

        return Response::json(['data'=>$merbers]);
    }

    /**
     * 解除授权
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getCancelAccess($id)
    {
        $user = Sentry::findUserById($id);
        $old_group = Sentry::findGroupById(Request::get('group_id'));
        $guest_group = Sentry::findGroupById('2');
        $user->removeGroup($old_group);
        return Response::json(['status'=>$user->addGroup($guest_group)?1:0]);
    }

    /**
     * 用户组添加成员
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function putAddMemberToGroup($id){
        $group = Sentry::findGroupById($id);
        $errors = '';
        foreach(Input::all() as $user){
            if($user['checked']){
                $member = Sentry::findUserById($user['id']);
                if(!$member -> addGroup($group)){
                    $errors = true;
                }
            }
        }
        return Response::json(['status'=>$errors?0:1]);

    }


}