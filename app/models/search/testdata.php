<?php namespace search;

use Modules\search\Helpers\made;

class Testdata extends \Eloquent {

	public function mIndex($num)
    {
        $demo = [];
        for($i=1;$i<$num; $i++){
            $demo[$i]['id'] = $i;
            $demo[$i]['title'] = '如何添加更多申请人的近似监测？';
            $demo[$i]['name'] = '如何查看分类数据？';
        }
        return $demo;
    }

	public function state($num)
    {
        $demo = [];
        for($i=1;$i<$num;$i++){
            $demo[$i]['id'] = $i;
            $demo[$i]['num'] = '10675403';
            $demo[$i]['img-num'] = '5074833';
            $demo[$i]['class'] = '45';
            $demo[$i]['title'] = '北科建';
            $demo[$i]['name'] = '1348';
            $demo[$i]['c-num'] = '2013-05-21';
            $demo[$i]['create'] = '商标续展完成(2012-06-14)';
        }  
        return $demo;
    }

	public function peopleCount($num)
    {
        $demo = [];
        for($i=1;$i<$num;$i++){
            $demo[$i]['id'] = $i;
            $demo[$i]['name'] = '北京华商动力知识产权代理有限公司	';
            $demo[$i]['num'] = ($i + 3);
            $demo[$i]['tel'] = '029-9999999';
            $demo[$i]['update'] = '商标续展完成(2012-06-14)';
            $demo[$i]['state'] = ($i + 68);
        }  
        return $demo;
    }


	public function peopleShowCount($num)
    {
        $demo = [];
        for($i=1;$i<$num;$i++){
            $demo[$i]['id'] = $i;
            $demo[$i]['num'] = '10675403';
            $demo[$i]['img-num'] = '5074833';
            $demo[$i]['class'] = '45';
            $demo[$i]['title'] = '北科建';
            $demo[$i]['name'] = '1348';
            $demo[$i]['c-num'] = '2013-05-21';
            $demo[$i]['create'] = '商标续展完成(2012-06-14)';
        } 
        return $demo;
    }


	public function approx($num)
    {
        $demo = [];
        for($i=1;$i<$num;$i++){
            $demo[$i]['id'] = $i;
            $demo[$i]['num'] = '10675403';
            $demo[$i]['img-num'] = '5074833';
            $demo[$i]['class'] = $i*5;
            $demo[$i]['title'] = '北科建';
            $demo[$i]['name'] = '同同('. ($i + 3).') 同近('. ($i * 3) .') 异同('. (($i + 3)*2) .') 异近('. ($i + 45).')';
        } 
        return $demo;
    }

	public function showApprox($num)
    {
        $demo = [];
        for($i=1;$i<$num;$i++){
            $demo[$i]['id'] = $i;
            $demo[$i]['num'] = '10675403';
            $demo[$i]['img'] = '5074833';
            $demo[$i]['class'] = $i*5;
            $demo[$i]['title'] = '图形【图- 同近】	';
            $demo[$i]['nums'] = $i*7;
            $demo[$i]['pepole'] = '成都市森坤塑胶管件厂';
            $demo[$i]['xs'] = '';
            $demo[$i]['istel'] = '未设为已联系';
        } 
        return $demo;
    }


	public function remind($num)
    {
        $demo = [];
        for($i=1;$i<$num;$i++){
            $demo[$i]['id'] = $i;
            $demo[$i]['num'] = '10675403';
            $demo[$i]['name'] = '北科建	';
            $demo[$i]['student'] = '';
            $demo[$i]['student_s'] = '商标已注册';
            $demo[$i]['title'] = '重新设定';
            $demo[$i]['time'] = '2015-01-10';
            $demo[$i]['email'] = '否';
        } 
        return $demo;
    }

	public function updates($num)
    {
        $demo = [];
        for($i=1;$i<$num;$i++){
            $demo[$i]['id'] = $i;
            $demo[$i]['title'] = '商标 10675403 北科建 最新状态：商标已注册(2013-05-21)';
            $demo[$i]['date'] = '2015-01-14';
       } 
        return $demo;
    }

	public function library($num)
    {
        $demo = [];
        for($i=1;$i<$num;$i++){
            $demo[$i]['id'] = $i;
            $demo[$i]['title'] = '阿迪达斯';
            $demo[$i]['logo'] = asset('modules/search/images/brand-img.jpg');
            $demo[$i]['desc'] = '商标注册网上能直接办理吗？商标注册网上能直接办理吗？根据《商标注册网上申请暂行规定》，提交商标注册网上申请，申请人可以为符合商标法规定的商标注册申请主体资格的自然人、法人或其他组织。但申请人应委托已在商标局备案的商标代理机构办理商标注册网上申请。因此目前个人是无法直接通过';
            $demo[$i]['register_time'] = '2014-10-12';
        }
        return $demo;
    }


}