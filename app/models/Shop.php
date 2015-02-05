<?php

class Shop extends Model {

    use Modules\Shop\Helpers\Taging\TaggableTrait;
	
	public function getPublicAttr($model_name)
    {
        $model = $this->getModel($model_name);
        $arr = [ 
            'title'=>[
                'type'  =>'text',
                'label' =>$model_name.'名称'
            ],
            'category_id' =>[
                'type'  =>'select',
                'label' =>$model_name.'分类',
                'empty' =>'--请选择--',
                'options' => ["first"=>['label'=>"first option","group"=>"first group"],"second"=>['label'=>"second option"]]
            ],
            'price' =>[
                'type'  =>'text',
                'label' =>$model_name.'列表价格'
            ],
            'server_list'=>[
                'type'  =>'text',
                'label' =>'服务列表',
                'nullable' =>true
            ],
            'tags' =>[
                'type'  =>'tag',
                'label' =>'标签',
                'model' =>'tags',
                'nullable' =>true
            ],
            'register_code'=>[
                'type'  =>'text',
                'label' =>'注册号',
                'nullable' =>true
            ],
            'register' =>[
                'type'  =>'text',
                'label' =>'注册人',
                'nullable' =>true
            ],
            'registration_date'=>[
                'type'  =>'date',
                'label' =>'注册日期',
                'nullable' =>true
            ],
            'announced_date' =>[
                'type'  =>'date',
                'label' =>$model_name.'公告日期',
                'nullable' =>true
            ],
            'validity_date'=>[
                'type'  =>'date',
                'label' =>$model_name.'有效期',
                'nullable' =>true
            ],
            'trading'=>[
                'type'  =>'kv',
                'label' =>'交易方式',
                'model' => 'trading',
                'options' => $this->getOptions($model,'trade')
            ],
            'combine' =>[
                'type'  =>'radio',
                'label' =>'组合类型',
                'values' =>Config::get("shop::$model.combine")
            ],
            'thumb' =>[
                'type'  =>'upload',
                'label' =>'缩略图',
                'model' =>'thumb',
                'nullable' =>true
            ],
            'content' =>[
                'type'  =>'editor',
                'model' =>'content',
                'label' =>$model_name.'详情'
            ],
            'sorts' =>[
                'type'  =>'number',
                'label' =>'排序',
                'nullable' =>true
            ],
            'hits' =>[
                'type'  =>'number',
                'label' =>'浏览次数',
                'nullable' =>true
            ]
        ];

        $level = $this->getLevel($model);
        return array_merge($arr,$level);

    }

    public function getCategories($pid,$model_name)
    {
        $shop_category = Cache::get('shop_category');
        if(!$shop_category){
            $categories = (new Shop_category)->where('pid','=',$pid)->get()->toArray();
        }else{
            $categories = $shop_category[$pid];
        }
        $data[$pid] = ['label'=>$model_name];
        foreach ($categories as $v) {
            $data[$v['id']] = ['label'=>$v['slug'].$v['name']];
        }
        return $data;
    }

    public function getCategoriesTree($pid)
    {
        $shop_category = Cache::get('shop_category');
        if(!$shop_category){
            $categories = (new Shop_category)->where('pid','=',$pid)->get()->toArray();
        }else{
            $categories = $shop_category[$pid];
        }
        foreach ($categories as $v) {
            $data[$v['id']] = ['label'=>$v['name']];
        }
        return $data;
    }

    public function getOptions($model,$column)
    {  
        $data = Config::get("shop::$model.$column");
        foreach ($data as $key => $value) {
            $arr[] = ['model'=>$key,'label'=>$value];
        }
        return $arr;
    }

    public function getLevel($model)
    {
        $data = Config::get("shop::$model.level");
        foreach ($data as $key => $value) {
            $arr[$key] = [
                        'type'  =>'radio',
                        'label' =>$value,
                        'values' => ['1'=>'是','0'=>'否']
                    ];
        }
        return $arr;
    }

    protected function getModel($model_name)
    {
        if($model_name == '商标'){
            $model = 'logo';
        }elseif($model_name == '专利'){
            $model = 'patent';
        }else{
            $model = 'copy';
        }
        return $model;
    }   

    public function getShopList($model, $filter=[],$fields=[], $order=[], $skip=0, $limit='', $ispage=0)
    { 
        if($ispage){
            $data = $model->select($fields)->where(function($query) use($filter){        
                foreach ($filter as $v) {
                    $query->where($v[0], $v[1], $v[2]);        
                }          
            })->with(array('images' => function($query){
                $query->select('id','path');        
            },'category' => function($query){
                $query->select('id','name','slug'); 
            }))->paginate($ispage)->toArray();//paginate($ispage)->toArray  toSql
            //dd($data);
        }else{
            $data = $model->select($fields)->where(function($query) use($filter){        
                foreach ($filter as $v) {
                    $query->where($v[0], $v[1], $v[2]);        
                }          
            })->with(array('images' => function($query){
                $query->select('id','path');        
            },'category' => function($query){
                $query->select('id','name','slug'); 
            }))->take($limit)->get()->toArray();
        }          
        return $data;
    }

    /*搜索获取商品
    *$model 模型
    *$para  搜索条件字串
    *$column 当前列表类型
    *$shop_type 模块名称
    */
    public function getGoods($model, $para, $column,$shop_type)
    {
        if($para){
            $str_arr = ['a'=>'combine','b'=>'category','c'=>'trade','d'=>'price','e'=>'sorts'];
            if(Request::get('a')){
                $a = Request::get('a');
                $filter[0] = ['combine','=',$a]; 
                $shops['combine_url'] = $a;
            }else{
                $shops['combine_url'] = 0;
            }

            if(Request::get('b')){
                $b = Request::get('b');
                //dd($b);
                //dd(preg_match("/^[0-9]+$/",$b));"'%".$c_arr[1]."%'"
                if(preg_match("/^[0-9]+$/",$b)){
                    $filter[1] = ['category_id','=',$b];
                }else{
                    $c_arr = explode('c', $b);
                    if(count($c_arr) == 2){
                        $filter[11] = ['category_id','=',$c_arr[0]];
                        $filter[1] = ['server_list','like',"%$c_arr[1]%"];
                    }else{
                        exit('格式错误~');
                    }
                    
                }
                $shops['category_url'] = $b;
            }else{
                $shops['category_url'] = 0;
            }

            if(Request::get('c')){
                $c = Request::get('c');
                $filter[2] = ['trading','like',$c.':']; 
                $shops['trade_url'] = $c;
            }else{
                $shops['trade_url'] = 0;
            }

            if(Request::get('d')){
                $d = Request::get('d');
                $price_arr = Config::get("shop::".$shop_type.".price");
                $price_value_arr = explode('-', $price_arr[$d]['value']);
                $filter[3] = ['price','>=',$price_value_arr[0]]; 
                if($price_value_arr[1]){
                    $filter[4] = ['price','<',$price_value_arr[1]];
                } 
                $shops['price_url'] = $d;
            }else{
                $shops['price_url'] = 0;
            }
            
            if(Request::get('e')){
                $e = Request::get('e');
                if($e == 1){       //默认
                    $sorts = [['sorts','asc'],['updated_at','desc']];
                }elseif($e == 2){  //人气降序
                    $sorts = [['hits','desc'],['updated_at','desc']];
                }elseif($e == 3){  //价格升序
                    $sorts = [['price','asc'],['updated_at','desc']];
                }else{             //价格降序
                    $sorts = [['price','desc'],['updated_at','desc']];
                }  
                $shops['sorts_url'] = $e;
            }else{
                $shops['sorts_url'] = 0;
                $sorts = [['sorts','asc'],['updated_at','desc']];
            }

            if($column){
                $filter[5] = [$column,'=',1];
            }
            
            $filter[6] = ['status','=',1];

            sort($filter);
        }else{
            $filter = [
                [$column,'=',1],
                ['status','=',1]
            ];
            $sorts = [['sorts','asc'],['updated_at','desc']];
            $shops['combine_url'] = $shops['category_url'] = $shops['trade_url'] = $shops['sorts_url'] = $shops['price_url'] = 0;
        }
        //在缓存读取配置的每页显示个数$shop_config[$shop_type]['page_list_num']
        $shop_config = Cache::get('shop_config');
        $page_list_num = 20;//$shop_config[$shop_type]['page_list_num'];
        if($shop_type == 'logo'){
            $fields = ['id','title','category_id','server_list','price','num','thumb'];
        }elseif($shop_type == 'patent'){
            $fields = ['id','title','category_id','server_list','price','num','thumb'];
        }else{
            $fields = ['id','title','category_id','price','num','thumb'];
        }
        $shops['lists'] = $model->getShopList($model,$filter,$fields,$sorts,0,0,$page_list_num ? $page_list_num : 20);
        return $shops;    
    }

}
