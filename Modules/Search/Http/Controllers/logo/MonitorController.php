<?php namespace Modules\Search\Http\Controllers\logo;

use Illuminate\Support\Facades\View;
use search\Testdata;

class MonitorController extends \BaseController {


    //默认首页
    public function index()
    {   
        $test = new Testdata;
        $demo = $test->mIndex(8);
        return View::make('search::logo.monitor')->with(compact('demo'));      
    }

    //状态检测
    public function state()
    {
        $test = new Testdata;   
        $demo = $test->state(9);
        return View::make('search::logo.monitor_state')->with(compact('demo'));     
    }

    //申请人 状态统计
    public function peopleCount()
    {
        $test = new Testdata;   
        $demo = $test->peopleCount(9);
        return View::make('search::logo.monitor_people_count')->with(compact('demo')); 
    } 

    //申请人 详情
    public function peopleShowCount()
    {
        $test = new Testdata;   
        $demo = $test->peopleShowCount(9);
        return View::make('search::logo.monitor_people_count_show')->with(compact('demo'));        
    } 

    //创建状态监测
    public function addState()
    {
        return View::make('search::logo.monitor_state_add');
    }

    //创建近似监测
    public function addApprox()
    {
        return View::make('search::logo.monitor_approx_add');
    }

    public function orderState()
    {
        return View::make('search::logo.monitor_state_order');
    }

    public function showState()
    {
        return View::make('search::logo.monitor_state_show');
    }

    //近似检测
    public function approx()
    {
        $test = new Testdata;   
        $demo = $test->approx(10);
        return View::make('search::logo.monitor_approx')->with(compact('demo'));     
    }

    public function showApprox()
    {
        $test = new Testdata;   
        $demo = $test->showApprox(6);
        return View::make('search::logo.monitor_approx_show')->with(compact('demo'));     
    }

    public function detailApprox()
    {
        return View::make('search::logo.monitor_approx_detail');     
    }

    //名称监测（含图形）
    public function imgApprox()
    {
        return View::make('search::logo.monitor_approx_img');
    }

    //手添申请人近似监测
    public function handApprox()
    {
        return View::make('search::logo.monitor_approx_hand');
    }   

    public function handOrderApprox()
    {
        return View::make('search::logo.monitor_approx_hand_order');
    }   

    //查看
    public function lookApprox()
    {
        $test = new Testdata;   
        $demo = $test->approx(10);
        return View::make('search::logo.monitor_approx_look')->with(compact('demo'));     
    }

    //状态提醒
    public function remind()
    {
        $test = new Testdata;   
        $demo = $test->remind(6);
        return View::make('search::logo.monitor_remind')->with(compact('demo'));     
    }

    //状态更新
    public function updateRemind()
    {
        $test = new Testdata;   
        $demo = $test->updates(6);
        return View::make('search::logo.monitor_remind_update')->with(compact('demo'));  
    }

    //通知公告
    public function noticeRemind()
    {
        return View::make('search::logo.monitor_remind_notice');
    }    

    //账号订单
    public function order()
    {
        return View::make('search::logo.monitor_order');
    }

    //操作日志
    public function logOrder()
    {
        return View::make('search::logo.monitor_order_log');
    }

    //套餐升级
    public function comboOrder()
    {
        return View::make('search::logo.monitor_order_combo');
    }

    //价格套餐介绍
    public function priceOrder()
    {
        return View::make('search::logo.monitor_order_price');
    }

    //订单信息
    public function payOrder()
    {
        return View::make('search::logo.monitor_order_pay');
    }

    //商标知识
    public function library()
    {
        $test = new Testdata;   
        $demo = $test->library(6);
        return View::make('search::logo.monitor_library')->with(compact('demo'))->with(compact('demo'));       
    }

    //商标知识详情
    public function showLibrary()
    {   
        return View::make('search::logo.monitor_library_show');
    }

}