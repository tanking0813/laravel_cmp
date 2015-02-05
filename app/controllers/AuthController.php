<?php

use Cartalyst\Sentry\Facades\Laravel\Sentry;
use Illuminate\Support\Facades\Redirect;

class AuthController extends BaseController {

    protected $errors = '';
	/**
	 * Display a listing of the resource.
	 * GET /auth
	 *
	 * @return Response
	 */
	public function login()
	{
		return View::make('auth.login');
	}

    public function dologin()
    {
        try
        {
            $credentials = array(
                'email'    => Input::get('username'),
                'password' => Input::get('password')
            );

            if(!Input::get('remember')){
                Sentry::authenticate($credentials);
            }else{
                Sentry::authenticate($credentials, true);
            }

        }
        catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
        {
            $this->errors = '请填写必填项.';
        }
        catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
        {
            $this->errors = '用户名或密码错误.';
        }
        catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
        {
            $this->errors = '用户暂未激活，请前往邮箱'.link_to((new Uinfo)->getMail($credentials['email']), '激活', ['target'=>'_blank']);
        }

        // Following is only needed if throttle is enabled
        catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e)
        {
            $time = $throttle->getSuspensionTime();

            $this->errors = "User is suspended for [$time] minutes.";
        }
        catch (Cartalyst\Sentry\Throttling\UserBannedException $e)
        {
            $this->errors = 'User is banned.';
        }

        return Redirect::route('auth.login')->withErrors($this->errors);

    }

    /**
     * @return mixed
     */
    public function register()
	{
        return View::make('auth.register');
    }

    /**
     * 添加用户
     * @return mixed
     */
    public function store()
    {
        $user['email'] = $user['username'] = Input::get('email');
        $user['password'] = Input::get('password0');
        $mail_url = (new Uinfo)->getMail($user['email']);
        //判断用户是否存在
        $user_exist = User::where('email', $user['email'])->first();
        if($user_exist){
            return Redirect::back()->withErrors('邮箱已被占用!');
        }
        $errors = '';
        //添加用户
        try
        {
            $user = Sentry::register($user);
            //添加默认用户组
            $genealGroup = Sentry::findGroupById(2);
            $user->addGroup($genealGroup);

            //添加用户对应信息
            Uinfo::create(['uid'=>$user->id]);

            //登陆该用户
            $data['activationCode'] = $user->getActivationCode();
            $data['uid'] = $user->id;

            Mail::send('emails.auth.active', $data, function($message) use($user){
                $message->to($user->email, '尊敬的柚皮会员')->subject('欢迎注册柚皮网');
            });
            
        }
        catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
        {
            $errors =  '请输入完整注册信息.';
        }
        catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
        {
            $errors =  '请输入密码.';
        }
        catch (Cartalyst\Sentry\Users\UserExistsException $e)
        {
            $errors =  '用户已存在.';
        }

        if($errors){
            return Redirect::back()->withErrors($errors);
        }else{
            return View::make('auth.active')->withEmail($mail_url);
        }
        
    }

    /**
     * @param $uid
     * @param $code
     * @return mixed
     */
    public function active($uid, $code)
    {
        $user = Sentry::findUserById($uid);

        if ($user->attemptActivation($code))
        {
            return Redirect::route('member');
        }else{
            return Redirect::route('auth.register')->withError('验证失败，请重试');
        }
    }

    /**
     * @return mixed
     */
    public function forgetpass()
    {
        return View::make('auth.forgetpass');
    }

    public function reminder()
    {
        $code = Str::lower(Input::get('code'));
        if(strpos($code, Session::get('code')) !== false){
            try{
                //发送找回密码邮件
                $user = Sentry::findUserByLogin(Input::get('email'));
                $data['uid'] = $user->id;
                $data['resetCode'] = $user->getResetPasswordCode();
                Mail::send('emails.auth.reminder', $data, function($message) use($user){
                    $message->to($user->email, '尊敬的柚皮会员')->subject('用户密码找回');
                });
                return Response::json(['status'=>true, 'email_url'=>(new Uinfo)->getMail(Input::get('email'))]);
            }
            catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
            {
                return Response::json(['status'=>false, 'msg'=>'用户不存在!']);
            }
        }

        return Response::json(['status'=>false, 'msg'=>'验证码错误!']);
    }

    public function resetpass($uid, $code)
    {
        try
        {
            $user = Sentry::findUserById($uid);
            if ($user->checkResetPasswordCode($code))
            {
                if(Request::isMethod('get')){
                    return View::make('auth.resetpass');
                }else{
                    //判断两次密码输入是否一致
                    if(strpos(Input::get('password'), Input::get('repass')) === false){
                        return Response::json(['status'=>false, 'msg'=>'两次密码输入不正确!']);
                    }
                    //重设密码
                    if($user->attemptResetPassword($code, Input::get('password')))
                    {
                        return Response::json(['status'=>true, 'msg'=>'密码重置成功!']);
                    }else{
                        return Response::json(['status'=>false, 'msg'=>'密码重置失败，请重试!']);
                    }
                }
            }
            else
            {
                return Redirect::route('auth.forgetpass')->withErrors('验证数据错误,请重新验证!');
            }
        }
        catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
        {
            return Redirect::route('auth.forgetpass')->withErrors('验证数据错误,用户不存在,请重新验证!');
        }
    }

    /**
     * @return mixed
     */
    public function logout()
    {
        Sentry::logout();
        return Redirect::route('member');
    }

}