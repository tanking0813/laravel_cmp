<?php namespace Modules\Backend\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Response;
use Cartalyst\Sentry\Facades\Laravel\Sentry;
use Illuminate\Support\Facades\Input;
use User;

class UserController extends Controller {

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getIndex()
	{
        $data = User::paginate(10)->toArray();
        return Response::json($data);
	}

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getEdit($id)
    {
        $data = ['data' =>Sentry::findUserById($id)];
        return Response::json($data);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function postStore()
    {

        $user = Sentry::createUser(Input::all());

        //添加默认用户组
        $genealGroup = Sentry::findGroupById(2);
        $user->addGroup($genealGroup);

        if($user){
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
        $data = Input::all();
        $user = Sentry::findUserById($id);

        $user->email = $user->username = $data['email'];
        $user->activated = $data['activated'];
        if($user->save()){
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
        $user = Sentry::findUserById($id);
        $status = $user->delete()?1:0;

        return Response::json(['status'=>$status]);
    }

    public function getAttr()
    {
        $user = new User;
        return Response::json(['data'=>$user->getAttr()]);
    }

	
}