<?php

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;

class BaseController extends Controller {

	public function __construct()
	{
		//初始化缓存
		//Event::fire('cache.init');
        //获取配置
        $this->initConfig();

        View::share('setting', Cache::get('setting'));
	}

    /**
     * 验证码
     * @return mixed
     */
    public function code()
    {
        return (new Img)->code();
    }

    /**
     * 初始化配置文件
     */
    public function initConfig()
    {
        if(!Cache::has('global_title')){
            (new Setting)->cacheSetting();
        }
    }

}
