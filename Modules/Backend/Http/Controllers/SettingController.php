<?php namespace Modules\Backend\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Setting;

class SettingController extends Controller {

    public $setting;

    /**
     * @param Setting $setting
     */
    public function __construct(Setting $setting){
        $this->setting = $setting;
    }

    public function init(){
        $setting = $this->setting->all();
        $set = [];
        foreach($setting as $k => $v){
            $set[$v['key']] = $v['value'];
        }
        return Response::json(['data'=>$set]);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function store()
	{
		$data = Input::all();
        foreach($data as $k => $v){
            $sxist = $this->setting->where('key', $k)->first();
            if($sxist){
                $sxist->fill(['key'=>$k, 'value'=>$v]);
                $sxist->save();
            }else{
                $this->setting->create(['key'=>$k, 'value'=>$v]);
            }
        }
        //更新缓存
        (new Setting)->cacheSetting();
        return Response::json(['status'=>1]);
	}
	
}