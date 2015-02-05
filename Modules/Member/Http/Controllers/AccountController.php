<?php namespace Modules\Member\Http\Controllers;

use Cartalyst\Sentry\Facades\Laravel\Sentry;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Uinfo;

class AccountController extends Controller {

    protected $uinfo;

    /**
     * @param Uinfo $uinfo
     */
    public function __construct(Uinfo $uinfo){
        $this->uinfo = $uinfo;
    }

    /**
     * @return mixed
     */
    public function index()
	{
        $user = Sentry::getUser();
        $uinfo = $this->uinfo->where('uid',$user->id)->first();
        $uinfo_all = array_add($uinfo, 'nickname', $user->nickname);

        //籍贯处理
        $native = $uinfo_all->native_place?explode('-', $uinfo_all->native_place):'';
        $uinfo_all->province = $native?$native[0]:'';
        $uinfo_all->city = $native?$native[1]:'';
        $uinfo_all->area = $native?$native[2]:'';

        //入学时间处理
        $eduTime = $uinfo_all->edu_time?explode(',', $uinfo_all->edu_time):'';
        $uinfo_all->edu_timeStart = $eduTime?$eduTime[0]:'';
        $uinfo_all->edu_timeEnd = $eduTime?$eduTime[1]:'';

        //公司时间处理
        $companyTime = $uinfo_all->company_time?explode(',', $uinfo_all->company_time):'';
        $uinfo_all->company_timeStart = $companyTime?$companyTime[0]:'';
        $uinfo_all->company_timeEnd = $companyTime?$companyTime[1]:'';

        //头像处理
        $uinfo_all->avatar = $user->avatar162?$user->avatar162:'/uploads/avatar/default.jpg';

		return View::make('member::account', compact('uinfo_all'));
	}

    public function update()
    {
        $user = Sentry::getUser();
        $data['native_place'] = Input::get('native_place2')?implode('-', Input::get('native_place2')):'';
        $data['hobby'] = Input::get('hobby2')?implode(',', Input::get('hobby2')):'';
        $data['edu_time'] = Input::get('edu_time2')?implode(',', Input::get('edu_time2')):'';
        $data['company_time'] = Input::get('company_time2')?implode(',', Input::get('company_time2')):'';
        $data = array_merge($data, Input::all());

        $user->nickname = Input::get('nickname');
        $user->save();

        $uinfo = $this->uinfo->where('uid',$user->id)->first();
        $uinfo->fill($data)->save();

        return Redirect::back()->withSuccess('信息更新成功!');
    }
}