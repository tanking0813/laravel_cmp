<?php namespace Modules\Backend\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use Cartalyst\Sentry\Facades\Laravel\Sentry;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;

class AuthController extends Controller {

	public function login()
	{
        try {
            $data = Input::all();
            $credentials = array(
                'email' => $data['email'],
                'password' => $data['password']
            );

            $user = Sentry::authenticate($credentials, false);
            $groups = Sentry::getUser()->getGroups();
            $is_admin = 0;
            foreach($groups as $v){
                if($v->is_admin == 1) $is_admin = 1;
            }

            if($is_admin == 0){
                Sentry::logout();
                return Response::json(['status' => false, 'error'=>'账户非管理员']);
            }

            // Authenticate the user
            return Response::json(['status' => $user?true:false]);
        }
        catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
        {
            return Response::json(['status' => false, 'error'=>'请输入完整字段']);
        }
        catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
        {
            return Response::json(['status' => false, 'error'=>'请输入密码']);
        }
        catch (Cartalyst\Sentry\Users\WrongPasswordException $e)
        {
            return Response::json(['status' => false, 'error'=>'密码错误，请重试']);
        }
        catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
        {
            return Response::json(['status' => false, 'error'=>'用户不存在']);
        }
        catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
        {
            return Response::json(['status' => false, 'error'=>'用户暂未激活']);
        }
	}

    public function logout()
    {
        Sentry::logout();
        return Redirect::route('backend');
    }
	
}