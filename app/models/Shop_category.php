<?php
use helpers\Tree;

class Shop_category extends Model {


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'shop_categories';
    protected $fillable = ['name','pid','slug','thumb','level','sorts','status','description'];

    public function getAttr($pid)
    {
        return [
            'name' =>[
                'type'  =>'text',
                'label' =>'标题'
            ],
            'pid' =>[
                'type'  =>'tree',
                'label' =>'所属分类',
                //'options' => ["0"=>['label'=>"根分类","group"=>"first group"],"1"=>['label'=>"根分类1","group"=>"first group1"]]
            	'str' => $this->getCategories($pid)
            ],
            'slug' =>[
                'type'  =>'text',
                'label' =>'slug',
                'nullable' =>true
            ],
            'thumb' =>[
                'type'  =>'upload',
                'label' =>'缩略图',
                'model' =>'thumb',
                'nullable' =>true
            ],
            'level' =>[
                'type'  =>'radio',
                'label' =>'是否推荐',
                'values'=>["1" => "是","0"=>"否"]
            ],
            'sorts' =>[
                'type'  =>'number',
                'label' =>'排序',
                'nullable' =>true
            ],
            'status' =>[
                'type'  =>'radio',
                'label' =>'是否显示',
                'values'=>["1" => "是","0"=>"否"]
            ],
            'description'=>[
            	'type' =>'textarea',
            	'label' =>'备注',
            	'nullable' =>true
            ]
        ];
    }

    public function categories()
    {
    	return $this->hasMany('Shop_category','pid','id');
    }

    public function logos()
    {
        return $this->hasMany('Shop_logo','id','category_id');
    }

    public function thumb()
    {
        return $this->hasOne('File');
    }

   /* public function getCategories($pid)
    {
        $categories = $this->select('id','name','pid')->get()->toArray();
        $tree = new Tree;
        $tree->icon = array('&nbsp;&nbsp;&nbsp;│ ', '&nbsp;&nbsp;&nbsp;├─ ', '&nbsp;&nbsp;&nbsp;└─ ');

        foreach ($categories as $r) {
            $r['parentid']=$r['pid'];
            //$r['selected'] = (strcmp($r['id'], $cid) == 0)?"selected=selected":"";
            $array[] = $r;
        }
        $tree->init($array);
        $str = "<option value='\$id' \$selected>\$spacer\$name</option>";
        $tree = $tree->get_tree($pid, $str);

        return "<option value=''>--请选择--</option><option value='".$pid."'>根分类</option>".$tree;

    }*/

    public function getCategories($pid){
        $categories = $this->shop_category->where('pid','=',$pid)->get()->toArray();
        $data = [$pid=>['label'=>"根分类"]];
        foreach ($categories as $v) {
            $data[$v['id']] = ['label'=>$v['name']];
        }
        return $data;
         //dd($data);
    }
}
