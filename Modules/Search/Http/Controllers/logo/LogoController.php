<?php namespace Modules\Search\Http\Controllers\logo;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Maatwebsite\Excel\Facades\Excel;
use search\Cn;
use search\Cpinyin;
use search\En;
use search\Img;
use search\Num;
use search\Pinyin;
use search\Zitou;

class LogoController extends \BaseController {

	//默认首页
	public function index()
	{
        $key = Request::get('q');
        $ics = Request::get('ics');
        if($key && $ics){
            //导出数据准备
            $data = $this->testData();
            Cache::put('search_logo_data', $this->testData(), 60);

            return View::make('search::logo.list', compact('data'));
        }else{
            return View::make('search::logo.index');
        }

	}

    public function classify()
    {
        return View::make('search::logo.classify');
    }

    public function profession($channel = '')
    {
        $channel = $channel?$channel:Input::get('channel');
        if(!$channel && !Request::ajax()) {
            return View::make('search::logo.profession');
        }elseif(!$channel && Request::ajax()){
            return Response::json(['status'=>false, 'msg'=> '参数错误']);
        }


        $this->beforeFilter('csrf|auth');


        //数据验证
        /*$rules = ['q' => 'required', 'ics'=> 'required'];
        $messages = ['q.required' => '请输入查询内容','ics.required' => '请选择分类号'];

        $validator = Validator::make(Input::all(), $rules, $messages);
        if($validator->fails()){
            return Response::json(['status'=>false, 'msg'=> $validator->messages()->first()]);
        }

        $init_data['key'] = Input::get('q');
        $init_data['type'] = Input::get('type');
        switch($channel){
            case 'zhongwen':
                $collection = Cn::init($init_data);
                break;
            case 'yingwen':
                $collection = En::init($init_data);
                break;
            case 'pinyin':
                $collection = Pinyin::init($init_data);
                break;
            case 'chunpinyin':
                $collection = Cpinyin::init($init_data);
                break;
            case 'shuzi':
                $collection = Num::init($init_data);
                break;
            case 'zitou':
                $collection = Zitou::init($init_data);
                break;
            case 'tuxing':
                $collection = Img::init($init_data);
                break;
            default:
                return Redirect::route('search.logo', ['key'=>Input::get('key'),'ics'=>Input::get('ics')]);
                break;
        }

        $isc = Input::get('isc');
        $similar_no = Input::get('similar_no');
        $datalist = $collection->where(function($query) use ($isc, $similar_no){
            return $query->whereIn('isc', $isc)->where('similar_no', $similar_no);
        })->toSql();*/

        //导出数据准备
        Cache::put('search_logo_data', $this->testData(), 60);
        return Response::json(['status'=>true,'data'=>['count'=>count($this->testData()), 'data'=>$this->testData()] ]);
    }


    public function testData()
    {
        $data = [];
        for($i=1;$i<20;$i++){
            $data[$i]['id'] = $i;
            $data[$i]['ics'] = rand(1, 99);
            $data[$i]['name'] = '阿迪达斯';
            $data[$i]['logo'] = asset('modules/search/images/brand-img.jpg');
            $data[$i]['num'] = rand(1000000, 9999999);
            $data[$i]['owner'] = '中山市傲威化工有限公司';
            $data[$i]['start_time'] = rand(2000, 2010).'-'.rand(1, 12).'-'.rand(1, 30);
            $data[$i]['register_time'] = '2005-02-14';
            $data[$i]['company'] = '北京华商动力知识产权服务有限公司';
        }

        return $data;

    }

    public function export()
    {
        $data = Cache::get('search_logo_data');
        Excel::create('柚皮搜索客户搜索数据', function($excel) use($data) {

            // Set the title
            $excel->setTitle('柚皮搜索，做业内最全的搜索！');
            $excel->setCreator('Jroy')->setCompany('柚皮科技');
            $excel->setDescription('柚皮搜索，做业内最全的搜索!');
            $excel->sheet('sheet1', function($sheet) use($data) {
                $sheet->fromArray($data);
            });

        })->download('xls');
    }


    //商标详细
    public function logoDetail()
    {
        return View::make('search::logo.logoDetail');
    }


}